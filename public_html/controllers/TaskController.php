<?php


namespace App\Controllers;

use App\Components\View;

class TaskController
{
    public function actionIndex()
    {
        $view = new View();
        $view->display('task/index.php');
    }
}