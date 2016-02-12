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

function get_movies() {
    /**
     * return a list of movies based on the configured movie path
     */
    global $movie_location;
    echo "reading movies from: " . $movie_location ."<br/>";
    $eps = glob($movie_location .'/*.mp4');
    return $eps;
}

$movies = get_movies();
echo sizeof($movies) . " movies"  . "<br/>";
foreach ($movies as $movie) {
    echo '<a href="watch.php?vid=', urlencode($movie), '">' . $movie . '</a><br/>';

}