<div class="btn-group">
		<?php echo $this->Html->link(__('New Account'), array('action' => 'add'),array('type' => 'button' ,'class' => 'btn btn-default')); ?>
		<?php echo $this->Html->link(__('List Leads'), array('controller' => 'leads', 'action' => 'index'),array('type' => 'button' ,'class' => 'btn btn-default')); ?> 
		<?php echo $this->Html->link(__('New Lead'), array('controller' => 'leads', 'action' => 'add'),array('type' => 'button' ,'class' => 'btn btn-default')); ?> 
	
</div>
