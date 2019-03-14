<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hotel".
 *
 * @property int $id
 * @property int $id_room
 * @property string $hotel_name
 * @property int $stars
 *
 * @property Room $room
 * @property HotelRes[] $hotelRes
 */
class Hotel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hotel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_room', 'hotel_name', 'stars'], 'required'],
            [['id_room', 'stars'], 'integer'],
            [['hotel_name'], 'string', 'max' => 50],
            [['id_room'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['id_room' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_room' => Yii::t('app', 'Id Room'),
            'hotel_name' => Yii::t('app', 'Hotel Name'),
            'stars' => Yii::t('app', 'Stars'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'id_room']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHotelRes()
    {
        return $this->hasMany(HotelRes::className(), ['id_hotel' => 'id']);
    }
}
