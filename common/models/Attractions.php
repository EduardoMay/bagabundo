<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "attractions".
 *
 * @property int $id
 * @property string $type_attraction
 * @property int $num_people
 * @property int $price
 *
 * @property AttraccRes[] $attraccRes
 */
class Attractions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'attractions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_attraction', 'num_people', 'price'], 'required'],
            [['num_people', 'price'], 'integer'],
            [['type_attraction'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'type_attraction' => Yii::t('app', 'Type Attraction'),
            'num_people' => Yii::t('app', 'Num People'),
            'price' => Yii::t('app', 'Price'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttraccRes()
    {
        return $this->hasMany(AttraccRes::className(), ['id_attracc' => 'id']);
    }
}
