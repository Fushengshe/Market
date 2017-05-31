<?php
/**
 * Created by PhpStorm.
 * User: hequanli
 * Date: 17/5/30
 * Time: 下午4:41
 */

namespace app\index\controller;
use think\Controller;
use think\Request;
use app\index\model\UserModel;

class Users extends Controller
{
    public function user_list(){
        //header('Access-Control-Allow-Origin : *');//有的Apache可能需要关掉header才能进行线下localhost调试
        //header('Access-Control-Allow-Methods : POST,GET,PUT,DELETE,OPTIONS');
        //header('Access-Control-Allow-Headers : token,accept,content-type,X-Requested-With');

        //$post_data  = Request::instance()->post();
        $User = new UserModel();
        $data = $User -> showlist(0);


        return json($data);
    }
}