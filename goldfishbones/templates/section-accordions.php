<?php //Single Column Text
    global $post;
    $css = get_sub_field('css_id');
?>
<style>
    .accordion>h3 {
        background:#ccc;
        padding: .5em 1em;
        cursor: pointer;
        position: relative;
    }
    .accordion>h3::after {
        content:"+";
        position: absolute;
        right: 1em;
    }
    .accordion.open>h3::after {
        content: '-';
    }
    .accordion>div {
        height: 0;
        overflow: hidden;
        padding: 0 1em;
        
    }
    .accordion.open>div {
        height: auto;
    }
</style>
    <div id="<?php echo get_sub_field('css_id') ;?>" class="page_section section_accordion <?php echo get_sub_field('classes');?>"> 
		<div class="container">
		    
                <?php if (get_sub_field('headline') != "") {
                    echo '<h2>'.get_sub_field('headline').'</h2>';
                }?>
		    
                    <?php
                        $items = get_sub_field('accordions');
                        
                        if ($items != "") {
                            $count = 0;
                            echo '<div class="accordions">';
                            foreach ($items as $item) {
                                
                                $count ++;
                                $args = array (
                                    'title'     =>  $item['title'],
                                    'content'   =>  $item['content'],
                                    'count'     =>  $count,
                                    'css'       =>  $css
                                    
                                    
                                );
                                get_atomic_part('/organisms/accordion-item.php', $args);
                            }
                            echo '</div>';
                        }
		    		?>
		    	
		    
		</div>
	</div>