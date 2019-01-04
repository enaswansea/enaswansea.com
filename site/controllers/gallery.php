<?php

// This is a controller file that contains the logic for the blog template.
// It consists of a single function that returns an associative array with
// template variables.
//
// Learn more about controllers at:
// https://getkirby.com/docs/developer-guide/advanced/controllers

return function($site, $pages, $page) {

  $perpage  = $page->perpage()->int();
  $artworks = $page->children()
                   ->visible()
                   ->filterBy('tags', param('tag'), ',')
                   ->flip();

  return [
    'artworks'   => $artworks,
    'pagination' => $artworks->pagination()
  ];

};
