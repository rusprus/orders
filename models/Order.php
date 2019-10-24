<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use Yii;


/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property double $sum
 * @property string $status
 * @property string $phone
 */
class Order extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    public function getOrderItems()
    {
        return $this->hasMany(OrderItems::className(), ['id'=>'order_id']);
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'phone'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['sum'], 'number'],
            [['status'], 'boolean'],
            [['phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'sum' => 'Sum',
            'status' => 'Status',
            'phone' => 'Phone',
        ];
    }
}
