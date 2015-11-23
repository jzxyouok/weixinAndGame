<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property string $user_id
 * @property string $user_name
 * @property string $user_password
 * @property string $user_desc
 * @property string $ctime
 * @property integer $user_status
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_password'], 'required'],
            [['ctime', 'user_status'], 'integer'],
            [['user_name'], 'string', 'max' => 20],
            [['user_password'], 'string', 'max' => 32],
            [['user_desc'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => '用户id',
            'user_name' => '用户名',
            'user_password' => '用户密码',
            'user_desc' => 'User Desc',
            'ctime' => '创建时间',
            'user_status' => '用户状态',
        ];
    }

    /**
     * 登陆验证
     * @return bool
     */
    public function login(){
        if($this->validate()){
            $re = self::find()->where(['user_name'=>$this->user_name,'user_password'=>md5($this->user_password)])->all();
            if($re){
                $session = \Yii::$app->getSession();
                $session['login'] = [
                    'user_id' => $this->user_id,
                    'user_name' => $this->user_name,
                    'lifetime' => 3600,
                ];
                return true;
            }else{
                $this->addError('isUser',"用户名和密码错误！");
            }
        }
        return false;

    }
}
