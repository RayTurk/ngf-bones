<?php $hapi = get_sub_field('hapikey');?>
<div id="<?php echo get_sub_field('css_id') ;?>" class="page_section hs_articles <?php echo get_sub_field('classes');?>"> 
    <div class="container">
        
        <?php
        if (get_sub_field('headline') != "") {
                echo '<h2>'.get_sub_field('headline').'</h2>';
            }
        if( have_rows('articles') ):

                    echo '<div class="row">';

                    // loop through the rows of data
                    while ( have_rows('articles') ) : the_row();
                            
                             $url = 'https://api.hubapi.com/content/api/v2/blog-posts/'.get_sub_field('post_id').'/?hapikey='.$hapi;
                             
                             $ch = curl_init();

                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            $result = curl_exec($ch);
                            if (curl_errno($ch)) {
                                //echo 'Error:' . curl_error($ch);
                            }
                            curl_close($ch);
                            $object = json_decode($result, true);
                            
                            get_atomic_part ('/organisms/hs-article.php', $object);
                       
                    endwhile;

                    echo '</div>';

                endif;
        ?>
    </div>
</div>