<?php

function TB_load_resources() {
    wp_enqueue_style("my-theme-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "TB_load_resources");

function TB_disable_gutenberg() {
    remove_post_type_support("page", "editor");
    remove_post_type_support("post", "editor");
  }
  add_action("init", "TB_disable_gutenberg");