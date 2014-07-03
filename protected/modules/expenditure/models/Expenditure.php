<?php

/**
 * This is the model class for table "expenditure".
 *
 * The followings are the available columns in table 'expenditure':
 * @property string $id
 * @property string $user_id
 * @property string $item_name
 * @property string $description
 * @property string $price
 * @property string $created
 * @property string $modified
 * @property string $purchase_date
 */
class Expenditure extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'expenditure';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_id, item_name, price, created, modified', 'required'),
            array('user_id, price, created, modified, purchase_date', 'length', 'max' => 10),
            array('item_name', 'length', 'max' => 255),
            array('description', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, user_id, item_name, description, price, created, modified, purchase_date', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'user_id' => 'User',
            'item_name' => 'Item Name',
            'description' => 'Description',
            'price' => 'Price',
            'created' => 'Created',
            'modified' => 'Modified',
            'purchase_date' => 'Purchase Date',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('user_id', $this->user_id, true);
        $criteria->compare('item_name', $this->item_name, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('price', $this->price, true);
        $criteria->compare('created', $this->created, true);
        $criteria->compare('modified', $this->modified, true);
        $criteria->compare('purchase_date', $this->purchase_date, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Expenditure the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
