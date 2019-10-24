<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id_prod
 * @property string $name_prod
 * @property int $count_prod
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_prod', 'count_prod'], 'required'],
            [['count_prod'], 'integer'],
            [['name_prod'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_prod' => 'Id Prod',
            'name_prod' => 'Name Prod',
            'count_prod' => 'Count Prod',
        ];
    }
}
