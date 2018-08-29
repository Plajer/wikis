<?php
include '../../json_localization.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Plajer's Lair Wiki</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <link rel="stylesheet" href="../../markdown.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#9e9e9e">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#9e9e9e">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#9e9e9e">
    <link rel="icon" sizes="192x192" href="../../img/faviconmobile.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.ico">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <h1 id="village-defense-custom-maps">Village Defense custom maps</h1>
            <p>In this section, you can download some additional maps for your server.</p>
            <p>Every map contains Secret Well, Lobby room and configured arena.</p>
            <div class="alert alert-warning alert-white rounded">
                <div class="icon">
                    <i class="fa fa-warning"></i>
                </div>
                <div style="margin-left: 45px;"><strong>Warn!</strong>
                    The shop is not included with the maps!
                </div>
            </div>
            <h2 id="table-of-contents">Table of contents</h2>
            <ul>
                <li><a href="#quarry">Quarry</a></li>
                <li><a href="#hollow">Hollow</a></li>
            </ul>
            <h2 id="quarry">Quarry</h2>
            <p><strong>Quarry map from original Village Defense map pack</strong></p>
            <p><strong>Download link:</strong> <a target="_blank"
                                                  href="http://www.mediafire.com/file/71cs388sh2m884f/Quarry_-_VD_map_and_config.zip/file">http://www.mediafire.com/file/71cs388sh2m884f/Quarry_-_VD_map_and_config.zip/file</a>
            </p>
            <p><strong>Coordinates:</strong> 0, 80, 0</p>
            <p><strong>Screenshots:</strong></p>
            <p><img src="https://i.imgur.com/N8EHEZP.jpg" alt=""></p>
            <h2 id="hollow">Hollow</h2>
            <p><strong>Hollow map from original Village Defense map pack</strong></p>
            <div class="alert alert-danger alert-white rounded">
                <div class="icon">
                    <i class="fa fa-times-circle"></i>
                </div>
                <div style="margin-left: 45px;"><strong>Danger!</strong>
                    Door setup in this map may be broken! Please re-setup it when it breaks.
                </div>
            </div>
            <p><strong>Download link:</strong> <a target="_blank"
                                                  href="http://www.mediafire.com/file/b5ffhdd4ladfr5l/Hollow+-+VD+map+and+config.zip">http://www.mediafire.com/file/b5ffhdd4ladfr5l/Hollow+-+VD+map+and+config.zip</a>
            </p>
            <p><strong>Coordinates:</strong> -50, 72, 50</p>
            <p><strong>Screenshots:</strong></p>
            <p><img src="https://i.imgur.com/GMmTz1b.jpg" alt=""></p>

        </div>
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12">
            <div id="side-menu">
                <img src="https://i.imgur.com/ZMPQeCz.png" class="img-fluid mx-auto d-block" alt="logo"
                     width="200">
                <div class="menu-content">
                    <h3 id="-general-"><strong><?php echo localize("VD-Sidebar-General"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/index.php"><?php echo localize("VD-Sidebar-Home"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/cmds_and_perms.php"><?php echo localize("VD-Sidebar-Cmds-And-Perms"); ?></a>
                        </li>
                        <li style="list-style-image: url('../../img/you-are-here.png');">
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/free_maps.php"><?php echo localize("VD-Sidebar-Free-Maps"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/addons.php"><?php echo localize("VD-Sidebar-Plugin-Addons"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/tips.php"><?php echo localize("VD-Sidebar-Server-Tips"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/papi_placeholders.php"><?php echo localize("VD-Sidebar-PAPI-Placeholders"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-support-"><strong><?php echo localize("VD-Sidebar-Support"); ?></strong></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://youtu.be/16GS6zAte5I"><?php echo localize("VD-Sidebar-Setup-Tutorial"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/faq.php"><?php echo localize("VD-Sidebar-FAQ"); ?></a> - <?php echo localize("VD-Sidebar-FAQ-Problems-And-Tips"); ?>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/configuration.php"><?php echo localize("VD-Sidebar-Files-Explained"); ?></a>
                        </li>
                    </ul>
                    <h3 id="-developement-space-"><strong><?php echo localize("VD-Sidebar-Development-Space"); ?></strong>
                    </h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/api.php"><?php echo localize("VD-Sidebar-Developer-API"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer-lair.github.io/Village_Defense/"><?php echo localize("VD-Sidebar-Java-Docs"); ?></a>
                        </li>
                    </ul>
                    <h3 id="enhancements-addon"><?php echo localize("VD-Sidebar-Enhancements-Addon"); ?></h3>
                    <ul style="list-style-type: disc;">
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/enhancements/cmds_and_perms.php"><?php echo localize("VD-Sidebar-Cmds-And-Perms"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/enhancements/faq.php"><?php echo localize("VD-Sidebar-Enhancements-FAQ"); ?></a>
                        </li>
                    </ul>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer font-small grey">

    <div class="footer-copyright text-center py-3">© 2018 <a target="_blank" href="https://www.spigotmc.org/resources/village-defence-1-8-8-and-1-12-only.41869/">Village Defense 3</a> |
        Created by <a target="_blank" href="https://github.com/Plajer-Lair">Plajer's Lair</a> and maintained by
        <a target="_blank" href="https://www.spigotmc.org/members/plajer.423193/">Plajer</a>
    </div>

</footer>
</body>
</html>