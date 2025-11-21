<?php 
global $product; 

$attachment_ids = $product->get_gallery_image_ids();
if ( $attachment_ids && has_post_thumbnail() ) {
?>
<div id="media_gallery">
    
    
    
        <?php 
            get_atomic_part('/molecules/media_gallery-image.php', get_post_thumbnail_id($post->ID));        
            $rcount = 0;     
            $args = array (
                    'count'     => $rcount,
                    'id'        => get_post_thumbnail_id($post->ID),
            );
            echo '<div class="thumbs">';
            foreach ( $attachment_ids as $attachment_id ) {
                $rcount ++;
                $args = array (
                    'count'     => $rcount,
                    'id'        => $attachment_id,
                );
            
                get_atomic_part('/molecules/media_gallery-thumbnail.php', $args);                  
                   
                   
            }
            echo '</div>'
        ?>
</div>
<?php }
elseif (has_post_thumbnail()) {
?>
<div id="media_gallery">
    <div class="large-image">
        
        <?php 
            
               
        get_atomic_part('/molecules/media_gallery-image.php', get_post_thumbnail_id($post->ID));
        
            
        ?>
        
        <div class="vz">
            View Full Size
        </div>
    </div>
</div>
<?php } 
    else {
        echo '<p>No Product Image Found</p>';
    }
?>
