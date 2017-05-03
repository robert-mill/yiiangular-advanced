<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "teacher_reg".
 *
 * @property integer $id
 * @property string $type_of_position
 * @property string $core_subject
 * @property string $nationality
 * @property string $prefered_school_type
 * @property integer $prefered_location
 * @property string $current_residence
 * @property string $univsersity_attended
 * @property string $other_university
 * @property integer $other_university_country
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $skype
 * @property string $dob
 * @property string $phone
 * @property string $start_from
 * @property integer $cv
 * @property integer $pic
 * @property integer $vids
 * @property string $dbs
 * @property integer $live
 */
class TeacherReg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher_reg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prefered_location', 'other_university_country', 'cv', 'pic', 'vids', 'live'], 'integer'],
            [['type_of_position', 'nationality', 'current_residence', 'univsersity_attended'], 'string', 'max' => 150],
            [['core_subject'], 'string', 'max' => 20],
            [['prefered_school_type', 'dob'], 'string', 'max' => 100],
            [['other_university', 'first_name', 'last_name', 'email', 'skype'], 'string', 'max' => 200],
            [['phone'], 'string', 'max' => 25],
            [['start_from'], 'string', 'max' => 50],
            [['dbs'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_of_position' => 'Type Of Position',
            'core_subject' => 'Core Subject',
            'nationality' => 'Nationality',
            'prefered_school_type' => 'Prefered School Type',
            'prefered_location' => 'Prefered Location',
            'current_residence' => 'Current Residence',
            'univsersity_attended' => 'Univsersity Attended',
            'other_university' => 'Other University',
            'other_university_country' => 'Other University Country',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'skype' => 'Skype',
            'dob' => 'Dob',
            'phone' => 'Phone',
            'start_from' => 'Start From',
            'cv' => 'Cv',
            'pic' => 'Pic',
            'vids' => 'Vids',
            'dbs' => 'Dbs',
            'live' => 'Live',
        ];
    }
}
