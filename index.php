<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/26
 * Time: 17:16
 */
echo '认证成功！！';
echo exec("../github_pull.sh");
//var_dump(exec("./github_pull.sh"));
echo date("Y-m-d H:i:s");
