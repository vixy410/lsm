<div class="accounts form">
     <?php echo $this->Session->flash();?>
    <?php $this->Html->addCrumb('Edit Account'); ?>
<?php echo $this->Form->create('Account',array(
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
		<legend><?php echo __('Edit Account'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('account_name');
		echo $this->Form->input('url');
		echo $this->Form->input('description',array('rows'=>'5'));
	?>
	</fieldset>
<?php 
$options = array(
    'label' => 'Submit',
    //'div' => array('class' => 'form-control'),
    'class' => 'btn btn-success col-sm-offset-2'
);
echo $this->Form->end($options); ?>
</div>
