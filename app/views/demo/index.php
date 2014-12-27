<?php
/**
 * Created by PhpStorm.
 * User: manhnt
 * Date: 12/24/14
 * Time: 12:15 AM
 */

echo $title;
$url=URL::route("content",array('9999'));
echo " <a href='$url'>Click here</a>";
?>