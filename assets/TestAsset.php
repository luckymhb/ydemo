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
        'test/css/idangerous.swiper.css',
        'test/css/swiper-3.4.2.min.css',
    ];
    public $js = [
      'admin/lib/layui/layui.js',
      'admin/js/cookie.js',
      'admin/js/xadmin.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
?>
