<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2016-02-11
 * Time: 8:16 PM
 *
 * Create the header and Nav bar for all pages
 */
include_once("config.php");
// TODO add some CSS
?>
<!DOCTYPE html>
<HTML>

    <head lang="en">
        <meta charset="UTF-8">
        <title><?php echo $site_name; ?></title>
    </head>
    <body>
        <nav id="header_nav"><b><?php echo $site_name; ?></b>
            <a href="list.php?i=tv">tv listing</a>
            <a href="list.php?i=movies">movie listing</a>
        </nav>