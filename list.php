<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2016-02-11
 * Time: 8:02 PM
 *
 * Lists the movies or tv shows depending on $_Get['i'] param
 */
include_once("page_header.php");
require_once("config.php");
if (isset($_GET['i'])) {
    if ($_GET['i'] == "movies") {
        require_once("movies.php");

    } elseif ($_GET['i'] == "tv") {
        require_once("shows.php");
    }
} else {
    echo "nothing specified";
}

include_once("footer.html");