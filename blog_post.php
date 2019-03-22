<?php
    require_once 'functions/db_manager.php';
    require_once 'functions/postClass.php';
    
    $tytle = f($_POST['tytle']);
    $article = f($_POST['article']);
    $post = new postClass();
    $post->postMessage($tytle, $article, 'blogs');