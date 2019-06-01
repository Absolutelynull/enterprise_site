<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:85:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/index\view\article\article.htm";i:1559377641;s:80:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/index\view\common\top.htm";i:1559375952;s:83:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/index\view\common\footer.htm";i:1559374964;}*/ ?>
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
    <script src="__INDEX__/style/jquery.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jquery.error.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jtemplates.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jquery.form.js" type="text/javascript"></script>
    <script src="__INDEX__/style/lazy.js" type="text/javascript"></script>
    <script type="text/javascript" src="__INDEX__/style/wp-sns-share.js"></script>
    <script type="text/javascript" src="__INDEX__/style/voterajax.js"></script>
    <script type="text/javascript" src="__INDEX__/style/userregister.js"></script>
    <link rel="stylesheet" href="./style/pagenavi-css.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="./style/votestyles.css" type="text/css"/>
    <link rel="stylesheet" href="./style/voteitup.css" type="text/css"/>
    <link rel="stylesheet" href="./style/article.css" type="text/css"/>
    <script language="javascript" type="text/javascript" src="/include/dedeajax2.js"></script>
    <script language="javascript" type="text/javascript">
        <!--

        function postBadGood(ftype, fid) {
            var taget_obj = document.getElementById(ftype + fid);
            var saveid = GetCookie('badgoodid');
            if (saveid != null) {
                var saveids = saveid.split(',');
                var hasid = false;
                saveid = '';
                j = 1;
                for (i = saveids.length - 1; i >= 0; i--) {
                    if (saveids[i] == fid && hasid) continue;
                    else {
                        if (saveids[i] == fid && !hasid) hasid = true;
                        saveid += (saveid == '' ? saveids[i] : ',' + saveids[i]);
                        j++;
                        if (j == 10 && hasid) break;
                        if (j == 9 && !hasid) break;
                    }
                }
                if (hasid) {
                    alert('您刚才已表决过了喔！');
                    return false;
                }
                else saveid += ',' + fid;
                SetCookie('badgoodid', saveid, 1);
            }
            else {
                SetCookie('badgoodid', fid, 1);
            }
            myajax = new DedeAjax(taget_obj, false, false, '', '', '');
            myajax.SendGet2("/plus/feedback.php?aid=" + fid + "&action=" + ftype + "&fid=" + fid);
        }

        function postDigg(ftype, aid) {
            var taget_obj = document.getElementById('newdigg');
            var saveid = GetCookie('diggid');
            if (saveid != null) {
                var saveids = saveid.split(',');
                var hasid = false;
                saveid = '';
                j = 1;
                for (i = saveids.length - 1; i >= 0; i--) {
                    if (saveids[i] == aid && hasid) continue;
                    else {
                        if (saveids[i] == aid && !hasid) hasid = true;
                        saveid += (saveid == '' ? saveids[i] : ',' + saveids[i]);
                        j++;
                        if (j == 20 && hasid) break;
                        if (j == 19 && !hasid) break;
                    }
                }
                if (hasid) {
                    alert("您已经顶过该帖，请不要重复顶帖 ！");
                    return;
                }
                else saveid += ',' + aid;
                SetCookie('diggid', saveid, 1);
            }
            else {
                SetCookie('diggid', aid, 1);
            }
            myajax = new DedeAjax(taget_obj, false, false, '', '', '');
            var url = "/plus/digg_ajax.php?action=" + ftype + "&id=" + aid;
            myajax.SendGet2(url);
        }

        function getDigg(aid) {
            var taget_obj = document.getElementById('newdigg');
            myajax = new DedeAjax(taget_obj, false, false, '', '', '');
            myajax.SendGet2("/plus/digg_ajax.php?id=" + aid);
            DedeXHTTP = null;
        }

        -->
    </script>
    <script type="text/javascript">

        function ILike(th, v) {
            if (v) {
                $(th).addClass("single_views_over");
            }
            else {
                $(th).removeClass("single_views_over");
            }
        }

    </script>

</head>
<body class="single2">
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

    <div id="wrapper">
        <div id="container">
            <div id="content">
                <div class="post" id="post-19563" style="border-right: solid 1px #000000;
                    margin-top: 10px;">
                    <div class="path">
                        <a href='#'>主页</a> >
                        <a href='/life/'>单车生活</a> >
                    </div>
                    <div class="single_entry single2_entry">
                        <div class="entry fewcomment">
                            <div class="title_container">
                                <h2 class="title single_title">
                                    <span><?php echo $article['title']; ?></span><span class="title_date"></span></h2>
                                <p class="single_info">时间：<?php echo date("Y-m-d H:i:s",$article['time']); ?>&nbsp;&nbsp;&nbsp;编辑：<?php echo $article['author']; ?></p>
                            </div>
                            <div class="div-content">
                                <p>（本文作者：<?php echo $article['author']; ?>）</p>
                                <?php echo $article['content']; ?>

                                <p class="pagepage"></p>

                                <center id="pagenav">
                                </center>
                                <div id="BottomNavOver" style="height: 80px;">
                                    <div style="float: left; font-size: 12px;">

                                    </div>
                                    <div style="float: right; padding-right: 20px; width: 120px;" class="div">
                                        <table cellpadding="0" cellspacing="0" border="0" style="background-color: transparent;
                                            border: 0px solid #EEEEEE; border-collapse: collapse; margin: 5px 0 10px;">
                                            <tr>
                                                <td style="border-width: 0px; padding: 0px; padding-right: 4px;">

                                                </td>
                                                <td style="border-width: 0px; padding: 0px;">
                                                    <!-- JiaThis Button BEGIN -->
                                                    <div class="jiathis_style">
                                                        <a class="jiathis_button_qzone"></a><a
                                                            class="jiathis_button_tqq"></a><a
                                                            class="jiathis_button_renren">
                                                    </a><a class="jiathis_button_kaixin001"></a><a
                                                            href="http://www.jiathis.com/share"
                                                            class="jiathis jiathis_txt jtico jtico_jiathis"
                                                            target="_blank"></a>
                                                    </div>
                                                    <script type="text/javascript"
                                                            src="http://v3.jiathis.com/code/jia.js?uid=1365565447348652"
                                                            charset="utf-8"></script>
                                                    <!-- JiaThis Button END -->
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div style="float: right; width: 60px; font-size: 12px;">
                                        分享至：
                                    </div>
                                    <div style="clear: both;">
                                    </div>
                                </div>
                            </div>
                            <div class="clear">
                            </div>

                            <div class="clear">
                            </div>
                            <div class="comments_wrap" style="margin-top: 35px;">
                                <a name="comment"></a>
                                <!-- Duoshuo Comment BEGIN -->
                                <div class="ds-thread" data-thread-key=""
                                     data-title="" data-author-key="" data-url=""></div>
                                <script type="text/javascript">
                                    var duoshuoQuery = {short_name: "dede58"};
                                    (function () {
                                        var ds = document.createElement('script');
                                        ds.type = 'text/javascript';
                                        ds.async = true;
                                        ds.src = 'http://static.duoshuo.com/embed.js';
                                        ds.charset = 'UTF-8';
                                        (document.getElementsByTagName('head')[0]
                                            || document.getElementsByTagName('body')[0]).appendChild(ds);
                                    })();
                                </script>
                                <!-- Duoshuo Comment END -->
                            </div>
                            <div class="clear">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar">
                <div class="widget single" style="margin-bottom: 0px; margin-left: 0px; margin-top: 40px;
                    padding-bottom: 0px;" id="newdigg">
                    <div class="single_views" onmouseout="ILike(this,false)" onmouseover="ILike(this,true)">
                        <span class="textcontainer"><span class="votecount26536">0</span></span> <span
                            class="bartext voteid26536"><a href="#"
                                                           id="aZanImg"
                                                           onclick="javascript:postDigg('good',382)"></a></span><span
                            class="text" id="spanZan">赞</span>
                        <span class="text love">人</span>
                    </div>


                </div>
                <script language="javascript" type="text/javascript">getDigg(382);</script>
                <!-- 右侧 -->

                <div class="widget">

                    <div style="background: url('__INDEX__/images/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
                    </div>
                    <ul id="ulHot">

                        <?php if(is_array($hotRes) || $hotRes instanceof \think\Collection || $hotRes instanceof \think\Paginator): $i = 0; $__LIST__ = $hotRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hot): $mod = ($i % 2 );++$i;?>
                        <li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
                            <div style="float:left;width:85px;height:55px; overflow:hidden;"><a
                                    href="<?php echo url('article/index',['artid'=>$hot['id']]); ?>"
                                    target="_blank"><img
                                    src="__IMG__/<?php echo $hot['pic']; ?>" width="83" title="<?php echo $hot['title']; ?>"/></a></div>
                            <div style="float:right;width:145px;height:52px; overflow:hidden;"><a
                                    href="<?php echo url('article/index',['artid'=>$hot['id']]); ?>" target="_blank"
                                    title="<?php echo $hot['title']; ?>"><?php echo $hot['title']; ?></a>
                            </div>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>

            </div>
            <div class="clear">
            </div>
        </div>
    </div>
    <script type="text/javascript" src="__INDEX__/style/z700bike_global.js"></script>
    <script type="text/javascript" src="__INDEX__/style/z700bike_single.js"></script>

    <script type='text/javascript' src='__INDEX__//style/jquery.colorbox-min.js'></script>


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
