<?php
/**
 * Created by PhpStorm.
 * User: Colin
 * Date: 2016-02-11
 * Time: 7:53 PM
 *
 * Page used to view the selected video, video is specified by $_Get['vid'] param
 */
include_once("includes/page_header.php");
require_once("includes/config.php");

echo '<video width="1280" height="720" controls>';
echo '<source src="'. urldecode($_GET['vid']) .'" type="video/mp4">';
echo '</video>';

include_once("includes/footer.html");