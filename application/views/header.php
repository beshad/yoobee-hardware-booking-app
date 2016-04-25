<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!doctype html>
<html>
<head>
    <title>Yoobee Hardware Booking System</title>
    <!--build:css css/styles.min.css -->
    <!-- bower:css -->
    <?=link_tag("bower_components/angular-material/angular-material.css")?>
    <?=link_tag("bower_components/mdi/css/materialdesignicons.css")?>
    <?=link_tag("bower_components/v-accordion/dist/v-accordion.css")?>
    <?= link_tag("bower_components/fullcalendar/dist/fullcalendar.css") ?>
    <?= link_tag("bower_components/qtip2/basic/jquery.qtip.css") ?>
    <?=link_tag("app/css/styles.css")?>

    <!--        --><? //link_tag("assets/grocery_crud/themes/datatables/css/demo_table_jui.css")?>
    <!--        --><? //link_tag("assets/grocery_crud/css/ui/simple/jquery-ui-1.10.1.custom.min.css") ?>
    <!--        --><? //link_tag("assets/grocery_crud/themes/datatables/css/datatables.css") ?>
    <!--        --><? //link_tag("assets/grocery_crud/themes/datatables/css/jquery.dataTables.css") ?>
    <!--        --><? //link_tag("assets/grocery_crud/themes/datatables/extras/TableTools/media/css/TableTools.css") ?>
    <!--        --><? //link_tag("assets/grocery_crud/css/jquery_plugins/fancybox/jquery.fancybox.css") ?>
    <!-- endbower -->
    <!-- endbuild -->
</head>
<body ng-app="myApp" ng-controller="ngAppCtrl" ng-cloak>
<script src="<?= base_url() ?>bower_components/angular/angular.js"></script>
<script src="<?= base_url() ?>bower_components/angular-material/angular-material.js"></script>
<script src="<?= base_url() ?>bower_components/jquery/dist/jquery.js"></script>


<md-toolbar>
            <div class="md-toolbar-tools">
                <md-button ng-click="openSidebar();">
                    <md-icon md-svg-src="<?=base_url()?>app/icons/ic_menu_white_48px.svg"></md-icon>
                </md-button>
                <p><strong>Yoobee Hardware Booking Application<ation</strong></p>
            </div>
        </md-toolbar>

        <!--side navigation bar / menu-->

        <md-sidenav class="md-sidenav-left md-whiteframe-z2" md-component-id="left">
            <md-toolbar class="md-toolbar-tools">
                <h1 flex>Settings</h1>
                <md-button ng-click="closeSidebar();">
                    <md-icon md-svg-src="<?=base_url()?>app/icons/ic_close_white_48px.svg"></md-icon>
                </md-button>
            </md-toolbar>

            <md-content layout-padding>
                <h4>Welcome, <?= $this->session->userdata('username') ?></h4>
            </md-content>

            <md-content layout-padding>
                <h4><?= anchor('dashboard/students', 'Students') ?></h4>
                <h4><?= anchor('dashboard/devices', 'Devices') ?></h4>
            </md-content>


            <md-content layout-padding>
                <?php if($this->session->userdata('username')) {?>
                    <?=anchor('auth/logout','Logout')?>
                <? } ?>
            </md-content>
        </md-sidenav>
<div class="container">
