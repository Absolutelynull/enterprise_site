<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/index\view\page\page.htm";i:1559377641;s:80:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/index\view\common\top.htm";i:1559375952;s:83:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/index\view\common\footer.htm";i:1559374964;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>童老师ThinkPHP5交流群：484519446</title>
    <meta name="description" content="童老师ThinkPHP5交流群：484519446"/>
    <meta name="keywords" content="童老师ThinkPHP5交流群：484519446"/>
    <link rel="stylesheet" type="text/css" media="all" href="__INDEX__/style//style.css"/>
    <script src="__INDEX__/style/e/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="__INDEX__/style/e/jquery.js" type="text/javascript"></script>
    <script src="__INDEX__/style/e/jquery.error.js" type="text/javascript"></script>
    <script src="__INDEX__/style/e/jtemplates.js" type="text/javascript"></script>
    <script src="__INDEX__/style/e/jquery.form.js" type="text/javascript"></script>
    <script src="__INDEX__/style/e/lazy.js" type="text/javascript"></script>
    <script type="text/javascript" src="__INDEX__/style/e/wp-sns-share.js"></script>
    <script type="text/javascript" src="__INDEX__/style/e/voterajax.js"></script>
    <script type="text/javascript" src="__INDEX__/style/e/userregister.js"></script>
    <link rel="stylesheet" href="__INDEX__/style//pagenavi-css.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="__INDEX__/style//votestyles.css" type="text/css"/>
    <link rel="stylesheet" href="__INDEX__/style//voteitup.css" type="text/css"/>
    <style type="text/css">
        #wrapper {
            background-color: #ffffff;
        }

        .single_entry {
            margin-top: 30px;
        }
    </style>
</head>
<body class="single2">

<script type="text/javascript">
    function showMask() {
        $("#mask").css("height", $(document).height());
        $("#mask").css("width", $(document).width());
        $("#mask").show();
    }
</script>
<div id="mask" class="mask" onclick="CloseMask()"></div>
<div id="header_wrap">
    <div id="header">
        <div style="float: left; width: 310px;">
            <h1>
                <a href="/" title="DEMO12演示站">DEMO12演示站</a>
                <div class="" id="logo-sub-class">
                </div>
            </h1>
        </div>
        <div id="navi">

            <ul id="jsddm">
            <li><a class="navi_home" href="/">首页</a></li>
            <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;if($cate['type'] == 1): ?>
            <li>
                <a href="<?php echo url('artlist/index',['cateid'=>$cate['id']]); ?>" <?php if($cate['children'] != 0): ?>class="havechild" <?php endif; ?>><?php echo $cate['name']; ?></a>
                <?php if($cate['children'] != 0): ?>
                <ul>
                    <?php if(is_array($cate['children']) || $cate['children'] instanceof \think\Collection || $cate['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cate['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$children): $mod = ($i % 2 );++$i;?>
                    <li><a href="<?php echo url('artlist/index',['cateid'=>$children['id']]); ?>"><?php echo $children['name']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <?php endif; ?>
            </li>
            <?php endif; if($cate['type'] == 3): ?>
            <li>
                <a href="<?php echo url('page/index',['cateid'=>$cate['id']]); ?>" <?php if($cate['children'] != 0): ?>class="havechild" <?php endif; ?>><?php echo $cate['name']; ?></a>

            </li>
            <?php endif; if($cate['type'] == 2): ?>
            <li>
                <a href="<?php echo url('imglist/index',['cateid'=>$cate['id']]); ?>" <?php if($cate['children'] != 0): ?>class="havechild" <?php endif; ?>><?php echo $cate['name']; ?></a>

            </li>
            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </ul>

            <div style="clear: both;">
            </div>


        </div>
        <div style="float: right; width: 209px;">
            <div class="widget" style="height: 30px; padding-top: 20px;">
                <div style="float: left;">
                    <form name="formsearch" action="<?php echo url('search/index'); ?>"><input type="hidden" name="kwtype" value="0">
                        <input name="kw" type="text" style="background-color: #000000;padding-left: 10px; font-size: 12px;font-family: 'Microsoft Yahei'; color: #999999;height: 29px; width: 160px; border: solid 1px #666666; line-height: 28px;" id="go" value="在这里搜索..." onfocus="if(this.value=='在这里搜索...'){this.value='';}" onblur="if(this.value==''){this.value='在这里搜索...';}">
                    </form>
                </div>
                <div style="float: left;">
                    <img src="./images/search-new.png" id="imgSearch" style="cursor: pointer; margin: 0px;
                        padding: 0px;" onclick="ISearch()"></div>
                <div style="clear: both;">
                </div>
            </div>
        </div>

    </div>
</div>
<div id="wrapper">

    <div class="single_entry page_entry">
        <div class="entry">
            <h2 style="margin: 0px 0px 20px; padding: 0px; border: 0px; font-size: 22px; vertical-align: baseline; font-family: 'Microsoft Yahei', 'Trebuchet MS', Arial, Tahoma, Helvetica, sans-serif; line-height: 26px; color: rgb(51, 51, 51);">
                <?php echo $cates['name']; ?></h2>
            <?php echo $cates['content']; ?>

            <div class="clear">
            </div>
        </div>
    </div>

</div>
<div id="footer_wrap">

    <div id="footer">
    <div class="footer_navi">
        <ul id="menu-%e5%b0%be%e9%83%a8%e5%af%bc%e8%88%aa" class="menu">
            <?php if(is_array($cateBottomRecs) || $cateBottomRecs instanceof \think\Collection || $cateBottomRecs instanceof \think\Paginator): $i = 0; $__LIST__ = $cateBottomRecs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cateBottomRec): $mod = ($i % 2 );++$i;switch($cateBottomRec['type']): case "1": ?>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-156">
                        <a href="<?php echo url('artlist/index',['cateid'=>$cateBottomRec['id']]); ?>"><?php echo $cateBottomRec['name']; ?></a>
                    </li>
                <?php break; case "1": ?>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-156">
                        <a href="<?php echo url('imglist/index',['cateid'=>$cateBottomRec['id']]); ?>"><?php echo $cateBottomRec['name']; ?></a>
                    </li>
                <?php break; case "3": ?>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-156">
                        <a href="<?php echo url('page/index',['cateid'=>$cateBottomRec['id']]); ?>"><?php echo $cateBottomRec['name']; ?></a>
                    </li>
                <?php break; endswitch; endforeach; endif; else: echo "" ;endif; ?>

        </ul>
    </div>
    <div class="footer_info">
            <span class="legal">Copyright &#169; 2016-2020 qq群：484519446 版权所有&#160;&#160;&#160;<a href="#">
                琼ICP备******号</a>&#160;&#160;&#160;

    </div>
</div>

</div>
<div style="display: none;" id="scroll">
</div>
<script type="text/javascript" src="__INDEX__/style/e/z700bike_global.js"></script>
</body>
</html>
