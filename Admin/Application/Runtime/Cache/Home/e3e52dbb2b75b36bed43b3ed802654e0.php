<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="/schoollife/admin/Public/scripts/jquery/jquery-1.7.1.js"></script>
<script type="text/javascript" src="/schoollife/admin/Public/Jquery/Check.js"></script>
<link href="/schoollife/admin/Public/style/authority/basic_layout.css" rel="stylesheet" type="text/css">
<link href="/schoollife/admin/Public/style/authority/common_style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/schoollife/admin/Public/scripts/authority/commonAll.js"></script>
<script type="text/javascript" src="/schoollife/admin/Public/scripts/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="/schoollife/admin/Public/scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="/schoollife/admin/Public/style/authority/jquery.fancybox-1.3.4.css" media="screen"></link>
<script type="text/javascript" src="/schoollife/admin/Public/scripts/artDialog/artDialog.js?skin=default"></script>
<link href="/schoollife/admin/Public/Font/LigatureSymbols/LigatureSymbols/style.css" rel="stylesheet" type="text/css" />
<style>
div,ul,li{ list-style:none;}
.formTag { border-bottom:3px solid #EEE; height:30px;}
.formTag a{ line-height:30px; float:left; padding-left:10px; color:#CCC; padding-right:10px; display:block;}
.formTag a:hover{ text-decoration:none; color: #CCC;}
.formTag .cek{ border-bottom:3px solid #2f2f2f; color: #2f2f2f;}
.formTag .cek:hover{ border-bottom:3px solid #2f2f2f; color: #2f2f2f;}
.formLab li{ display:none;}
.formLab li td{ line-height:50px; border-bottom:1px dashed #CCCCCC;}
.formBtn{text-align:center; margin-top:10px;}

.lable2{ color:#FFF; margin-right:10px; font-size:12px; padding:1px 8px 1px 8px}
.lable{ color:#FFF; margin-left:10px; font-size:12px; padding:1px 8px 1px 8px}
.yellow{ background: #FC0;}
.blue{ background: #09F}
.red{ background: #C30;}
.black{ background: #2F2F2F;}
.gray{ background: #CCC;}

</style>
<title>信息发布管理</title>
<script>
function formCek(cekOpt){
	cekOpt = cekOpt.split(",");
	for(var i in cekOpt){
		var thisOpt = $("#"+cekOpt[i]).val();
		if(thisOpt==""){
			$("#"+cekOpt[i]).focus();
				
			var Text = $("label[for='"+cekOpt[i]+"']").html();
			Text = Text.replace(":","");
			Text = Text.replace("：","");
			
			alert(Text+"不可为空！");
			return false;
			} 
		}
	alert("ok");
	return false;
	} 
</script>
<script type="text/javascript">
    var Nums=0;
	$(document).ready(function() {
	$(".formTag a").click(function(){
		$(".formTag a:eq("+Nums+")").removeClass("cek");
		$(".formLab li:eq("+Nums+")").hide();
		Nums = $(this).index();
		$(this).addClass("cek");
		$(".formLab li:eq("+Nums+")").show();
		})
	$(".formTag a:eq("+Nums+")").addClass("cek");
	$(".formLab li:eq("+Nums+")").show();
	});
	
	function add(form){
		$("#".form).submit();
	}
	
	function del(ID,TABLE){
		if(ID == '' || TABLE == '') return;
		if(confirm("您确定要删除吗？")){
			$.ajax({    
				url:'/schoollife/admin/index.php/home/index/Del', 
				type:'POST', 
				timeout:3000,   
				async:false,
				data:{id:ID,table:TABLE},
				success:function(obj){ 
				   var obj = eval('('+obj+')');
				   alert(obj.msg);
				   if(obj.code!=0){
					   return false;
				   }
				   for(var i in row = obj.id){
					$("#list_"+row[i]).remove();
				   }
		        }  
			  });
						  
		}
	}
	
	/** 批量删除 **/
	function batchDel(){
		if($("input[name='IDCheck']:checked").size()<=0){
			art.dialog({icon:'error', title:'友情提示', drag:false, resize:false, content:'至少选择一条', ok:true,});
			return;
		}
		// 1）取出用户选中的checkbox放入字符串传给后台,form提交
		var allIDCheck = "";
		$("input[name='IDCheck']:checked").each(function(index, domEle){
			bjText = $(domEle).parent("td").parent("tr").last().children("td").last().prev().text();
// 			alert(bjText);
			// 用户选择的checkbox, 过滤掉“已审核”的，记住哦
			if($.trim(bjText)=="已审核"){
// 				$(domEle).removeAttr("checked");
				$(domEle).parent("td").parent("tr").css({color:"red"});
				$("#resultInfo").html("已审核的是不允许您删除的，请联系管理员删除！！！");
// 				return;
			}else{
				allIDCheck += $(domEle).val() + ",";
			}
		});
		// 截掉最后一个","
		if(allIDCheck.length>0) {
			allIDCheck = allIDCheck.substring(0, allIDCheck.length-1);
			// 赋给隐藏域
			$("#allIDCheck").val(allIDCheck);
			if(confirm("您确定要批量删除这些记录吗？")){
				// 提交form
				$("#submitForm").attr("action", "/xngzf/archives/batchDelFangyuan.action").submit();
			}
		}
	}

	/** 普通跳转 **/
	function jumpNormalPage(page){
		$("#submitForm").attr("action", "house_list.html?page=" + page).submit();
	}
	
	/** 输入页跳转 **/
	function jumpInputPage(totalPage){
		// 如果“跳转页数”不为空
		if($("#jumpNumTxt").val() != ''){
			var pageNum = parseInt($("#jumpNumTxt").val());
			// 如果跳转页数在不合理范围内，则置为1
			if(pageNum<1 | pageNum>totalPage){
				art.dialog({icon:'error', title:'友情提示', drag:false, resize:false, content:'请输入合适的页数，\n自动为您跳到首页', ok:true,});
				pageNum = 1;
			}
			$("#submitForm").attr("action", "house_list.html?page=" + pageNum).submit();
		}else{
			// “跳转页数”为空
			art.dialog({icon:'error', title:'友情提示', drag:false, resize:false, content:'请输入合适的页数，\n自动为您跳到首页', ok:true,});
			$("#submitForm").attr("action", "house_list.html?page=" + 1).submit();
		}
	}
	
	function autofill(JSON){
		for(var i in JSON){
		   if($("#"+i).attr('type')=='checkbox' && JSON[i]==1){
			   alert(JSON[i]);
			   }
		   $("#"+i).val(JSON[i]);
		}
	}
</script>
<style>
	.alt td{ background:black !important;}
</style>


</head>
<body>
<div id="top_nav">
    <span id="here_area_bottom"><a href="/schoollife/admin/index.php/home/index/Tow" class="actBtn lsf">新增栏目</a></span><span id="here_area">当前位置：信息管理&nbsp;>&nbsp;信息发布管理</span>
</div>
<div id="top_nav_p"></div>



<form name="select" action="" method="post">
查询: 
<select name="condition">
<option>二手信息</option>
<option>寻物启事</option>
<option>失物招领</option>
<option>其他</option>

</select>
<input type="submit" value="确定" />
</form>
<form id="myForm" name="myForm" action="" method="post">
    <input type="hidden" name="allIDCheck" value="" id="allIDCheck"/>
    <input type="hidden" name="fangyuanEntity.fyXqName" value="" id="fyXqName"/>
    <div id="container">
      <div class="ui_content">
            <div class="ui_tb">
                <table class="table" cellspacing="0" cellpadding="0" width="100%" align="center" border="0">
                    <tr>
                        <th width="30" align="center"><input type="checkbox" id="all" onclick="selectOrClearAllCheckbox(this);" />
                        </th>
                        <th align="left">物品名称</th>
                        <th align="100">发布类型</th >
                         <th align="100">发布时间</th>
                          <th align="100">QQ</th> 
                          <th align="100">电话</th>
                        
                        <th width="180">操作</th>
                    </tr>	
                    <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                        <td align="center"><input type="checkbox" name="IDCheck" value="14458579642011" class="acb" /></td>
                        <td align="left"> <?php echo ($data["message_tittle"]); ?></td>
                        <td align="center"><?php echo ($data["span_1"]); ?></td>
                        <td align="center"><?php echo ($data["time"]); ?></td >
                        <td align="center"><?php echo ($data["qq"]); ?></td >
                        <td align="center"><?php echo ($data["tel"]); ?></td >
                        <td align="center">
                                 <a href="/schoollife/admin/index.php/home/index/two_edit<?php if($data['span_1'] == '失物招领'): ?>02<?php else: ?>01<?php endif; ?>/cid/<?php echo ($data["id"]); ?>" >编辑</a>
                              <a href="/schoollife/admin/index.php/home/index/deleAttr/id/<?php echo ($data["id"]); ?>/table/message_2">删除</a>
                            
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                 
                </table>
            </div>
        </div>
    </div>
</form>


</body>
</html>