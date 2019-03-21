<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hotel".
 *
 * @property int $id
 * @property string $hotel_name
 * @property int $stars
 *
 * @property HotelRes[] $hotelRes
 * @property Room[] $rooms
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
            [['hotel_name', 'stars'], 'required'],
            [['stars'], 'integer'],
            [['hotel_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'hotel_name' => Yii::t('app', 'Hotel Name'),
            'stars' => Yii::t('app', 'Stars'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHotelRes()
    {
        return $this->hasMany(HotelRes::className(), ['id_hotel' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRooms()
    {
        return $this->hasMany(Room::className(), ['id_hotel' => 'id']);
    }
}
