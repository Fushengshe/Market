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
>http://www.fushengshe.com/Market/public/index.php/Index/Users/login_test

数据传输方式为：GET

数据传输格式为：JSON:

参数(类型) | 说明 | 示例
----|------|----
username(string) | 传入用户名  | luqijian
password(string) | 传入密码  | luqijian123

如果登录成功将返回

`{"status":1,"msg":"登陆成功"}`

如果登录失败将返回

`{"status":0,"msg":"登陆失败，用户名或者密码错误"}`

###用户的登出

>http://www.fushengshe.com/Market/public/index.php/Index/Users/login_test


数据传输方式为：任意

数据传输格式为：JSON:

访问API之后会返回

`{"status":1,"msg":"用户注销成功"}`


##用户信息管理
###用户列表显示

>http://www.fushengshe.com/Market/public/index.php/Index/Users/user_list

**使用本功能需要先登录**

数据传输方式为：任意

数据传输格式为：JSON:

访问API后返回用户列表的信息

`[{"id":1,"username":"admin","password":"e10adc3949ba59abbe56e057f20f883e","usergroup":5,"userstatus":1,"user_attr_id":0},{"id":3,"username":"guoqingzhe","password":"e10adc3949ba59abbe56e057f20f883e","usergroup":1,"userstatus":0,"user_attr_id":1},{"id":4,"username":"hequanli","password":"e10adc3949ba59abbe56e057f20f883e","usergroup":1,"userstatus":1,"user_attr_id":0}]`

###用户添加（或可用于注册）

>http://www.fushengshe.com/Market/public/index.php/Index/Users/user_list

数据传输方式：POST

数据传输格式：JSON

参数(类型) | 说明 | 示例
----|------|----
username(string) | 传入用户名  | luqijian
password(string) | 传入密码  | luqijian123
usergroup(int) | 传入用户群组ID  | 5

访问API成功后返回

`{"status":1,"msg":"用户添加成功"}`

失败后返回

`{"status":0,"msg":"用户添加失败"}`


###用户修改（可用于用户信息完善，因其修改的是用户的个人profile）
数据传输方式：POST

数据传输格式：JSON

参数(类型) | 说明 | 示例
----|------|----
id(int) | 用户ID  | 3
truename(string) | 用户真实姓名  | 卢其坚
addr(string) | 用户地址  | 河北省秦皇岛市
telephone(string) | 用户固定电话  | 03358060050 
phone(string) | 用户电话  | 13232323232 
email(string) | 用户email  | lqj@qq.com 
hobbys(string) | 用户爱好  | 电脑，书法
 
 

访问API成功后返回

`{"status":1,"msg":"信息修改成功"}`

失败后返回

`{"status":0,"msg":"信息修改失败"}`
