<?php

namespace app\modules\api\modules\v1\models;

use Yii;
use app\modules\api\modules\v1\models\Films;

/**
 * This is the model class for table "films_genres".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $alt
 * @property string $img
 * @property int $parent_id
 */
class FilmsGenres extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'films_genres';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'slug', 'description', 'alt', 'img', 'parent_id'], 'required'],
            [['parent_id'], 'integer'],
            [['title', 'slug', 'description', 'alt', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'description' => 'Description',
            'alt' => 'Alt',
            'img' => 'Img',
            'parent_id' => 'Parent ID',
        ];
    }


    public function extraFields()
    {
        return [
            'films_to_genres',
        ];
    }


    public function getFilms_to_genres()
    {
        return $this->hasMany(Films::class, ['id' => 'films_id'])
            ->viaTable('films_to_genres', ['genres_id' => 'id']);
    }
}
