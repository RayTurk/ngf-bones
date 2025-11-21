<div class="tabs">
    <?php
        $count = 0;
        if (!empty($vars)) {
            foreach ($vars as $tab) {
                $count ++;
                if ($count == 1) {
                    $class= 'active tab';
                }
                else {
                    $class = "tab";
                }
?>
                <div id="tab_<?php echo $count;?>" class="<?php echo $class;?>">
                    <?php echo $tab['content'];?>
                </div>
<?php
    
            }
        }
        
    ?>
</div>