<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:85:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/index\view\imglist\imglist.htm";i:1559377641;s:80:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/index\view\common\top.htm";i:1559375952;s:83:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/index\view\common\footer.htm";i:1559374964;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>童老师ThinkPHP5交流群：484519446</title>
    <meta name="description" content="童老师ThinkPHP5交流群：484519446"/>
    <meta name="keywords" content="童老师ThinkPHP5交流群：484519446"/>
    <link rel="stylesheet" type="text/css" media="all" href="__INDEX__/style//style.css"/>
    <script src="__INDEX__/stylee/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="__INDEX__/stylee/jquery.error.js" type="text/javascript"></script>
    <script src="__INDEX__/stylee/jtemplates.js" type="text/javascript"></script>
    <script src="__INDEX__/stylee/jquery.form.js" type="text/javascript"></script>
    <script src="__INDEX__/stylee/lazy.js" type="text/javascript"></script>
    <script type="text/javascript" src="__INDEX__/stylee/wp-sns-share.js"></script>
    <script type="text/javascript" src="__INDEX__/stylee/voterajax.js"></script>
    <script type="text/javascript" src="__INDEX__/stylee/userregister.js"></script>

    <link rel="stylesheet" href="__INDEX__/style//votestyles.css" type="text/css"/>
    <link rel="stylesheet" href="__INDEX__/style//voteitup.css" type="text/css"/>
    <link rel="stylesheet" href="__INDEX__/style//list.css" type="text/css"/>
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
<div id="wrapper">

    <style type="text/css">
        body {
            background-image: none;
            background-color: #dedede;
            color: #999999;
            font-family: "Microsoft Yahei", "Helvetica Neue", Arial, Helvetica, sans-serif;
            font-size: 12px;
            height: 100%;
            text-align: left;
            width: 100%;
        }

        #xh_container {
            min-height: 1000px;
            background-color: #dedede;
            margin-top: 36px;
            width: 1098px;
        }

        #wrapper {
            background-color: #dedede;
        }

        #l-nav {
            background-image: url('/blog4./style/simg/look-bike-nav-bg.png');
            width: 188px;
            height: 360px;
            float: left;
        }

        #l-nav a {
            font-size: 14px;
            color: #000000;
        }

        #l-nav a:hover {
            font-size: 14px;
            color: #999999;
        }

        #l-nav div {
            padding-left: 20px;
        }

        #l-nav .l-nav-word {
            height: 40px;
            line-height: 40px;
        }

        #l-focus {
            float: right;
        }

        img {
            vertical-align: middle;
        }

        div {
            color: #666666;
        }

        #menu-item-196 a.a, #menu-item-198 a.a, #menu-item-197 a.a {
            color: #00BBEE;
        }

        #menu-item-198 {
            background-image: url('./images/up-arrow.png');
            background-position: center bottom;
            background-repeat: no-repeat;
        }

        .boxBor {
            position: absolute;
            left: 0;
            top: 0;
            display: none;
            z-index: 9999;
            background-color: #ffffff;
            opacity: 0.3;
            filter: alpha(opacity=30)
        }

    </style>
    <div id="xh_container">


        <div class="xh_265x265x00">
            <?php if(is_array($artRes) || $artRes instanceof \think\Collection || $artRes instanceof \think\Paginator): $i = 0; $__LIST__ = $artRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>
            <div style="float: left; width: 343px; height: 293px; background-color: #ffffff;
                border: solid 1px #ccc; margin-left: 15px;margin-top: 15px;">
                <div style="background-color: #cccccc; width: 313px; height: 188px; margin-top: 16px;
                    margin-left: 14px;">
                    <a target="_blank" href="<?php echo url('article/index',['artid'=>$art['id']]); ?>"><img src="__IMG__/<?php echo $art['pic']; ?>"
                                                                  alt="<?php echo $art['title']; ?>" height="188"
                                                                  width="313"></a>
                </div>
                <div style="margin-left: 14px; line-height: 25px; margin-top: 10px;">
                    <div style="font-size: 12px;color:#cccccc;"><?php echo date("Y年m月d日 H:i:s",$art['time']); ?></div>
                    <div style="font-size: 14px;height:45px;">
                        <a target="_blank" href="<?php echo url('article/index',['artid'=>$art['id']]); ?>"><?php echo $art['title']; ?></a></div>

                </div>
            </div>

            <?php endforeach; endif; else: echo "" ;endif; ?>

            <div style="clear: both;">
            </div>
               <?php echo $artRes->render(); ?>

        </div>


    </div>
    <script type="text/javascript">
        $("#menu-item-198").find("a").addClass("a");
        $(".i-prev").hover(function () {
            $(this).addClass("i-prev-o");
        }, function () {
            $(this).removeClass("i-prev-o");
        });
        $(".i-next").hover(function () {
            $(this).addClass("i-next-o");
        }, function () {
            $(this).removeClass("i-next-o");
        });
        $(".more0").hover(function () {
            $(this).attr("src", "./style/simg/more-o.png");
        }, function () {
            $(this).attr("src", "./style/simg/more.png");
        });
    </script>
    <div class="boxBor"></div>

    <input type="hidden" id="hdBoxbor"/>
    <div class="boxBor" onclick="IBoxBor()" style="cursor:pointer;"></div>


</div>
<script type="text/javascript">
    $(function () {
        var imgHoverSetTimeOut = null;
        $('.xh_265x265x00 img').hover(function () {
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
<script type="text/javascript" src="__INDEX__/stylee/z700bike_global.js"></script>

</body>
</html>
