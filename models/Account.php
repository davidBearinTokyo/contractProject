<?php

namespace app\models;


use yii\base\Model;
class Account extends Model{

  public $name;
  public $tele;
  public $email;



  public function rules()
  {
  	return [
  			[['name', 'tele','email'], 'required'],
  			['email', 'email'],
  	];
  }

}




























?>