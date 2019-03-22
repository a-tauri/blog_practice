<?php
    require_once 'functions/db_manager.php';
    require_once 'functions/postClass.php';
    $category_name = f($_POST['category_name']);
    $post = new postClass();
    $post->postMessage($category_name, null, 'category');
    