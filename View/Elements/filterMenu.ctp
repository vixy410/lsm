<div class="row">
<div class="col-md-4">
<ul class="nav nav-tabs">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                Status <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                 <?php echo $this->Html->link('Active', array('controller' => 'leads', 'action' => 'active')) ?>
              </li>
              <li>
                 <?php echo $this->Html->link('Closed', array('controller' => 'leads', 'action' => 'closed')) ?>
              </li>
              <li>
                 <?php echo $this->Html->link('Won', array('controller' => 'leads', 'action' => 'won')) ?>
              </li>
              <li>
                 <?php echo $this->Html->link('Lost', array('controller' => 'leads', 'action' => 'lost')) ?>
              </li>
            </ul>           
       </li>
 </ul>
</div>
</div>