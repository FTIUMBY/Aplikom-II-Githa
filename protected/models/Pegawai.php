<?php
/**
 * Pegawai
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
 * This is the model class for table "tbl_pegawai".
 *
 * The followings are the available columns in table 'tbl_pegawai':
 * @property integer $pegawai_id
 * @property string $NIP
 * @property string $NPSN
 * @property string $NIK
 * @property integer $status
 * @property integer $tahun_ajar_id
 * @property integer $sekolah_id
 * @property integer $agama_id
 * @property string $nama
 * @property string $gender
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $alamat
 * @property integer $jumlah_saudara
 * @property integer $anak_ke
 * @property string $tahun_masuk
 * @property string $gambar
 * @property string $panggilan
 * @property string $kewarganegaraan_pegawai
 * @property integer $saudara_tiri
 * @property integer $saudara_angkat
 * @property string $bahasa
 * @property string $tinggal_dengan
 * @property string $jarak
 * @property string $transportasi
 * @property string $gol_darah
 * @property string $penyakit
 * @property string $kelainan_jasmani
 * @property string $tinggi
 * @property string $berat
 * @property string $no_telp
 *
 * The followings are the available model relations:
 * @property TblIbu[] $tblIbus
 * @property TblNonformal[] $tblNonformals
 * @property TblAgama $agama
 * @property TblTahunAjar $tahunAjar
 * @property TblAsalSekolah $sekolah
 * @property TblPendidikan[] $tblPendidikans
 */
class Pegawai extends CActiveRecord
{
	public $defaultColumns = array();

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pegawai the static model class
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
		return 'tbl_pegawai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NIP, NPSN, NIK, tahun_ajar_id, sekolah_id, agama_id, nama, gender, tempat_lahir, tgl_lahir, alamat, jumlah_saudara, anak_ke, tahun_masuk, gambar, panggilan, kewarganegaraan_pegawai, saudara_tiri, saudara_angkat, bahasa, tinggal_dengan, jarak, transportasi, gol_darah, penyakit, kelainan_jasmani, tinggi, berat, no_telp', 'required'),
			array('status, tahun_ajar_id, sekolah_id, agama_id, jumlah_saudara, anak_ke, saudara_tiri, saudara_angkat', 'numerical', 'integerOnly'=>true),
			array('NIP', 'length', 'max'=>5),
			array('NPSN', 'length', 'max'=>10),
			array('NIK', 'length', 'max'=>21),
			array('nama, tempat_lahir, tinggal_dengan', 'length', 'max'=>64),
			array('gender, gol_darah', 'length', 'max'=>1),
			array('tahun_masuk', 'length', 'max'=>9),
			array('panggilan, transportasi', 'length', 'max'=>32),
			array('kewarganegaraan_pegawai, tinggi, berat', 'length', 'max'=>3),
			array('jarak', 'length', 'max'=>2),
			array('no_telp', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pegawai_id, NIP, NPSN, NIK, status, tahun_ajar_id, sekolah_id, agama_id, nama, gender, tempat_lahir, tgl_lahir, alamat, jumlah_saudara, anak_ke, tahun_masuk, gambar, panggilan, kewarganegaraan_pegawai, saudara_tiri, saudara_angkat, bahasa, tinggal_dengan, jarak, transportasi, gol_darah, penyakit, kelainan_jasmani, tinggi, berat, no_telp', 'safe', 'on'=>'search'),
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
			'tblIbus_relation' => array(self::HAS_MANY, 'TblIbu', 'pegawai_id'),
			'tblNonformals_relation' => array(self::HAS_MANY, 'TblNonformal', 'pegawai_id'),
			'agama_relation' => array(self::BELONGS_TO, 'TblAgama', 'agama_id'),
			'tahunAjar_relation' => array(self::BELONGS_TO, 'TblTahunAjar', 'tahun_ajar_id'),
			'sekolah_relation' => array(self::BELONGS_TO, 'TblAsalSekolah', 'sekolah_id'),
			'tblPendidikans_relation' => array(self::HAS_MANY, 'TblPendidikan', 'pegawai_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pegawai_id' => Yii::t('attribute', 'Pegawai'),
			'NIP' => Yii::t('attribute', 'Nip'),
			'NPSN' => Yii::t('attribute', 'Npsn'),
			'NIK' => Yii::t('attribute', 'Nik'),
			'status' => Yii::t('attribute', 'Status'),
			'tahun_ajar_id' => Yii::t('attribute', 'Tahun Ajar'),
			'sekolah_id' => Yii::t('attribute', 'Sekolah'),
			'agama_id' => Yii::t('attribute', 'Agama'),
			'nama' => Yii::t('attribute', 'Nama'),
			'gender' => Yii::t('attribute', 'Gender'),
			'tempat_lahir' => Yii::t('attribute', 'Tempat Lahir'),
			'tgl_lahir' => Yii::t('attribute', 'Tgl Lahir'),
			'alamat' => Yii::t('attribute', 'Alamat'),
			'jumlah_saudara' => Yii::t('attribute', 'Jumlah Saudara'),
			'anak_ke' => Yii::t('attribute', 'Anak Ke'),
			'tahun_masuk' => Yii::t('attribute', 'Tahun Masuk'),
			'gambar' => Yii::t('attribute', 'Gambar'),
			'panggilan' => Yii::t('attribute', 'Panggilan'),
			'kewarganegaraan_pegawai' => Yii::t('attribute', 'Kewarganegaraan Pegawai'),
			'saudara_tiri' => Yii::t('attribute', 'Saudara Tiri'),
			'saudara_angkat' => Yii::t('attribute', 'Saudara Angkat'),
			'bahasa' => Yii::t('attribute', 'Bahasa'),
			'tinggal_dengan' => Yii::t('attribute', 'Tinggal Dengan'),
			'jarak' => Yii::t('attribute', 'Jarak'),
			'transportasi' => Yii::t('attribute', 'Transportasi'),
			'gol_darah' => Yii::t('attribute', 'Gol Darah'),
			'penyakit' => Yii::t('attribute', 'Penyakit'),
			'kelainan_jasmani' => Yii::t('attribute', 'Kelainan Jasmani'),
			'tinggi' => Yii::t('attribute', 'Tinggi'),
			'berat' => Yii::t('attribute', 'Berat'),
			'no_telp' => Yii::t('attribute', 'No Telp'),
		);
		/*
			'Pegawai' => 'Pegawai',
			'Nip' => 'Nip',
			'Npsn' => 'Npsn',
			'Nik' => 'Nik',
			'Status' => 'Status',
			'Tahun Ajar' => 'Tahun Ajar',
			'Sekolah' => 'Sekolah',
			'Agama' => 'Agama',
			'Nama' => 'Nama',
			'Gender' => 'Gender',
			'Tempat Lahir' => 'Tempat Lahir',
			'Tgl Lahir' => 'Tgl Lahir',
			'Alamat' => 'Alamat',
			'Jumlah Saudara' => 'Jumlah Saudara',
			'Anak Ke' => 'Anak Ke',
			'Tahun Masuk' => 'Tahun Masuk',
			'Gambar' => 'Gambar',
			'Panggilan' => 'Panggilan',
			'Kewarganegaraan Pegawai' => 'Kewarganegaraan Pegawai',
			'Saudara Tiri' => 'Saudara Tiri',
			'Saudara Angkat' => 'Saudara Angkat',
			'Bahasa' => 'Bahasa',
			'Tinggal Dengan' => 'Tinggal Dengan',
			'Jarak' => 'Jarak',
			'Transportasi' => 'Transportasi',
			'Gol Darah' => 'Gol Darah',
			'Penyakit' => 'Penyakit',
			'Kelainan Jasmani' => 'Kelainan Jasmani',
			'Tinggi' => 'Tinggi',
			'Berat' => 'Berat',
			'No Telp' => 'No Telp',
		
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

		$criteria->compare('t.pegawai_id',$this->pegawai_id);
		$criteria->compare('t.NIP',strtolower($this->NIP),true);
		$criteria->compare('t.NPSN',strtolower($this->NPSN),true);
		$criteria->compare('t.NIK',strtolower($this->NIK),true);
		$criteria->compare('t.status',$this->status);
		if(isset($_GET['tahun']))
			$criteria->compare('t.tahun_ajar_id',$_GET['tahun']);
		else
			$criteria->compare('t.tahun_ajar_id',$this->tahun_ajar_id);
		if(isset($_GET['sekolah']))
			$criteria->compare('t.sekolah_id',$_GET['sekolah']);
		else
			$criteria->compare('t.sekolah_id',$this->sekolah_id);
		if(isset($_GET['agama']))
			$criteria->compare('t.agama_id',$_GET['agama']);
		else
			$criteria->compare('t.agama_id',$this->agama_id);
		$criteria->compare('t.nama',strtolower($this->nama),true);
		$criteria->compare('t.gender',strtolower($this->gender),true);
		$criteria->compare('t.tempat_lahir',strtolower($this->tempat_lahir),true);
		if($this->tgl_lahir != null && !in_array($this->tgl_lahir, array('0000-00-00 00:00:00', '0000-00-00')))
			$criteria->compare('date(t.tgl_lahir)',date('Y-m-d', strtotime($this->tgl_lahir)));
		$criteria->compare('t.alamat',strtolower($this->alamat),true);
		$criteria->compare('t.jumlah_saudara',$this->jumlah_saudara);
		$criteria->compare('t.anak_ke',$this->anak_ke);
		$criteria->compare('t.tahun_masuk',strtolower($this->tahun_masuk),true);
		$criteria->compare('t.gambar',strtolower($this->gambar),true);
		$criteria->compare('t.panggilan',strtolower($this->panggilan),true);
		$criteria->compare('t.kewarganegaraan_pegawai',strtolower($this->kewarganegaraan_pegawai),true);
		$criteria->compare('t.saudara_tiri',$this->saudara_tiri);
		$criteria->compare('t.saudara_angkat',$this->saudara_angkat);
		$criteria->compare('t.bahasa',strtolower($this->bahasa),true);
		$criteria->compare('t.tinggal_dengan',strtolower($this->tinggal_dengan),true);
		$criteria->compare('t.jarak',strtolower($this->jarak),true);
		$criteria->compare('t.transportasi',strtolower($this->transportasi),true);
		$criteria->compare('t.gol_darah',strtolower($this->gol_darah),true);
		$criteria->compare('t.penyakit',strtolower($this->penyakit),true);
		$criteria->compare('t.kelainan_jasmani',strtolower($this->kelainan_jasmani),true);
		$criteria->compare('t.tinggi',strtolower($this->tinggi),true);
		$criteria->compare('t.berat',strtolower($this->berat),true);
		$criteria->compare('t.no_telp',strtolower($this->no_telp),true);

		if(!isset($_GET['Pegawai_sort']))
			$criteria->order = 't.pegawai_id DESC';

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
			//$this->defaultColumns[] = 'pegawai_id';
			$this->defaultColumns[] = 'NIP';
			$this->defaultColumns[] = 'NPSN';
			$this->defaultColumns[] = 'NIK';
			$this->defaultColumns[] = 'status';
			$this->defaultColumns[] = 'tahun_ajar_id';
			$this->defaultColumns[] = 'sekolah_id';
			$this->defaultColumns[] = 'agama_id';
			$this->defaultColumns[] = 'nama';
			$this->defaultColumns[] = 'gender';
			$this->defaultColumns[] = 'tempat_lahir';
			$this->defaultColumns[] = 'tgl_lahir';
			$this->defaultColumns[] = 'alamat';
			$this->defaultColumns[] = 'jumlah_saudara';
			$this->defaultColumns[] = 'anak_ke';
			$this->defaultColumns[] = 'tahun_masuk';
			$this->defaultColumns[] = 'gambar';
			$this->defaultColumns[] = 'panggilan';
			$this->defaultColumns[] = 'kewarganegaraan_pegawai';
			$this->defaultColumns[] = 'saudara_tiri';
			$this->defaultColumns[] = 'saudara_angkat';
			$this->defaultColumns[] = 'bahasa';
			$this->defaultColumns[] = 'tinggal_dengan';
			$this->defaultColumns[] = 'jarak';
			$this->defaultColumns[] = 'transportasi';
			$this->defaultColumns[] = 'gol_darah';
			$this->defaultColumns[] = 'penyakit';
			$this->defaultColumns[] = 'kelainan_jasmani';
			$this->defaultColumns[] = 'tinggi';
			$this->defaultColumns[] = 'berat';
			$this->defaultColumns[] = 'no_telp';
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
			$this->defaultColumns[] = 'NIP';
			$this->defaultColumns[] = 'NPSN';
			$this->defaultColumns[] = 'NIK';
			if(!isset($_GET['type'])) {
				$this->defaultColumns[] = array(
					'name' => 'status',
					'value' => 'Utility::getPublish(Yii::app()->controller->createUrl("status",array("id"=>$data->pegawai_id)), $data->status, 1)',
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
			$this->defaultColumns[] = 'tahun_ajar_id';
			$this->defaultColumns[] = 'sekolah_id';
			$this->defaultColumns[] = 'agama_id';
			$this->defaultColumns[] = 'nama';
			$this->defaultColumns[] = 'gender';
			$this->defaultColumns[] = 'tempat_lahir';
			$this->defaultColumns[] = array(
				'name' => 'tgl_lahir',
				'value' => 'Utility::dateFormat($data->tgl_lahir)',
				'htmlOptions' => array(
					'class' => 'center',
				),
				'filter' => Yii::app()->controller->widget('zii.widgets.jui.CJuiDatePicker', array(
					'model'=>$this,
					'attribute'=>'tgl_lahir',
					'language' => 'ja',
					'i18nScriptFile' => 'jquery.ui.datepicker-en.js',
					//'mode'=>'datetime',
					'htmlOptions' => array(
						'id' => 'tgl_lahir_filter',
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
			$this->defaultColumns[] = 'alamat';
			$this->defaultColumns[] = 'jumlah_saudara';
			$this->defaultColumns[] = 'anak_ke';
			$this->defaultColumns[] = 'tahun_masuk';
			$this->defaultColumns[] = 'gambar';
			$this->defaultColumns[] = 'panggilan';
			$this->defaultColumns[] = 'kewarganegaraan_pegawai';
			$this->defaultColumns[] = 'saudara_tiri';
			$this->defaultColumns[] = 'saudara_angkat';
			$this->defaultColumns[] = 'bahasa';
			$this->defaultColumns[] = 'tinggal_dengan';
			$this->defaultColumns[] = 'jarak';
			$this->defaultColumns[] = 'transportasi';
			$this->defaultColumns[] = 'gol_darah';
			$this->defaultColumns[] = 'penyakit';
			$this->defaultColumns[] = 'kelainan_jasmani';
			$this->defaultColumns[] = 'tinggi';
			$this->defaultColumns[] = 'berat';
			$this->defaultColumns[] = 'no_telp';
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
			//$this->tgl_lahir = date('Y-m-d', strtotime($this->tgl_lahir));
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