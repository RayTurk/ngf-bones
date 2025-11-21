<div id="secondary">
<?php if (is_active_sidebar('sidebar-blog')) { ?> 
				
					<?php do_action('before_sidebar'); ?> 
					<?php dynamic_sidebar('sidebar-blog'); ?> 
				
<?php } ?> 
</div>