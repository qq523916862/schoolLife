<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
  
   <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
    
    <link rel="stylesheet" type="text/css" href="__CSS__/demo.css" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>电子名片管理系统</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    
    <link href='__CSS__/font.css' rel='stylesheet' type='text/css'>
    <link href="__CSS__/font-awesome.min.css" rel="stylesheet">
    <link href="__CSS__/bootstrap.min.css" rel="stylesheet">
    <link href="__CSS__/templatemo-style.css" rel="stylesheet">
    <script src="__JS__/jquery-1.11.2.min.js"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="__JS__/html5shiv.min.js"></script>
      <script src="__JS__/respond.min.js"></script>
    <![endif]-->

    <link href="__CSS__/Untitled-1.css" rel="stylesheet" type="text/css">
 
 <script type="text/javascript">

    function submit()
    {
      $('#form').submit();
    }
 </script> 


  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
  
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>电子名片管理系统</h1>
        </header>
        <div class="profile-photo-container"></div>  
        <p>    
          <!-- Search box -->
        </p>
        <p>&nbsp; </p>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="__URL__/index1.html"><i class="fa fa-home fa-fw"></i>浏览</a></li>
            <li><a href="#"  class="active"></i>修改</a></li>                    
          </ul>  
        </nav>
      </div>
  
    <div id="head"></div>
   <div id="box_relative">
   <center>
   <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form id="form" name="form" method="post" action="__URL__/update_pass" enctype="multipart/form-data">  
     <table width="50%" border="0" style="margin-top:30px; font-size:18px;">

         <tr>
           <td height="64">                   
              公司名称： <input style="float:right; margin-right:50px;" type="text" name="company" value="<?php echo ($vo["company"]); ?>">
          </td>
         </tr>

         <tr>
           <td height="57">
           
              姓名:<input style="float:right; margin-right:50px;"  type="text" name="name" value="<?php echo ($vo["name"]); ?>">
           </td>
         </tr>

         <tr>
           <td height="57">
              头像:<input style="float:right; width:295px;"  type="file" name="img[]">
           </td>
         </tr>

         <tr>
           <td height="57">
              背景:<input style="float:right; width:295px;"  type="file" name="img[]">
           </td>
         </tr>


         <tr>
           <td height="63">   
              职务:<input style="float:right; margin-right:50px;"  type="text" name="job" value="job">      
           </td>
         </tr>
         <tr>
           <td height="62">        
              办公室电话:<input style="float:right; margin-right:50px;" type="text" name="tel" value="<?php echo ($vo["tel"]); ?>">          
           </td>
         </tr>
         <tr>
           <td height="64">                   
              手机电话： <input style="float:right; margin-right:50px;" type="text" name="phone" value="<?php echo ($vo["phone"]); ?>">
          </td>
         </tr>
         <tr>
           <td height="64">                   
              传真： <input style="float:right; margin-right:50px;" type="text" name="fix" value="<?php echo ($vo["fix"]); ?>">
          </td>
         </tr>

         <tr>
           <td height="64">                   
              个人简介:
              <textarea rows="5" cols="50" style="float:right; margin-right:50px;" name="personal_text"><?php echo ($vo["personal_text"]); ?></textarea>
          </td>
         </tr>


         <tr>
           <td height="63">
             <label>            
              <input class="B_delete" type="reset" name="Submit2" value="重置">
             </label>
             <label>
               <button class="B_two" onclick="submit()">提交</button>
             </label>
           </form><?php endforeach; endif; else: echo "" ;endif; ?>
           </td>
         </tr>


         <tr>
           <td height="27">&nbsp;</td>
         </tr>
       </table>
       </center>
   </div>  
   </div>    
</body>
</html>