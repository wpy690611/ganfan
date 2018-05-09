<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/Public/Admin/lib/html5shiv.js"></script>
    <script type="text/javascript" src="/Public/Admin/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>用户访问查询</title>
</head>
<body>
<div class="mt-20">
    <table class="table table-border table-bordered table-bg table-hover table-sort">
        <thead>
        <tr class="text-c">
            <th width="40"><input name="" type="checkbox" value=""></th>
            <th width="60">ID</th>
            <th width="80">手机号码</th>
            <th width="100">提交时间</th>
            <th width="100">询问字段</th>
            <th width="150">用户姓名</th>
            <th width="60">url来源</th>
            <th width="60">关键词</th>
            <!-- <th width="60" class="text-c">审核专员</th> -->
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($phone)): $i = 0; $__LIST__ = $phone;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c">
            <td><input name="" type="checkbox" value=""></td>
            <td><?php echo ($vo["id"]); ?></td>
            <td><?php echo ($vo["phone"]); ?></td>
            <td><?php echo ($vo["ctime"]); ?></td>
            <td ><?php echo ($vo["stock"]); ?></td>
            <td><?php echo ($vo["name"]); ?></td>
            <td><?php echo ($vo["url"]); ?></td>
            <td><?php echo ($vo["keyword"]); ?></td>
            <!-- <td class="td-status"><span class="label label-success radius">已发布</span></td>
            <td class="td-manage"></td>
            <td class="text-c">操作</td> -->
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
    $('.table-sort').dataTable({
        "aaSorting": [[ 1, "desc" ]],//默认第几个排序
        "bStateSave": true,//状态保存
        "aoColumnDefs": [
            //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
            {"orderable":false,"aTargets":[0,4]}// 制定列不参与排序
        ]
    });

    /*图片-添加*/
    function picture_add(title,url){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }

    /*图片-查看*/
    function picture_show(title,url,id){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }

    /*图片-审核*/
    function picture_shenhe(obj,id){
        layer.confirm('审核文章？', {
                btn: ['通过','不通过'],
                shade: false
            },
            function(){
                $(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="picture_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
                $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
                $(obj).remove();
                layer.msg('已发布', {icon:6,time:1000});
            },
            function(){
                $(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="picture_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
                $(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
                $(obj).remove();
                layer.msg('未通过', {icon:5,time:1000});
            });
    }

    // /*图片-下架*/
    // function picture_stop(obj,id){
    //  layer.confirm('确认要下架吗？',function(index){
    //      $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="picture_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
    //      $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
    //      $(obj).remove();
    //      layer.msg('已下架!',{icon: 5,time:1000});
    //  });
    // }

    // /*图片-发布*/
    // function picture_start(obj,id){
    //  layer.confirm('确认要发布吗？',function(index){
    //      $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="picture_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
    //      $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
    //      $(obj).remove();
    //      layer.msg('已发布!',{icon: 6,time:1000});
    //  });
    // }

    // /*图片-申请上线*/
    // function picture_shenqing(obj,id){
    //  $(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
    //  $(obj).parents("tr").find(".td-manage").html("");
    //  layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
    // }

    // /*图片-编辑*/
    // function picture_edit(title,url,id){
    //  var index = layer.open({
    //      type: 2,
    //      title: title,
    //      content: url
    //  });
    //  layer.full(index);
    // }

    // /*图片-删除*/
    // function picture_del(obj,id){
    //  layer.confirm('确认要删除吗？',function(index){
    //      $.ajax({
    //          type: 'POST',
    //          url: '',
    //          dataType: 'json',
    //          success: function(data){
    //              $(obj).parents("tr").remove();
    //              layer.msg('已删除!',{icon:1,time:1000});
    //          },
    //          error:function(data) {
    //              console.log(data.msg);
    //          },
    //      });
    //  });
    // }
</script>
</body>
</html>