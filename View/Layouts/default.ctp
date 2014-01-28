<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

//$cakeDescription = __d('cake_dev', 'LSM: Lead Management System');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php //echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
                echo $this->Html->css('bootstrap.min');
                echo $this->Html->css('bootstrap-theme.min');
                echo $this->Html->css('lms');
                //echo $this->Html->css('bootstrap-datetimepicker.min');
                
                echo $this->Html->script('jquery');
                echo $this->Html->script('bootstrap.min');
                //echo $this->Html->script('bootstrap-datetimepicker.min');
                //echo $this->Html->script('margin');
                //echo $this->Html->script('date');
                
                
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	 <?php if( $logged_in ): ?>
            <header>
		<div id="header">
	           <div id="main_menu">
                      <div class="row">
                        <?php echo $this->element('mainMenu'); ?>
                      </div>
                   </div><!-----/#main_menu--->
		</div>
            </header>
            <?php endif;?>
           
            
            <div id="container">
            <div class="container">
		<div id="content">
                    
                    <?php if( $logged_in ): ?>
                     <div class="breadcrumb">
                   <?php echo $this->Html->getCrumbs(' > ', array('url' => array('controller' => 'leads', 'action' => 'index', 'Home'),'escape' => FALSE)); ?>
                     </div>
                       <?php endif;?>
                         <div style="text-align: left">
                    
                        <?php if( $logged_in ): ?>
                             <b> Welcome <?php echo $current_user['username'] ?></b>
                        <?php endif;?>
                    </div>
			<?php echo $this->Session->flash(); ?>
                        <?php echo $this->Session->flash('auth'); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
                
                
                <footer>
		<div id="footer">
			<?php /**echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				); **/
			?>
                    
		</div>
                </footer>
            </div><!------/.container---->
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
