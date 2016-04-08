<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
  <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="index.css">
  <script src="bower_components/jquery/dist/jquery.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
  <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
  
  <meta name="viewport" content="user-scalable=0">   <!-- 限制無法縮放 -->
  <meta name="viewport" content="user-scalable=no">  <!-- 限制無法縮放 --> 
</head>
<body>

<div data-role="page" id="pageone">
  <div data-role="header">
    <h1>欢迎访问我的主页</h1>
  </div>

  <div data-role="content">
    <p>点击链接来查看淡入淡出效果。</p>
    <a href="#pagetwo" data-transition="fade">转到页面二</a>
  </div>

  <div data-role="footer">
    <h1>页脚文本</h1>
  </div>
</div> 

<div data-role="page" id="pagetwo">
  <div data-role="header">
    <h1>欢迎访问我的主页</h1>
  </div>

  <div data-role="content">
    <p>点击链接返回页面一。<b>注释：</b>：fade 是默认效果。</p>
    <a href="#pageone">返回页面一</a>
  </div>

  <div data-role="footer">
    <h1>页脚文本</h1>
  </div>
</div> 

</body>
</html>
