# PHP-CLEANCODE

A basic PHP boiler plate for writing clean php code using includes and basic php routing.

## Installation Steps

1. Clone the repository,

```zsh
git clone https://github.com/Joshua-owolabi/php-cleancode.git
```

2.  use composer

```zsh
composer install
```

## After installation

1. Enter into the include directory select the **config.inc.php** Check code below
2. set your site title
3. set your application **Root url**
4. set your assets directory

## Code for config

```php
<?php

$SiteTitle = "YOUR SITE TITLE";

$SiteShortName = "YOUR SITE SHORT TITLE";

// site urls
$SiteUrl = "http://127.0.0.5:8080";
$rootUrl = $SiteUrl."/";
// assets folder urls
$AssetsUrl = $SiteUrl."/assets";

// css url in assets
$AssetsCssUrl = $AssetsUrl.'/css';

// javascript url in assets
$AssetsJsUrl =  $AssetsUrl.'/js';

?>
```
