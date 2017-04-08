# 说明文件
.htaccess 是从 laravel 哪里复制过来的 

#controller 中新建目录admin/Test.php 【里面存放一个index() 方法】
            和 controller 中 新增 Admin.php 里面存放一个 test 方法，
            如果访问 ../admin/test 是只访问了 Admin.php中的test()方法，
            结论:所以尽量不要让类和目录名相同，避免冲突
#新增辅助函数文件（application\helpers），格式必须是..._helper.php  例如： common_helper.php 【首字母小写吧】 
使用如下： $this->load->helper('common'); //common指的是文件名