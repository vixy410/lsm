<div class="extras form">
 <?php echo $this->Html->script('bootstrap-datetimepicker.min', array('inline' => 'false')) ?>
    <?php echo $this->Html->css('bootstrap-datetimepicker.min', array('inline' => 'false')) ?>
<?php echo $this->Form->create('Extra',array(
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
		<legend><?php echo __('Add Extra'); ?></legend>
	<?php
		echo $this->Form->input('Name');
		echo $this->Form->input('date',array(
                        //'class'=>FALSE,
                        //options'=>FALSE,
                        'type'=>'text',
                    'label'=>'Dated',
                    "between"=>"<div class='col-sm-10 input-group date form_date col-md-5' data-date='' data-date-format='yyyy-mm-dd' data-link-field='dtp_input2' data-link-format='yyyy-MM-dd'>",
                    'after' => '<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
</div>',
                    'readonly'
                ));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Extras'), array('action' => 'index')); ?></li>
	</ul>
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
