<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="<?php echo $data["htmlClasses"] ?> no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="<?php echo $data["htmlClasses"] ?> no-js lt-ie10 lt-ie9 lt-ie8 ie7"> <![endif]-->
<!--[if IE 8]>         <html class="<?php echo $data["htmlClasses"] ?> no-js lt-ie10 lt-ie9 ie8"> <![endif]-->
<!--[if IE 9]>         <html class="<?php echo $data["htmlClasses"] ?> no-js lt-ie10 ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="<?php echo $data["htmlClasses"] ?> no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $data["projectName"] ?></title>
        
        <meta name="robots" content="NOINDEX, NOFOLLOW">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <!-- For third-generation iPad with high-resolution Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="static/assets/img/touch-icons/apple-touch-icon-144x144-precomposed.png?v=<?php echo $data["assetsVersion"] ?>">
        <!-- For iPhone with high-resolution Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="static/assets/img/touch-icons/apple-touch-icon-114x114-precomposed.png?v=<?php echo $data["assetsVersion"] ?>">
        <!-- For first- and second-generation iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="static/assets/img/touch-icons/apple-touch-icon-72x72-precomposed.png?v=<?php echo $data["assetsVersion"] ?>">
        <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
        <link rel="apple-touch-icon-precomposed" href="static/assets/img/touch-icons/apple-touch-icon-57x57-precomposed.png?v=<?php echo $data["assetsVersion"] ?>">
        
        <!--<link rel="shortcut icon" type="image/x-icon" href="static/assets/img/favicon.ico?v=<?php echo $data["assetsVersion"] ?>">-->
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="static/assets/css/backend.combined.css?v=<?php echo $data["assetsVersion"] ?>">
        <link rel="stylesheet" type="text/less" href="static/assets/css/backend.combined.less?v=<?php echo $data["assetsVersion"] ?>">
        <link rel="stylesheet" type="text/css" href="static/assets/css/backend/media.css?v=<?php echo $data["assetsVersion"] ?>">
        <link rel="stylesheet" type="text/css" href="static/assets/css/vendor/helper.css?v=<?php echo $data["assetsVersion"] ?>">
        <script src="static/assets/js/backend-top.combined.js?v=<?php echo $data["assetsVersion"] ?>"></script>
    </head>
    <body class="sf-body">
        <!--[if lt IE 8]>
            <div class="browsehappy">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</div>
        <![endif]-->
        <div class="sf-wrap">
            <div class="sf-subwrap">
                <header id="header" role="banner">
                    <?php include "menu.php" ?>
                    
                    <div class="toolbar">
                        <div class="container">
                            <div class="pull-left">
                                <h1>Heading 1</h1>
                            </div>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <a href="#" class="btn"><i class="icon-inbox"></i> Inbox <span class="badge">11</span></a>
                                    <a href="#" class="btn"> Drafts <span class="badge">2</span> </a>
                                    <a href="#" class="btn"><i class="icon-trash"></i> Trash</a>
                                </div>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-primary"> New </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="toolbar flat">
                        <div class="container">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="#">Content</a>
                                </li>
                                <li class="">
                                    <a href="#">Images</a>
                                </li>
                                <li class="">
                                    <a href="#">Options</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </header>

                <div id="main" role="main">