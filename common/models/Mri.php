<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mri".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $tin
 * @property string|null $ns3_name
 */
class Mri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tin'], 'integer'],
            [['name', 'ns3_name'], 'string', 'max' => 2500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'tin' => 'Tin',
            'ns3_name' => 'Ns3 Name',
        ];
    }
}
