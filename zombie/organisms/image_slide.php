<?php 
    $class = preg_replace('/\s+/', '', $vars['SlideTitle']);
    $class = 'slide_'.$class;
?>
<div class="slide <?php echo $class;?>" style="background-image:url(<?php echo $args['BackgroundImage'];?>)">
    <div class="caption">
        <div class="container">
            <div class="inner">
                <?php echo $args['SlideContent'];?>
            </div>
        </div>
    </div>
</div>