<div class="accounts view well col-md-10">
     <?php $this->Html->addCrumb('View Account'); ?>
<h2><?php echo __('Account'); ?></h2>
	<dl class="dl-horizontal">
		<!--<dt><?php //echo __('Id'); ?></dt>
		<dd>
			<?php //echo h($account['Account']['id']); ?>
			&nbsp;
		</dd>-->
		<dt><?php echo __('Account Name'); ?></dt>
		<dd>
			<?php echo h($account['Account']['account_name']); ?>
			&nbsp;
		</dd>
                
                
                <dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($account['Account']['address']); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($account['Account']['city']); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($account['Account']['state']); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Board Number'); ?></dt>
		<dd>
			<?php echo h($account['Account']['board_number']); ?>
			&nbsp;
		</dd>
                
                
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($account['Account']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($account['Account']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

