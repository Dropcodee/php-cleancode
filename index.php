<?php

/* adding all the config files which are
=================== config.inc.php and header.inc.php */
    require_once('include/init.php');

?>

<body>

    <div>
        <!-- header text include your files using this method or template
		============================================= -->
        <?php include $inc_folder.'include/home_herotext.inc.php'; ?>

    </div>
    <!--adding footer.inc.php, contains scripts
		============================================= -->
    <?php include $inc_folder.'include/footer.inc.php'; ?>
</body>

</html>