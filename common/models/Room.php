<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property int $id
 * @property int $room_number
 * @property int $floor_number
 * @property string $type_room
 * @property string $amenities
 * @property int $max_people
 * @property int $state
 *
 * @property Hotel[] $hotels
 */
class Room extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room_number', 'floor_number', 'type_room', 'amenities', 'max_people', 'state'], 'required'],
            [['room_number', 'floor_number', 'max_people', 'state'], 'integer'],
            [['type_room', 'amenities'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'room_number' => Yii::t('app', 'Room Number'),
            'floor_number' => Yii::t('app', 'Floor Number'),
            'type_room' => Yii::t('app', 'Type Room'),
            'amenities' => Yii::t('app', 'Amenities'),
            'max_people' => Yii::t('app', 'Max People'),
            'state' => Yii::t('app', 'State'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHotels()
    {
        return $this->hasMany(Hotel::className(), ['id_room' => 'id']);
    }
}
