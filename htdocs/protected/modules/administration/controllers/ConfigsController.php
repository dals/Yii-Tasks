<?php

class ConfigsController extends AdministrationController {

    private $_configs;

    public function init() {
        $this->_configs = CFileHelper::findFiles(Yii::getPathOfAlias('application.data.configs'), array('fileTypes'=>array('php')));
    }
    public function actionEdit($id) {
        $id = base64_decode($id);// Decode basename of cfg file
        
        $validFiles = preg_grep("/\/{$id}\.php$/i",$this->_configs); // Grep an array of cfg files to be sure that edited file exists
        
        if(sizeof($validFiles) < 1) {
            throw new CHttpException(404, 'Cant find file');
        }
        
        $cfg = include reset($validFiles); // Get first filtered result (if multiple)
        
        $this->render('edit', array('cfg'=>$cfg));
    }

    public function actionIndex() {
        
        $rawData = array();
        foreach ($this->_configs as $key=>$config) {
            array_push($rawData, (array('id'=>$key,'path'=>$config)+include $config));
            
        }
        
        $dataProvider = new CArrayDataProvider($rawData, array(
            'id'=>'id'
        ));
        
        $this->render('index', array('model'=>$dataProvider));
    }

    public function actionView() {
        $this->render('view');
    }

    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}