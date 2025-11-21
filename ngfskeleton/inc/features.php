<div id="features">
	<div class="container">
        <div class="row">
            <?php $features = cfs()->get('features');
                if (isset($features)) {
                    foreach ($features as $row) {
            ?>
                <div class="col-md-4 feature_container">
                    <div class="feature">
                        <a style="color:inherit;text-decoration:none;" href="<?php echo $row['link'];?>">
                            <img src="<?php echo $row['image'];?>" alt ="<?php echo $row['title'];?>">
                            <h3><?php echo $row['title'];?></h3></a>
                            <div class="description"><?php echo $row['description'];?></div>
                            <a class="btn" href="<?php echo $row['link'];?>">Learn More</a>
                        </a>
                    </div>
                </div>
            <?php } }?>
        </div>
	</div>
</div>