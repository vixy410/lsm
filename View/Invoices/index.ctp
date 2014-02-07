<div class="invoices index">
	<h2><?php echo __('Invoices'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_no'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('delivery_note'); ?></th>
			<th><?php echo $this->Paginator->sort('mop'); ?></th>
			<th><?php echo $this->Paginator->sort('dog'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('final_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('sr'); ?></th>
			<th><?php echo $this->Paginator->sort('other_ref'); ?></th>
			<th><?php echo $this->Paginator->sort('account_id'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('pin'); ?></th>
			<th><?php echo $this->Paginator->sort('country'); ?></th>
			<th><?php echo $this->Paginator->sort('bpo'); ?></th>
			<th><?php echo $this->Paginator->sort('dated'); ?></th>
			<th><?php echo $this->Paginator->sort('ddn'); ?></th>
			<th><?php echo $this->Paginator->sort('dated2'); ?></th>
			<th><?php echo $this->Paginator->sort('despatched_through'); ?></th>
			<th><?php echo $this->Paginator->sort('destination'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($invoices as $invoice): ?>
	<tr>
		<td><?php echo h($invoice['Invoice']['id']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['invoice_no']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['created']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['delivery_note']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['mop']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['dog']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['quantity']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['unit_rate']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['amount']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['final_amount']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['sr']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['other_ref']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($invoice['Account']['account_name'], array('controller' => 'accounts', 'action' => 'view', $invoice['Account']['id'])); ?>
		</td>
		<td><?php echo h($invoice['Invoice']['address']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['city']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['state']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['pin']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['country']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['bpo']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['dated']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['ddn']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['dated2']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['despatched_through']); ?>&nbsp;</td>
		<td><?php echo h($invoice['Invoice']['destination']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $invoice['Invoice']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $invoice['Invoice']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $invoice['Invoice']['id']), null, __('Are you sure you want to delete # %s?', $invoice['Invoice']['id'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Invoice'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
