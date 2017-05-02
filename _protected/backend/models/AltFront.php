<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "alt_front".
 *
 * @property integer $alt_frontID
 * @property string $alt_frontTitle
 * @property string $alt_fronmtBody
 * @property string $alt_frontimg
 */
class AltFront extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alt_front';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alt_fronmtBody'], 'required'],
            [['alt_fronmtBody'], 'string'],
            [['alt_frontTitle'], 'string', 'max' => 200],
            [['alt_frontimg'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'alt_frontID' => 'Alt Front ID',
            'alt_frontTitle' => 'Alt Front Title',
            'alt_fronmtBody' => 'Alt Fronmt Body',
            'alt_frontimg' => 'Alt Frontimg',
        ];
    }
}
