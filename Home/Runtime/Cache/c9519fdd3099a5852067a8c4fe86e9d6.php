<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
  <title>
    查看详细信息
  </title>
   <metahttp-equiv="X-UA-Compatible"content="IE=9; IE=8; IE=7; IE=EDGE">
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
   <link href="__BOOTSTRAP__/css/bootstrap.css" rel="stylesheet">
   <link href="__CSS__/Usercenter_index.css" rel="stylesheet">
   <script src="__JS__/jquery.min.js"></script>
   <script src="__JS__/jquery.rotate.js"></script>
   <script src="__BOOTSTRAP__/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    /*图片旋转*/
  $(document).ready(function(){
    var angle = 0;
    setInterval(function(){
          angle+=2;
         $("#img").rotate(angle);
    },50);
  });
  </script>

</head>
<body>
    <div class="top">
      <center>
        <div class="top_center">
        <img style="float:left; margin-right:30px;" src="__IMAGES__/usercenter.png">
        <ul>
          <a href="__APP__/Usercenter"><li style="width:100px;" class="look">基本信息</li></a>
          <a href="__APP__/Usercenter/school_info"><li style="width:150px;">校园信息发布管理</li></a>
          <a href="__APP__/Usercenter/school_part"><li style="width:150px;">校园活动发布管理</li></a>
          <a href="__APP__/Usercenter/school_area"><li style="width:130px;">校园社区管理</li></a>
          <a href="__APP__/Usercenter/school_mess"><li style="width:100px;">消息中心</li></a>
        </ul>
        </div> 
      </center>   
    </div>

  
    <div class="crumbs">
      <center>
        <a href="__APP__/First/index2"><span>主页</span></a>>>
        <a href="#" ><span style="background-color:#CC3366">个人中心</span></a>
      </center>
    </div>

<!---->
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="inf">
    <div class="inf_left">
        <center>
            <img  id="img" onerror="this.src='__IMAGES__/dog.png'" src="__UPLOADS__/thumb2_<?php echo ($vo["img"]); ?>">
            <br><br><br><br>
            <h1><?php echo ($vo["username"]); ?></h1>
            <br><br>
            <small>积分：<?php echo ($vo["user_level"]); ?></small>
            <br><br><br>
            <small>上次登录时间:<?php echo ($vo["lasttime"]); ?></small>
            <a href="__APP__/User/find_code">修改密码</a>
        </center>
    </div>
    <div class="inf_right">
      <p style="color:#009999; float:left">
        基本信息&nbsp &nbsp&nbsp &nbsp
        <a href="__URL__/user_updata">修改</a>
      </p>
      <form method="post" action='__URL__/up_user_ico' enctype="multipart/form-data" id="form">    
          <img id="lod" src="__IMAGES__/loading.gif" style="float:right; display:none">    
         <div class="user_ico_b"><input class="user_ico" type="file" name="img" onchange="user_ico()"></div>   
         <script type="text/javascript">
         function user_ico()
         {
            $("#form").submit();
            $("#lod").css("display","block");

         }
         </script>       
      </form>
      <hr style="width:100%; border-top:1px solid #009999"></hr>
      <ul>
        <li>账号：<?php echo ($vo["usernumber"]); ?></li>
        <li>年级：<?php echo ($vo["s_year"]); ?> </li>
        <li>手机：<?php echo ($vo["tel"]); ?> </li>
        <li>QQ：<?php echo ($vo["qq"]); ?> </li>
      <li style="color:#009999; height:30px;">统计信息</li>
      <hr style="width:100%; border-top:1px solid #009999"></hr>
        <li>校园信息发布：已发布<?php echo ($school_info); ?>条信息</li>
        <li>校园活动：已发布<?php echo ($school_part); ?>条活动信息</li>
        <li>校园社区：已发布<?php echo ($school); ?>次</li>
        <li>注册时间：<?php echo ($vo["addtime"]); ?></li>
        <li>是否认证：已认证 &nbsp &nbsp<a href="#">认证</a></li>
        <li>关注：已有0个人关注</li>
      </ul>
    </div>
  </div><?php endforeach; endif; else: echo "" ;endif; ?>
<!---->



    <div class="buttom">
    <div class="buttom_center">
      <h2>校园生活网</h2>
      <small>校园生活网是一个完全免费的校园生活类网站，<br>
      从建设以来立志为同学们提供最便捷的校园生活服务;<br>
      网站如今由华软软件学院杨中药开发与维护，<br>
      非常欢迎有兴趣的同学前来加入，一起进步；
      </small>
      <div class="buttom_right">
        <div class="buttom_right_ico">
        <img style="margin-right:5px;" src="__IMAGES__/qq.png">706598228
        </div>

        <div class="buttom_right_ico">
        <img style="margin-right:5px;" src="__IMAGES__/wechat.png">runfiy
        </div>
        
        <img style="float:right;position:relative; top:-100px; left:-50px;" src="__IMAGES__/code.jpg">


      </div>
    </div> 
  </div>
</body>
</html>