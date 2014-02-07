<div class="invoices view">
<h2><?php echo __('Invoice'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice No'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['invoice_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delivery Note'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['delivery_note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mop'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['mop']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dog'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['dog']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Rate'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['unit_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Final Amount'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['final_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sr'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['sr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other Ref'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['other_ref']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoice['Account']['account_name'], array('controller' => 'accounts', 'action' => 'view', $invoice['Account']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pin'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['pin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bpo'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['bpo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dated'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['dated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ddn'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['ddn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dated2'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['dated2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Despatched Through'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['despatched_through']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destination'); ?></dt>
		<dd>
			<?php echo h($invoice['Invoice']['destination']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Invoice'), array('action' => 'edit', $invoice['Invoice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Invoice'), array('action' => 'delete', $invoice['Invoice']['id']), null, __('Are you sure you want to delete # %s?', $invoice['Invoice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
