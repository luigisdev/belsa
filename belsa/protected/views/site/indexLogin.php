<?php $this->pageTitle='Belsa'; ?>

<div class="page-header text-center">

    <h1>Bienvenido a <?php echo CHtml::encode(Yii::app()->name); ?></h1>

</div>

<div class="pagination-centered">

    <center>

        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo.png">

        <br/><br/>

        <div class="btn-group">

               <?php echo CHtml::link('<i class="icon-user icon-white"></i>Usuarios',array('usuario/index'),array('class' => 'btn btn-primary')); ?>

               <?php echo CHtml::link('<i class="icon-user icon-white"></i> Profesores',array('profesor/index'),array('class' => 'btn btn-primary')); ?>

               <?php echo CHtml::link('<i class="icon-barcode icon-white"></i> Aulas',array('aula/index'),array('class' => 'btn btn-primary')); ?>

               <?php echo CHtml::link('<i class="icon-plus icon-white"></i> Cursos',array('curso/index'),array('class' => 'btn btn-primary')); ?>

        </div>

        <br><br>

        <div class="btn-group">

            <?php echo CHtml::link('<i class="icon-th-large icon-white"></i> Horario',array('horario/index'),array('class' => 'btn btn-primary')); ?>

            <?php echo CHtml::link('<i class="icon-list-alt icon-white"></i> Registros',array('registro/index'),array('class' => 'btn btn-primary')); ?>

            <?php echo CHtml::link('<i class="icon-download icon-white"></i> Scrapping',array('scrapping/index'),array('class' => 'btn btn-primary')); ?>

        </div>

        <br><br>

        <div class="btn-group">

            <?php echo CHtml::link('<i class="icon-upload icon-white"></i> Cargar Horario',array('registro/cargarBitacora'),array('class' => 'btn btn-danger')); ?>

            <?php echo CHtml::link('<i class="icon-search icon-white"></i> Buscar Aulas',array('registro/buscarAula'),array('class' => 'btn btn-primary')); ?>

       </div>

    </center>

</div>

<br/><br/><br/>

