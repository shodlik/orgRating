<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tax_payer_reester".
 *
 * @property int $id
 * @property string|null $ns10_name
 * @property string|null $ns11_name
 * @property int|null $tin
 * @property string|null $name
 * @property float|null $total_paid_tax
 * @property float|null $to_be_paid_tax
 * @property float|null $fine
 * @property int|null $is_nds
 */
class TaxPayerReester extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tax_payer_reester';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tin', 'is_nds'], 'integer'],
            [['total_paid_tax', 'to_be_paid_tax', 'fine'], 'number'],
            [['ns10_name', 'ns11_name'], 'string', 'max' => 145],
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
            'ns10_name' => 'ns10 name',
            'ns11_name' => 'Ns11 Name',
            'tin' => 'Tin',
            'name' => 'Name',
            'total_paid_tax' => 'Total Paid Tax',
            'to_be_paid_tax' => 'To Be Paid Tax',
            'fine' => 'Fine',
            'is_nds' => 'Is Nds',
        ];
    }
}
