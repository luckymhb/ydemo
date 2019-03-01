<?php
/* @var $this yii\web\View */
?>
<title>Welcome</title>
    <style type="text/css" media="screen">
    body{
        font-family:"微软雅黑";
        margin:0;
        padding:0;
    }
        .head{
            width:100%;
            height:200px;
            background:#D85225;
        }
        .content{
            width:90%;
            margin:20px 5% 5px 5%;
        }
        .content-phone{
            width:98%;
            height:42px;
            border:none;
            background:#eee;
            color:#666;
            padding:0;
            padding-left:2%;
            margin-top:20px;
            border-radius:5px;
            font-size:16px;
        }
        .yanzheng{
            width:98%;
            height:42px;
            border:none;
            background:#eee;
            color:#666;
            padding:0;
            padding-left:2%;
            margin-top:20px;
            border-radius:5px;
            font-size:16px;
        }
        input{
            background-color:#eee;
        }
        .head-img{
            width:200px;
            margin:0 auto;
        }
        .connect,.return{
            width:90%;
            height:40px;
            margin:0 auto;
            font-size:18px;
            text-align:center;
            line-height:40px;
            color:#fff;
            background:#D85225;
            border-radius:5px;
        }
        .connect{
            margin-top:30px;
            border:1px solid #D85225;
        }
        .return{
            border:1px solid #999;
            color:#999;
            background:#fff;
            margin-top:20px;
        }
        .greet{
            width:100%;
            height:66px;
            background:#eee;
            color:#666;
            font-size:16px;
            text-align:center;
            line-height:66px;
            position:absolute;
            bottom:0;
        }
        a{
            text-decoration:none;
        }
        input,textarea,div,a{
            outline: none;
            -webkit-tap-highlight-color:transparent;
        }
    </style>
<h1>Welcome to Test</h1>

 You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
    <div style="wdith:100px; height:100px; border:1px solid #f00;">Welcome <?php echo $lists[0]['lname']?></div>
    <?PHP echo $model; ?> 
<form method="post" action="?r=test/Check">
  <div class="content">
      <input type="text" name="phone" id="phone" value="" placeholder="请输入您的手机号"/ class="content-phone">
    <div class="content-body">
        <input type="password" name="pwd" id="pwd" value="" placeholder="请输入密码"/ class="yanzheng">
    </div>
 </div>

 <div class="connect"><input type="submit" value="连 接 网 络" name="send" id="send" style="border:0px; background:none; width:100%; color:#fff; font-size:18px;" /></div>

<div class="return"><input class="reg" style="color:#666; border:0px; background:none; width:100%; font-size:18px;" type="submit" value="返　　回" id="back" name="back"></div>


</form>
    
