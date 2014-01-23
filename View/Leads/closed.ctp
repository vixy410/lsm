<div class="leads index">
    <div style="float: right"><?php echo $this->Html->link('CSV','/leads/exportView/',array('class' => 'btn btn-success')); ?></div>
   
    
      <!-------------Action Menu------------>
     <?php echo $this->element('lsmMenu');?>
      <!------------------------------------>
      
      <!-------------Filter---------------->
      <?php echo $this->element('filterMenu');?>

      <!-------------/Filter---------------->
    
	<h2><?php echo __('Leads'); ?></h2>
            <?php echo $this->Html->link(__('New Lead'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?><br><br>
        <table class="table table-bordered table-striped table-condensed table-responsive" cellpadding="0" cellspacing="0">
	<tr>
			<!--<th><?php //echo $this->Paginator->sort('id'); ?></th>-->
			<th><?php echo $this->Paginator->sort('account_name'); ?></th>
			<th><?php echo $this->Paginator->sort('Contact Person'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('board_number'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile_number'); ?></th>
			<th><?php echo $this->Paginator->sort('requirements'); ?></th>
			<th><?php echo $this->Paginator->sort('total_price_quoted'); ?></th>
			<th><?php echo $this->Paginator->sort('our_price'); ?></th>
			<th><?php echo $this->Paginator->sort('margin'); ?></th>
			<th><?php echo $this->Paginator->sort('closing_month'); ?></th>
			<th><?php echo $this->Paginator->sort('probablity'); ?></th>
			<th><?php echo $this->Paginator->sort('status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_added'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($leads as $lead): ?>
	<tr>
		<!--<td><?php //echo h($lead['Lead']['id']); ?>&nbsp;</td>-->
		<td>
			<?php echo $this->Html->link($lead['Account']['account_name'], array('controller' => 'accounts', 'action' => 'view', $lead['Account']['id'])); ?>
		</td>
		<td><?php echo h($lead['Lead']['name']); ?>&nbsp;</td>
		<td><?php echo h($lead['Lead']['email']); ?>&nbsp;</td>
		<td><?php echo h($lead['Lead']['board_number']); ?>&nbsp;</td>
		<td><?php echo h($lead['Lead']['mobile_number']); ?>&nbsp;</td>
		<td><?php echo h($lead['Lead']['requirements']); ?>&nbsp;</td>
		<td><?php echo h($lead['Lead']['total_price_quoted']); ?>&nbsp;</td>
		<td><?php echo h($lead['Lead']['our_price']); ?>&nbsp;</td>
		<td><?php echo h($lead['Lead']['margin']); ?>&nbsp;</td>
		<td><?php echo h($lead['Lead']['closing_month']); ?>&nbsp;</td>
		<td><?php echo h($lead['Lead']['probablity']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($lead['Status']['status'], array('controller' => 'statuses', 'action' => 'view', $lead['Status']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($lead['User']['username'], array('controller' => 'users', 'action' => 'view', $lead['User']['id'])); ?>
		</td>
		<td><?php echo h($lead['Lead']['date_added']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $lead['Lead']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lead['Lead']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lead['Lead']['id']), null, __('Are you sure you want to delete # %s?', $lead['Lead']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	//echo $this->Paginator->counter(array(
	//'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	//));
	?>	</p>
	<?php //echo $this->element('pagination') ?>
        <?php echo $this->Paginator->pager(); ?>
</div>
<script>
  $('.dropdown-toggle').dropdown()
</script>