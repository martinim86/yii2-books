<?php

namespace app\models;
use yii\base\Model;
use Yii;

/**

 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $role
 */
class SignupForm extends Model
{

    public $username;
    public $password;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
           [['username', 'password'], 'required', 'message' => 'Заполните поле'],
           ['username', 'unique', 'targetClass' => User::className(),  'message' => 'Этот логин уже занят'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Логин',
            'password' => 'Пароль',
            'role' => 'Role',
        ];
    }
}
