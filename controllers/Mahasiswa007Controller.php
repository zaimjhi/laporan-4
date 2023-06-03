<?php

namespace app\controllers;

use app\models\Mahasiswa007;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa007Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa007::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mahasiswa007 = new Mahasiswa007();
        $mahasiswa007->Nim007 = '60200121007'.'-' . rand(1,100);
        $mahasiswa007->Nama007 = 'zaim';
        $mahasiswa007->Kelas007 = 'D';
        $mahasiswa007->status007 = 'baru';
        if ($mahasiswa007->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
        } else {
            Yii::$app->session->setFlash('error', 'Gagal menyimpan data');
        }
        return $this->redirect(['index']);
    }

    public function actionUpdate($id)
    {
        $mahasiswa007 = Mahasiswa007::findOne(['Id007' => $id]);
        if ($mahasiswa007 !== null) {
            $mahasiswa007->Kelas007 = 'D';
            $mahasiswa007->status007 = 'Update';
            if ($mahasiswa007->save()) {
                Yii::$app->session->setFlash('success', 'Data Terupdate');
            } else {
                Yii::$app->session->setFlash('error', 'Gagal mengupdate data');
            }
        } else {
            Yii::$app->session->setFlash('error', 'Data tidak ditemukan');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mahasiswa007 = Mahasiswa007::findOne(['Id007' => $id]);
        if ($mahasiswa007 !== null && $mahasiswa007->delete()) {
            Yii::$app->session->setFlash('success', 'Data Terhapus');
        } else {
            Yii::$app->session->setFlash('error', 'Gagal menghapus data');
        }
        return $this->redirect(['index']);
    }

    public function actionView($id)
    {
        $mahasiswa007 = Mahasiswa007::findOne($id);
        if ($mahasiswa007 === null) {
            Yii::$app->session->setFlash('error', 'Data tidak ditemukan');
            return $this->redirect(['index']);
        }
        return $this->render('view', ['mahasiswa007' => $mahasiswa007]);
    }
}
