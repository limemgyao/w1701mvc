<?php
/* Smarty version 3.1.30, created on 2017-06-29 03:38:47
  from "/Users/gaoxin/Documents/www/w1701/mvc/template/index/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59545a2751a3d2_52915994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77c96a8d6b6810ad82fac9cf239a357515344e82' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1701/mvc/template/index/index.html',
      1 => 1498700325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59545a2751a3d2_52915994 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <style>
        body,h3,h1,h2{
            padding:0;margin:0;
            list-style: none;
            font-weight: normal;
        }
        header{
            width:100%;
            height:44px;
            background: orange;
            line-height: 44px;
        }

        header .title{
            float:left;
            margin-left:20px;
        }
        header .login{
            float:right;
            margin-right:20px;
        }

        form{
            background: #fff;
            position: fixed;
            left:0;;top:0;right:0;bottom: 0;
            margin:auto;width:300px;height:300px;border:1px solid #ccc;
            padding:10px;border-radius: 5px;
            box-shadow: 0 0 5px #000;
        }
        form .title{
            height:30px;
            line-height: 30px;

            text-align: center;
            margin-bottom:10px;
        }

        .loginBox{
            display: none;
        }
        .closeBtn{
            width:20px;height:20px;
            border:1px solid #ccc;
            border-radius: 50%;
            position: absolute;
            right:5px;top:5px;
            cursor: pointer;
            text-align: center;
            font-size: 12px;
            line-height: 20px;
            box-shadow: 0 0 5px #333;
        }
        .regBox{
            height:370px;display: none;
        }

    </style>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function(){

            //关闭
            $(".loginCloseBtn").click(function(){
                $(".loginBox").css("display","none");
            })

            $(".regCloseBtn").click(function(){
                $(".regBox").css("display","none");
            })

            //跳转
            $(".regBtn").click(function(){
                $(".loginBox").css("display","none");
                $(".regBox").css("display","block");
            })

            $(".loginBtn").click(function(){
                $(".loginBox").css("display","block");
                $(".regBox").css("display","none");
            })



            $(".info").click(function(){
                $.ajax({
                    url:"index.php?m=index&f=info&a=add",
                    success:function(e){
                        if(e=="nologin"){
                            $(".loginBox").css("display","block");
                        }
                    }
                })
            })
        })
    <?php echo '</script'; ?>
>
</head>
<body>
    <header>
        <h3 class="title">
            xxx博客家园
        </h3>
        <h3 class="login">
            <a href="">
                登陆
            </a>
            <a href="">
                注册
            </a>
            <a href="javascript:;" class="info">
                发表内容
            </a>
        </h3>
    </header>

    <form class="loginBox">
        <div class="title">
            请登陆
        </div>
        <div class="loginCloseBtn closeBtn">
            X
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">用户名 </label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="用户名" name="mname">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="mpass">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">验证码</label>
            <input type="text" class="form-control" placeholder="验证码" name="mpass" style="display: inline-block;width:100px;">
            <img src="index.php?a=code" alt="" onclick="this.src=this.src+'&code='+Math.random()">
        </div>

        <button type="submit" class="btn btn-default">登陆</button>
        <span>没有账户?请 <a href="javascript:;" class="regBtn">注册</a></span>
    </form>



    <form class="regBox">
        <div class="title">
            请注册
        </div>
        <div class="regCloseBtn closeBtn">
            X
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">用户名 </label>
            <input type="text" class="form-control" placeholder="用户名" name="mname">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">密码</label>
            <input type="password" class="form-control" placeholder="Password" name="mpass">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">确认密码</label>
            <input type="password" class="form-control" placeholder="Password" name="mpass1">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">验证码</label>
            <input type="text" class="form-control" placeholder="验证码" name="mpass" style="display: inline-block;width:100px;">
            <img src="index.php?a=code" alt="" onclick="this.src=this.src+'&code='+Math.random()">
        </div>

        <button type="submit" class="btn btn-default">注册</button>
        <span>已有账户?请 <a href="javascript:;" class="loginBtn">登陆</a></span>
    </form>
</body>
</html><?php }
}
