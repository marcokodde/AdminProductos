<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "productos".
 *
 * @property int $id_marca
 * @property string|null $marca
 * @property Product $product
 */
class Marca extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marcas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_marca', 'stock'], 'integer'],
            [['marca'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_marca' => 'Id Marca',
            'marca' => 'Marca',
        ];
    }

    /**
     * Gets query for [[Productos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Product::class, ['id_producto' => 'id_producto']);
    }

    public function getDropdown()
    {
        return ArrayHelper::map(self::find()->all(), 'id_marca', 'marca');
    }
}
