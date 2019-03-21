<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property int $id
 * @property int $id_hotel
 * @property int $room_number
 * @property int $floor_number
 * @property string $type_room
 * @property string $amenities
 * @property int $max_people
 * @property int $state
 *
 * @property Hotel $hotel
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
            [['id_hotel', 'room_number', 'floor_number', 'max_people', 'state'], 'integer'],
            [['room_number', 'floor_number', 'type_room', 'amenities', 'max_people', 'state'], 'required'],
            [['type_room', 'amenities'], 'string', 'max' => 500],
            [['id_hotel'], 'exist', 'skipOnError' => true, 'targetClass' => Hotel::className(), 'targetAttribute' => ['id_hotel' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_hotel' => Yii::t('app', 'Id Hotel'),
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
    public function getHotel()
    {
        return $this->hasOne(Hotel::className(), ['id' => 'id_hotel']);
    }
}
