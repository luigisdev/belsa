<?php
	Yii::app()->clientscript
	->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap.css' )
	->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap-responsive.css' )
	->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-button.js', CClientScript::POS_END )
	->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-transition.js', CClientScript::POS_END )
	->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-modal.js', CClientScript::POS_END )
		// use it when you need it!
		/*
		->registerCoreScript( 'jquery' )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-alert.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-dropdown.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-scrollspy.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tab.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tooltip.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-popover.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-collapse.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-carousel.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-typeahead.js', CClientScript::POS_END )
		*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo 'Belsa'; ?></title>
<meta name="language" content="es" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.10/angular.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/assets/js/ui-bootstrap-tpls-0.11.0.js"></script>
<script type="text/javascript">angular.module('appGeneral', []);</script>
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
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="/belsa/index.php"><?php echo Yii::app()->name ?></a>
				<div class="nav-collapse">
					<?php $this->widget('zii.widgets.CMenu',array(
						'htmlOptions' => array( 'class' => 'nav' ),
						'activeCssClass'	=> 'active',
						'items'=>array(
							array('label'=>'Contacto', 'url'=>array('/site/contact')),
							array('label'=>'Ingresar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
						),
					)); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="cont">
	<div class="container-fluid">
	  <?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
				'homeLink'=>false,
				'tagName'=>'ul',
				'separator'=>'',
				'activeLinkTemplate'=>'<li><a href="{url}">{label}</a> <span class="divider">/</span></li>',
				'inactiveLinkTemplate'=>'<li><span>{label}</span></li>',
				'htmlOptions'=>array ('class'=>'breadcrumb')
			)); ?>
		<!-- breadcrumbs -->
	  <?php endif?>

	<?php echo $content ?>


	</div><!--/.fluid-container-->
	</div>

	<div class="extra">
	  <div class="container">
		<div class="row">
			<div class="col-md-3">
				<h4>Universidad de Guadalajara</h4>
				<ul>
					<li><a href="http://siiauescolar.siiau.udg.mx/wus/gupprincipal.inicio">SIIAU</a></li>
					<li><a href="http://consulta.siiau.udg.mx/wco/sspseca.forma_consulta">Oferta Academica</a></li>
					<li><a href="http://www.sutudeg.org.mx/">SUTUdeG</a></li>
					<li><a href="http://www.gaceta.udg.mx/">Gaceta</a></li>
				</ul>
			</div> <!-- /span3 -->

			<div class="col-md-3">
				<h4>CUCEI</h4>
				<ul>
					<li><a href="http://www.cucei.udg.mx">Sitio CUCEI</a></li>
					<li><a href="http://recibe.cucei.udg.mx/Recibe/index.php/Recibe">RECIBE</a></li>
					<li><a href="proymoodle.cucei.udg.mx/">Proymoodle</a></li>
					<li><a href="http://moodle2.cucei.udg.mx/">Moodle 2</a></li>
				</ul>
			</div> <!-- /span3 -->

			<div class="col-md-3">
				<h4>Desarrolladores</h4>
				<ul>
					<li><a href="#">Monserrat Guerrero</a></li>
					<li><a href="#">Eduardo Maldonado</a></li>
					<li><a href="#">Asuncion Solis</a></li>
					<li><a href="#">Luis Garcia</a></li>
				</ul>
			</div> <!-- /span3 -->

			<div class="col-md-3">
				<h4>Desarrolladores</h4>
				<ul>
					<li><a href="#">Arturo Guzman</a></li>
					<li><a href="#">Veronica Rosales</a></li>
				</ul>
				</div> <!-- /span3 -->
			</div> <!-- /row -->
		</div> <!-- /container -->
	</div>

	<div class="footer">
	  <div class="container">
		<div class="row">
			<div id="footer-terms" class="col-md-6">
				© 2017 Todos los Derechos Reservados.
			</div> <!-- /.span6 -->
		 </div> <!-- /row -->
	  </div> <!-- /container -->
	</div>
</body>
</html>
