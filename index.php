<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

xhprof_enable(XHPROF_FLAGS_CPU+XHPROF_FLAGS_MEMORY);//加上这个参数可以使得xhprof显示cpu和内存相关的数据。

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./App/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
// 亲^_^ 后面不需要任何代码了 就是如此简单

$data = xhprof_disable();
//得到统计数据之后，以下的工作就是为页面显示做准备。
$xhprof_root = "/var/www/html";//这里填写的就是你的xhprof的路径

include_once $xhprof_root."/xhprof_lib/utils/xhprof_lib.php";
include_once $xhprof_root."/xhprof_lib/utils/xhprof_runs.php";

$xhprof_runs = new XHprofRuns_Default();
$xhp_trace = 'tp_xhp_trace';
$run_id = $xhprof_runs->save_run($data, $xhp_trace);//第二个参数在接下来的地方作为命名空间一样的概念来使用
echo "<a href='/xhprof_html/index.php?run=".$run_id."&source=".$xhp_trace."'><font color='red'>xhprof--[性能分析器]</font></a>";
