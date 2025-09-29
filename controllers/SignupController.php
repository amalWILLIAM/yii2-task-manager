<?php 

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\SignupForm;

class SignupController extends Controller
{
    public function actionIndex()
    {
        $model = new SignupForm();

        if($model->load(Yii::$app->request->post())&& $user = $model->signup())
        {
            Yii::$app->session->setFlash('success','Signup completed');
            return $this->refresh();
        }

        return $this->render('index',['model'=>$model]);
    }

    
}