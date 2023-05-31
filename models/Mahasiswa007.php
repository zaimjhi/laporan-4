<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa007".
 *
 * @property int $Id007
 * @property string $Nim007
 * @property string $Nama007
 * @property string $Kelas007
 * @property string $status007
 */
class Mahasiswa007 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa007';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nim007', 'Nama007', 'Kelas007', 'status007'], 'required'],
            [['Nim007', 'Nama007', 'Kelas007', 'status007'], 'string', 'max' => 80],
            [['Nim007'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id007' => 'Id007',
            'Nim007' => 'Nim007',
            'Nama007' => 'Nama007',
            'Kelas007' => 'Kelas007',
            'status007' => 'Status007',
        ];
    }
}
