<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2016-02-11
 * Time: 7:54 PM
 *
 * reads in data from config.ini file
 */

$movie_location = "Movies";
$tv_location = "TV Shows";
$site_name = "Video Player";

$ini_file = file("config.ini");

foreach ($ini_file as $line) {
    $parts = explode("=", $line);
    if ($parts[0] == "movie_path") {
        $movie_location = rtrim($parts[1]);
    } elseif ($parts[0] == "tv_path") {
        $tv_location = rtrim($parts[1]);
    } elseif ($parts[0] == "site_name") {
        $site_name = rtrim($parts[1]);
    }
}