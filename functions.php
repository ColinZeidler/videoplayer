<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2016-02-12
 * Time: 10:01 PM
 */

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

function get_movies() {
    global $movie_location;
    return get_media($movie_location, '.mp4');
}

function get_shows() {
    /**
     * returns a list of shows from the configured show location
     */
    global $tv_location;
    $shows = array_filter(get_media($tv_location), 'is_dir');
    return $shows;
}

function print_movie($movie) {
    echo '<a href="watch.php?vid=', urlencode($movie), '">' . strip_path($movie) . '</a><br/>';
}

function print_show($show) {
    echo '<a href="list.php?i=tv&show=' . urlencode($show) . '">' . strip_path($show). '</a><br/>';
}