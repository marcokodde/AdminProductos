<?php

/**
 * This is the model class for table "Productos".
 *
 * The followings are the available columns in table 'Productos':
 * @property integer $id_producto
 * @property string $codigo
 * @property string $sku
 * @property string $nombre
 * @property integer $id_marca
 * @property string $descripcion
 * @property integer $stock
 *
 * The followings are the available model relations:
 * @property Marcas $idMarca
 * @property Fotos[] $fotoses
 */
class Productos extends CActiveRecord
{
	private $getProducts;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Productos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_marca, stock', 'numerical', 'integerOnly' => true),
			array('codigo, sku', 'length', 'max' => 10),
			array('nombre, descripcion', 'length', 'max' => 255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_producto, codigo, sku, nombre, id_marca, descripcion, stock', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idMarca' => array(self::BELONGS_TO, 'Marcas', 'id_marca'),
			'fotoses' => array(self::HAS_MANY, 'Fotos', 'id_producto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_producto' => 'Id Producto',
			'codigo' => 'Codigo',
			'sku' => 'Sku',
			'nombre' => 'Nombre',
			'id_marca' => 'Id Marca',
			'descripcion' => 'Descripcion',
			'stock' => 'Stock',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria = new CDbCriteria;

		$criteria->compare('id_producto', $this->id_producto);
		$criteria->compare('codigo', $this->codigo, true);
		$criteria->compare('sku', $this->sku, true);
		$criteria->compare('nombre', $this->nombre, true);
		$criteria->compare('id_marca', $this->id_marca);
		$criteria->compare('descripcion', $this->descripcion, true);
		$criteria->compare('stock', $this->stock);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Productos the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	//Método para conseguir todos los productos
	public function getProducts()
	{
		$this->getProducts = $this->connection->createCommand()
			->select("*")->from('Productos')->queryAll();
		return $this->getProducts;
	}
}
