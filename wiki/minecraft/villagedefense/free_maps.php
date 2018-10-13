<?php
include_once('../../../shared/inc/tracking.php');
include_once("../../../shared/inc/tracking.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Plajer's Lair Wiki</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <link rel="stylesheet" href="../../inc/css/markdown.css">
    <link rel="stylesheet" href="../../inc/css/alerts.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="../../../shared/inc/css/bootstrap-4.1.3.min.css" rel="stylesheet">

    <link rel="icon" sizes="192x192" href="../../../shared/inc/img/favicon/favicon-mobile.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../shared/inc/img/favicon/favicon.ico">
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark fixed-nav-index">
    <a class="navbar-brand" href="#">
        <img src="https://i.imgur.com/gDyj2on.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Plajer's Lair wiki
    </a>
</nav>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-10 col-xs-12">
            <h1 id="village-defense-custom-maps">Village Defense custom maps</h1>
            <p>In this section, you can download some additional maps for your server.</p>
            <p>Every map contains Secret well, simple shop, lobby room and configured arena.</p>
            <h2 id="table-of-contents"><?php echo localize("Table-Of-Contents"); ?></h2>
            <ul>
                <li><a href="#quarry">Quarry</a></li>
                <li><a href="#hollow">Hollow</a></li>
            </ul>
            <h2 id="quarry">Quarry</h2>
            <p><strong>Quarry map from original Village Defense map pack</strong></p>
            <p><strong>Download link:</strong> <a target="_blank" href="http://www.mediafire.com/file/pea5p4qf3lovk8p/Quarry_-_configs_and_map.zip/file">http://www.mediafire.com/file/pea5p4qf3lovk8p/Quarry_-_configs_and_map.zip/file</a>
            </p>
            <p><strong>Coordinates:</strong> 0, 80, 0</p>
            <p><strong>Screenshots:</strong></p>
            <p><img src="https://i.imgur.com/N8EHEZP.jpg" alt=""></p>
            <h2 id="hollow">Hollow</h2>
            <p><strong>Hollow map from original Village Defense map pack</strong></p>
            <p><strong>Download link:</strong> <a target="_blank" href="http://www.mediafire.com/file/v8fyvf29cuq3x59/Hollow+-+configs+and+map.zip">http://www.mediafire.com/file/v8fyvf29cuq3x59/Hollow+-+configs+and+map.zip</a>
            </p>
            <p><strong>Coordinates:</strong> -50, 72, 50</p>
            <p><strong>Screenshots:</strong></p>
            <p><img src="https://i.imgur.com/GMmTz1b.jpg" alt=""></p>

        </div>

        <div class="col-lg-auto col-md-4 col-sm-6 col-xs-12 mb-3">
            <div id="side-menu">
                <div class="menu-content px-3 py-2">
                    <img src="https://i.imgur.com/vilATio.png" class="img-fluid mx-auto d-block" alt="logo" width="200">
                    <h3 id="-general-"><strong><?php echo localize("Sidebar-Category-General"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/index.php"><?php echo localize("Sidebar-Home"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/cmds_and_perms.php"><?php echo localize("Sidebar-Cmds-And-Perms"); ?></a>
                        </li>
                        <li style="list-style-image: url('../../inc/img/you-are-here.png');">
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/free_maps.php"><?php echo localize("Sidebar-Free-Maps"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/addons.php"><?php echo localize("Sidebar-Plugin-Addons"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/tips.php"><?php echo localize("Sidebar-Server-Tips"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/papi_placeholders.php"><?php echo localize("Sidebar-PAPI-Placeholders"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-support-"><strong><?php echo localize("Sidebar-Category-Support"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://youtu.be/16GS6zAte5I"><?php echo localize("Sidebar-Setup-Tutorial"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/faq.php"><?php echo localize("Sidebar-FAQ"); ?></a> - <?php echo localize("Sidebar-FAQ-Problems-And-Tips"); ?>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/configuration.php"><?php echo localize("Sidebar-Files-Explained"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-developement-space-"><strong><?php echo localize("Sidebar-Category-Development-Space"); ?></strong>
                    </h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/api.php"><?php echo localize("Sidebar-Developer-API"); ?></a>
                        </li>
                        <li>
                            <a href="https://jd.plajer.xyz/minecraft/villagedefense/"><?php echo localize("Sidebar-Java-Docs"); ?></a>
                        </li>
                    </ul>
                    <h3 id="enhancements-addon"><?php echo localize("Enhancements-Sidebar-Addon-Name"); ?></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/enhancements/cmds_and_perms.php"><?php echo localize("Sidebar-Cmds-And-Perms"); ?></a>
                        </li>
                        <li>
                            <a href="https://wiki.plajer.xyz/minecraft/villagedefense/enhancements/faq.php"><?php echo localize("Enhancements-Sidebar-FAQ"); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <footer class="col-12 page-footer font-small elegant-color-dark p-0">
            <div class="footer-copyright text-center py-3">© 2018 <a target="_blank" href="https://www.spigotmc.org/resources/41869/">Village Defense 3</a> |
                Created by <a target="_blank" href="https://github.com/Plajer-Lair">Plajer's Lair</a> and maintained by <a target="_blank"
                                                                                                                           href="https://www.spigotmc.org/members/plajer.423193/">Plajer</a>
                and <a target="_blank" href="https://www.spigotmc.org/members/tigerkatze.414545/">Tigerpanzer</a>
            </div>
        </footer>
    </div>
</div>
</body>
</html>