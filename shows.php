<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2016-02-11
 * Time: 7:53 PM
 *
 * builds the list of TV Shows
 */

function get_shows() {
    /**
     * returns a list of shows from the configured show location
     */
    global $tv_location;
    $shows = array_filter(glob($tv_location . '/*'), 'is_dir');
    return $shows;
}

function get_episodes($show) {
    /**
     * returns a list of episodes from the given show
     */
    $eps = glob($show .'/*.mp4');
    return $eps;
}

if (isset($_GET['show']) && ! empty($_GET['show'])) {
    $episodes = get_episodes(urldecode($_GET['show']));
    echo sizeof($episodes) . " episodes<br/>";
    foreach($episodes as $episode) {
        echo '<a href="watch.php?vid=', urlencode($episode), '">' . $episode . '</a><br/>';
    }
} else {
    $shows = get_shows();
    echo sizeof($shows) . " shows<br/>";
    foreach ($shows as $show) {
        echo '<a href="list.php?i=tv&show=' . urlencode($show) . '">' .$show. '</a><br/>';
        // TODO echo actual useful HTML links
    }
}