<?php
/**
 * Created by PhpStorm.
 * User: gurik
 * Date: 16.08.2018
 * Time: 7:47
 */

namespace app\mosels;

use yii\base\Model;

class EntryForm extends Model {
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
                ['email', 'email']
            ];
    }
}

