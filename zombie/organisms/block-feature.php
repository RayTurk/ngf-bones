<div class="col">
    <div class="block-feature">
        <div class="title"><?php echo $vars['BlockTitle'];?></div>
        <div class="img">
            <?php 
                $ext = pathinfo($vars['BlockImage'], PATHINFO_EXTENSION);
                if ($ext == 'svg') {
                    $file = file_get_contents($vars['BlockImage']);
                    echo $file;

                }
                else {
            ?>
                <img src="<?php echo $vars['BlockImage'];?>" alt="Icon">

            <?php 
                }
            ?>
        </div>
        <div class="content">
            <?php echo $vars['BlockContent'];?>
            <a class="btn" title="<?php echo $vars['ButtonText'];?>" href="<?php echo $vars['FeatureLink'];?>"><?php echo $vars['ButtonText'];?></a>
        </div>
    </div>
</div>