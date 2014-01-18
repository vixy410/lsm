<ul class="pager">
            <li> <a><?php echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'previous disabled')); ?></a></li>
	    <?php echo $this->Paginator->numbers(array('separator' => '')); ?>
            <li><a> <?php echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')); ?></a></li>
	</ul>