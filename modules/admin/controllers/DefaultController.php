<?php

namespace app\modules\admin\controllers;
use app\components\SelfController;
class DefaultController extends SelfController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * 后台欢迎页面
     * @return string
     */
    public function actionWelcome(){
        return $this->render('welcome');
    }
}
