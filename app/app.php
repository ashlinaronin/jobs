<?php
    require_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "<h1><a href='/carworld-search'>Poor?  Click here!</a></h1>";
    });

    $app->get("/Jobs-for-sale", function() {

    });

    return $app;
?>
