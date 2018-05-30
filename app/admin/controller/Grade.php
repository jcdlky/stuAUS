<?php
namespace app\admin\controller;

use core\view\View;
use system\model\Grade as g;

class Grade extends Common{
    //定义添加班级的方法
    public function index(){
        //获取班级数据库表中的所有数据，这里的g是因为命名空间Grade和当前的类名称重复了使用as重新命名。获取到的数据是一个对象，在调用toArray方法转成数组
        $data = g::get()->toArray();
        //加载班级列表模板
        return View::make()->with('grade',$data);
    }


    //加载添加班级模板
    public function create(){

        return View::make();
    }


    public function add(){
        //获取post数据
        $post = $_POST;
        //将post数据插入grade表中
        $result = g::add($post);
        //判断返回结果是否为真,提示不同消息
        if ($result){
            return $this->redirect('index.php?s=admin/grade/index')->message('添加成功');
        }else{
            return $this->redirect()->message('添加失败');
        }
    }


//定义编辑的方法
    public function edit(){
        //获取GET传递的标题ID
        $id = $_GET['id'];
        //查找ID对应数据库的标题
        $data = g::find($id)->toArray();
        //判断是否POST递交
        if($_POST){
            //获取post数据
            $post=$_POST;
            //判断当前修改的班级名称是否和数据库库中的名称一样，如果一样就返回重新修改
            if($post['gname'] == $data['gname']){
                return $this->redirect()->message('班级已经存在');
            }
            //将post数据插入grade表中
            $result = g::edit($post);
//        echo "<pre>";
//        print_r($post) ;die;
            //对修改后的返回信息进行判断
            if ($result){
                return $this->redirect('index.php?s=admin/grade/index')->message('编辑成功');
            }else{
                return $this->redirect()->message('编辑失败');
            }
        }
        return View::make()->with('data',$data['gname']);
    }




    public function delete(){
        //获取需要删除班级的id
        $id = $_GET['id'];
        $result = g::delete($id);
        //判断返回结果是否为真,提示不同消息并跳转或返回
        if ($result){
            return $this->redirect('index.php?s=admin/grade/index')->message('删除成功');
        }else{
            return $this->redirect()->message('删除失败');
        }

    }


    public function ajaxDelete(){
        //获取get参数中的需要删除的班级id
        $id = $_GET['id'];
        //将对应$id的班级数据删除
        $result = g::delete($id);
        //判断$result返回结果是否为真,返回给前台不同的处理结果
        if ($result){
            //如果为真,删除成功
            return json_encode(['valid' => 1,'message' => '班级删除成功']);
        }else{
            //为假,删除失败
            return json_encode(['valid' => 0,'message' => '班级删除失败']);
        }
    }





}







?>