<?php
use yii\grid\GridView;
use yii\grid\SerialColumn;
use yii\grid\ActionColumn;
use yii\helpers\Html;
use yii\helpers\url;
?>
 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Rapid</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="template-tugas/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link" href="<?= Url::to(['site/index#hero']) ?>">Home</a></li>
          <li><a class="nav-link scrollto" href="<?= Url::to(['site/index#about']) ?>">About</a></li>
          <li><a class="nav-link scrollto" href="<?= Url::to(['site/index#services']) ?>">Services</a></li>
          <li><a class="nav-link scrollto" href="<?= Url::to(['site/index#portfolio']) ?>">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="<?= Url::to(['site/index#team']) ?>">Team</a></li>
            <li><a class="nav-link scrollto" href="<?= Url::to(['mahasiswa007/index#mahasi']) ?>">Mahasiswa</a></li>
          <li><a class="nav-link scrollto" href="<?= Url::to(['site/index#footer']) ?>">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header><!-- End Header -->
<section id="hero" class="clearfix">
    <div class="container">
        <div class="">
          <section id="mahasi">
        <?= Html::a('Tambah Mahasiswa', ['create'], ['class' => 'btn btn-primary']); ?>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'tableOptions' => ['class' => 'table table-striped table-responsive primary', 'style' => 'width: 100%'],
                'columns' => [
                    ['class' => SerialColumn::class],
                    'Id007',
                    'Nim007',
                    'Nama007',
                    'Kelas007',
                    'status007',
                    ['class' => ActionColumn::class],
                ],
            ]); ?>
            </section>
         </div>
     </div>
 </section>
