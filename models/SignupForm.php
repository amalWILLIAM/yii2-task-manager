<?php 

namespace app\models;

use Yii;
use yii\base\Model;

class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;

    public function rules()
    {

        return[
            [['username','email','password'],'required'],
            ['email','email'],
            ['username','string','min'=>3,'max'=>10],
            ['password','string','min'=>10]
        ];
    }

    public function signup()
    {
        if(!$this->validate())
        {
            return false;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email =  $this->email;
        $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);
        $user->created_at = time();

        return $user->save();
    }
}