<?php
use yii\grid\GridView;
use yii\grid\SerialColumn;
use yii\grid\ActionColumn;
use yii\helpers\Html;
?>
<?=
    Html::a('Tambah Mahasiswa', ['create'], ['class' => 'btn btn-primary']);
?>

<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'Id007',
            'Nim007',
            'Nama007',
            'Kelas007',
            'status007',

            ['class' => ActionColumn::className()],
        ]
        ]);
?>