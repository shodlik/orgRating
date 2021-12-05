<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "nds_reester".
 *
 * @property int $id
 * @property int|null $ns10_code
 * @property string|null $ns10_name
 * @property int|null $tin
 * @property string|null $nds_code
 * @property string|null $nds_reg_date
 * @property string|null $status_name
 * @property int|null $status
 * @property string|null $name
 */
class NdsReester extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nds_reester';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ns10_code', 'tin', 'status'], 'integer'],
            [['ns10_name'], 'string', 'max' => 245],
            [['nds_code'], 'string', 'max' => 20],
            [['nds_reg_date'], 'string', 'max' => 50],
            [['status_name'], 'string', 'max' => 145],
            [['name'], 'string', 'max' => 1545],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ns10_code' => 'ns10 code',
            'ns10_name' => 'ns10 name',
            'tin' => 'Tin',
            'nds_code' => 'Nds Code',
            'nds_reg_date' => 'Nds Reg Date',
            'status_name' => 'Status Name',
            'status' => 'Status',
            'name' => 'Name',
        ];
    }
}
