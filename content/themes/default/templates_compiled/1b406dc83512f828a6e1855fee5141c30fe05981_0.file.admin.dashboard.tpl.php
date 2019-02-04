<?php
/* Smarty version 3.1.33, created on 2019-01-29 14:02:05
  from '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c505cddb640b3_51073069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b406dc83512f828a6e1855fee5141c30fe05981' => 
    array (
      0 => '/home/adminuser/public_html/eean/judefly.com/content/themes/default/templates/admin.dashboard.tpl',
      1 => 1530805978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c505cddb640b3_51073069 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-default">
    <div class="panel-heading with-icon">
        <strong><?php echo __("Dashboard");?>
</strong>
    </div>
    <div class="panel-body">
        <div id="admin-chart-dashboard" class="admin-chart mb20"></div>
        <div class="row">
            <div class="col-sm-3">
                <div class="stat-panel">
                    <div class="stat-cell">
                        <i class="fa fa-user bg-icon"></i>
                        <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['users'];?>
</span><br>
                        <span class="text-lg"><?php echo __("Users");?>
</span><br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/users"><?php echo __("Manage Users");?>
</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="stat-panel">
                    <div class="stat-cell">
                        <i class="fa fa-male bg-icon"></i>
                        <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['users_males'];?>
</span><br>
                        <span><?php echo $_smarty_tpl->tpl_vars['insights']->value['users_males_percent'];?>
%</span><br>
                        <span class="text-lg"><?php echo __("Males");?>
</span><br>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="stat-panel">
                    <div class="stat-cell">
                        <i class="fa fa-female bg-icon"></i>
                        <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['users_females'];?>
</span><br>
                        <span><?php echo $_smarty_tpl->tpl_vars['insights']->value['users_females_percent'];?>
%</span><br>
                        <span class="text-lg"><?php echo __("Females");?>
</span><br>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="stat-panel">
                    <div class="stat-cell">
                        <i class="fa fa-user bg-icon"></i>
                        <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['users_others'];?>
</span><br>
                        <span><?php echo $_smarty_tpl->tpl_vars['insights']->value['users_others_percent'];?>
%</span><br>
                        <span class="text-lg"><?php echo __("Others");?>
</span><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="stat-panel danger">
                    <div class="stat-cell">
                        <i class="fa fa-minus-circle bg-icon"></i>
                        <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['banned'];?>
</span><br>
                        <span class="text-lg"><?php echo __("Banned");?>
</span><br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/users/banned"><?php echo __("Manage Banned");?>
</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="stat-panel warning">
                    <div class="stat-cell">
                        <i class="fa fa-envelope bg-icon"></i>
                        <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['not_activated'];?>
</span><br>
                        <span class="text-lg"><?php echo __("Not Activated");?>
</span><br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/users"><?php echo __("Manage Users");?>
</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="stat-panel info">
                    <div class="stat-cell">
                        <i class="fa fa-clock bg-icon"></i>
                        <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['online'];?>
</span><br>
                        <span class="text-lg"><?php echo __("Online");?>
</span><br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/users/online"><?php echo __("Manage Online");?>
</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="stat-panel success">
                    <div class="stat-cell">
                        <i class="fa fa-newspaper bg-icon"></i>
                        <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['posts'];?>
</span><br>
                        <span class="text-lg"><?php echo __("Posts");?>
</span><br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/reports"><?php echo __("Manage Reports");?>
</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="stat-panel success">
                    <div class="stat-cell">
                        <i class="fa fa-comments bg-icon"></i>
                        <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['comments'];?>
</span><br>
                        <span class="text-lg"><?php echo __("Comments");?>
</span><br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/reports"><?php echo __("Manage Reports");?>
</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="stat-panel">
                    <div class="stat-cell">
                        <i class="fa fa-flag bg-icon"></i>
                        <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['pages'];?>
</span><br>
                        <span class="text-lg"><?php echo __("Pages");?>
</span><br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/pages"><?php echo __("Manage Pages");?>
</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="stat-panel">
                    <div class="stat-cell">
                        <i class="fa fa-users bg-icon"></i>
                        <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['groups'];?>
</span><br>
                        <span class="text-lg"><?php echo __("Groups");?>
</span><br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/groups"><?php echo __("Manage Groups");?>
</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="stat-panel">
                    <div class="stat-cell">
                        <i class="fa fa-calendar bg-icon"></i>
                        <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['events'];?>
</span><br>
                        <span class="text-lg"><?php echo __("Events");?>
</span><br>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/events"><?php echo __("Manage Events");?>
</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="stat-panel info">
                    <div class="stat-cell">
                        <i class="fa fa-comments bg-icon"></i>
                        <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['messages'];?>
</span><br>
                        <span class="text-lg"><?php echo __("Messages");?>
</span><br>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="stat-panel info">
                    <div class="stat-cell">
                        <i class="fa fa-globe bg-icon"></i>
                        <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['insights']->value['notifications'];?>
</span><br>
                        <span class="text-lg"><?php echo __("Notifications");?>
</span><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
