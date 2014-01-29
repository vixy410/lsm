<div class="leads form">
    <?php echo $this->Html->script('margin', array('inline' => false)); ?>
    <?php echo $this->Html->script('bootstrap-datetimepicker.min', array('inline' => 'false')) ?>
<?php echo $this->Html->css('bootstrap-datetimepicker.min', array('inline' => 'false')) ?>
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
		echo $this->Form->input('margin',array('readonly'));
                echo $this->Form->button('Margin', 
                                            array(
                                                'onClick' => 'margin(); return false',
                                                'class' => 'btn btn-primary col-sm-offset-2'));
                ?>
                <br><br>
                <?php
		//echo $this->Form->input('closing_month',array('label'=>'Likely Closing Date',));
                echo $this->Form->input('closing_month',array(
                    'label'=>'Likely Closing Date',
                    "between"=>"<div class='col-sm-10 input-group date form_date col-md-5' data-date='' data-date-format='dd MM yyyy' data-link-field='dtp_input2' data-link-format='yyyy-mm-dd'>",
                    'after' => '<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
</div>',
                    'readonly'
                ));
		echo $this->Form->input('probablity',array('type'=>'select','options'=>array('High'=>'High','Medium'=>'Medium','Low'=>'Low')));
		echo $this->Form->input('status_id');
		//echo $this->Form->input('user_id');
		//echo $this->Form->input('date_added');
	?>
	</fieldset>
<?php $options = array(
    'label' => 'Submit',
    'class' => 'btn btn-success col-sm-offset-2'
);
echo $this->Form->end($options); ?>
</div>

<script>
$('.form_date').datetimepicker({
language: 'fr',
weekStart: 1,
todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                minView: 2,
                forceParse: 0
});

</script>

