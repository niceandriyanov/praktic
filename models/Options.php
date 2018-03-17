<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "options".
 *
 * @property int $id
 * @property string $name
 * @property string $value
 * @property string $type
 */
class Options extends \yii\db\ActiveRecord
{
    public $imageFile;

    public static function tableName()
    {
        return 'options';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['type'], 'string'],
            [['code','short'], 'string'],
            [['city_id'], 'integer'],
            [['name', 'value'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'extensions' => 'png, jpg'],
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'value' => 'Значение',
            'type' => 'Тип',
            'imageFile' => 'Изображение',
            'code' => 'Код',
            'short' => 'Код визуально',
            'city_id' => 'Код города',
        ];
    }
}
