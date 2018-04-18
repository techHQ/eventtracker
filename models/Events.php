<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $date
 * @property string $event_begin
 * @property string $event_end
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'Venue','date', 'event_begin', 'event_end'], 'required'],
            [['description'], 'string'],
            [['date', 'event_begin', 'event_end'], 'safe'],
            [['name','Venue'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'Venue' =>'Venue',
            'date' => 'Date',
            'event_begin' => 'Event Begin',
            'event_end' => 'Event End',
        ];
    }
}
