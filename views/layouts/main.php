<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
?>
<!DOCTYPE html>


<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="es">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->title; ?></title>
    <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" rel="stylesheet">
    <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->

    <?= Yii::$app->controller->renderPartial('//layouts/inc/common');?>
    <?php //Yii::$app->controller->renderPartial('//layouts/inc/navbar');?>

</head>

<body style="min-width: 565px;">


<!--<div id="content" style="margin-top: 35px; min-width: 550px;">-->
<div id="content" style="margin-top: 0px; min-width: 550px;">
    <?php echo $content; ?>
</div><!-- content -->


<script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>

</body>

<style>
    .alert.alert-warning.warning-nav{
        margin-top: 35px!important;
        margin-bottom: 0px!important;
    }
</style>
</html>
