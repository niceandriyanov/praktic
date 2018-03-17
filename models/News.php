<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $element
 * @property string $anons
 * @property string $content
 * @property int $user_id
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['element', 'anons', 'content'], 'string'],
            [['user_id'], 'integer'],
            [['title', 'slug'], 'string', 'max' => 255],
            [['slug'], 'unique'],
            [['date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'slug' => 'Ссылка',
            'element' => 'Тип элемента',
            'anons' => 'Анонс новости',
            'content' => 'Полный текст новости',
            'date' => 'Дата публикации',
            'user_id' => 'ID автора',
        ];
    }
}
