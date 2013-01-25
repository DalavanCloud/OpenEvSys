<ul class="nav nav-list"> 

    <?php
    global $conf;
    $action = $_GET['act'];
    $breadcrumbs = shnBreadcrumbs::getBreadcrumbs();
    switch ($action) {
        case 'field_customization':
            $breadcrumbs->pushCrumb(array('name' => _t('EXISTING_FIELDS'), 'mod' => 'admin', 'act' => 'field_customization'), 1);
            break;
        case 'new_field':
            $breadcrumbs->pushCrumb(array('name' => _t('ADD_NEW_FIELD'), 'mod' => 'admin', 'act' => 'new_field'), 1);
            break;
        case 'mt_customization':
            $breadcrumbs->pushCrumb(array('name' => _t('MICRO_THESAURI'), 'mod' => 'admin', 'act' => 'mt_customization'), 1);
            break;
        case 'user_management':
            $breadcrumbs->pushCrumb(array('name' => _t('USER_MANAGEMENT'), 'mod' => 'admin', 'act' => 'user_management'), 1);
            break;
       case 'add_user':
             $breadcrumbs->pushCrumb(array('name' => _t('USER_MANAGEMENT'), 'mod' => 'admin', 'act' => 'user_management'), 1);
            $breadcrumbs->pushCrumb(array('name' => _t('ADD_NEW_USER'), 'mod' => 'admin', 'act' => 'add_user'), 2);
            break;
       case 'acl':
             $breadcrumbs->pushCrumb(array('name' => _t('USER_MANAGEMENT'), 'mod' => 'admin', 'act' => 'user_management'), 1);
            $breadcrumbs->pushCrumb(array('name' => _t('ROLES___MODULE_ACCESS_CONTROL'), 'mod' => 'admin', 'act' => 'acl'), 2);
            break;
      case 'permissions':
             $breadcrumbs->pushCrumb(array('name' => _t('USER_MANAGEMENT'), 'mod' => 'admin', 'act' => 'user_management'), 1);
            $breadcrumbs->pushCrumb(array('name' => _t('PERMISSIONS'), 'mod' => 'admin', 'act' => 'permissions'), 2);
            break;
        case 'set_locale':
            $breadcrumbs->pushCrumb(array('name' => _t('LOCALIZATION'), 'mod' => 'admin', 'act' => 'set_locale'), 1);
            break;
       case 'System_configuration':
            $breadcrumbs->pushCrumb(array('name' => _t('SYSTEM_CONFIGURATION'), 'mod' => 'admin', 'act' => 'System_configuration'), 1);
            break;
       case 'Extensions':
            $breadcrumbs->pushCrumb(array('name' => _t('EXTENSIONS'), 'mod' => 'admin', 'act' => 'Extensions'), 1);
            break;
       
        default:
            //$breadcrumbs->pushCrumb(array('name' => _t('BROWSE_DOCUMENT'), 'mod' => 'admin', 'act' => 'browse'), 1);
            break;
    }
    
    
    if (!isset($conf['extension'])) {
        ?>
        <li><a href='<?php get_url('admin', 'field_customization') ?>'><?php echo _t('FORM_CUSTOMIZATION') ?></a>
        </li>
        <li class="subnav <?php if ($action == "field_customization") echo "active" ?>"><a href="<?php get_url('admin', 'field_customization') ?>"><?php echo _t('EXISTING_FIELDS') ?></a></li>
        <li class="subnav <?php if ($action == "new_field") echo "active" ?>"><a href="<?php get_url('admin', 'new_field') ?>"><?php echo _t('ADD_NEW_FIELD') ?></a></li>
        <!--
            <li><a href="<?php get_url('admin', 'shuffel_result') ?>"><?php echo _t('COMBINED_SEARCH_FORMS') ?></a></li>
        -->



        <li class="<?php if ($action == "mt_customization") echo "active" ?>"><a href="<?php get_url('admin', 'mt_customization') ?>"><?php echo _t('MICRO_THESAURI') ?></a></li>
    <?php } ?>
    <li>
        <a href="<?php get_url('admin', 'user_management') ?>"><?php echo _t('USER_MANAGEMENT') ?></a>
    </li>
    <li class="subnav <?php if ($action == "user_management") echo "active" ?>"><a href="<?php get_url('admin', 'user_management') ?>"><?php echo _t('USERS') ?></a></li>
    <li class="subnav <?php if ($action == "add_user") echo "active" ?>"><a href="<?php get_url('admin', 'add_user') ?>"><?php echo _t('ADD_NEW_USER') ?></a></li> 
    <li class="subnav <?php if ($action == "acl") echo "active" ?>"><a href="<?php get_url('admin', 'acl') ?>"><?php echo _t('ROLES___MODULE_ACCESS_CONTROL') ?></a></li> 
    <li class="subnav <?php if ($action == "permissions") echo "active" ?>"><a href="<?php get_url('admin', 'permissions') ?>"><?php echo _t('PERMISSIONS') ?></a></li> 
    <!-- 
    <li><a href="<?php get_url('admin', 'acl_mode') ?>"><?php echo _t('ACL_MODE') ?></a></li> 
    -->


    <li class="<?php if ($action == "set_locale") echo "active" ?>">
        <a href="<?php get_url('admin', 'set_locale') ?>"><?php echo _t('LOCALIZATION') ?></a>
    </li><!-- 
    <ul>
                <li><a href="<?php get_url('admin', 'set_locale') ?>"><?php echo _t('SET_LANGUAGE') ?></a></li>
                <li><a href="<?php get_url('admin', 'manage_locale') ?>"><?php echo _t('MANAGE_LANGUAGES') ?></a></li> 
                <li><a href="<?php get_url('admin', 'translate') ?>"><?php echo _t('TRANSLATE') ?></a></li>
    </ul>
    -->

    <!-- 
            <li>
                <a href="<?php get_url('admin', 'import') ?>"><?php echo _t('DATA_EXCHANGE') ?></a>
        <ul>
                    <li><a href="<?php get_url('admin', 'import') ?>"><?php echo _t('IMPORT') ?></a></li>
                    <li><a href="<?php get_url('admin', 'import_log') ?>"><?php echo _t('IMPORT_LOG') ?></a></li>
                    <li><a href="<?php get_url('admin', 'export_ui') ?>"><?php echo _t('EXPORT') ?></a></li> 		        
        </ul>
    </li>
    -->
    <li class="<?php if ($action == "System_configuration") echo "active" ?>"><a href="<?php get_url('admin', 'System_configuration') ?>"><?php echo _t('SYSTEM_CONFIGURATION') ?></a></li>
    <?php
    global $conf;
    if (isset($conf['extension'])) {
        ?>
        <li class="<?php if ($action == "Extensions") echo "active" ?>"><a href="<?php get_url('admin', 'Extensions') ?>"><?php echo _t('EXTENSIONS') ?></a></li>
    <?php } ?>
</ul>
