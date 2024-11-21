<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Feedback */
/* @var $feedbacks app\models\Feedback[] */ // Массив відгуків

$this->title = 'Відгуки';
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="container">


    <!-- Форма для введення відгуку -->
    <?php $form = ActiveForm::begin(); ?>

    <h2>Відправити відгук</h2>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Відправити', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <h3>Всі відгуки</h3>

    <!-- Виведення всіх відгуків -->
    <?php if (!empty($feedbacks)): ?>
    <div class="feedbacks-list">
        <?php foreach ($feedbacks as $feedback): ?>
            <div class="feedback-item">
                <h4><?= Html::encode($feedback->username) ?></h4>
                <p><?= Html::encode($feedback->text) ?></p>
                <small>Дата: <?= Yii::$app->formatter->asDatetime($feedback->created_at) ?></small>
            </div>
            <!-- Додаємо роздільник після кожного відгука -->
            <hr>
        <?php endforeach; ?>
    </div>
    <?php else: ?>
        <p>Ще немає відгуків.</p>
    <?php endif; ?>
</div>




<section id="search" class="section">
        <div class="container">
            <h2>Пошук по сайту</h2>
            <form id="searchForm">
                <label for="searchInput">Введіть пошуковий запит:</label>
                <input type="text" id="searchInput" placeholder="Пошук..." required>
                <button type="submit">Пошук</button>
            </form>
            <p id="searchResults"></p> <!-- Виведення результатів пошуку -->
        </div>
    </section>

    <section id="about" class="section">
        <div class="container">
            <h2>Про мене</h2>
            <p>Я займаюсь розробкою сайтів. Мені подобається створювати щось нове.</p>
        </div>
    </section>

    <section id="services" class="section">
        <div class="container">
            <h2>Послуги</h2>
            <div class="services">
                <div class="service">
                    <h3>Розробка простого сайту</h3>
                    <p>Розробка простого сайту включає в себе сайт на html та css</p>
                </div>
                <div class="service">
                    <h3>Розробка функціонального сайту</h3>
                    <p>Функціональний сайт включає в себе html, css та javascript</p>
                </div>
                <div class="service">
                    <h3>Розробка повного сайту</h3>
                    <p>Включає в себе html, css, javascript та php</p>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="section">
        <div class="container">
            <h2>Портфоліо</h2>
            <div class="portfolio">
                <a href="https://github.com/Mishaoo">GitHub progect</a>
            </div>
        </div>
    </section>


    <section id="contact" class="section">
        <div class="container">
            <h2>Контакти</h2>
            <p>Зв'яжіться зі мною через email: <a href="mailto:example@example.com">test@gmail.com</a></p>
            <p>Або зателефонуйте: <a href="tel:+123456789">+0000</a></p>
        </div>
    </section>



