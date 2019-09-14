<!DOCTYPE HTML>
<html xml:lang="en" lang="en">
    <head>
        <title><?php echo CHtml::encode(Yii::app()->name); ?></title>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <!-- Bootstrap General -->


        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/bootstrap.css" />
        <script type="text/javascript"  src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/bootstrap.js"></script>
        <script type="text/javascript"  src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/bootstrap.min.js"></script>
        <!--Angular-->
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.10/angular.js"></script>

        <!--Angular Bootstrap UI-->
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/assets/js/ui-bootstrap-tpls-0.11.0.js"></script>
        <!--Importacion de Angular en todo el sitio-->
        <script type="text/javascript">angular.module('appGeneral', []);</script>
        <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>

    </head>
    <body ng-app="appGeneral">
        <!-- Navegador ================================================== -->
        <script type="text/javascript">
            angular.module('navegador', []);
            function colapsador($scope){}

                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-35848102-1']);
                _gaq.push(['_trackPageview']);

                (function () {
                  var ga = document.createElement('script');
                  ga.type = 'text/javascript';
                  ga.async = true;
                  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                  var s = document.getElementsByTagName('script')[0];
                  s.parentNode.insertBefore(ga, s);
                })();
        </script>

        <div ng-app="navegador" ng-controller="colapsador">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <!-- Boton Colapsador -->
                    <button type="button" class="navbar-toggle" ng-init="navCollapsed = true" ng-click="navCollapsed = !navCollapsed">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php echo CHtml::link('BELSA',array('site/index'),array('class'=>'navbar-brand')); ?>
                </div>

                <!-- Menu navegador -->

                <div class="collapse navbar-collapse" ng-class="!navCollapsed && 'in'">
                    <ul class="nav navbar-nav">
                        <li><?php echo CHtml::link('Home',array('site/index'),array('class'=>'brand')); ?></li>
                        <li><?php echo CHtml::link('About',array('site/page', 'view'=>'about'),array('class'=>'brand')); ?></li>
                        <li><?php echo CHtml::link('Contact',array('site/contact'),array('class'=>'brand')); ?></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a ng-show="<?php echo Yii::app()->user->isGuest ; ?>"  href='<?php echo (Yii::app()->request->baseUrl.'/index.php?r=site/login') ?>'><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a ng-hide="<?php echo Yii::app()->user->isGuest ; ?>"  href='<?php echo (Yii::app()->request->baseUrl.'/index.php?r=site/logout') ?>'><span class="glyphicon glyphicon-log-in"></span> Logout
                                <?php echo (isset(Yii::app()->user->nombre)) ? Yii::app()->user->nombre : '';?> <?php //echo (isset(Yii::app()->user->id_perfil)) ? Yii::app()->user->id_perfil : '';?> <?php //echo Yii::app()->user->id_perfil;?>

                            </a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Fin Navegador -->

        <!-- Breadcrumb ================================================== -->
        <div class="container" style="color: #EFEFEF">
            <?php if(isset($this->breadcrumbs)):?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                            'links'=>$this->breadcrumbs,
            )); ?><!-- breadcrumbs -->
            <?php endif?>
        </div>

        <div class="container">
                <?php echo $content; ?>

            <br />
            <!-- footer -->
            <div class="footer text-center">
                <footer>
                    Copyright &copy; <?php echo date('Y'); ?> by  Style & Design.<br/>
                    All Rights Reserved.<br/>
                    <br />
                </footer>
            </div>
        </div>
        <!-- /container -->
        <!-- Scripts y links -->



    </body>

</html>
