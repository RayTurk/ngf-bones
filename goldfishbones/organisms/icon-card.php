<div class="cardwrap col-sm-12">
    <?php if ($vars['CardLink'] != "") { ?>
        <a title="<?php echo $vars['CardTitle'];?>" href="<?php echo $vars['CardLink'];?>">
    <?php } ?>
        <div class="iconcard">
            <h3><?php echo $vars['CardTitle'];?></h3>
            <div class="image"><img src="<?php echo $vars['CardImage'];?>" alt="<?php echo $vars['CardImageAlt'];?>"></div>
        </div>
    <?php if ($vars['CardLink'] != "") { ?>
        </a>
    <?php } ?>
</div>