<?php

namespace app\home\controller;

use core\Controller;
use core\model\Model;
use core\view\View;
use system\model\Article;

class Entry extends Controller
{

    public function index()
    {
        //调用module方法中Base里面的find查找数据的方法
        $result = Article::where('id > 20')->get()->toArray();


        //调用前台首页的方法
//        return View::make();
//        datas($result)调用了Base下面的datas方法并返回了数据执行了对象返回的自动加载。这样模板页面就可以得到$this->news的数据进行循环输出
        return (new View())->make()->with('version','版本:v1.9')->datas($result);//这个传递的参数会传递到View里面寻找方法 view会接收到传递的这个值。在去Base里面寻找当前with的方法
        //主管文件接到这个返回 执行echo将这个文件输出给用户视图

    }


}


?>