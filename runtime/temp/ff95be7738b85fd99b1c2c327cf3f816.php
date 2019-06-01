<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:85:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/index\view\artlist\artlist.htm";i:1559377640;s:80:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/index\view\common\top.htm";i:1559375952;s:82:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/index\view\common\right.htm";i:1559013665;s:83:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/index\view\common\footer.htm";i:1559374964;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>童老师ThinkPHP5交流群：484519446</title>
    <meta name="description" content="童老师ThinkPHP5交流群：484519446"/>
    <meta name="keywords" content="童老师ThinkPHP5交流群：484519446"/>
    <link rel="stylesheet" type="text/css" media="all" href="__INDEX__/style/style.css"/>
    <script src="__INDEX__/style/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jquery.error.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jtemplates.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jquery.form.js" type="text/javascript"></script>
    <script src="__INDEX__/style/lazy.js" type="text/javascript"></script>
    <script type="text/javascript" src="__INDEX__/style/wp-sns-share.js"></script>
    <script type="text/javascript" src="__INDEX__/style/voterajax.js"></script>
    <script type="text/javascript" src="__INDEX__/style/userregister.js"></script>

    <link rel="stylesheet" href="./style/votestyles.css" type="text/css"/>
    <link rel="stylesheet" href="./style/voteitup.css" type="text/css"/>
    <link rel="stylesheet" href="./style/list.css" type="text/css"/>
</head>
<body id="list_style_2" class="list_style_2">
<script>
    function subForm() {

        formsearch.submit();
        //form1为form的id
    }
</script>
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
</div>

</div>
<div id="wrapper">


    <div id="xh_container">
        <div id="xh_content">

            <div class="path"><a href='#'>主页</a> >
                <?php if(is_array($posAll) || $posAll instanceof \think\Collection || $posAll instanceof \think\Paginator): $i = 0; $__LIST__ = $posAll;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pos): $mod = ($i % 2 );++$i;?>
                <a href='<?php echo url('artlist/index',['cateid'=>$pos['id']]); ?>'><?php echo $pos['name']; ?></a> >
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="clear"></div>
            <div class="xh_area_h_3" style="margin-top: 40px;">

                <?php if(is_array($artRes) || $artRes instanceof \think\Collection || $artRes instanceof \think\Paginator): $i = 0; $__LIST__ = $artRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?>
                <div class="xh_post_h_3 ofh">
                    <?php if($article['pic'] != ''): ?>
                    <div class="xh">
                        <a target="_blank" href="<?php echo url('article/index',['artid'=>$article['id']]); ?>"
                           title="<?php echo $article['title']; ?>">
                            <img src="__IMG__/<?php echo $article['pic']; ?>" alt="Alain Massabova: 40 Years in Paris BMX 视频"
                                 height="240" width="400">
                        </a>
                    </div>
                    <?php endif; ?>
                    <div class="<?php if($article[
                    'pic'] != ''): ?>r<?php endif; ?> ofh">
                    <h2 class="xh_post_h_3_title ofh" style="height:60px;">
                        <a target="_blank" href="<?php echo url('article/index',['artid'=>$article['id']]); ?>"
                           title="<?php echo $article['title']; ?>"><?php echo $article['title']; ?></a>
                    </h2>
                    <span class="time"><?php echo date("Y年m月d日 H:i:s",$article['time']); ?></span>
                    <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">
                        <?php echo $article['content']; ?>

                    </div>
                    <div class="b">
                        <a href="<?php echo url('article/index',['artid'=>$article['id']]); ?>" class="xh_readmore" rel="nofollow">read
                            more</a> <span title="<?php echo $article['zan']; ?>人赞" class="xh_love"><span
                            class="textcontainer"><span>0</span></span> </span> <span title="<?php echo $article['click']; ?>人浏览"
                                                                                      class="xh_views">
                                                    <?php echo $article['click']; ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>

            <?php echo $artRes->render(); ?>

        </div>
    </div>

    <div id="xh_sidebar">
        <!-- 右侧 -->
        <div class="widget">

    <div style="background: url('./style/img/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
    </div>
    <?php if(is_array($hotRes) || $hotRes instanceof \think\Collection || $hotRes instanceof \think\Paginator): $i = 0; $__LIST__ = $hotRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hot): $mod = ($i % 2 );++$i;?>
    <ul id="ulHot">

        <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
            <div style="float:left;width:85px;height:55px; overflow:hidden;">
                <a
                    href="<?php echo url('article/index',['artid'=>$hot['id']]); ?>" target="_blank">
                    <img src="__IMG__/<?php echo $hot['pic']; ?>"
                         width="83"
                         title="<?php echo $hot['title']; ?>"/>
                </a>
            </div>
            <div style="float:right;width:145px;height:52px; overflow:hidden;">
                <a
                    href="<?php echo url('article/index',['artid'=>$hot['id']]); ?>" target="_blank"
                    title="<?php echo $hot['title']; ?>"><?php echo $hot['title']; ?>
                </a>
            </div>
        </li>
    </ul>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>

        <div class="widget portrait">
            <div>
                <div class="textwidget">
                    <a href="/tougao.html"><img src="__INDEX__/style/img/tg.jpg" alt="鎶曠ǹ"></a><br><br>
                    <script type="text/javascript">BAIDU_CLB_fillSlot("870073");</script>
                    <script type="text/javascript">BAIDU_CLB_fillSlot("870080");</script>
                    <script type="text/javascript">BAIDU_CLB_fillSlot("870081");</script>
                </div>
            </div>
        </div>

    </div>
    <div class="clear">
    </div>
</div>
<div class="boxBor"></div>

<div class="boxBor" onclick="IBoxBor()" style="cursor:pointer;"></div>
<script type="text/javascript">
    $(function () {
        var imgHoverSetTimeOut = null;
        $('.xh_265x265 img').hover(function () {
            var oPosition = $(this).offset();
            var oThis = $(this);
            $(".boxBor").css({
                left: oPosition.left,
                top: oPosition.top,
                width: oThis.width(),
                height: oThis.height()
            });
            $(".boxBor").show();
            var urlText = $(this).parent().attr("href");
            $("#hdBoxbor").val(urlText);
        }, function () {
            imgHoverSetTimeOut = setTimeout(function () {
                $(".boxBor").hide();
            }, 500);
        });
        $(".boxBor").hover(
            function () {
                clearTimeout(imgHoverSetTimeOut);
            }
            , function () {
                $(".boxBor").hide();
            }
        );
    });

    function IBoxBor() {
        window.open($("#hdBoxbor").val());
    }

    function goanewurl() {
        window.open($("#hdUrlFocus").val());
    }
</script>

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
<script type="text/javascript" src="__INDEX__/style/z700bike_global.js"></script>

</body>
</html>
