<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
  <title>
     校园活动发布平台
  </title>
     <metahttp-equiv="X-UA-Compatible"content="IE=9; IE=8; IE=7; IE=EDGE">
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <link href="__CSS__/part_index.css" rel="stylesheet">
  <script src="__JS__/jquery.min.js"></script>
  <script>
  /*百度抓取*/
  var _hmt = _hmt || [];
  (function() {
    var hm = document.createElement("script");
    hm.src = "//hm.baidu.com/hm.js?20cd0f2b5487fe3553f387cd9ac3c967";
    var s = document.getElementsByTagName("script")[0]; 
    s.parentNode.insertBefore(hm, s);
  })();
  </script>
  <script type="text/javascript">
      $(document).ready(function(){
      var height=$("#body").height()-40;  
      $("#body").css({"width":"100%","height":height,"overflow":"hidden"});




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
  </script>

</head>
<body>
<div id="body">
    <div class="top">
      <center>
        <div class="top_center">
        <img style="float:left; margin-right:30px;" src="__IMAGES__/part_logo_2.png">
        <ul>
          <a href="__APP__/Part"><li class="look">校园活动</li></a>
          <a href="__APP__/Part/new_part"><li style="width:130px">最新校园活动</li></a>
          <a href="__APP__/Part/old_part"><li style="width:130px">往期活动回顾</li></a>
          <a href="__APP__/Part/add"><li>活动发布</li></a><!--<img src="__IMAGES__/penguin.png">-->
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
        <a href="#" style="color:#CC3D3D">校园活动</a>
      </center>
    </div>

    <div class="part_add">
      <h2>校园活动信息发布平台</h2>
      <small>在这里你各类最新的校园活动信息，讲座，比赛等；在这里你也可以发布最新的校园活动信息，但确保信息的真实性;</small>
      <a href="__APP__/Part/add"><div class="part_add_button">发布</div></a>
    </div>
<center>


 <div class="part_new_tittle"><h2>最新校园活动</h2></div>

  <div class="part_new">
      <ul>
      <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="__URL__/message_more/id/<?php echo ($vo["id"]); ?>">
        <li onmouseover ="this.style.background='#ccc'" onmouseout="this.style.background='#eee'">
          <div class="part_new_img"><img src="__UPLOADS__/thumb_<?php echo ($vo['part_image']); ?>"></div>
          <div class="part_new_img_inf">
            <h3><?php echo (subtext($vo['part_name'],17)); ?></h3>
            <?php echo ($vo['part_star_time']); ?>—<?php echo ($vo['part_over_time']); ?><br><br>
           <small style="margin-right:10px;">赞<?php echo ($vo['good']); ?></small>
          <small style="margin-right:10px;">评论<?php echo ($vo['evl']); ?></small>
          <small style="margin-right:10px;">浏览次数<?php echo ($vo['look']); ?></small>
          </div>
          <div style="height:30px; width:120px;"></div>
          <a href="__URL__/message_more/id/<?php echo ($vo["id"]); ?>"><div class="part_new_bottom">去看看</div></a>
        </li>
        </a><?php endforeach; endif; else: echo "" ;endif; ?>  
      </ul>
    </div>




     <div class="part_new_tittle"><h2>往期精彩活动</h2></div>
      <div class="part_new">
      <ul>
      <?php if(is_array($data3)): $i = 0; $__LIST__ = array_slice($data3,0,8,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="__URL__/part_bank/id/<?php echo ($vo["id"]); ?>">
        <li onmouseover ="this.style.background='#ccc'" onmouseout="this.style.background='#eee'">
          <div class="part_new_img"><img src="__UPLOADS__/thumb_<?php echo ($vo['part_image']); ?>"></div>
          <div class="part_new_img_inf">
            <h3><?php echo ($vo['part_name']); ?></h3>
            <?php echo ($vo['part_star_time']); ?>—<?php echo ($vo['part_over_time']); ?><br><br>
           <small style="margin-right:10px;">收藏<?php echo ($vo['collect']); ?></small>
          <small style="margin-right:10px;">报名<?php echo ($vo['sign_up']); ?></small>
          <small style="margin-right:10px;">浏览次数<?php echo ($vo['look']); ?></small>
          </div>
          <div style="height:30px; width:120px;"></div>
          <a href="__URL__/part_bank/id/<?php echo ($vo["id"]); ?>"><div class="part_new_bottom">去回顾</div></a>
        </li>
        </a><?php endforeach; endif; else: echo "" ;endif; ?>  
      </ul>
    </div>
</center>


    <div class="buttom">
    <div class="buttom_center">
      <h2>校园生活网</h2>
      <small>校园生活网是一个完全免费的校园生活类网站，<br>
      从建设以来立志为同学们提供最便捷的校园生活服务;<br>
      网站如今由华软软件学院梁宝承开发与维护,<br>
      非常欢迎有兴趣的同学前来加入，一起进步；
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
</body>
</html>