<?php
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', FALSE, null, all);
wp_enqueue_style( '4rodas', get_template_directory_uri() . '/css/4rodas.css', FALSE, null, all);

wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.2.2.min.js', FALSE, null, FALSE);
wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', FALSE, null, TRUE);
wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array ( 'jquery' ), null, FALSE);