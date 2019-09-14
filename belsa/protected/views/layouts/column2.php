<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container" >
<div class="row">
    <div class="col-md-9">
	<?php echo $content; ?>
    </div>
    <div class="col-md-3">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operaciones',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
    </div>
</div>
</div>
<?php $this->endContent(); ?>
