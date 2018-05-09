<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/news/Public/lib/html5shiv.js"></script>
    <script type="text/javascript" src="/news/Public/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/news/Public/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/news/Public/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/news/Public/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/news/Public/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/news/Public/static/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="/news/Public/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>进度查询</title>
</head>
<body>
<div class="mt-20">
    <table class="table table-border table-bordered table-bg table-hover table-sort">
        <thead>
        <tr class="text-c">
            <th width="40"><input name="" type="checkbox" value=""></th>
            <th width="60">订单ID</th>
            <th width="80">文章标题</th>
            <th width="150">提交时间</th>
            <th width="100">媒体</th>
            <th>费用</th>
            <th width="100">平台</th>
            <th width="150">存储路径</th>
            <!--<th width="150">提交时间</th>-->
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($productList)): $i = 0; $__LIST__ = $productList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c">
                <td><input name="" type="checkbox" value=""></td>
                <td><?php echo ($vo["id"]); ?></td>
                <td><?php echo ($vo["order_title"]); ?></td>
                <td><?php echo ($vo["addtime"]); ?></td>
                <td><?php echo ($vo["media"]); ?></td>
                <td><?php echo ($vo["media_price"]); ?></td>
                <td><?php echo ($vo["mediaid3"]); ?></td>
                <td ><a href="http://127.0.0.1/news/Uploads/<?php echo ($vo["url"]); ?>" target="_blank"><?php echo ($vo["url"]); ?></a></td>
                <!--<td ></td>-->
                <!--<td>2014-6-11 11:11:42</td>-->
                <td class="td-status"><button><span class="label label-success radius">撤单</span></button></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/news/Public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/news/Public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/news/Public/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/news/Public/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/news/Public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/news/Public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/news/Public/ib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
    $('.table-sort').dataTable({
        "aaSorting": [[ 1, "desc" ]],//默认第几个排序
        "bStateSave": true,//状态保存
        "aoColumnDefs": [
            //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
            {"orderable":false,"aTargets":[0,8]}// 制定列不参与排序
        ]
    });
</script>
</body>
</html>