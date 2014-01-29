<div class="statuses view well col-md-4">
    <?php $this->Html->addCrumb('View Status'); ?>
<h2><?php echo __('Status'); ?></h2>
      <dl class="dl-horizontal">
		<!--<dt><?php //echo __('Id'); ?></dt>
		<dd>
			<?php //echo h($status['Status']['id']); ?>
			&nbsp;
		</dd>-->
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($status['Status']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($status['Status']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
