 <div class="btn-group">
                <?php //echo $this->Html->link(__('New Lead'), array('action' => 'add')); ?>
		<?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index'),array('type' => 'button' ,'class' => 'btn btn-default')); ?> 
		<?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add'),array('type' => 'button' ,'class' => 'btn btn-default')); ?> 
		<?php echo $this->Html->link(__('List Status'), array('controller' => 'statuses', 'action' => 'index'),array('type' => 'button' ,'class' => 'btn btn-default')); ?> 
		<?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add'),array('type' => 'button' ,'class' => 'btn btn-default')); ?> 
		<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'),array('type' => 'button' ,'class' => 'btn btn-default')); ?> 
		<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'),array('type' => 'button' ,'class' => 'btn btn-default')); ?> 
      </div>