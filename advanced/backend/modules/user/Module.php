<?php
namespace user;

use yii\base\Module as BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace = 'user\controllers';

    public function init()
    {
        parent::init();
    }
}