<?php

$SiteTitle = "DropCode Boiler Plate";

/* set your website url or local xampp url or vhost
    ===================================== */
$SiteUrl = "$yoururl";

/*php extension for page url like /about.php
    ===================================== */
$ext = ".php";

/* root folder url
    ===================================== */
$rootUrl = $SiteUrl."/";


/* assets folder urls
    ===================================== */
$AssetsUrl = $rootUrl."/assets";
$AssetsCssUrl = $AssetsUrl."/css";
$AssetsJsUrl = $AssetsUrl."/js";

/* pages urls
    ===================================== */
$aboutUrl = $rootUrl."about".$ext;
$contactUrl = $rootUrl."contact".$ext;