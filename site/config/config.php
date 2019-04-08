<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');
c::set('debug',true);
c::set('scssNestedCheck', true);

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

 */




/*  LEGACY URL
 * so that              http://enaswansea.com/works/2018 
 * is redirected to     http://enaswansea.com/$ARCHIVE_PATH/year:2018
 */



c::set('routes', array(
  array(
    'pattern' => 'works/(:any)',
    'action'  => function($tag) {

        $ARCHIVE_PATH = "archive";  // kirby path of archive WITHOUT ANY SLASHES


        $data = array("works" => $tag);
        go('/' . $ARCHIVE_PATH . '/year:' . $tag);
    }
  ),
  array(
    'pattern' => 'news',
    'action'  => function() {
        go('/bibliography');
    }
  )
));


/* 
 * Kirbytext uses srcset instead of image
 * from https://github.com/bnomei/kirby3-srcset/issues/2
 */

return [
    'hooks' => [
        'kirbytags:before' => function ($text, $data, $options) {
            return str_replace('(image:', '(srcset:', $text);
        }
    ]
];
