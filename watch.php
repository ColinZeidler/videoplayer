<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2016-02-11
 * Time: 7:53 PM
 *
 * Page used to view the selected video, video is specified by $_Get['vid'] param, and $_Get['type']
 */
include_once("page_header.php");
require_once("config.php");

require_once("movies.php");
require_once("shows.php");

//possible logic to reduce the
//if ($_GET['type'] == "movie") {
//    require_once("movies.php");
//} elseif ($_GET['type'] == "tv") {
//    require_once("shows.php");
//} else {
//    require_once("movies.php");
//    require_once("shows.php");
//}
