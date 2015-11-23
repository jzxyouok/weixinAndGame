<?php
use yii\bootstrap\ActiveForm;
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/public/lib/html5.js"></script>
    <script type="text/javascript" src="/public/lib/respond.min.js"></script>
    <script type="text/javascript" src="/public/lib/PIE_IE678.js"></script>
    <![endif]-->
    <link href="/public/css/H-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="/public/css/H-ui.login.css" rel="stylesheet" type="text/css" />
    <link href="/public/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/public/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>后台登录 - H-ui.admin v2.3</title>
    <meta name="keywords" content="H-ui.admin v2.3,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
    <meta name="description" content="H-ui.admin v2.3，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<div class="header"></div>
<div class="loginWraper">
    <div id="loginform" class="loginBox">
        <?php $form = ActiveForm::begin(['id' => 'form-login',
            'options'=> ['class' => 'form form-horizontal'], ]);?>
            <div class="row cl">
                <label class="form-label col-3"><i class="Hui-iconfont">&#xe60d;</i></label>
                <div class="formControls col-6">
                    <input type="text" name="User[user_name]" placeholder="账户" autocomplete="off" value="" class="input-text size-L" datatype="*4-20" nullmsg="密码不能为空">
                </div>
                <div class="col-4"> </div>
            </div>
            <div class="row cl">
                <label class="form-label col-3"><i class="Hui-iconfont">&#xe60e;</i></label>
                <div class="formControls col-8">
                    <input type="password" name="User[user_password]" placeholder="密码" autocomplete="off" value="" class="input-text size-L" datatype="*6-20" nullmsg="密码不能为空">
                </div>
                <div class="col-6"> </div>
            </div>
            <div class="row">
                <div class="formControls col-8 col-offset-3 <?php if(!empty($error)):?>Validform_wrong" <?php endif;?>>
                    <label for="online">
                            <?=$error?>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="formControls col-8 col-offset-3">
                    <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
                    <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
                </div>
            </div>
    <?php ActiveForm::end();?>
    </div>
</div>
<div class="footer">Copyright 你的公司名称 by H-ui.admin.v2.3</div>
<script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/lib/Validform/5.3.2/Validform.min.js"></script>
<script type="text/javascript" src="/public/lib/layer/1.9.3/layer.js"></script>
<script type="text/javascript" src="/public/js/H-ui.js"></script>
<script type="text/javascript">
    $(function(){
        $("#form-login").Validform({
            tiptype:3,
            callback:function(form){
                form[0].submit();
                var index = parent.layer.getFrameIndex(window.name);
                parent.$('.btn-refresh').click();
                parent.layer.close(index);
            }
        });
    });
</script>
</body>
</html>