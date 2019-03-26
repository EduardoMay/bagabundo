<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "car".
 *
 * @property int $id
 * @property string $model
 * @property string $type_car
 * @property string $color
 * @property string $state
 * @property string $price
 *
 * @property CarRes[] $carRes
 */
class Car extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'car';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['model', 'type_car', 'color', 'state', 'price'], 'required'],
            [['model', 'type_car', 'color', 'state', 'price'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'model' => Yii::t('app', 'Modelo'),
            'type_car' => Yii::t('app', 'Tipo Carro'),
            'color' => Yii::t('app', 'Color'),
            'state' => Yii::t('app', 'Estado'),
            'price' => Yii::t('app', 'Precio'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarRes()
    {
        return $this->hasMany(CarRes::className(), ['id_car' => 'id']);
    }
}
