<div class="leads form">
    <?php echo $this->Html->script('margin', array('inline' => false)); ?>
   <?php $this->Html->addCrumb('Edit Lead'); ?>
    <?php echo $this->Session->flash();?>
<?php echo $this->Form->create('Lead',array(
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
		<legend><?php echo __('Edit Lead'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('account_id');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('board_number');
		echo $this->Form->input('mobile_number');
		echo $this->Form->input('requirements',array('rows' => '5'));
		echo $this->Form->input('total_price_quoted');
		echo $this->Form->input('our_price');
		echo $this->Form->input('margin');
                echo $this->Form->button('Margin', 
                                            array(
                                                'onClick' => 'margin(); return false',
                                                'class' => 'btn btn-primary col-sm-offset-2'));
                ?>
                <br><br>
                <?php
		echo $this->Form->input('closing_month');
		echo $this->Form->input('probablity');
		echo $this->Form->input('status_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('date_added');
	?>
	</fieldset>
<?php $options = array(
    'label' => 'Submit',
    'class' => 'btn btn-success col-sm-offset-2'
);
echo $this->Form->end($options); ?>
</div>

