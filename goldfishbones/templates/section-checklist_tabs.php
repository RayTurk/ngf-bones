<?php $theid = get_sub_field('css_id');?>
<style>
    .section_checklist_tabs {
        padding: 10px 0;
    }
    .section_checklist_tabs .tab {
        display: none;
        background-size: cover;
        padding: 1em;
        background-position: center;
    }
    .section_checklist_tabs .container>.row>div {
        display: flex;
        flex-direction: column;
    }
    .section_checklist_tabs .tab.active {
        display: flex;
        flex-direction: column;
        height: 100%;
        justify-content: flex-end;
        height: 100%;
    }
    
    .section_checklist_tabs .tab_nav {
        padding: 1em 0 0;
        border-right: 1px solid;
    }
    .section_checklist_tabs .tab_tabs {
        padding: 0;
    }
    .section_checklist_tabs .content {
        padding: 2em 0;
    }
    .section_checklist_tabs .tab_nav a {
        display: block;
        text-decoration: none;
        color: inherit;
        font-weight: bold;
        border: 1px solid;
        position: relative;
        left: 1px;
        padding: 0.25em .5em;
    }
    .section_checklist_tabs .tab_nav a.active {
        border-right: 1px solid #fff;
    }
    .section_checklist_tabs .tab_nav a+a {
        border-top: none;
    }
</style>
<div id="<?php echo get_sub_field('css_id') ;?>" class="page_section section_checklist_tabs <?php echo get_sub_field('classes');?>"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="content"><?php the_sub_field('left_copy');?></div>
            </div>
            <div class="col-md-4 col-lg-2 tab_nav">
                
                        
                            <?php 
                                if( have_rows('tabs', $page) ):
                                    $count = 0;
                                    while ( have_rows('tabs',$page) ) : the_row();

                            ?>
                            <a class="<?php if ($count == 0) {echo 'active';}?>" href="#tab_<?php echo $theid.'_'.$count;?>"><?php the_sub_field('tab_name');?></a>
                            <?php
                                    $count ++;
                                    endwhile;

                                else :

                                    echo 'not found.';

                                endif;
                            ?>
                        
                        
                    </div>
            <div class="col-md-8 col-lg-3 tab_tabs">
                <?php 
                    if( have_rows('tabs', $page) ):
                        $count = 0;
                        while ( have_rows('tabs',$page) ) : the_row();

                ?>
                <div id="tab_<?php echo $theid.'_'.$count;?>" class="tab <?php if ($count == 0) {echo 'active';}?>" style="background-image: url(<?php echo get_sub_field('image');?>)"><?php the_sub_field('content');?></div>
                <?php
                        $count ++;
                        endwhile;

                    else :

                        echo 'not found.';

                    endif;
                ?>
            </div>
        </div>
            
    </div>
</div>