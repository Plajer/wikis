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
            <h1 id="list-of-placeholderapi-s-placeholders">List of PlaceholderAPI&#39;s placeholders</h1>
            <table>
                <thead>
                <tr>
                    <th>Placeholder</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>%villagedefense_kills%</td>
                    <td>Shows your zombie kills</td>
                </tr>
                <tr>
                    <td>%villagedefense_deaths%</td>
                    <td>Shows your deaths</td>
                </tr>
                <tr>
                    <td>%villagedefense_games_played%</td>
                    <td>Shows your played games count</td>
                </tr>
                <tr>
                    <td>%villagedefense_highest_wave%</td>
                    <td>Shows the highest wave you survived</td>
                </tr>
                <tr>
                    <td>%villagedefense_level%</td>
                    <td>Shows your current level</td>
                </tr>
                <tr>
                    <td>%villagedefense_exp%</td>
                    <td>Shows your exp amount (decimal number)</td>
                </tr>
                <tr>
                    <td>%villagedefense_exp_to_next_level%</td>
                    <td>Shows amount of exp need to level up</td>
                </tr>
                </tbody>
            </table>
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
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/free_maps.php"><?php echo localize("VD-Sidebar-Free-Maps"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/addons.php"><?php echo localize("VD-Sidebar-Plugin-Addons"); ?></a>
                        </li>
                        <li>
                            <a href="https://plajer.xyz/wiki/mc/villagedefense/tips.php"><?php echo localize("VD-Sidebar-Server-Tips"); ?></a>
                        </li>
                        <li style="list-style-image: url('../../img/you-are-here.png');">
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