<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "legal_entities_reester".
 *
 * @property int $id
 * @property string|null $ns10_name
 * @property string|null $ns11_name
 * @property string $name
 * @property int $tin
 * @property float|null $rating
 */
class LegalEntitiesReester extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $tax;
    public $mri_tin;

    public static function tableName()
    {
        return 'legal_entities_reester';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'tin'], 'required'],
            [['tin'], 'integer'],
            [['rating'], 'number'],
            [['ns10_name', 'ns11_name'], 'string', 'max' => 145],
            [['name'], 'string', 'max' => 2545],
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
            'name' => 'Name',
            'tin' => 'Tin',
            'rating' => 'Rating',
        ];
    }
}
