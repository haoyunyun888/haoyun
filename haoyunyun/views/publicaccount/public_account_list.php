<!-- MainForm -->
<div id="MainForm">
    <div class="form_boxA" id="sc">
        <h2>公众号列表</h2>
        <table cellpadding="0" cellspacing="0">
            <?php foreach($arr as $k=>$v){?>
                <h1 style="float: left"><?php echo $v['pa_name']?></h1>
                <h3 style="float: left">(微信号:<?php echo $v['pa_weixin']?>)</h3>
                <h3 style="float: left">（所属用户：创始人）</h3>
                <h3 style="float: left;margin-left: 280px;"><a href="javascript:void(0)" class="del" id="<?php echo $v['pa_id']?>" style="color: red">删除</a></h3>
                <h3 style="float: left;"><a href="index.php?r=publicaccount/xg&pa_id=<?php echo $v['pa_id']?>" class="upd" style="color: green">点击查看token</a></h3>
                <h3 class="cc"><a href="javascript:void(0)"  id="<?php echo $v['pa_id']?>" style="color: purple;"></a></h3>
                <h3 class="yc" style="display: none;"><a href="javascript:void(0)"  id="<?php echo $v['pa_id']?>" style="color: purple;">隐藏</a></h3>
                <br/>
                <h3 class="api" style="display: none">API地址: <input type="text" name="pa_appid" value="<?php echo $v['pa_appid'] ?>"/></h3><br>
                <h3 class="token" style="display: none">Token: <input style="margin-left: 10px;" type="text" name="pa_appid" value="<?php echo $v['pa_appid'] ?>"/></h3>
            <?php }?>
        </table>
        <p class="msg">共找到47条年度预算记录，当前显示从第1条至第10条</p>
    </div>
</div>
<!-- /MainForm -->