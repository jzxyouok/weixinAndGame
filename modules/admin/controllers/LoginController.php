<?php
/**
 * Created by HXP.
 * User: hxp
 * Date: 2015/11/23
 * Time: 12:24
 */
namespace app\modules\admin\controllers;
use app\modules\admin\models\User;

class LoginController extends \yii\web\Controller{
    /**
     * 后台登陆页面
     * @return string
     */
    public function actionIndex(){
        $error = '';
        $model = new User();
        if($model->load(\Yii::$app->getRequest()->post()) && $model->login()){
            $this->redirect(['/admin/default']);
        }
        if($model->getErrors()){
            $error = "用户名和密码不正确！请重新输入！！";
        }
        return $this->render('index',["error"=>$error]);
    }
}