<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "physical_entities".
 *
 * @property int $id
 * @property int|null $tin
 * @property string $pinfl
 * @property string $name
 * @property string|null $activity_name
 * @property string|null $reg_date
 * @property string|null $expiry_date
 * @property string|null $status_name
 */
class PhysicalEntities extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'physical_entities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tin'], 'integer'],
            [['pinfl', 'name'], 'required'],
            [['pinfl'], 'string', 'max' => 14],
            [['name', 'activity_name'], 'string', 'max' => 2545],
            [['reg_date', 'expiry_date'], 'string', 'max' => 45],
            [['status_name'], 'string', 'max' => 245],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tin' => 'Tin',
            'pinfl' => 'Pinfl',
            'name' => 'Name',
            'activity_name' => 'Activity Name',
            'reg_date' => 'Reg Date',
            'expiry_date' => 'Expiry Date',
            'status_name' => 'Status Name',
        ];
    }
}
