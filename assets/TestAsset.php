<?php
namespace app\assets;

use yii\web\AssetBundle;

class TestAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'test/css/style.css',
        'test/css/global.css',
        'test/css/reset.css',
//        'test/css/idangerous.swiper.css',
        'test/css/swiper-3.4.2.min.css',
    ];
    //js在页面前加载
    public $jsOptions = array(
        'position' => \yii\web\View::POS_END
    );
    public $js = [
        'test/js/jquery-1.9.1.min.js',
        'test/js/swiper-3.4.2.min.js',
        'test/js/jquery-3.2.1.min.js',
//        'test/js/idangerous.swiper.min.js',
        'test/js/swiper-3.4.2.min.js',
        'test/js/jquery-3.2.1.min.js',
    ];
//    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
//    ];
}
?>
