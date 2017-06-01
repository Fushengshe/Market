# 易换宝－后端API文档

你可以从Github上找到源码[Github 传送门](https://github.com/Fushengshe/Market)
***


##测试API 
前端应该使用fetch方法与后端进行尝试的数据交互，交互地址为：
(有的Apache可能在php方法存在header的情况下localhost调试会500 ，如果在你的电脑上面500了，请注释掉方法前面的header，并检查文件权限)
>http://www.fushengshe.com/Market/public/index.php/Index/Index/login_test

数据传输方式为：POST

数据传输格式为：JSON:

`body: JSON.stringify({
                 mobile: '111',
                 password: '121212'
             })`
             
fetch中需要写明的header为：
`"Content-type":"application/json"`

测试接口会将POST收到的数据悉数返回，同样也是JSON格式

##正片开始
##用户注册登录管理
###用户的登录
>http://www.fushengshe.com/Market/public/index.php/Index/Index/login_test

数据传输方式为：GET

数据传输格式为：JSON:

dog | bird | cat
----|------|----
foo | foo  | foo
bar | bar  | bar
baz | baz  | baz




