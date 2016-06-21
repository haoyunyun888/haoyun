<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="generator" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<link href="public/css/haiersoft.css" rel="stylesheet" type="text/css" media="screen,print" />
<link href="public/css/print.css" rel="stylesheet" type="text/css"  media="print" />
<script src="public/js/jquery-1.10.1.min.js"></script>
<script src="public/js/side.js" type="text/javascript"></script>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body>
<!-- wrap_left -->
<div class="wrap_left" id="frmTitle" name="fmTitle">
<!-- Logo -->
<div id="Logo"><span>人单合一</span></div>
<!-- /Logo -->

<!-- menu_list -->
<script>
$(function() {
    $(".menu_list dd");
    $(".menu_list dt").click(function(){
        $(this).toggleClass("open").next().slideToggle("fast");
    });
});
</script>
<div class="menu_list">
<dl>
<dt><span>公众号管理</span></dt>
<dd><a href="index.php?r=publicaccount/add" >添加公众号</a>
    <a href="index.php?r=publicaccount/show" >管理公众号</a>
</dd>

<dt><span>自定义文字回复</span></dt>
<dd><a href="index.php?r=autoresponse/add" title="二级分类">添加规则</a>
    <a href="index.php?r=autoresponse/show" title="二级分类">管理规则</a>
</dd>

<dt><span>一级分类名称</span></dt>
<dd><a href="" title="二级分类">二级分类</a>
<a href="" title="二级分类">二级分类</a>
<a href="" title="二级分类">二级分类</a>
<a href="" title="二级分类">二级分类</a></dd>



</dl>
</div>
<!-- /menu_list -->
</div>
<!-- /wrap_left -->

<!-- picBox -->
<div class="picBox" onclick="switchSysBar()" id="switchPoint"></div>
<!-- /picBox -->



<!-- wrap_right -->
<div class="wrap_right">
<header>
<!-- Header -->
<div id="Header">
<!-- Head -->
<div id="Head">
<h1 title="1408phpE五组微E系统管理后台">1408phpE五组微E系统管理后台</h1>
<script language="javascript">
function showmenu(id){id.style.visibility = "visible";}
function hidmenu(){UserList.style.visibility = "hidden";}
document.onclick = hidmenu;
</script>
<div class="user"><a href="javascript:showmenu(UserList)"><?php echo $_COOKIE['u_name'] ?></a>
<div id="UserList"><a href="">修改</a>
<a href="">注销</a>
<a href="index.php?r=user/logout">退出</a></div>
</div>
</div>
</header>
<!-- Contents -->
<?=$content?>
<!-- /Contents -->

<!-- /footer -->
<footer>
<address>电子邮箱：13126726903@163.com  技术支持：五组全体成员<br>1408phpE版权所有  Copyright &copy; 2016 Haiersoft Corporation, All Rights.</address>
</footer>
<!-- /footer -->
</div>
<!-- /wrap_right -->
</body>
</html>
<script src="jquery-2.1.4.min.js"></script>
<script>
    $(function(){
        $(".del").click(function(){
            if(window.confirm("是否删除")){
                var pa_id=$(this).attr('id');
                $.ajax({
                    url:'index.php?r=publicaccount/del',
                    type:'post',
                    data:{
                        pa_id:pa_id
                    },success:function(msg){
                        if(msg==0){
                            alert('删除失败');
                        }
                    }
                })
            }
        })
    })
</script>
