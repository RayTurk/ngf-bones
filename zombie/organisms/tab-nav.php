<nav class="tab_nav">
    <?php
        $count = 0;
        if (!empty($vars)) {
            foreach ($vars as $tab) {
                $count ++;
                if ($count == 1) {
                    $class= 'active';
                }
                else {
                    $class = "";
                }
?>
                <a href="#tab_<?php echo $count;?>"><?php echo $tab['title'];?></a>
<?php
    
            }
        }
        
    ?>
</nav>