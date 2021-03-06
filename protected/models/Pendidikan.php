<?php
/**
 * Pendidikan
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
 * This is the model class for table "tbl_pendidikan".
 *
 * The followings are the available columns in table 'tbl_pendidikan':
 * @property integer $pendidikan_id
 * @property integer $status
 * @property integer $pegawai_id
 * @property string $sd_nama
 * @property integer $sd_tahun_mulai
 * @property integer $sd_tahun_akhir
 * @property string $smp_nama
 * @property integer $smp_tahun_mulai
 * @property integer $smp_tahun_akhir
 * @property string $sma_nama
 * @property integer $sma_tahun_mulai
 * @property integer $sma_tahun_akhir
 * @property string $sma_jurusan
 * @property string $sj_nama
 * @property integer $sj_tahun_mulai
 * @property integer $sj_tahun_akhir
 * @property string $sj_jurusan
 * @property string $pc_nama
 * @property integer $pc_tahun_mulai
 * @property integer $pc_tahun_akhir
 * @property string $pc_jurusan
 * @property string $dk_nama
 * @property integer $dk_tahun_mulai
 * @property integer $dk_tahun_akhir
 * @property string $dk_jurusan
 * @property string $creation_date
 * @property integer $creation_id
 * @property string $modified_date
 * @property integer $modified_id
 *
 * The followings are the available model relations:
 * @property TblPegawai $pegawai
 */
class Pendidikan extends CActiveRecord
{
	public $defaultColumns = array();
	
	// Variable Search
	public $pegawai_search;
	public $creation_search;
	public $modified_search;	

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pendidikan the static model class
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
		return 'tbl_pendidikan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pegawai_id, sd_nama, sd_tahun_mulai, sd_tahun_akhir, smp_nama, smp_tahun_mulai, smp_tahun_akhir, sma_nama, sma_tahun_mulai, sma_tahun_akhir, sma_jurusan, sj_nama, sj_tahun_mulai, sj_tahun_akhir, sj_jurusan, pc_nama, pc_tahun_mulai, pc_tahun_akhir, pc_jurusan, dk_nama, dk_tahun_mulai, dk_tahun_akhir, dk_jurusan', 'required'),
			array('status, pegawai_id, sd_tahun_mulai, sd_tahun_akhir, smp_tahun_mulai, smp_tahun_akhir, sma_tahun_mulai, sma_tahun_akhir, sj_tahun_mulai, sj_tahun_akhir, pc_tahun_mulai, pc_tahun_akhir, dk_tahun_mulai, dk_tahun_akhir, creation_id, modified_id', 'numerical', 'integerOnly'=>true),
			array('sd_nama, dk_nama', 'length', 'max'=>11),
			array('smp_nama, sma_nama, pc_nama', 'length', 'max'=>30),
			array('sma_jurusan, sj_nama, sj_jurusan, pc_jurusan, dk_jurusan', 'length', 'max'=>25),
			array('', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pendidikan_id, status, pegawai_id, sd_nama, sd_tahun_mulai, sd_tahun_akhir, smp_nama, smp_tahun_mulai, smp_tahun_akhir, sma_nama, sma_tahun_mulai, sma_tahun_akhir, sma_jurusan, sj_nama, sj_tahun_mulai, sj_tahun_akhir, sj_jurusan, pc_nama, pc_tahun_mulai, pc_tahun_akhir, pc_jurusan, dk_nama, dk_tahun_mulai, dk_tahun_akhir, dk_jurusan, creation_date, creation_id, modified_date, modified_id,
				pegawai_search, creation_search, modified_search', 'safe', 'on'=>'search'),
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
			'pegawai' => array(self::BELONGS_TO, 'Pegawai', 'pegawai_id'),
			'creation' => array(self::BELONGS_TO, 'User', 'creation_id'),
			'modified' => array(self::BELONGS_TO, 'User', 'modified_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pendidikan_id' => Yii::t('attribute', 'Pendidikan'),
			'status' => Yii::t('attribute', 'Status'),
			'pegawai_id' => Yii::t('attribute', 'Pegawai'),
			'sd_nama' => Yii::t('attribute', 'Sd Nama'),
			'sd_tahun_mulai' => Yii::t('attribute', 'Sd Tahun Mulai'),
			'sd_tahun_akhir' => Yii::t('attribute', 'Sd Tahun Akhir'),
			'smp_nama' => Yii::t('attribute', 'Smp Nama'),
			'smp_tahun_mulai' => Yii::t('attribute', 'Smp Tahun Mulai'),
			'smp_tahun_akhir' => Yii::t('attribute', 'Smp Tahun Akhir'),
			'sma_nama' => Yii::t('attribute', 'Sma Nama'),
			'sma_tahun_mulai' => Yii::t('attribute', 'Sma Tahun Mulai'),
			'sma_tahun_akhir' => Yii::t('attribute', 'Sma Tahun Akhir'),
			'sma_jurusan' => Yii::t('attribute', 'Sma Jurusan'),
			'sj_nama' => Yii::t('attribute', 'Sj Nama'),
			'sj_tahun_mulai' => Yii::t('attribute', 'Sj Tahun Mulai'),
			'sj_tahun_akhir' => Yii::t('attribute', 'Sj Tahun Akhir'),
			'sj_jurusan' => Yii::t('attribute', 'Sj Jurusan'),
			'pc_nama' => Yii::t('attribute', 'Pc Nama'),
			'pc_tahun_mulai' => Yii::t('attribute', 'Pc Tahun Mulai'),
			'pc_tahun_akhir' => Yii::t('attribute', 'Pc Tahun Akhir'),
			'pc_jurusan' => Yii::t('attribute', 'Pc Jurusan'),
			'dk_nama' => Yii::t('attribute', 'Dk Nama'),
			'dk_tahun_mulai' => Yii::t('attribute', 'Dk Tahun Mulai'),
			'dk_tahun_akhir' => Yii::t('attribute', 'Dk Tahun Akhir'),
			'dk_jurusan' => Yii::t('attribute', 'Dk Jurusan'),
			'creation_date' => Yii::t('attribute', 'Creation Date'),
			'creation_id' => Yii::t('attribute', 'Creation'),
			'modified_date' => Yii::t('attribute', 'Modified Date'),
			'modified_id' => Yii::t('attribute', 'Modified'),
			'pegawai_search' => Yii::t('attribute', 'Pegawai'),
			'creation_search' => Yii::t('attribute', 'Creation'),
			'modified_search' => Yii::t('attribute', 'Modified'),
		);
		/*
			'Pendidikan' => 'Pendidikan',
			'Status' => 'Status',
			'Pegawai' => 'Pegawai',
			'Sd Nama' => 'Sd Nama',
			'Sd Tahun Mulai' => 'Sd Tahun Mulai',
			'Sd Tahun Akhir' => 'Sd Tahun Akhir',
			'Smp Nama' => 'Smp Nama',
			'Smp Tahun Mulai' => 'Smp Tahun Mulai',
			'Smp Tahun Akhir' => 'Smp Tahun Akhir',
			'Sma Nama' => 'Sma Nama',
			'Sma Tahun Mulai' => 'Sma Tahun Mulai',
			'Sma Tahun Akhir' => 'Sma Tahun Akhir',
			'Sma Jurusan' => 'Sma Jurusan',
			'Sj Nama' => 'Sj Nama',
			'Sj Tahun Mulai' => 'Sj Tahun Mulai',
			'Sj Tahun Akhir' => 'Sj Tahun Akhir',
			'Sj Jurusan' => 'Sj Jurusan',
			'Pc Nama' => 'Pc Nama',
			'Pc Tahun Mulai' => 'Pc Tahun Mulai',
			'Pc Tahun Akhir' => 'Pc Tahun Akhir',
			'Pc Jurusan' => 'Pc Jurusan',
			'Dk Nama' => 'Dk Nama',
			'Dk Tahun Mulai' => 'Dk Tahun Mulai',
			'Dk Tahun Akhir' => 'Dk Tahun Akhir',
			'Dk Jurusan' => 'Dk Jurusan',
		
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
		
		// Custom Search
		$criteria->with = array(
			'pegawai' => array(
				'alias'=>'pegawai',
				'select'=>'nama'
			),
			'creation' => array(
				'alias'=>'creation',
				'select'=>'displayname'
			),
			'modified' => array(
				'alias'=>'modified',
				'select'=>'displayname'
			),
		);

		$criteria->compare('t.pendidikan_id',$this->pendidikan_id);
		$criteria->compare('t.status',$this->status);
		if(isset($_GET['pegawai']))
			$criteria->compare('t.pegawai_id',$_GET['pegawai']);
		else
			$criteria->compare('t.pegawai_id',$this->pegawai_id);
		$criteria->compare('t.sd_nama',strtolower($this->sd_nama),true);
		$criteria->compare('t.sd_tahun_mulai',$this->sd_tahun_mulai);
		$criteria->compare('t.sd_tahun_akhir',$this->sd_tahun_akhir);
		$criteria->compare('t.smp_nama',strtolower($this->smp_nama),true);
		$criteria->compare('t.smp_tahun_mulai',$this->smp_tahun_mulai);
		$criteria->compare('t.smp_tahun_akhir',$this->smp_tahun_akhir);
		$criteria->compare('t.sma_nama',strtolower($this->sma_nama),true);
		$criteria->compare('t.sma_tahun_mulai',$this->sma_tahun_mulai);
		$criteria->compare('t.sma_tahun_akhir',$this->sma_tahun_akhir);
		$criteria->compare('t.sma_jurusan',strtolower($this->sma_jurusan),true);
		$criteria->compare('t.sj_nama',strtolower($this->sj_nama),true);
		$criteria->compare('t.sj_tahun_mulai',$this->sj_tahun_mulai);
		$criteria->compare('t.sj_tahun_akhir',$this->sj_tahun_akhir);
		$criteria->compare('t.sj_jurusan',strtolower($this->sj_jurusan),true);
		$criteria->compare('t.pc_nama',strtolower($this->pc_nama),true);
		$criteria->compare('t.pc_tahun_mulai',$this->pc_tahun_mulai);
		$criteria->compare('t.pc_tahun_akhir',$this->pc_tahun_akhir);
		$criteria->compare('t.pc_jurusan',strtolower($this->pc_jurusan),true);
		$criteria->compare('t.dk_nama',strtolower($this->dk_nama),true);
		$criteria->compare('t.dk_tahun_mulai',$this->dk_tahun_mulai);
		$criteria->compare('t.dk_tahun_akhir',$this->dk_tahun_akhir);
		$criteria->compare('t.dk_jurusan',strtolower($this->dk_jurusan),true);
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
		
		$criteria->compare('pegawai.nama',strtolower($this->pegawai_search), true);
		$criteria->compare('creation.displayname',strtolower($this->creation_search), true);
		$criteria->compare('modified.displayname',strtolower($this->modified_search), true);

		if(!isset($_GET['Pendidikan_sort']))
			$criteria->order = 't.pendidikan_id DESC';

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
			//$this->defaultColumns[] = 'pendidikan_id';
			$this->defaultColumns[] = 'status';
			$this->defaultColumns[] = 'pegawai_id';
			$this->defaultColumns[] = 'sd_nama';
			$this->defaultColumns[] = 'sd_tahun_mulai';
			$this->defaultColumns[] = 'sd_tahun_akhir';
			$this->defaultColumns[] = 'smp_nama';
			$this->defaultColumns[] = 'smp_tahun_mulai';
			$this->defaultColumns[] = 'smp_tahun_akhir';
			$this->defaultColumns[] = 'sma_nama';
			$this->defaultColumns[] = 'sma_tahun_mulai';
			$this->defaultColumns[] = 'sma_tahun_akhir';
			$this->defaultColumns[] = 'sma_jurusan';
			$this->defaultColumns[] = 'sj_nama';
			$this->defaultColumns[] = 'sj_tahun_mulai';
			$this->defaultColumns[] = 'sj_tahun_akhir';
			$this->defaultColumns[] = 'sj_jurusan';
			$this->defaultColumns[] = 'pc_nama';
			$this->defaultColumns[] = 'pc_tahun_mulai';
			$this->defaultColumns[] = 'pc_tahun_akhir';
			$this->defaultColumns[] = 'pc_jurusan';
			$this->defaultColumns[] = 'dk_nama';
			$this->defaultColumns[] = 'dk_tahun_mulai';
			$this->defaultColumns[] = 'dk_tahun_akhir';
			$this->defaultColumns[] = 'dk_jurusan';
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
			$this->defaultColumns[] = array(
				'name' => 'pegawai_id',
				'value' => '$data->pegawai_id != null ? $data->pegawai->nama : \'\'',
			);
			$this->defaultColumns[] = 'sd_nama';
			$this->defaultColumns[] = 'sd_tahun_mulai';
			$this->defaultColumns[] = 'sd_tahun_akhir';
			$this->defaultColumns[] = 'smp_nama';
			$this->defaultColumns[] = 'smp_tahun_mulai';
			$this->defaultColumns[] = 'smp_tahun_akhir';
			$this->defaultColumns[] = 'sma_nama';
			$this->defaultColumns[] = 'sma_tahun_mulai';
			$this->defaultColumns[] = 'sma_tahun_akhir';
			$this->defaultColumns[] = 'sma_jurusan';
			$this->defaultColumns[] = 'sj_nama';
			$this->defaultColumns[] = 'sj_tahun_mulai';
			$this->defaultColumns[] = 'sj_tahun_akhir';
			$this->defaultColumns[] = 'sj_jurusan';
			$this->defaultColumns[] = 'pc_nama';
			$this->defaultColumns[] = 'pc_tahun_mulai';
			$this->defaultColumns[] = 'pc_tahun_akhir';
			$this->defaultColumns[] = 'pc_jurusan';
			$this->defaultColumns[] = 'dk_nama';
			$this->defaultColumns[] = 'dk_tahun_mulai';
			$this->defaultColumns[] = 'dk_tahun_akhir';
			$this->defaultColumns[] = 'dk_jurusan';
			/*
			$this->defaultColumns[] = array(
				'name' => 'creation_search',
				'value' => '$data->creation->displayname',
			);
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
			*/
			if(!isset($_GET['type'])) {
				$this->defaultColumns[] = array(
					'name' => 'status',
					'value' => 'Utility::getPublish(Yii::app()->controller->createUrl("publish",array("id"=>$data->pendidikan_id)), $data->status, 1)',
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
	protected function beforeValidate() {
		if(parent::beforeValidate()) {	
			if($this->isNewRecord)
				$this->creation_id = Yii::app()->user->id;			
			else
				$this->modified_id = Yii::app()->user->id;
		}
		return true;
	}

}