<div class="extras view">
<h2><?php echo __('Extra'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['Name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Extra'), array('action' => 'edit', $extra['Extra']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Extra'), array('action' => 'delete', $extra['Extra']['id']), null, __('Are you sure you want to delete # %s?', $extra['Extra']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Extras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extra'), array('action' => 'add')); ?> </li>
	</ul>
</div>
