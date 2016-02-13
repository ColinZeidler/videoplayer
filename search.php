<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2016-02-12
 * Time: 9:19 PM
 */

include_once("page_header.php");
require_once("functions.php");

$movie_array = get_movies();
$show_array = get_shows();

$movie_array = array_filter($movie_array, function($k) {
    if (strpos($k, $_GET["q"]) != false)
        return true;
    else
        return false;
});
$show_array = array_filter($show_array, function($k) {
    if (strpos($k, $_GET["q"]) != false)
        return true;
    else
        return false;
});

echo "<H1>Results</H1>";
if (sizeof($movie_array) > 0) {
    echo "<H2>Matching Movies:</H2>";
    foreach ($movie_array as $movie) {
        print_movie($movie);
    }
}
if (sizeof($show_array) > 0) {
    echo "<H2>Matching Shows:</H2>";
    foreach ($show_array as $show) {
        print_show($show);
    }
}