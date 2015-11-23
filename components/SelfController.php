<?php
/**
 * Created by HXP.
 * User: hxp
 * Date: 2015/11/23
 * Time: 16:25
 */
namespace app\components;
use yii\web\Controller;

class SelfController extends Controller{
    function init(){
        $session = \Yii::$app->getSession();
        if(!$session['login']){
           $this->redirect(['/admin/login']);
        }
    }
}