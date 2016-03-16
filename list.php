<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2016-02-11
 * Time: 8:02 PM
 *
 * Lists the movies or tv shows depending on $_Get['i'] param
 */
include_once("includes/page_header.php");
require_once ("includes/config.php");
require_once("includes/functions.php");

if (isset($_GET['i'])) {
    if ($_GET['i'] == "movies") {
        require_once("includes/movies.php");

    } elseif ($_GET['i'] == "tv") {
        require_once("includes/shows.php");
    }
} else {
    echo "nothing specified";
}

include_once("includes/footer.html");
