<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'template-tugas/vendor/aos/aos.css',
        'template-tugas/css/style.css',
        'template-tugas/vendor/bootstrap/css/bootstrap.min.css',
        'template-tugas/vendor/bootstrap-icons/bootstrap-icons.css',
        'template-tugas/vendor/glightbox/css/glightbox.min.css',
        'template-tugas/vendor/swiper/swiper-bundle.min.css',
        
    ];
    public $js = [
        'template-tugas/vendor/purecounter/purecounter_vanilla.js>',
        'template-tugas/vendor/aos/aos.js',
        'template-tugas/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'template-tugas/vendor/glightbox/js/glightbox.min.js',
        'template-tugas/vendor/isotope-layout/isotope.pkgd.min.js',
        'template-tugas/vendor/swiper/swiper-bundle.min.js',
        'template-tugas/vendor/php-email-form/validate.js',
        'template-tugas/js/main.js',

    ];
    public $depends = [
        
    ];
}
