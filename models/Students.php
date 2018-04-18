<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property integer $student_id
 * @property string $Full Name
 * @property string $email
 * @property string $password
 * @property string $confirm password
 * @property string $faculty
 * @property string $department
 * @property string $courses
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Fullname', 'email', 'password', 'confirm_password', 'faculty', 'department', 'courses'], 'required'],
            [['Fullname', 'email', 'password', 'confirm_password', 'faculty', 'department', 'courses'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'Fullname' => 'Full Name',
            'email' => 'Email',
            'password' => 'Password',
            'confirm_password' => 'Confirm Password',
            'faculty' => 'Faculty',
            'department' => 'Department',
            'courses' => 'Courses',
        ];
    }

    public function getFaculty(){
        return $this->hasMany(Faculty::className(), ['faculty'=>'faculty']);
    }
}
