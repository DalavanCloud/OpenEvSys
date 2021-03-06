<?php 
	include_once('event_title.php');
    
?>
<div class="panel">
<?php if($del_confirm){ ?>
    <div class="alert alert-error" >
    <h3><?php echo _t('DO_YOU_WANT_TO_DELETE_THE_SELECTED_CHAIN_OF_EVENTS_S__')?></h3>
    <form class="form-horizontal"  action="<?php get_url('events','delete_coe')?>" method="post">
        <br />
        <center>
              <button type='submit' class='btn btn-grey' name='yes' ><i class="icon-trash"></i> <?php echo _t('DELETE') ?></button>
        <button type='submit' class='btn' name='no' ><i class="icon-remove-circle"></i> <?php echo _t('CANCEL') ?></button>
     </center>
        <?php			
			foreach($_POST['coes'] as $val){ ?>
        		<input type='hidden' name='coes[]' value='<?php echo $val ?>' />
        <?php			 
			}
		?>
    </form>
    </div>

<table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th><?php echo _t('INITIAL_DATE') ?></th>
                <th><?php echo _t('RELATED_EVENT_TITLE') ?></th>
                <th><?php echo _t('TYPE_OF_CHAIN_OF_EVENTS') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($related_events as $record){ ?>
        <tr <?php if($i++%2==1)echo "class='odd'" ?>>
            <td><?php echo $record['initial_date']; ?></td>
            <td><?php echo $record['event_title']; ?></td>
			<td><?php echo get_mt_term($record['type_of_chain_of_events']); ?></td>            
        </tr>
		<?php  }?>            
    </tbody>
    </table>
<?php 
	}		
?>
<center>
	<a class="btn" href="<?php echo get_url('events','coe_list',null,array('eid'=>$event_id)) ?>"><i class="icon-chevron-left"></i> <?php echo _t('BACK')?></a>
</center>
<br />
</div>
