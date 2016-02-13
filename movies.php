<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2016-02-11
 * Time: 7:53 PM
 *
 * Builds the list of Movies
 */
require_once("functions.php");

$movies = get_movies();
echo sizeof($movies) . " movies"  . "<br/>";
foreach ($movies as $movie) {
    print_movie($movie);
}
