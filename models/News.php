<?php

namespace app\models;

use Yii;
use kartik\builder\TabularForm;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
// use kartik\grid\DatePicker;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string|null $content
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['date_add'], 'integer', 'min' => 0],
            [['date_add'], 'default', 'value' => time()],
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
            'content' => 'Content',
            'date_add' => 'Date add',
        ];
    }
}
