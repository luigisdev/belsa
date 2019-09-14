<div class="pagination-centered">
	<center>
					<?php $form=$this->beginWidget('CActiveForm', array(
						'id'=>'login-form',
						'enableClientValidation'=>true,
						'clientOptions'=>array(
							'validateOnSubmit'=>true,
						),
					)); ?><br/><br/>
									<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo.png">
									<br/><br/>
				          <div class="btn-group">
				              <?php echo $form->labelEx($model,'Correo *'); ?>
				              <?php echo $form->textField($model,'username',array('class'=>'form-control','placeholder'=>'email@ejemplo.com')); ?>
				              <?php echo $form->error($model,'username'); ?>
				          </div><br/><br/>
				          <div class="btn-group">
				              <?php echo $form->labelEx($model,'Contrasena *'); ?>
				              <?php echo $form->passwordField($model,'password',array('class'=>'form-control','placeholder'=>'Contraseña')); ?>
				              <?php echo $form->error($model,'password'); ?>
				          </div><br/><br/>
				          <!-- <div class="btn-group row">
											<?php echo $form->checkBox($model,'rememberMe'); ?>
											<?php echo $form->labelEx($model,'Recordarme'); ?>
				              <?php echo $form->error($model,'rememberMe'); ?>
				          </div><br/><br/> -->
									<div class="btn-group">
											<?php echo CHtml::submitButton('Iniciar Sesión',array('class'=>'btn btn-primary')); ?>
									</div>
					<?php $this->endWidget(); ?>
	</center>
</div>
