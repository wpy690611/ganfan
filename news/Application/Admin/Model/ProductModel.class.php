<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2018/3/21
 * Time: 14:32
 */
namespace Admin\Model;
use Think\Model;
class GoodsModel extends Model{
    function upload_file(){
        // 设置文件上传的配置项
        $config = C('FILE_UPLOAD');
        // 实例化文件上传类
        $upload = new \Think\Upload($config);
        // 调用upload方法进行文件上传
        $upload_result = $upload->upload();
        if(!$upload_result){
            return $upload->getError();
        } else {
            //文件上传成功后，拼接文件上传路径
            return $upload_result;
        }
    }
    public function upload()
    {
        $uplode= new \Think\Upload();//造实例化对象：造一个上传文件的类
        $uplode->maxSize="31457280";//上传文件的大小
        $uplode->exts=array('jpg','gif','png','jpeg');//设置图片格式
        $uplode->autoSub=true;//自动使用子目录保存上传文件 默认为true
        $uplode->subName=array('date','Ymd');//文件命名方式已时期时间戳命名
        $uplode->rootPath="./public/";//表示在public文件夹下
        $uplode->savePath="./Uploads/";//设置附件上传目录:表示在public文件夹下自动建一个Uploads文件夹
        // 上传文件
        $info   =   $uplode->upload();
        if(!$info)
        {
            // 上传错误提示错误信息
            $this->error($uplode->getError());
        }else{
            // 上传成功 获取上传文件信息
            foreach($info as $file)
                echo $file['savepath'].$file['savename'];
        }
    }
}