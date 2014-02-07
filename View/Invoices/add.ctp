<div class="invoices form">
    <?php echo $this->Html->script('bootstrap-datetimepicker.min', array('inline' => 'false')) ?>
    <?php echo $this->Html->css('bootstrap-datetimepicker.min', array('inline' => 'false')) ?>
<?php echo $this->Form->create('Invoice',array(
                                    'class' => 'form-horizontal well',
                                    'role' => 'form',
                                    'inputDefaults' => array(
                                        'div' => 'form-group',
                                        'class' => 'form-control',
                                        'between' => '<div class ="col-sm-10">',
                                        'after' => '</div>',
                                        'label' => array(
                                            'class' => 'col-sm-2 control-label'
                                        )
                                    )
                                )); ?>
	<fieldset>
		<legend><?php echo __('Add Invoice'); ?></legend>
	<?php echo $this->element('tools/addedit_form'); ?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
