<div class="statuses form">
    <?php $this->Html->addCrumb('Add Status', '/statuses/add/'); ?>
<?php echo $this->Form->create('Status',array(
                                    'class' => 'form-horizontal well',
                                    'role' => 'form',
                                    'inputDefaults' => array(
                                        'div' => 'form-group',
                                        'class' => 'form-control',
                                        'between' => '<div class ="col-sm-10">',
                                        'after' => '</div>',
                                        'label' => array(
                                            'class'  => 'col-sm-2 control-label'
                                        )
                                    )
                                )); ?>
	<fieldset>
		<legend><?php echo __('Add Status'); ?></legend>
	<?php
		echo $this->Form->input('status');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php 
$options = array(
    'label' => 'Submit',
    'class' => 'btn btn-success col-sm-offset-2'
);
echo $this->Form->end($options); ?>
</div>
