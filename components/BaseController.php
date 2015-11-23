<?php
/**
 * Created by HXP.
 * User: hxp
 * Date: 2015/11/16
 * Time: 11:40
 */
namespace app\components;
interface BaseController{
    /**
     *添加数据
     * @return mixed
     */
    public function actionAdd();

    /**
     * 删除数据
     * @return mixed
     */
    public function actionDelete();

    /**
     * 修改数据
     * @return mixed
     */
    public function actionEdit();

    /**
     * 显示数据
     * @return mixed
     */
    public function actionDisplay();
}