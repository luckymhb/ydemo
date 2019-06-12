<?php
namespace app\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font.css',
        'css/xadmin.css',
    ];
    //js在页面前加载
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
    public $js = [
        'https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js',
        'admin/lib/layui/layui.js',
        'admin/js/cookie.js',
        'admin/js/xadmin.js',
        'test/js/jquery-3.2.1.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
?>
