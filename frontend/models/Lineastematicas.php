<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "lineastematicas".
 *
 * @property integer $are_id
 * @property integer $red_id
 * @property string $are_nombre
 *
 * @property Ambientetipo[] $ambientetipos
 * @property Redconocimiento $red
 * @property Programa[] $programas
 * @property User[] $users
 */
class Lineastematicas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lineastematicas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['red_id'], 'integer'],
            [['are_nombre'], 'required'],
            [['are_nombre'], 'string', 'max' => 100],
            [['red_id'], 'exist', 'skipOnError' => true, 'targetClass' => Redconocimiento::className(), 'targetAttribute' => ['red_id' => 'red_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'are_id' => 'Are ID',
            'red_id' => 'Red ID',
            'are_nombre' => 'Are Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAmbientetipos()
    {
        return $this->hasMany(Ambientetipo::className(), ['are_id' => 'are_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRed()
    {
        return $this->hasOne(Redconocimiento::className(), ['red_id' => 'red_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramas()
    {
        return $this->hasMany(Programa::className(), ['are_id' => 'are_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['are_id' => 'are_id']);
    }
}
