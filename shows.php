<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2016-02-11
 * Time: 7:53 PM
 *
 * builds the list of TV Shows
 */

require_once("config.php");
require_once("list.php");

function get_shows() {
    /**
     * returns a list of shows from the configured show location
     */
    global $tv_location;
    $shows = array_filter(get_media($tv_location), 'is_dir');
    return $shows;
}

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
        echo '<a href="list.php?i=tv&show=' . urlencode($show) . '">' . strip_path($show). '</a><br/>';
    }
}
