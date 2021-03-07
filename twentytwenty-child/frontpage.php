<?php
/**
 * Template Name: Front Page
 *
*/
get_header(); ?>

<section class="banner">
    <?php if( have_rows('header') ): ?>
    <?php while( have_rows('header') ): the_row(); 
        $banner_image = get_sub_field('banner_image');
        $banner_heading = get_sub_field('banner_heading');
        $banner_content = get_sub_field('banner_content');
        ?>
    <img src="<?php echo $banner_image;?>" alt="">
    <div class="banner_content">
        <h1><?php echo $banner_heading; ?></h1>
        <p><?php echo $banner_content; ?></p>
    </div>
    <?php 
    endwhile;
endif;
?>
</section>

<section class="second_scroll">
    <?php if( have_rows('second_scroll') ): ?>
    <?php while( have_rows('second_scroll') ): the_row(); 
        $image = get_sub_field('image');
        $heading = get_sub_field('heading');
        $content = get_sub_field('content');
        $link = get_sub_field('link');
        ?>
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-4">
                <img src="<?php echo $image; ?>" alt="">
            </div>
            <div class="offset-md-1 col-md-5">
                <h4><?php echo $heading; ?></h4>
                <p><?php echo $content; ?></p>
                <a href="<?php echo $link; ?>">Know More ></a>
            </div>
        </div>
    </div>
    <?php 
    endwhile;
endif;
?>
</section>

<section>
    <?php if( have_rows('recipes') ): ?>
    <?php while( have_rows('recipes') ): the_row(); 
        $image = get_sub_field('image');
        $heading = get_sub_field('heading');
        $sub_heading = get_sub_field('sub_heading');
        $discover = get_sub_field('discover');
        ?>
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8 text-center">
                <img src="<?php echo $image; ?>" alt="">
            </div>
            <div class="offset-md-2 col-md-8 text-center pb-5">
                <h4><?php echo $heading; ?></h4>
                <p><?php echo $sub_heading; ?></p>
            </div>
            <div class="row">
            <?php 
                if( have_rows('recipe_card') ):
                    while( have_rows('recipe_card') ) : the_row();
                        $image = get_sub_field('image');
                        $title = get_sub_field('title');
                        $link = get_sub_field('link');
                        $share = get_sub_field('share');
            ?>
            <div class="col-lg-4 col-md-4 col-sm-4 pb-5">
                <div class="card">
                    <img class="card-img-top" src="<?php echo $image; ?>" alt="Card image cap">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <p class="card-text"><?php echo $title; ?></p>
                            </div>
                            <div class="col-md-3">
                                <a href="<?php echo $link; ?>" class="icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download" class="svg-inline--fa fa-download fa-w-16 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path></svg></a>
                                <a href="<?php echo $share; ?>" class="icon"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" class="svg-inline--fa fa-whatsapp fa-w-14 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php    
                endwhile;
            endif;
            ?>
            </div>
            <div class="col-md-12 text-center">
                <a href="<?php echo $discover; ?>" class="recipe-button">Discover ></a>
            </div>
        </div>
    </div>

    <?php 
    endwhile;
endif;
?>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <?php 
                    if( have_rows('new_arrivals') ):
                        while( have_rows('new_arrivals') ) : the_row();
                ?>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php 
                            if( have_rows('items') ):
                                while( have_rows('items') ) : the_row();
                                    $image = get_sub_field('image');
                                    $title = get_sub_field('title');
                                    $sub_title = get_sub_field('sub_title');
                        ?>
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo $image; ?>" alt="Card image cap">
                                <div class="card-body">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h4 class="card-text"><?php echo $title; ?></h4>
                                        <p class="card-text sub_title"><?php echo $sub_title; ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <!-- Add Arrows -->
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <?php    
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                <?php    
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>
<script>
var swiper = new Swiper('.swiper-container', {
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
});
</script>