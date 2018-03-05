<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
  <title>
     校园生活信息发布平台
  </title>
     <metahttp-equiv="X-UA-Compatible"content="IE=9; IE=8; IE=7; IE=EDGE">
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link href="__CSS__/message_index.css" rel="stylesheet">
    <script src="__JS__/jquery.min.js"></script>
    <script type="text/javascript">

    $(document).ready(function(){
      $(".menu_more").hover(function(){
        $(".menu").fadeIn("100");
      });

      
        $(".menu_more").mouseleave(function(){
        $(".menu").fadeOut(200);
      });

      if('<?php echo ($username); ?>'!='')
      {

        $("#img").click(function(){
            $("#login,#login_top").fadeToggle(200);
        });  
      }

      else
      {
    
        $("#img").click(function(){
            $("#no_login,#no_login_top").fadeToggle(200);
        }); 
      }        
    });

     




/*ajax分页*/
     function user(id)
     {    //user函数名 一定要和action中的第三个参数一致上面有
         var id = id;
            $.get('__URL__/lose', {'p':id}, function(data){  //用get方法发送信息到UserAction中的user方法
             $("#user").replaceWith("<div  id='user'>"+data+"</div>"); //user一定要和tpl中的一致
        });
     }

    </script>
</head>
<body>
<div id='user'>   <!--这里的user和下面js中的test要一致-->
<div id="body">


 
    <div class="top">
      <center>
        <div class="top_center">
        <a href="__APP__/First/index2"><img style="float:left; margin-right:30px;" src="__IMAGES__/message_inf.png">
        </a>
        <ul>
         <a href="__URL__/index.html"><li style="width:150px;">校园生活信息发布</li></a>
          <a href="__URL__/two.html"><li>二手信息</li></a>
          <a href="__URL__/lose.html"><li class="look" style="width:100px;">失物招领</li></a>
          <a href="__URL__/find.html"><li>寻物启事</li></a>
          <a href="__URL__/other.html"><li>其他信息</li></a>
          <li class="user" style="float:right;">
              <img  id="img" onerror="this.src='__IMAGES__/35.jpg'"  src="__UPLOADS__/thumb_<?php echo ($userdata[0]['img']); ?>">
          </li>

        </ul>
        </div> 
      </center>   
    </div>

    <div class="img">
      
      <div class="user_menu">
        <div class="user_menu_mess" id="login">
          <ul>
            <li><a href="__APP__/Usercenter">个人中心</a></li>
            <li><a href="#">消息中心</a></li>
            <li><a href="__APP__/User/logout">退出登录</a></li>
          </ul>
          <div class="user_menu_mess_top" id="login_top"></div>
        </div>
      </div>

      <div class="user_menu" >
        <div  id="no_login">
          <ul>
            <li><a href="__APP__/User/add">注册</a></li>
            <li><a href="__APP__/User/login">登录</a></li>
            <li><a href="__APP__/User/about">关于我们</a></li>
          </ul>
          <div id="no_login_top"></div>
        </div>
      </div>      
    </div>
    <div class="crumbs">
      <center>
        <a href="__APP__/First/index2">主页</a>>>
        <a href="#" style="color:#CC3D3D">校园生活信息发布</a>
      </center>
    </div>

    <div class="part_add">
      <h2>校园生活信息发布平台</h2>
      <small>在这里你可以找到各类最新的校园生活信息，寻物信息，二手交易等；在这里你也可以发布最新的校园生活信息，但确保信息的真实性;</small>

      <div class="menu_more">
        <a href="javascript:void(0);"><div style="position:relative;top:-35px;" class="part_add_button" id="part_add_button">发布</div></a>
        <div class="menu">
            <a href="__APP__/Message/add_two"><div class="part_add_button">二手信息</div></a>
            <a href="__APP__/Message/add_lose"><div class="part_add_button">失物招领</div></a>
            <a href="__APP__/Message/add_find"><div class="part_add_button">寻物启事</div></a>
            <a href="__APP__/Message/add_other"><div class="part_add_button">其他信息</div></a>
        </div>
      </div>
    </div>

<!--。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。。-->

      <div class="new_tittle"><h2>全部失物招领</h2></div>
      <center>
      <div class="new">
        <ul>
          <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="__URL__/message_more/id/<?php echo ($vo["id"]); ?>"><li class="new_li">
          <img onerror="this.src='__IMAGES__/img_error.png'" src="__UPLOADS__/thumb_<?php echo ($vo['image']); ?>">
          <h3><?php echo (subtext($vo['message_tittle'],5)); ?></h3>
          <nobr><small><?php echo (subtext($vo['span_2'],15)); ?><br>电话:<?php echo (subtext($vo["tel"],11)); ?> QQ:<?php echo (subtext($vo["qq"],11)); ?><br><br></small></nobr>
             <div style="width:100%; border-bottom:1px solid #006B6B;"></div> 
           <small style="color:#006B6B">浏览<?php echo ($vo["look_number"]); ?>&nbsp评论<?php echo ($vo["comment"]); ?>&nbsp&nbsp&nbsp<?php echo ($vo["time"]); ?></small>
          </li></a><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
      </center>

<center style="margin-top:100px;"><?php echo ($page); ?></center>


<!--,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,-->

    <div class="buttom">
    <div class="buttom_center">
      <h2>校园生活网</h2>
      <small>校园生活网是一个完全免费的校园生活类网站，<br>
      从建设以来立志为同学们提供最便捷的校园生活服务;<br>
      网站如今由华软软件学院网络系杨宗耀开发与免费维护，<br>
      我们非常欢迎有兴趣的同学前来加入我们，一起进步；
      </small>
      <div class="buttom_right">
        <div class="buttom_right_ico">
        <img style="position:relative; top:5px; margin-right:5px;" src="__IMAGES__/qq.png">706598228
        </div>

        <div class="buttom_right_ico">
        <img style="position:relative; top:5px; margin-right:5px;" src="__IMAGES__/wechat.png">runfiy
        </div>
        
        <img style="float:right;position:relative; top:-120px; left:-50px;" src="__IMAGES__/code.jpg">


      </div>
    </div> 
    </div>
</div>  


</div>  
</body>
</html>