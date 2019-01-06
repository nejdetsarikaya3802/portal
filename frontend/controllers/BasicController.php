<?php

namespace frontend\controllers;
//namespace frontend\models;
use yii\web\Controller;
use yii\db\Query;
use yii\data\ActiveDataProvider;
class BasicController extends Controller{
    public function actionIndex(){
        return $this->render('deneme');
    }
    public function actionRegistration() {
        $mRegistration = new frontend\models\RegistrationForm();
        return $this->render('registration', ['model' => $mRegistration]);
     }
    public function actionMerhaba(){
        echo "merhabaa";
      
    }
    public function actionUsers(){
        $query = new Query();
        $provider = new ActiveDataProvider([
        'query' => $query->from('user'),
            'sort' => new \yii\data\Sort([
                'attributes' => [
                    'email',
                    'username',
                ]
            ]),
            'pagination' => [
                'pageSize' => 1,
            ],
        ]);
        $data ["provider"]=$provider;
        
       return $this->render("users",$data);
    }
    }