<?php

namespace app\modules\admin;

class Admin extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';
    public $layout = "body";
    public function init()
    {
        parent::init();
        $session = \Yii::$app->getSession();
        //检查session是否开启
        if($session->isActive){
            $session->open();
        }
        // custom initialization code goes here
    }
}
