<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>销量表</title>
    <!-- 引入 echarts.js -->
    <script src="/news/Public/echarts.min.js"></script>
</head>
<body>
订单统计图：
<!-- 为ECharts准备一个具备大小（宽高）的Dom -->
<div id="main" style="width: 600px;height:400px;"></div>

<script type="text/javascript">
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));

    // 指定图表的配置项和数据
    var option = {
        title: {
            text: '数据统计'
        },
        tooltip: {},
        legend: {
            data:['订单量']
        },
        xAxis: {
            data: ["今日订单量","近七天订单量","近一个月订单量"]
        },
        yAxis: {},
        series: [{
            name: '订单量',
            type: 'bar',
            data: [<?php echo ($statistics["day"]); ?>,<?php echo ($statistics["week"]); ?>,<?php echo ($statistics["moon"]); ?>]
        }]
    };

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);
</script>
</body>
</html>