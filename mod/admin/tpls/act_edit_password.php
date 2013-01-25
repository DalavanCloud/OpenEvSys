<?php
global $conf;
$username = $user->getUserName();
?>
<h2><?php echo _t('EDIT_USER') . " : <span class='red'> $username </span>" ?></h2>
<br />
<?php $fields = shn_form_get_html_fields($change_password_form); ?>
<div>
    <ul class="nav nav-tabs">

        <li><a href="<?php get_url('admin', 'edit_user', null, array('uid' => $username)); ?> " ><?php echo _t('EDIT_PROFILE') ?></a>
        </li>
        <li><a class="active" href="<?php get_url('admin', 'edit_password', null, array('uid' => $username)); ?> " ><?php echo _t('CHANGE_PASSWORD') ?></a>
        </li>
    </ul></div> 
<div class='panel'>
    <div class="form-container"> 
        <form class="form-horizontal"  action='<?php echo get_url('admin', 'edit_password', null, array('uid' => $username)) ?>' method='post'>
            <?php echo $fields['password1'] ?>
            <?php echo $fields['password2'] ?>
            <br />
<?php echo $fields['save'] ?>
            <a class="btn" href="<?php get_url('admin', 'edit_user', null, array('uid' => $username)) ?> " ><?php echo _t('CANCEL') ?></a>

        </form>
    </div>
</div>

