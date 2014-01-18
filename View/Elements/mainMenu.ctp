<nav class="navbar navbar-default" role="navigation">
    <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Meridian: LSM</a>
    </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <?php echo $this->Html->link( 'Leads & Contacts', array( 'controller' => 'leads', 'action' => 'index' ) ) ?>
                </li>
                
                <li>
                    <?php if( $logged_in ): ?>
                   
                    <?php echo $this->Html->link( 'logout', array( 'controller' => 'users', 'action' => 'logout' ) ) ?>
                        
                       <?php else: ?>
                        <?php echo $this->Html->link( 'Login', array( 'controller' => 'users', 'action' => 'login' ) ) ?>
                        <?php endif;?>
                </li>
            </ul>
        </div>
    </div>
</nav>