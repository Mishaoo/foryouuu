<?php

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class Feedback extends ActiveRecord
{
    public static function tableName()
    {
        return 'feedback'; // Вказуємо назву таблиці в базі даних
    }

    public function rules()
    {
        return [
            [['username', 'text'], 'required'], // Валідація полів
            [['username'], 'string', 'max' => 255], // Максимальна довжина username
            [['text'], 'string'], // Поле text може бути будь-якої довжини
            [['created_at'], 'safe'], // Для created_at не вказуємо обмежень
        ];
    }

    public function beforeSave($insert)
    {
        if ($this->isNewRecord) {
            $this->created_at = date('Y-m-d H:i:s'); // Встановлюємо дату створення
        }
        return parent::beforeSave($insert);
    }
}
