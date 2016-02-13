<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2016-02-11
 * Time: 7:53 PM
 *
 * builds the list of TV Shows
 */
require_once("functions.php");

if (isset($_GET['show']) && ! empty($_GET['show'])) {
    $episodes = get_media(urldecode($_GET['show']), '.mp4');
    echo sizeof($episodes) . " episodes<br/>";
    foreach($episodes as $episode) {
        echo '<a href="watch.php?vid=', urlencode($episode), '">' . strip_path($episode) . '</a><br/>';
    }
} else {
    $shows = get_shows();
    echo sizeof($shows) . " shows<br/>";
    foreach ($shows as $show) {
        print_show($show);
    }
}
