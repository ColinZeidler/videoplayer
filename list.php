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

function get_media($location, $extension="") {
    /**
     * returns a list of files in the given $location, with the given $extension
     */
    $media = glob($location ."/*" . $extension);
    return $media;
}

function strip_path($media) {
    /**
     * Strips the path off of a file name, and the file extension.
     * returns the resulting file name
     */
    $result = explode("/", $media);
    $result =$result[sizeof($result) - 1];
    return rtrim($result, ".mp4");
}

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
