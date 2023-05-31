<?php
use yii\widgets\DetailView;

?>
<?=
    DetailView::widget([
        'model' => $mahasiswa007,
        'attributes' => [
            'Id007',
            'Nim007',
            'Nama007',
            'Kelas007',
            'status007',
        ],
    ]);
?>