<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2016-02-11
 * Time: 8:16 PM
 *
 * Create the header and Nav bar for all pages
 */
include_once("includes/config.php");
?>
<!DOCTYPE html>
<HTML>

    <head lang="en">
        <meta charset="UTF-8">
        <title><?php echo $site_name; ?></title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <nav id="header_nav">
            <b><?php echo $site_name; ?></b>
            <a href="list.php?i=tv">tv listing</a>
            <a href="list.php?i=movies">movie listing</a>
            <form id="search" method="get" action="search.php">
                <input type="text" name="q" placeholder="search">
                <input id="s_img" type="submit" value="">
            </form>
        </nav>
        <div class="content">
