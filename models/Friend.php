<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "friends".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property integer $gender
 * @property string $updated_at
 * @property string $created_at
 */
class Friend extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'friends';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'email', 'phone', 'gender'], 'required'],
            [['updated_at', 'created_at'], 'safe'],
            [['name', 'address', 'email'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 64],
            [['gender'], 'string', 'max' => 31],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'address' => 'Address',
            'email' => 'Email',
            'phone' => 'Phone',
            'gender' => 'Gender',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }
}
