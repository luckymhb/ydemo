<?php
use yii\helpers\Html;
use app\assets\AdminAsset;
use yii\widgets\Alert;
use yii\widgets\Breadcrumbs;
AdminAsset::register($this);  // $this 代表视图对象
$this->context->layout = false;
$this->title = '管理员登录';
?>
<?php $this->beginPage() ?>
<!doctype html>
<html  class="x-admin-sm">
<head>
    <meta charset="<?= Yii::$app->charset ?>">          <!-- Yii::$app->charset  设置页面编码  -->
    <title><?= Html::encode($this->title) ?></title>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <?php $this->head() ?>                              <!-- 此处引用AdminAsset的资源文件 -->
</head>
<body class="login-bg">
<?php $this->beginBody() ?>

    <div class="login layui-anim layui-anim-up">
        <div class="message"><?= $title ?></div>
        <div id="darkbannerwrap"></div>

        <form method="post" action="" class="layui-form" >
            <input name="username" placeholder="用户名"  type="text" lay-verify="required" class="layui-input" >
            <hr class="hr15">
            <input name="password" lay-verify="required" placeholder="密码"  type="password" class="layui-input">
            <hr class="hr15">
            <input value="登录" lay-submit lay-filter="login" style="width:100%;" type="submit">
            <input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
            <hr class="hr20" >
        </form>
    </div>

    <script>
        $(function () {
            layui.use('form', function(){
                var form = layui.form;
                layer.msg('玩命卖萌中', function(){});
                //监听提交
                form.on('submit(login)', function(data){
                    var url = "http://www.ydemo.com/web/index.php?r=test/login";
                    var info = data.field;
                    $.post(url,{username:info.username,password:info.password,_csrf:info._csrf},function(data1){
                        data1 = JSON.parse(data1);
                        if(data1.status == 1){
                            layer.msg(data1.info,function(data){
                                location.href='?r=test/index';
                            });
                        }else{
                            layer.msg(data1.info, function(){});
                            return false;
                        }
                    });
                    return false;
                });
            });
        })
    </script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
