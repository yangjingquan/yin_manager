﻿<?php
/**
 * Created by PhpStorm.
 * User: yangjingquan
 * Date: 2018/5/4
 * Time: 下午6:41
 */
namespace app\controllers;
use yii\web\Controller;

class IndexController extends Controller{
    public function actionTest(){
        echo 'This is branch_changeIndex';
    }

    public function actionIndex(){
        echo 'This is indexTest';
    }

    public function actionGetStrInfo(){
        echo 'This is getStrInfo method';
    }

    public function actionTestConflict(){
        echo 'This is testConflict method';
    }

    public function actionEx1(){
        echo 'This is ex1 method';
    }

    public function actionEx2(){
        echo 'This is ex2 method';
    }
}
