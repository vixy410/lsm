<div class="leads view well col-sm-4">
    <!---------------->
   <?php $this->Html->addCrumb('View Lead'); ?>
    <!----------------->
    
<h2><?php echo __('Lead'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lead['Lead']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lead['Account']['account_name'], array('controller' => 'accounts', 'action' => 'view', $lead['Account']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($lead['Lead']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($lead['Lead']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Board Number'); ?></dt>
		<dd>
			<?php echo h($lead['Lead']['board_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile Number'); ?></dt>
		<dd>
			<?php echo h($lead['Lead']['mobile_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requirements'); ?></dt>
		<dd>
			<?php echo h($lead['Lead']['requirements']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Price Quoted'); ?></dt>
		<dd>
			<?php echo h($lead['Lead']['total_price_quoted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Our Price'); ?></dt>
		<dd>
			<?php echo h($lead['Lead']['our_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Margin'); ?></dt>
		<dd>
			<?php echo h($lead['Lead']['margin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closing Month'); ?></dt>
		<dd>
			<?php echo h($lead['Lead']['closing_month']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Probablity'); ?></dt>
		<dd>
			<?php echo h($lead['Lead']['probablity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lead['Status']['status'], array('controller' => 'statuses', 'action' => 'view', $lead['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lead['User']['username'], array('controller' => 'users', 'action' => 'view', $lead['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Added'); ?></dt>
		<dd>
			<?php echo h($lead['Lead']['date_added']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

