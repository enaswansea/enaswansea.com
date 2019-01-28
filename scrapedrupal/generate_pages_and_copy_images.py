import csv, os, itertools
from shutil import copyfile
from string import Template

artwork_template = Template(open('./artwork_template.txt').read())
filename =  "190128_126PM_export_views.csv"
pages_location = "generated_pages/"
downloaded_images_location = "downloaded_images/"

index = 10

with open(filename, encoding='utf-8-sig') as csvDataFile:
    csvReader = csv.DictReader(csvDataFile,skipinitialspace=True)
#    for row in itertools.islice(csvReader, 10):
    for row in csvReader:

        print ("===========================")
        print(row)
        print(row["artwork_url_original"])
        row["artwork_basename"] = os.path.basename(row["artwork_url_original"])
        row["selected_bool"] = "false"
        index += 1

        filebase = str(index) + "_" + os.path.basename(row["drupal_url"])
        filename = filebase + ".txt"
        directory = pages_location + filebase

        try:
            os.makedirs(directory)
        except e:
            pass

        with open(directory + "/artwork.txt", "w") as thisfile:
            thisfile.write(artwork_template.substitute(row))
            copyfile(downloaded_images_location + row["artwork_basename"], directory + "/" + row["artwork_basename"])

        with open(directory + "/" + row["artwork_basename"] + ".txt", "w") as thisfile:
            thisfile.write("Template: gallery")


