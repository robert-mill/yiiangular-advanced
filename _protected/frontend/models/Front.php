<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "front".
 *
 * @property integer $home_id
 * @property integer $section_id
 * @property string $home_title
 * @property string $home_body
 * @property string $section
 */
class Front extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'front';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['section_id'], 'required'],
            [['section_id'], 'integer'],
            [['home_body'], 'string'],
            [['home_title'], 'string', 'max' => 255],
            [['section'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'home_id' => 'Home ID',
            'section_id' => 'Section ID',
            'home_title' => 'Home Title',
            'home_body' => 'Home Body',
            'section' => 'Section',
        ];
    }
}
