<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/admin\view\auth_group\add.htm";i:1558768270;s:80:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/admin\view\common\top.htm";i:1557647847;s:81:"C:\phpStudy\PHPTutorial\WWW\birk\public/../application/admin\view\common\left.htm";i:1558427229;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__ADMIN__/style/bootstrap.css" rel="stylesheet">
    <link href="__ADMIN__/style/font-awesome.css" rel="stylesheet">
    <link href="__ADMIN__/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__ADMIN__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__ADMIN__/style/demo.css" rel="stylesheet">
    <link href="__ADMIN__/style/typicons.css" rel="stylesheet">
    <link href="__ADMIN__/style/animate.css" rel="stylesheet">

</head>
<body>
<!-- 头部 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="__ADMIN__/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__ADMIN__/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('admin'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('Login/logout'); ?>">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/edit',['id'=>\think\Request::instance()->session('id')]); ?>">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/lst'); ?>">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/add'); ?>">
                                    <span class="menu-text">
                                        添加管理                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('auth_group/lst'); ?>">
                                    <span class="menu-text">
                                        Auto用户组列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>

            <ul class="submenu">
                <li>
                    <a href="<?php echo url('auth_group/lst'); ?>">
                                    <span class="menu-text">
                                        Auto权限列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-folder"></i>
                <span class="menu-text">栏目</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('cate/lst'); ?>">
                                    <span class="menu-text">
                                        栏目列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">文档</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('article/lst'); ?>">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('article/add'); ?>">
                                    <span class="menu-text">
                                        添加文章                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">链接</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('link/lst'); ?>">
                                    <span class="menu-text">
                                        链接列表                                  </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('link/add'); ?>">
                                    <span class="menu-text">
                                        链接添加                                   </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>


        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">系统</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('conf/index'); ?>">
                                    <span class="menu-text">
                                        配置项                                  </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('conf/lst'); ?>">
                                    <span class="menu-text">
                                        配置列表                                  </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('conf/add'); ?>">
                                    <span class="menu-text">
                                        添加配置                                  </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>

        </li>

    </ul>


    <!-- /Sidebar Menu -->
</div>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <a href="#">系统</a>
                    </li>
                    <li>
                        <a href="#">用户组用户组</a>
                    </li>
                    <li class="active">添加用户组</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-header bordered-bottom bordered-blue">
                                <span class="widget-caption">新增用户组</span>
                            </div>
                            <div class="widget-body">
                                <div id="horizontal-form">
                                    <form class="form-horizontal" role="form" action="" method="post">
                                        <div class="form-group">
                                            <label for="username"
                                                   class="col-sm-2 control-label no-padding-right">用户组账号</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" placeholder="" name="title" required=""
                                                       type="text">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <label for="group_id"
                                                   class="col-sm-2 control-label no-padding-right">启动状态</label>
                                            <div class="col-sm-6">
                                                <label>
                                                    <input class="checkbox-slider  colored-blue"
                                                           id="form-field-checkbox" name="status"
                                                           type="checkbox" value="1" checked="checked">
                                                    <span class="text"></span>
                                                </label>
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <label for="group_id"
                                                   class="col-sm-2 control-label no-padding-right">权限管理</label>
                                            <div class="col-sm-6">
                                                <table class="table table-hover">
                                                    <thead class="bordered-darkorange">
                                                    <tr>
                                                        <th>
                                                            权限配置
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php if(is_array($authRuleRes) || $authRuleRes instanceof \think\Collection || $authRuleRes instanceof \think\Paginator): $i = 0; $__LIST__ = $authRuleRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$authRule): $mod = ($i % 2 );++$i;?>
                                                    <tr>
                                                        <td>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <?php echo str_repeat('&nbsp;',$authRule['level'] * 4);?>
                                                                    <input name="rules[]" value="<?php echo $authRule['id']; ?>" dataid="id-<?php echo $authRule['id']; ?>" class="checkbox-parent <?php if($authRule['level'] != 0): ?>checkbox-child<?php endif; ?>"
                                                                           type="checkbox"
                                                                           checked="checked"
                                                                           value="true">
                                                                    <span class="text" <?php if($authRule['level'] == 0): ?> style="font-weight: bold"<?php endif; ?>><?php echo $authRule['title']; ?></span>
                                                                </label>
                                                            </div>

                                                        </td>

                                                    </tr>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default">保存信息</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
</div>

<!--Basic Scripts-->
<script src="__ADMIN__/style/jquery_002.js"></script>
<script src="__ADMIN__/style/bootstrap.js"></script>
<script src="__ADMIN__/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="__ADMIN__/style/beyond.js"></script>
<script type="text/javascript">
    /* 权限配置 */
    $(function () {
        //动态选择框，上下级选中状态变化
        $('input.checkbox-parent').on('change', function () {
            var dataid = $(this).attr("dataid");
            $('input[dataid^=' + dataid + ']').prop('checked', $(this).is(':checked'));
        });
        $('input.checkbox-child').on('change', function () {
            var dataid = $(this).attr("dataid");
            dataid = dataid.substring(0, dataid.lastIndexOf("-"));
            var parent = $('input[dataid=' + dataid + ']');
            if ($(this).is(':checked')) {
                parent.prop('checked', true);
                //循环到顶级
                while (dataid.lastIndexOf("-") != 2) {
                    dataid = dataid.substring(0, dataid.lastIndexOf("-"));
                    parent = $('input[dataid=' + dataid + ']');
                    parent.prop('checked', true);
                }
            } else {
                //父级
                if ($('input[dataid^=' + dataid + '-]:checked').length == 0) {
                    parent.prop('checked', false);
                    //循环到顶级
                    while (dataid.lastIndexOf("-") != 2) {
                        dataid = dataid.substring(0, dataid.lastIndexOf("-"));
                        parent = $('input[dataid=' + dataid + ']');
                        if ($('input[dataid^=' + dataid + '-]:checked').length == 0) {
                            parent.prop('checked', false);
                        }
                    }
                }
            }
        });
    });
</script>

</body>
</html>