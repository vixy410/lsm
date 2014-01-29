<div class="accounts index">
     <?php $this->Html->addCrumb('Account','/accounts/index/'); ?>
    <!----------Action Menu------------>
    <?php echo $this->element('accountMenu') ?>
    <!--------------------------------->
	<h2><?php echo __('Accounts'); ?></h2>
        <table  class="table table-bordered table-condensed table-responsive table-striped" cellpadding="0" cellspacing="0">
	<tr>
			<!--<th><?php //echo $this->Paginator->sort('id'); ?></th>-->
			<th><?php echo $this->Paginator->sort('account_name'); ?></th>
                        <th><?php echo $this->Paginator->sort('address'); ?></th>
                        <th><?php echo $this->Paginator->sort('city'); ?></th>
                        <th><?php echo $this->Paginator->sort('state'); ?></th>
                        <th><?php echo $this->Paginator->sort('board_number','Board Number'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($accounts as $account): ?>
	<tr>
		<!--<td><?php //echo h($account['Account']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($account['Account']['account_name']); ?>&nbsp;</td>
                <td><?php echo h($account['Account']['address']); ?>&nbsp;</td>
                <td><?php echo h($account['Account']['city']); ?>&nbsp;</td>
                <td><?php echo h($account['Account']['state']); ?>&nbsp;</td>
                <td><?php echo h($account['Account']['board_number']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['url']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $account['Account']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $account['Account']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $account['Account']['id']), null, __('Are you sure you want to delete # %s?', $account['Account']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
