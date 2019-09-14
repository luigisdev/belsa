<?php

class ScrappingController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	public function actionIndex() {
            $this->render('index');
        }
        
	
	public function actionHorario1()
	{
            $scrapping = new Scrapping;
            $horario=$scrapping->dameHorarioFinal();
            
		$this->render('horario',array(
			'horario'=>  $horario,
                        
		));
	}
        public function actionHorario2()
	{
            $scrapping = new Scrapping;
            $horario=$scrapping->dame2HorariosFinal();
            
		$this->render('horario',array(
			'horario'=>  $horario,
                        
		));
	}
         public function actionHorario3()
	{
            $scrapping = new Scrapping;
            $horario=$scrapping->dame3HorariosFinal();
            
		$this->render('horario',array(
			'horario'=>  $horario,
                        
		));
	}

}
