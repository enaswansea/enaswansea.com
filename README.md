# enaswansea.com

## SETUP

This uses Kirby Cms: <https://getkirby.com> 

#### The Panel

Admin interface is at `/panel`. 

#### Upgrading Kirby

Done via `update_kirby.sh`. Sometimes this doesn't work. It may be because the `kirby/` folder is a git submodule; may have to pull/update that submodule with `git submodule update kirby/` 



## Config & Templates

TL:DR for editing how it looks; `site/templates` and `assets/scss/default.scss`

#### Templates

Display templates are in `site/templates`. Sometimes URLs are hardcoded (for example, see `site/templates/biblio.php` has the `enaswansea.com/bibliography` url hardcoded into it.)

Templates are a little messy (as in err on the end of having duplicate/repetitive templates). 

To figure out which template a page is using, navigate to the content directory (inside `content/`) and look at the filename of the `.txt` file.

#### Backend

Site backend structure is in `site/blueprints`.


#### Legacy URLs

Routing legacy URLS is in `site/config/config.php`. For example: routing `enaswansea.com/works/2018` to `enaswansea.com/works/year:2018`

#### Menu behavior

Menu and other somewhat-reusable things are in in `snippets/`. Menu specifically has a lot of hard-coded behavior. See: `snippets/menu.php`.

#### Styling

CSS is done through Sass: `assets/scss/default.scss`.

#### Permissions

Permissions are defined in `site/blueprints/users/editor.yml`.


## Content

Content is in `content/`. Things move around when you rename things, so git commit frequently.

