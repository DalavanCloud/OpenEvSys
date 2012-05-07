<?php include_once('tabs.php')?>
<?php include_once('event_title.php'); ?>
<?php
    include_once('card_list.php');
    draw_card_list('vp',$event_id);
?>
<div class="panel">
    <br />
    <?php include_once('vp_list_table.php');?>
    <br />
    <?php 
    echo "<h3>"._t('EDIT_THIS_ACT')."</h3>&nbsp;";
    ?>
    <div class="form-container">
    <form id="actform" name="actform" action='<?php echo get_url('events','edit_act',null,array('eid'=>$event_id,'act_id'=>$_GET['act_id']))?>' method='post' enctype='multipart/form-data'>
    <input type="hidden" value="<?php echo $victim_dob; ?>" name="vdate_of_birth"/>
    <input type="hidden" value="<?php echo $victim_dob_type; ?>" name="vdob_type"/>
    <?php
        $act_form = generate_formarray('act','edit');
        $act_form['update'] = array('type'=>'submit','label'=>_t('UPDATE'));
        $act_form['age_at_time_of_victimisation']['extra_opts']['onclick'] = "getAge(this.form);";        
        
        popuate_formArray($act_form,$act);
        $fields = shn_form_get_html_fields($act_form); 
        place_form_elements($act_form,$fields); ?>
        <center>        
        <?php echo $fields['update'] ?>
    	<a class="but" href="<?php echo get_url('events','vp_list',null,array('eid'=>$event_id,'act_id'=>$_GET['act_id'],'row'=>$_GET['row'],'type'=>'act')) ?>"><?php echo _t('CANCEL')?></a> <span>&nbsp;</span>
    	</center>
        <br />
    </form>
    </div>
    <br />

</div>