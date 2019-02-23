<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?=$SiteTitle?></title>

    <! -- (optional) section for controlling style sheets or js scripts-->
        <? if($_SERVER['REQUEST_URI'] == "/"): ?>
        <link rel="stylesheet" href="<?=$AssetsCssUrl?>/style.css">

        <? elseif($_SERVER['REQUEST_URI'] == "/about.php"): ?>
        <link rel="stylesheet" href="<?=$AssetsCssUrl?>/about.css">
        <? endif;?>
</head>