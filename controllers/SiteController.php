<?php

namespace app\controllers;

use Yii;
use app\models\Feedback;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $model = new Feedback();

        // Якщо форма відправлена і є дані
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // Зберігаємо в базу
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Ваш відгук успішно відправлений!');
                return $this->refresh(); // Перезавантажуємо сторінку
            }
        }

        // Отримуємо всі відгуки
        $feedbacks = Feedback::find()->orderBy(['created_at' => SORT_DESC])->all();

        return $this->render('index', [
            'model' => $model,
            'feedbacks' => $feedbacks, // Передаємо відгуки у представлення
        ]);
    }
}
