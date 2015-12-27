<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>搜索</title>
        <link rel="stylesheet" type="text/css" href="<?php echo Libs\Common::getConfig('cssHost');?>/css/baidu.css"></link>
        <script type="text/javascript" src="https://ss1.bdstatic.com/5eN1bjq8AAUYm2zgoY3K/r/www/cache/static/protocol/https/jquery/jquery-1.10.2.min_f2fb5194.js"></script>
        <script type='text/javascript' src="<?php echo Libs\Common::getConfig('cssHost');?>/js/baidu-header.js"></script>
    </head>
    <body>
        <div class="wrapper_l" id="wrapper">
            <div id="head" class="s_down"><?php include __DIR__.'/header.php';?></div>
            <div class="s_tab" id="s_tab" ></div>
            <div id="wrapper_wrapper">
                <div id="container" class="container_l"><?php echo $this->viewContent;?></div>
                <div id="foot" style="display:none;"><?php include __DIR__.'/footer.php';?></div>
            </div>
            
        </div>
    </body>
</html>
