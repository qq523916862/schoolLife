<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
  <title>校园社区</title>
  <metahttp-equiv="X-UA-Compatible"content="IE=9; IE=8; IE=7; IE=EDGE">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link href="__CSS__/school_index.css" rel="stylesheet">
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
      
<script>

$(document).ready(function(){
  $(".button").hover(function(){
    $(".button_more").fadeIn("100");
  });

  
    $(".button").mouseleave(function(){
    $(".button_more").fadeOut(200);
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

</script>
</head>
<body>
<div id="body">
  <div class="top">
      <center>
        <div class="top_center">
        <a href="__APP__/First/index2"><img style="float:left; margin-right:30px;" src="__IMAGES__/school_logo.png"></a>
        <ul>
          <a href="__APP__/School"><li class="look">校园社区</li></a>
          <a href="__APP__/School/community" ><li >校园话题</li></a>
          <a href="__APP__/School/essay"><li>文章/随笔</li></a>
          <a href="__APP__/School/video"><li>视频分享</li></a>
          <a href="__APP__/School/study"><li>学习分享</li></a>
          <a href="#"><li>校园图库</li></a>
          <li class="user">
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
        <a href="#" style="color:#CC3D3D">校园社区</a>
      </center>
    </div>

    <div class="part_add">
      <h2>校园社区</h2>
      <small>这是一个属于我们自己的交流平台，您可以在这里畅所欲言以及分享您的原创作品，但也要注意不当的言行哦。(＾－＾)V</small>
      <div class="button" style="position:relative; top:-20px;">
        <a ><div class="part_add_button">分享</div></a>

        <div class="button_more">
          <a href="__APP__/School/community_add"><div class="part_add_button">分享话题</div></a>
          <a href="__APP__/School/essay_add"><div class="part_add_button">分享文章</div></a>
          <a href="__APP__/School/video_add"><div class="part_add_button">分享视频</div></a>
          <a href="__APP__/School/study_add"><div class="part_add_button">分享学习经验</div></a>
        </div>
      </div>
    </div>

<!-- ...........................................................................-->

<center>
      <div class="part_new_tittle"><h2>校园精选</h2></div>
      <div class="inf">
      <?php if(is_array($community)): $i = 0; $__LIST__ = $community;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="imf_more">
              <small style="color:#660033; font-weight:100">   
                 赞<?php echo ($vo["good"]); ?> &nbsp
                 评论<?php echo ($vo["evl"]); ?>&nbsp
                 浏览<?php echo ($vo["look"]); ?>&nbsp
              </small>
              <br>
              <hr style="height:1px;border:none;border-top:1px dotted #669999;  margin-bottom:20px;">
              <img onerror="this.src='__IMAGES__/img_error3.png'" src="__UPLOADS__/thumb_<?php echo ($vo["img"]); ?>">
              <h3><a href="__URL__/community_more/id/<?php echo ($vo["id"]); ?>">【话题】<?php echo (subtext($vo["message_tittle"],9)); ?></a></h3>
              <small style="font-weight:100"><code><?php echo (subtext($vo["message_more"],50)); ?></code></small><br>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>


      <?php if(is_array($essay)): $i = 0; $__LIST__ = $essay;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="imf_more">
              <small style="color:#660033; font-weight:100">   
                 赞<?php echo ($vo["good"]); ?> &nbsp
                 评论<?php echo ($vo["evl"]); ?>&nbsp
                 浏览<?php echo ($vo["look"]); ?>&nbsp
              </small>
              <br>
              <hr style="height:1px;border:none;border-top:1px dotted #669999;  margin-bottom:20px;">
              <img onerror="this.src='__IMAGES__/img_error3.png'" src="__UPLOADS__/thumb_<?php echo ($vo["img"]); ?>">
              <h3><a href="__URL__/essay_more/id/<?php echo ($vo["id"]); ?>">【文章】<?php echo (subtext($vo["message_tittle"],9)); ?></a></h3>
              <small style="font-weight:100"><code><?php echo (subtext($vo["message_more"],50)); ?></code></small><br>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>


      <?php if(is_array($study)): $i = 0; $__LIST__ = $study;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="imf_more">
              <small style="color:#660033; font-weight:100">   
                 赞<?php echo ($vo["good"]); ?> &nbsp
                 评论<?php echo ($vo["evl"]); ?>&nbsp
                 浏览<?php echo ($vo["look"]); ?>&nbsp
              </small>
              <br>
              <hr style="height:1px;border:none;border-top:1px dotted #669999;  margin-bottom:20px;">
              <img onerror="this.src='__IMAGES__/img_error3.png'" src="__UPLOADS__/thumb_<?php echo ($vo["img"]); ?>">
              <h3><a href="__URL__/study_more/id/<?php echo ($vo["id"]); ?>">【学习】<?php echo (subtext($vo["message_tittle"],9)); ?></a></h3>
              <small style="font-weight:100"><code><?php echo (subtext($vo["message_more"],50)); ?></code></small><br>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>


      <?php if(is_array($video)): $i = 0; $__LIST__ = $video;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="imf_more">
              <small style="color:#660033; font-weight:100">   
                 赞<?php echo ($vo["good"]); ?> &nbsp
                 评论<?php echo ($vo["evl"]); ?>&nbsp
                 浏览<?php echo ($vo["look"]); ?>&nbsp
              </small>
              <br>
              <hr style="height:1px;border:none;border-top:1px dotted #669999;  margin-bottom:20px;">
              <img onerror="this.src='__IMAGES__/img_error3.png'" src="__UPLOADS__/thumb_<?php echo ($vo["img"]); ?>">
              <h3><a href="__URL__/video_more/id/<?php echo ($vo["id"]); ?>">【视频】<?php echo (subtext($vo["message_tittle"],9)); ?></a></h3>
              <small style="font-weight:100"><code><?php echo (subtext($vo["message_more"],50)); ?></code></small><br>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>      
      </div>

</center>











<!--............................................................................-->

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