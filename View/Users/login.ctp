<?php echo $this->Html->css('custom', array( 'inline' => FALSE)) ?>
<?php if( !$logged_in ): ?>
 <?php echo $this->Session->flash();?>

<div class="row ">
    <center>
    <?php echo $this->Html->image('logo2.png',array('class'=>'img-rounded img-responsive',  'width'=> '60%'))?>
    </center>
    <center>
    <div class="text-success well col-sm-6 col-md-offset-3">
        <strong>Welcome to Meridian Solutions : Lead Sales Management</strong>
    </div>
    </center>
</div>

<div class="well col-sm-6 col-md-offset-3" >
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User',array('class' => 'form-horizontal','role' => 'form')); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username',array(
                                                    'div' => 'form-group',
                                                    'class' => 'col-sm-10 form-control',
                                                    'placeholder' => 'Username',
                                                    'between' => '<div class ="col-sm-10">',
                                                    'after' => '</div>',
                                                    'label' => array(
                                                            'text' => 'Username',
                                                            'class' => 'col-sm-2 control-label')));
        echo $this->Form->input('password',array(
                                                'div' => 'form-group',
                                                'class' => 'form-control',
                                                'placeholder' => 'Password',
                                                'between' => '<div class ="col-sm-10">',
                                                'after' => '</div>',
                                                'label' => array(
                                                    'text' => 'Password',
                                                    'class' => 'col-sm-2 control-label'
                                                )
                                            ));
    ?>
    </fieldset>
<?php 
    $options = array(
        'label' => 'Login',
        'div' => 'form-group',
        'before' => '<div class="col-sm-offset-2 col-sm-10">',
        'after' => '</div>',
        'class' => 'btn btn-primary'
    );
    echo $this->Form->end($options); ?>
</div>


<?php //$this->redirect($this->Auth->redirectUrl( $url = array('controller' => 'leads', 'action' => 'index') )); ?>
<?php endif; ?>