<style>
    .widget_categories label, .widget_archive label {
        display:none;
    }
    .widget_categories select, .widget_archive select {
        width:100%;
        padding: 10px 15px;
        margin:0 0 1.5em;
    }   
</style>
<div id="secondary">
<?php if (is_active_sidebar('sidebar-blog')) { ?> 
				
					<?php do_action('before_sidebar'); ?> 
					<?php dynamic_sidebar('sidebar-blog'); ?> 
				
<?php } ?> 
</div>