<?php
		echo $this->Form->input('invoice_no');
		echo $this->Form->input('delivery_note');
		echo $this->Form->input('mop');
		echo $this->Form->input('dog');
		echo $this->Form->input('quantity');
		echo $this->Form->input('unit_rate');
		echo $this->Form->input('amount');
		echo $this->Form->input('final_amount');
		echo $this->Form->input('sr');
		echo $this->Form->input('other_ref');
		echo $this->Form->input('account_id');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('pin');
		echo $this->Form->input('country');
		echo $this->Form->input('bpo');
		//echo $this->Form->input('dated');
                    echo $this->Form->input('dated',array(
                        //'class'=>FALSE,
                        'options'=>FALSE,
                        'type'=>'text',
                    'label'=>'Dated',
                    "between"=>"<div class='col-sm-10 input-group date form_date col-md-5' data-date='' data-date-format='MM dd yyyy' data-link-field='dtp_input2' data-link-format='yyyy-mm-dd'>",
                    'after' => '<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
</div>',
                    'readonly'
                ));
		echo $this->Form->input('ddn');
		echo $this->Form->input('dated2');
		echo $this->Form->input('despatched_through');
		echo $this->Form->input('destination');
	?>

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