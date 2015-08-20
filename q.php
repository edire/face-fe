<?php
require_once("qiniu/rs.php");

$bucket = 'facecollege';
$accessKey = 'EivczfnG_FXS5OX4BrZbovCQsRUBWBrjYoJ2PPhx';
$secretKey = 'jnM6dffOPZ7YvBHBHZTG4UrGj4BuHxhZy5FEBwLa';

Qiniu_SetKeys($accessKey, $secretKey);
$putPolicy = new Qiniu_RS_PutPolicy($bucket);
$upToken = $putPolicy->Token(null);
$arr=array(
        "uptoken"=>$upToken,
        );

print_r(json_encode($arr));
