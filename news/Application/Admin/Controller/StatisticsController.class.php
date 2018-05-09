<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2018/3/23
 * Time: 15:04
 */

namespace Admin\Controller;


use Think\Controller;

class StatisticsController extends Controller
{
public function statisticsShow(){
//
//    $em = 0;
//        //今天
//        $sql= "select count(*) from qpp_product where to_days(addtime) = to_days(now()) ";
//    if($em==1)
//    {
//        //昨天
//        $sql = "select count(*) from tb where (TO_DAYS( NOW()) - TO_DAYS( addtime )) =1 ";
//    }
//    else if ($em==2)
//    {
//        //7天
//        $sql= " select count(*) from tb where(TO_DAYS( NOW()) - TO_DAYS( addtime )) <=7 ";
//    }
//    else if ($em==3)
//    {
//        //1个月
//        $sql= " select count(*) from tb where (TO_DAYS( NOW()) - TO_DAYS( addtime )) <=30 ";
//    }
    //今天
    $statistics_data['day']=M('product')->where("to_days(addtime) = to_days(now())")->count();
    //近七天
    $statistics_data['week']=M('product')->where("to_days(now()) - to_days(addtime) <= 7")->count();
    //近一个月
    $statistics_data['moon']=M('product')->where("to_days(now()) = to_days(addtime) <= 30")->count();
//    //将$statistics_data中的数据放在json 中 html 页面的js 中
//    $statistics_data_json=json_encode($statistics_data);
//    dump($statistics_data_json);
    $this->assign('statistics',$statistics_data);
    $this->display('Statistics/statistics');
}
}