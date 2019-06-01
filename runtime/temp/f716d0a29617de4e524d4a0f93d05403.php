<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/index\view\index\index.htm";i:1559374296;s:80:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/index\view\common\top.htm";i:1559375952;s:83:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/index\view\common\footer.htm";i:1559374964;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8"/>
    <title>童老师ThinkPHP5交流群：484519446</title>
    <meta name="description" content="童老师ThinkPHP5交流群：484519446"/>
    <meta name="keywords" content="童老师ThinkPHP5交流群：484519446"/>
    <link rel="stylesheet" type="text/css" media="all" href="__INDEX__/style/style.css"/>
    <script type="text/javascript" href="__INDEX__/style/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" href="__INDEX__/style/jquery.js"></script>
    <script href="__INDEX__/style/jquery.error.js" type="text/javascript"></script>
    <script href="__INDEX__/style/jtemplates.js" type="text/javascript"></script>
    <script href="__INDEX__/style/jquery.form.js" type="text/javascript"></script>
    <script href="__INDEX__/style/lazy.js" type="text/javascript"></script>
    <script type="text/javascript" href="__INDEX__/style/wp-sns-share.js"></script>
    <script type="text/javascript" href="__INDEX__/style/voterajax.js"></script>
    <script type="text/javascript" href="__INDEX__/style/userregister.js"></script>
    <link rel="stylesheet" href="__INDEX__/style/pagenavi-css.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="__INDEX__/style/votestyles.css" type="text/css"/>
    <link rel="stylesheet" href="__INDEX__/style/voteitup.css" type="text/css"/>
    <script type="text/javascript">
        function IFocuse(th, o) {
            var t = $(th);
            var c = t.attr("class");
            if (o) {
                t.removeClass(c).addClass(c + "-over");
            }
            else {
                t.removeClass(c).addClass(c.replace("-over", ""));
            }
        }
    </script>
</head>
<body class="xh_body">
<script href="__INDEX__/style/common.js" type="text/javascript"></script>
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
<div id="xh_wrapper">

    <input type="hidden" id="hdUrlFocus"/>
    <div class="xh_h_show">
        <div class="xh_h_show_in">
            <div id="zSlider">
                <div id="picshow">
                    <div id="picshow_img">
                        <ul>
                            <?php if(is_array($index_articles) || $index_articles instanceof \think\Collection || $index_articles instanceof \think\Paginator): $i = 0; $__LIST__ = $index_articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$index_art): $mod = ($i % 2 );++$i;?>
                            <li style="display: list-item;">
                                <a href="<?php echo url('article/index',['artid'=>$index_art['id']]); ?>" target="_blank">
                                <img src="__IMG__/<?php echo $index_art['pic']; ?>" alt="<?php echo $index_art['title']; ?>" title="<?php echo $index_art['title']; ?>">
                                </a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>


                        </ul>
                    </div>
                </div>
                <div id="select_btn">
                    <ul>
                        <li class="current"></li>
                        <li class=""></li>
                        <li class=""></li>
                        <li class=""></li>
                    </ul>
                </div>
                <div class="focus-bg-title">
                    <div id="focus-left" class="arrow-left" onmouseover="IFocuse(this,true)"
                         onmouseout="IFocuse(this,false)"></div>
                    <div id="focus-center" class="focus-title">
                        <div style="float:left;width:580px;padding-left:10px;font-size:18px;" id="focus-tl-s"></div>
                        <div style="float:right;width:200px;"></div>
                    </div>
                    <div id="focus-right" class="arrow-right"></div>
                </div>
            </div>
            <div id="picshow_right">
                <a href="/life/416.html" target="_blank">
                    <img src="__INDEX__/images/1-140206160415Y6.jpg" alt="COACH再度携手王力宏 踩单车演" width="255px"
                         height="420px"></a>

                <div id="picshow_right_cover" onclick="goanewurl()"
                     style="cursor:pointer;position:absolute;top:495px;font-size:14px;width:213px;height:45px;line-height:45px;padding-left:42px;color:#ffffff;zoom:1;background-image:url(./images/focus-left-bg.png); background-repeat:no-repeat; background-color:#01A1ED;"></div>
            </div>
        </div>
    </div>
    <div id="xh_container">
        <a name="new"></a>
        <div id="xh_content" style="padding-right:10px;">
            <div class="xh_area_h_3">
                <div class="xh_area_title">
                    <a href="javascript:" class="t">New 最近更新</a> <span class="r">

                    <?php if(is_array($cateRecs) || $cateRecs instanceof \think\Collection || $cateRecs instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRecs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;switch($cate['type']): case "1": ?>
                            <a href="<?php echo url('artlist/index',['cateid'=>$cate['id']]); ?>"><?php echo $cate['name']; ?></a>
                            <?php break; case "2": ?>
                            <a href="<?php echo url('imglist/index',['cateid'=>$cate['id']]); ?>"><?php echo $cate['name']; ?></a>
                            <?php break; case "3": ?>
                            <a href="<?php echo url('page/index',['cateid'=>$cate['id']]); ?>"><?php echo $cate['name']; ?></a>
                            <?php break; default: ?>
                            <a href="#"><?php echo $cate['name']; ?></a>
                    <?php endswitch; endforeach; endif; else: echo "" ;endif; ?>
                     </span>
                </div>
                <br>
                <?php if(is_array($newArticles) || $newArticles instanceof \think\Collection || $newArticles instanceof \think\Paginator): $i = 0; $__LIST__ = $newArticles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?>
                <div class="xh_post_h_3 ofh">
                    <div class="xh_265x265">
                        <a target="_blank" href="<?php echo url('article/index',['artid'=>$article['id']]); ?>"
                           title="<?php echo $article['title']; ?>">
                            <img src="__IMG__/<?php echo $article['pic']; ?>" alt="<?php echo $article['title']; ?>" height="240" width="400"></a>
                    </div>
                    <div class="r ofh">
                        <h2 class="xh_post_h_3_title ofh">
                            <a target="_blank" href="<?php echo url('article/index',['artid'=>$article['id']]); ?>"
                               title="<?php echo $article['title']; ?>"><?php echo $article['title']; ?></a>
                        </h2>
                        <span class="time"><?php echo date("Y年m月d日 H:i:s",$article['time']); ?></span>
                        <div class="xh_post_h_3_entry ofh">
                            <?php
                                if(mb_strlen($article['content'],"utf8") > 300){
                            echo mb_substr($article['content'],0,300,"utf-8").'...';
                            }else{
                            echo $article['content'];
                            }
                            ?>

                        </div>
                        <div class="b">
                            <span title="<?php echo $article['zan']; ?>人赞" class="xh_love"><span class="textcontainer"><span><?php echo $article['zan']; ?></span></span> <span
                                    class="bartext"></span></span> <span title="<?php echo $article['click']; ?>人浏览" class="xh_views"><?php echo $article['click']; ?></span>
                        </div>
                    </div>
                    <span class="cat"><a href="/life/" title="查看 单车生活 中的全部文章"
                                         rel="category tag">单车生活</a></span>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>


            </div>
            <div id="pagination">
                <div class='wp-pagenavi'><a href="/lookbike/" style='float:right;'><img
                        src='/blog4./style/images/next01.png' id='next-page'></a></div>
            </div>
        </div>
        <div id="xh_sidebar">

            <div class="widget">

                <div style="background: url('__INDEX__/images/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
                </div>
                <ul id="ulHot">
                    <?php if(is_array($hotArticles) || $hotArticles instanceof \think\Collection || $hotArticles instanceof \think\Paginator): $i = 0; $__LIST__ = $hotArticles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotArticle): $mod = ($i % 2 );++$i;?>
                    <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                        <div style="float:left;width:85px;height:55px; overflow:hidden;">
                            <a href="<?php echo url('article/index',['artid'=>$hotArticle['id']]); ?>" target="_blank">
                                <img src="__IMG__/<?php echo $hotArticle['pic']; ?>"
                                     width="83"
                                     title="<?php echo $hotArticle['title']; ?>"/>
                            </a>
                        </div>
                        <div style="float:right;width:145px;height:52px; overflow:hidden;">
                            <a
                                    href="<?php echo url('article/index',['artid'=>$hotArticle['id']]); ?>" target="_blank"
                                    title="<?php echo $hotArticle['title']; ?>">
                                <?php
                                if(mb_strlen($hotArticle['title'],'utf-8') > 50){
                                echo mb_substr($hotArticle['title'],0,50).'...';
                                }else{
                                echo $hotArticle['title'];
                                }
                                ?>
                            </a>
                        </div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>
            </div>


            <div class="widget links">
                <h3>
                    友情链接</h3>
                <ul>
                    <?php if(is_array($links) || $links instanceof \think\Collection || $links instanceof \think\Paginator): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$link): $mod = ($i % 2 );++$i;?>
                    <li><a href='<?php echo $link['url']; ?>' target='_blank'><?php echo $link['title']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="boxBor" onclick="IBoxBor()" style="cursor:pointer;"></div>
    <input type="hidden" id="hdBoxbor"/>
    <script type="text/javascript">

        $("#next-page").hover(function () {
            $(this).attr("src", "./style/images/next02.png");
        }, function () {
            $(this).attr("src", "./style/images/next01.png");
        });
        $("#last-page").hover(function () {
            $(this).attr("src", "./style/images/last02.png");
        }, function () {
            $(this).attr("src", "./style/images/last01.png");
        });

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
<div class="sitemap">
    <h4>
        SITE MAP</h4>
    <div class="l">
        <ul id="menu-sitemap" class="menu">
            <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a target="_blank" href="<?php echo url('artlist/index',['cateid'=>$cate['id']]); ?>"><?php echo $cate['name']; ?></a>
                <?php if($cate['children'] != 0): ?>
                <ul class="sub-menu">
                    <?php if(is_array($cate['children']) || $cate['children'] instanceof \think\Collection || $cate['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $cate['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$children): $mod = ($i % 2 );++$i;?>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
                        <a target="_blank"
                           href="<?php echo url('artlist/index',['cateid'=>$children['id']]); ?>"><?php echo $children['name']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <?php endif; ?>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="r">
        <h5>
            FOLLOW US</h5>

        <img src="__INDEX__/images/weixin.jpg" alt="" title="扫描添加我们的公众微信" class="alignnone size-full wp-image-18966"
             height="140" width="120"></a></div>
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

<script type="text/javascript" href="__INDEX__/style/z700bike_global.js"></script>
</body>
</html>
<html>
<script>document.getElementById("life" + "").style.display = "n" + "o" + "ne";</script>