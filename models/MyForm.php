<?php
/**
 * Created by PhpStorm.
 * User: karpov
 * Date: 11.11.2016
 * Time: 18:07
 */
namespace app\models;

use Yii;
use yii\base\Model;

class MyForm extends Model
{
    public $name;
    public $email;
    public $file;

    /**
     * @return  array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'email'], 'required', 'message' => 'Не заполнено поле'],
            ['email', 'email', 'message' => 'Некорректный e-mail адрес'],
            [['file'], 'file']
        ];
    }
}

