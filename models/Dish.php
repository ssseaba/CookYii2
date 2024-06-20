<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

class Dish extends ActiveRecord
{
    public $imageFile; // Поле для загрузки изображения

    public static function tableName()
    {
        return 'dishes'; // Название таблицы в базе данных
    }

    public function rules()
    {
        return [
            [['title', 'description', 'day_of_week'], 'required'],
            [['description'], 'string'],
            [['title', 'image'], 'string', 'max' => 255],
            [['imageFile'], 'required'],
            [['imageFile'], 'file','extensions' => ['png', 'jpg']], // Правила для загрузки файлов

        ];
    }

    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            if ($this->validate()) {

                $filePath = 'uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension;

                if ($this->imageFile->saveAs($filePath)) {
                    $this->image = $filePath;
                    return true;
                }
            }
        }
        return false;
    }


}
