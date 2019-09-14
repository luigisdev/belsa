<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<center>
<h1>Bienvenido a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo.png"><br />
<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/horario.png">
<p>Belsa es un sistema desarrollado para el manejo de horarios en el Centro Universitario de Ciencia Exactas e Ingenierías.<br />
   El acceso a este sistema esta autorizado unicamente para miembros administrativos.</p>

<p>Si tienes alguna duda relacionada nuestro sistema, puedes enviarnos un mensaje desde nuestro  <a href="/belsa/index.php?r=site/contact">formulario de contacto</a>
	 y nosotros te lo contestaremos lo mas pronto posible.</p>
</center>
