<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "centro".
 *
 * @property integer $cen_id
 * @property integer $reg_id
 * @property integer $sub_id
 * @property string $cen_nombre
 * @property string $cen_direccion
 * @property string $cen_telefono
 * @property string $cen_extension
 * @property string $cen_fax
 * @property string $cen_planestrategico
 * @property integer $cen_programastitulada
 * @property integer $cen_programascomplementaria
 * @property integer $cen_programastituladav
 * @property integer $cen_programascomplementariav
 * @property integer $cen_totalambientesformacion
 *
 * @property Ambienteformacion[] $ambienteformacions
 * @property Subdirector $sub
 * @property Regional $reg
 * @property Coordinador[] $coordinadors
 * @property Relcentroproyecto[] $relcentroproyectos
 * @property User[] $users
 */
class Centro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'centro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reg_id', 'sub_id', 'cen_programastitulada', 'cen_programascomplementaria', 'cen_programastituladav', 'cen_programascomplementariav', 'cen_totalambientesformacion'], 'integer'],
            [['cen_nombre', 'cen_direccion', 'cen_telefono', 'cen_fax', 'cen_planestrategico', 'cen_programastitulada', 'cen_programascomplementaria', 'cen_programastituladav', 'cen_programascomplementariav'], 'required'],
            [['cen_nombre', 'cen_direccion'], 'string', 'max' => 100],
            [['cen_telefono', 'cen_fax'], 'string', 'max' => 10],
            [['cen_extension'], 'string', 'max' => 5],
            [['cen_planestrategico'], 'string', 'max' => 250],
            [['sub_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subdirector::className(), 'targetAttribute' => ['sub_id' => 'sub_id']],
            [['reg_id'], 'exist', 'skipOnError' => true, 'targetClass' => Regional::className(), 'targetAttribute' => ['reg_id' => 'reg_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cen_id' => 'Cen ID',
            'reg_id' => 'Reg ID',
            'sub_id' => 'Sub ID',
            'cen_nombre' => 'Cen Nombre',
            'cen_direccion' => 'Cen Direccion',
            'cen_telefono' => 'Cen Telefono',
            'cen_extension' => 'Cen Extension',
            'cen_fax' => 'Cen Fax',
            'cen_planestrategico' => 'Cen Planestrategico',
            'cen_programastitulada' => 'Cen Programastitulada',
            'cen_programascomplementaria' => 'Cen Programascomplementaria',
            'cen_programastituladav' => 'Cen Programastituladav',
            'cen_programascomplementariav' => 'Cen Programascomplementariav',
            'cen_totalambientesformacion' => 'Cen Totalambientesformacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAmbienteformacions()
    {
        return $this->hasMany(Ambienteformacion::className(), ['cen_id' => 'cen_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSub()
    {
        return $this->hasOne(Subdirector::className(), ['sub_id' => 'sub_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReg()
    {
        return $this->hasOne(Regional::className(), ['reg_id' => 'reg_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoordinadors()
    {
        return $this->hasMany(Coordinador::className(), ['cen_id' => 'cen_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRelcentroproyectos()
    {
        return $this->hasMany(Relcentroproyecto::className(), ['cen_id' => 'cen_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['cen_id' => 'cen_id']);
    }
}
