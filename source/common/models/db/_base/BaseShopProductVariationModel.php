<?php

/**
 * This is the model base class for the table "shop_product_variation".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ShopProductVariationModel".
 *
 * Columns in table "shop_product_variation" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property integer $product_id
 * @property integer $specification_id
 * @property integer $position
 * @property string $title
 * @property double $price_adjustion
 *
 */
abstract class BaseShopProductVariationModel extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'shop_product_variation';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ShopProductVariationModel|ShopProductVariationModels', $n);
	}

	public static function representingColumn() {
		return 'title';
	}

	public function rules() {
		return array(
			array('product_id, specification_id, position, title, price_adjustion', 'required'),
			array('product_id, specification_id, position', 'numerical', 'integerOnly'=>true),
			array('price_adjustion', 'numerical'),
			array('title', 'length', 'max'=>255),
			array('id, product_id, specification_id, position, title, price_adjustion', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'product_id' => Yii::t('app', 'Product'),
			'specification_id' => Yii::t('app', 'Specification'),
			'position' => Yii::t('app', 'Position'),
			'title' => Yii::t('app', 'Title'),
			'price_adjustion' => Yii::t('app', 'Price Adjustion'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('product_id', $this->product_id);
		$criteria->compare('specification_id', $this->specification_id);
		$criteria->compare('position', $this->position);
		$criteria->compare('title', $this->title, true);
		$criteria->compare('price_adjustion', $this->price_adjustion);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}