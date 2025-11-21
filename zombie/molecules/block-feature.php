<style>
    .block-feature {
        max-width: 400px;
        margin:1em auto;
        
    }
    .block-feature img {
        margin: 0 0 .5em;
    }
</style>
<div class="block-feature">
    <div class="title"><?php echo $vars['BlockTitle'];?></div>
    <div class="image"><img src="<?php echo $vars['BlockImage'];?>" alt="<?php echo $vars['BlockImageAlt'];?>"></div>
    <div class="content">
        <?php echo $vars['BlockContent'];?>
        <a class="btn" title="<?php echo $vars['ButtonText'];?>" href="<?php echo $vars['FeatureLink'];?>"><?php echo $vars['ButtonText'];?></a>
    </div>
    
</div>