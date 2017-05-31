<?php

/**
 * Created by PhpStorm.
 * User: hequanli
 * Date: 17/5/30
 * Time: 下午4:44
 */

namespace app\index\model;

use think\Model;
use think\Db;
class UserModel
{
    public function showlist($cate = '0'){ //cate代表查询的usergroup 0则为全部查询，默认为0
        if($cate == '0'){
            $db = Db::name('user')
                ->select();
            return $db;
        }else{
            $db = Db::name('user')
                ->where('usergroup','=',$cate)
                ->select();
            return $db;
        }
    }
}