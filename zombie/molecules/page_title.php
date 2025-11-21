
<style>
    .page_title {
        background-size: cover;
        background-position: center;
        height: 350px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-color: #000;
    }
    .page_title h1 {
        text-shadow: 1px 1px 3px rgba(0,0,0,0.8);
        color: #fff;
        text-align: center;
        margin: .5em 0;
    }
</style>
<div class="page_title centle-title" <?php if (!empty($vars['hero-image'])) { echo 'style="background-image:url('.$vars["hero-image"].');"';}?>>
    <div class="container">
        <div class="row row-title">
            <div class="col-sm-12 col">
                <h1><?php echo $vars['pageTitle'];?></h1>
            </div>
        </div>
    </div>
</div>