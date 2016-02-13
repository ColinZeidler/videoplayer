<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2016-02-11
 * Time: 7:53 PM
 *
 * Builds the list of Movies
 */
require_once("config.php");

$movies = get_media($movie_location, '.mp4');
echo sizeof($movies) . " movies"  . "<br/>";
foreach ($movies as $movie) {
    echo '<a href="watch.php?vid=', urlencode($movie), '">' . strip_path($movie) . '</a><br/>';

}
