<style>
    .switch, .cards {
        padding:1em;
    }
    .card_switcher .topcard .image {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }
    .card_switcher .topcard .thecontent {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }
    .cards .acard {
        cursor: pointer;
    }
    @media screen and (min-width:1px) {
        .card_switcher .cards .thecontent {
            display: none;
        }
    }
</style>
<div id="<?php echo get_sub_field(css_id);?>" class="page_section card_switcher">
    <div class="switch">
        <div class="container">
            <div class="topcard">
                <div class="acard">
            <?php
                if( have_rows('card_loop') ):
                    $count = 0;
                

                    // loop through the rows of data
                    while ( have_rows('card_loop') ) : the_row();
                        $img = get_sub_field('image');
                        $fields = array (
                            'Title'    => get_sub_field('title'),
                            'Image'    => $img['url'],
                            'ImageAlt' => $img['alt'],
                            'Content'  => get_sub_field('content'),
                        );
                        if ($count == 0) {
                            
                            get_atomic_part('/organisms/top_card.php',$fields);
                        }
                        $count ++;
                    endwhile;

                

                endif;
            ?>
                </div>
            </div>
        </div>
    </div>
    <div class="cards">
        <div class="container">
            <?php
                if( have_rows('card_loop') ):
                    echo '<div class="row">';
                

                    // loop through the rows of data
                    while ( have_rows('card_loop') ) : the_row();
                        $img = get_sub_field('image');
                        $fields2 = array (
                            'Title'    => get_sub_field('title'),
                            'Image'    => $img['url'],
                            'ImageAlt' => $img['alt'],
                            'Content'  => get_sub_field('content'),
                        );
                        get_atomic_part('/organisms/switcher_cards.php', $fields2);
                        
                        
                    endwhile;
                    echo '</div>';
                

                endif;
            ?>
        </div>
    </div>
</div>
