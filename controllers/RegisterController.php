<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Account;
use app\models\Personalcontract;

class RegisterController extends Controller{

	public function actionShow(){
       $account = new Account;

       if ($account->load(Yii::$app->request->post()) && $account->validate()) {

         // 1. show the results
         // 2. insert the data into sql;

       	// $query = Personalcontract::find();

          $connection = \Yii::$app->db; // conet to the db
          $connection -> createCommand()->insert('personalcontract', ['name'=>"{$account->name}", 'tele'=>"{$account->tele}",'email'=>"{$account->email}"])->execute();


       return $this-> render('show',['account' => $account]);


       }

       else{
       	// show the entry page
       	return $this->render('entry',['account' => $account]);
       }

}
}


?>