<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\phpStudy\WWW\huaxian\public/../application/admin\view\work\lst_liucheng.html";i:1527214262;}*/ ?>
   <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,member-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="icon" href="" type="image/x-icon"/>
<link href="__PUBLIC__/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="../../../static/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery.simplePagination.js"></script> 
<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/page.css"/>
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>企业入驻流程图</title>
</head>
<body>

<nav class="breadcrumb"> 
     企业入驻流程图管理 <span class="c-gray en">&gt;</span> 
     企业入驻流程图列表 
     <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="pd-20">
  <div class="text-c"> 
  </div>
  <div class="cl pd-5 bg-1 bk-gray mt-20"> 
    <span class="l">
          <a href="<?php echo url('Work/liuchengadd'); ?>" class="btn btn-danger radius" >
          <i class="Hui-iconfont">&#xe600;</i> 添加企业入驻流程图</a>
    </span> 
    <span class="l" style="margin-left: 20px;">
          <a href="<?php echo url('Work/liuchengedit',array('id'=>$list['id'])); ?>" class="btn btn-danger radius" >
          <!-- <i class="Hui-iconfont">&#xe600;</i> --> 修改企业入驻流程图内容</a>
    </span>
    </div>
    <div class="mt-20">
      <div class="row cl" style="margin-top: 40px;margin-left: 200px;">
            <label class="form-label col-2">企业入驻流程图图片：</label>
            <div class="formControls col-8">
              <div class="userimg"><img src="__IMG__<?php echo $list['image']; ?>" style="width: 500px;height: 300px;></div>
            </div>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script>  
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script> 
</body>
</html>