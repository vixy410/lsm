A Lead has been added by <?php 

echo $user['User']['username']; ?><br>
Details
<br>
<dl >
		
		<dt><?php echo __('Account'); ?></dt>
		<dd>
			<?php echo $account['Account']['account_name']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($this->request->data['Lead']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($this->request->data['Lead']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Board Number'); ?></dt>
		<dd>
			<?php echo h($this->request->data['Lead']['board_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile Number'); ?></dt>
		<dd>
			<?php echo h($this->request->data['Lead']['mobile_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requirements'); ?></dt>
		<dd>
			<?php echo h($this->request->data['Lead']['requirements']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Price Quoted'); ?></dt>
		<dd>
			<?php echo h($this->request->data['Lead']['total_price_quoted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Our Price'); ?></dt>
		<dd>
			<?php echo h($this->request->data['Lead']['our_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Margin'); ?></dt>
		<dd>
			<?php echo h($this->request->data['Lead']['margin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closing Month'); ?></dt>
		<dd>
			<?php echo h($this->request->data['Lead']['closing_month']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Probablity'); ?></dt>
		<dd>
			<?php echo h($this->request->data['Lead']['probablity']); ?>
			&nbsp;
		</dd>
		
</dl>
