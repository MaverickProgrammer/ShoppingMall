<?php
namespace user\controllers;

use yii\rest\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        return 'hello user';
    }
}