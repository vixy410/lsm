<div class="users form">
     <?php echo $this->Session->flash();?>
    <?php $this->Html->addCrumb('Add User', '/users/add'); ?>
<?php echo $this->Form->create('User',array(
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
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fname',array('label' => 'First Name'));
		echo $this->Form->input('lname',array('label' => 'Last Name'));
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('email', array('type' => 'email'));
		echo $this->Form->input('phone');
		echo $this->Form->input('role');
                //echo $this->Form->input('created',array('type' => 'text'));
	?>
	</fieldset>
<?php 
    $options = array(
        'label' => 'Submit',
        'div' => array('class' => 'form-group'),
        'class' => 'btn btn-success col-sm-offset-2'
    );
    echo $this->Form->end($options); 

?>
</div>
