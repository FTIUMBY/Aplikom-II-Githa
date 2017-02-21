<?php
/**
 * Ibu
 * version: 0.0.1
 *
 * This is the template for generating the model class of a specified table.
 * - $this: the ModelCode object
 * - $tableName: the table name for this class (prefix is already removed if necessary)
 * - $modelClass: the model class name
 * - $columns: list of table columns (name=>CDbColumnSchema)
 * - $labels: list of attribute labels (name=>label)
 * - $rules: list of validation rules
 * - $relations: list of relations (name=>relation declaration)
 *
 * --------------------------------------------------------------------------------------
 *
 * This is the model class for table "tbl_ibu".
 *
 * The followings are the available columns in table 'tbl_ibu':
 * @property integer $ibu_id
 * @property integer $status
 * @property integer $pegawai_id
 * @property integer $pekerjaan_id
 * @property integer $agama_id
 * @property string $nama_ibu
 * @property string $kewarganegaraan_i
 * @property string $tingkat_pendidikan_i
 * @property string $alamat_i
 * @property string $telepon_i
 * @property integer $penghasilan_i
 * @property string $ttl_i
 * @property string $creation_date
 * @property integer $creation_id
 * @property string $modified_date
 * @property integer $modified_id
 *
 * The followings are the available model relations:
 * @property TblPekerjaan $pekerjaan
 * @property TblAgama $agama
 * @property TblPegawai $pegawai
 */
class Ibu extends CActiveRecord
{
	public $defaultColumns = array();

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ibu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_ibu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pekerjaan_id, agama_id, nama_ibu, kewarganegaraan_i, tingkat_pendidikan_i, alamat_i, telepon_i, penghasilan_i, ttl_i, creation_date, creation_id, modified_id', 'required'),
			array('status, pegawai_id, pekerjaan_id, agama_id, penghasilan_i, creation_id, modified_id', 'numerical', 'integerOnly'=>true),
			array('nama_ibu, ttl_i', 'length', 'max'=>50),
			array('kewarganegaraan_i', 'length', 'max'=>3),
			array('tingkat_pendidikan_i', 'length', 'max'=>7),
			array('alamat_i', 'length', 'max'=>150),
			array('telepon_i', 'length', 'max'=>12),
			array('modified_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ibu_id, status, pegawai_id, pekerjaan_id, agama_id, nama_ibu, kewarganegaraan_i, tingkat_pendidikan_i, alamat_i, telepon_i, penghasilan_i, ttl_i, creation_date, creation_id, modified_date, modified_id', 'safe', 'on'=>'search'),
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
			'pekerjaan_relation' => array(self::BELONGS_TO, 'TblPekerjaan', 'pekerjaan_id'),
			'agama_relation' => array(self::BELONGS_TO, 'TblAgama', 'agama_id'),
			'pegawai_relation' => array(self::BELONGS_TO, 'TblPegawai', 'pegawai_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ibu_id' => Yii::t('attribute', 'Ibu'),
			'status' => Yii::t('attribute', 'Status'),
			'pegawai_id' => Yii::t('attribute', 'Pegawai'),
			'pekerjaan_id' => Yii::t('attribute', 'Pekerjaan'),
			'agama_id' => Yii::t('attribute', 'Agama'),
			'nama_ibu' => Yii::t('attribute', 'Nama Ibu'),
			'kewarganegaraan_i' => Yii::t('attribute', 'Kewarganegaraan I'),
			'tingkat_pendidikan_i' => Yii::t('attribute', 'Tingkat Pendidikan I'),
			'alamat_i' => Yii::t('attribute', 'Alamat I'),
			'telepon_i' => Yii::t('attribute', 'Telepon I'),
			'penghasilan_i' => Yii::t('attribute', 'Penghasilan I'),
			'ttl_i' => Yii::t('attribute', 'Ttl I'),
			'creation_date' => Yii::t('attribute', 'Creation Date'),
			'creation_id' => Yii::t('attribute', 'Creation'),
			'modified_date' => Yii::t('attribute', 'Modified Date'),
			'modified_id' => Yii::t('attribute', 'Modified'),
		);
		/*
			'Ibu' => 'Ibu',
			'Status' => 'Status',
			'Pegawai' => 'Pegawai',
			'Pekerjaan' => 'Pekerjaan',
			'Agama' => 'Agama',
			'Nama Ibu' => 'Nama Ibu',
			'Kewarganegaraan I' => 'Kewarganegaraan I',
			'Tingkat Pendidikan I' => 'Tingkat Pendidikan I',
			'Alamat I' => 'Alamat I',
			'Telepon I' => 'Telepon I',
			'Penghasilan I' => 'Penghasilan I',
			'Ttl I' => 'Ttl I',
			'Creation Date' => 'Creation Date',
			'Creation' => 'Creation',
			'Modified Date' => 'Modified Date',
			'Modified' => 'Modified',
		
		*/
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

		$criteria=new CDbCriteria;

		$criteria->compare('t.ibu_id',$this->ibu_id);
		$criteria->compare('t.status',$this->status);
		if(isset($_GET['pegawai']))
			$criteria->compare('t.pegawai_id',$_GET['pegawai']);
		else
			$criteria->compare('t.pegawai_id',$this->pegawai_id);
		if(isset($_GET['pekerjaan']))
			$criteria->compare('t.pekerjaan_id',$_GET['pekerjaan']);
		else
			$criteria->compare('t.pekerjaan_id',$this->pekerjaan_id);
		if(isset($_GET['agama']))
			$criteria->compare('t.agama_id',$_GET['agama']);
		else
			$criteria->compare('t.agama_id',$this->agama_id);
		$criteria->compare('t.nama_ibu',strtolower($this->nama_ibu),true);
		$criteria->compare('t.kewarganegaraan_i',strtolower($this->kewarganegaraan_i),true);
		$criteria->compare('t.tingkat_pendidikan_i',strtolower($this->tingkat_pendidikan_i),true);
		$criteria->compare('t.alamat_i',strtolower($this->alamat_i),true);
		$criteria->compare('t.telepon_i',strtolower($this->telepon_i),true);
		$criteria->compare('t.penghasilan_i',$this->penghasilan_i);
		$criteria->compare('t.ttl_i',strtolower($this->ttl_i),true);
		if($this->creation_date != null && !in_array($this->creation_date, array('0000-00-00 00:00:00', '0000-00-00')))
			$criteria->compare('date(t.creation_date)',date('Y-m-d', strtotime($this->creation_date)));
		if(isset($_GET['creation']))
			$criteria->compare('t.creation_id',$_GET['creation']);
		else
			$criteria->compare('t.creation_id',$this->creation_id);
		if($this->modified_date != null && !in_array($this->modified_date, array('0000-00-00 00:00:00', '0000-00-00')))
			$criteria->compare('date(t.modified_date)',date('Y-m-d', strtotime($this->modified_date)));
		if(isset($_GET['modified']))
			$criteria->compare('t.modified_id',$_GET['modified']);
		else
			$criteria->compare('t.modified_id',$this->modified_id);

		if(!isset($_GET['Ibu_sort']))
			$criteria->order = 't.ibu_id DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
				'pageSize'=>30,
			),
		));
	}


	/**
	 * Get column for CGrid View
	 */
	public function getGridColumn($columns=null) {
		if($columns !== null) {
			foreach($columns as $val) {
				/*
				if(trim($val) == 'enabled') {
					$this->defaultColumns[] = array(
						'name'  => 'enabled',
						'value' => '$data->enabled == 1? "Ya": "Tidak"',
					);
				}
				*/
				$this->defaultColumns[] = $val;
			}
		} else {
			//$this->defaultColumns[] = 'ibu_id';
			$this->defaultColumns[] = 'status';
			$this->defaultColumns[] = 'pegawai_id';
			$this->defaultColumns[] = 'pekerjaan_id';
			$this->defaultColumns[] = 'agama_id';
			$this->defaultColumns[] = 'nama_ibu';
			$this->defaultColumns[] = 'kewarganegaraan_i';
			$this->defaultColumns[] = 'tingkat_pendidikan_i';
			$this->defaultColumns[] = 'alamat_i';
			$this->defaultColumns[] = 'telepon_i';
			$this->defaultColumns[] = 'penghasilan_i';
			$this->defaultColumns[] = 'ttl_i';
			$this->defaultColumns[] = 'creation_date';
			$this->defaultColumns[] = 'creation_id';
			$this->defaultColumns[] = 'modified_date';
			$this->defaultColumns[] = 'modified_id';
		}

		return $this->defaultColumns;
	}

	/**
	 * Set default columns to display
	 */
	protected function afterConstruct() {
		if(count($this->defaultColumns) == 0) {
			/*
			$this->defaultColumns[] = array(
				'class' => 'CCheckBoxColumn',
				'name' => 'id',
				'selectableRows' => 2,
				'checkBoxHtmlOptions' => array('name' => 'trash_id[]')
			);
			*/
			$this->defaultColumns[] = array(
				'header' => 'No',
				'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
			);
			if(!isset($_GET['type'])) {
				$this->defaultColumns[] = array(
					'name' => 'status',
					'value' => 'Utility::getPublish(Yii::app()->controller->createUrl("status",array("id"=>$data->ibu_id)), $data->status, 1)',
					'htmlOptions' => array(
						'class' => 'center',
					),
					'filter'=>array(
						1=>Yii::t('phrase', 'Yes'),
						0=>Yii::t('phrase', 'No'),
					),
					'type' => 'raw',
				);
			}
			$this->defaultColumns[] = 'pegawai_id';
			$this->defaultColumns[] = 'pekerjaan_id';
			$this->defaultColumns[] = 'agama_id';
			$this->defaultColumns[] = 'nama_ibu';
			$this->defaultColumns[] = 'kewarganegaraan_i';
			$this->defaultColumns[] = 'tingkat_pendidikan_i';
			$this->defaultColumns[] = 'alamat_i';
			$this->defaultColumns[] = 'telepon_i';
			$this->defaultColumns[] = 'penghasilan_i';
			$this->defaultColumns[] = 'ttl_i';
			$this->defaultColumns[] = array(
				'name' => 'creation_date',
				'value' => 'Utility::dateFormat($data->creation_date)',
				'htmlOptions' => array(
					'class' => 'center',
				),
				'filter' => Yii::app()->controller->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$this,
					'attribute'=>'creation_date',
					'language' => 'ja',
					'i18nScriptFile' => 'jquery.ui.datepicker-en.js',
					//'mode'=>'datetime',
					'htmlOptions' => array(
						'id' => 'creation_date_filter',
					),
					'options'=>array(
						'showOn' => 'focus',
						'dateFormat' => 'dd-mm-yy',
						'showOtherMonths' => true,
						'selectOtherMonths' => true,
						'changeMonth' => true,
						'changeYear' => true,
						'showButtonPanel' => true,
					),
				), true),
			);
			$this->defaultColumns[] = 'creation_id';
			$this->defaultColumns[] = array(
				'name' => 'modified_date',
				'value' => 'Utility::dateFormat($data->modified_date)',
				'htmlOptions' => array(
					'class' => 'center',
				),
				'filter' => Yii::app()->controller->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$this,
					'attribute'=>'modified_date',
					'language' => 'ja',
					'i18nScriptFile' => 'jquery.ui.datepicker-en.js',
					//'mode'=>'datetime',
					'htmlOptions' => array(
						'id' => 'modified_date_filter',
					),
					'options'=>array(
						'showOn' => 'focus',
						'dateFormat' => 'dd-mm-yy',
						'showOtherMonths' => true,
						'selectOtherMonths' => true,
						'changeMonth' => true,
						'changeYear' => true,
						'showButtonPanel' => true,
					),
				), true),
			);
			$this->defaultColumns[] = 'modified_id';
		}
		parent::afterConstruct();
	}

	/**
	 * User get information
	 */
	public static function getInfo($id, $column=null)
	{
		if($column != null) {
			$model = self::model()->findByPk($id,array(
				'select' => $column
			));
			return $model->$column;
			
		} else {
			$model = self::model()->findByPk($id);
			return $model;			
		}
	}

	/**
	 * before validate attributes
	 */
	/*
	protected function beforeValidate() {
		if(parent::beforeValidate()) {
			// Create action
		}
		return true;
	}
	*/

	/**
	 * after validate attributes
	 */
	/*
	protected function afterValidate()
	{
		parent::afterValidate();
			// Create action
		return true;
	}
	*/
	
	/**
	 * before save attributes
	 */
	/*
	protected function beforeSave() {
		if(parent::beforeSave()) {
		}
		return true;	
	}
	*/
	
	/**
	 * After save attributes
	 */
	/*
	protected function afterSave() {
		parent::afterSave();
		// Create action
	}
	*/

	/**
	 * Before delete attributes
	 */
	/*
	protected function beforeDelete() {
		if(parent::beforeDelete()) {
			// Create action
		}
		return true;
	}
	*/

	/**
	 * After delete attributes
	 */
	/*
	protected function afterDelete() {
		parent::afterDelete();
		// Create action
	}
	*/

}