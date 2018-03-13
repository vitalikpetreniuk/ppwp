<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package papapups
 */
global $papapups;

?>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-12">
                <a href="/" class="logo">
                    <img src="<?= esc_url($papapups['footer_logo']['url']);?>" alt="<?php bloginfo( 'name' ); ?>">
                </a>
                <p class="phone subtitle">
                    <?= esc_attr($papapups['footer_phone']);?>
                </p>
            </div>
            <div class="col-4">
                <div class="instagram-widget">
                    <?php dynamic_sidebar( 'instagram' ); ?>
                </div>
            </div>
            <div class="col-5">
                <div class="facebook-widget">
                    <?php dynamic_sidebar( 'facebook' ); ?>
                </div>
            </div>
        </div>
        <div class="row copy">
            <div class="col-md-7 col-12">
                <p class="copyright subtitle">
                    <?= esc_attr($papapups['copyright']);?>
                </p>
            </div>
            <div class="col-md-5 col-12 text-right">
                <a href="http://fruitware.ru" target="_blank" class="fruitwarelogo">
                    Создано с любовью в Fruitware
                </a>
            </div>
        </div>
    </div>
</footer>


<div class="modal modal-order fade" id="orderForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="ct-item-title">Конверт —<span>“Пушистый лес”</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= do_shortcode('[contact-form-7 id="85" title="Order"]');?>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-white">Заказать</button>
            </div>
        </div>
    </div>
</div>


<?php

$args   = array(
    'post_type'      => 'lif_product',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$query = new WP_Query( $args );

?>

<?php

if ( $query->have_posts() ) {?>
    <?php while ( $query->have_posts() ) : $query->the_post();

        ?>

        <div class="modal modal-order modal-detale fade" id="detale-<?php the_ID();?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="ct-item-title"><?php the_title();?></h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="image">
                                    <?php the_post_thumbnail('full'); ?>
                                    <button class="plus">+</button>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-4">
                                <?php if(get_the_post_thumbnail()):?>
                                    <a class="image small" data-src="<?php the_post_thumbnail_url('full')?>">
                                        <?php the_post_thumbnail('full'); ?>
                                    </a>
                                <?php endif;?>
                                <?php if(get_field('small_image2')):?>
                                    <a class="image small" data-src="<?php the_field('small_image2');?>">
                                        <img src="<?php the_field('small_image2');?>" alt="<?php the_title();?>">
                                    </a>
                                <?php endif;?>
                                <?php if(get_field('small_image4')):?>
                                    <a class="image small" data-src="<?php the_field('small_image4');?>">
                                        <img src="<?php the_field('small_image4');?>" alt="<?php the_title();?>">
                                    </a>
                                <?php endif;?>
                            </div>
                            <div class="col-md-2 col-sm-4 col-4">
                                <?php if(get_field('small_image')):?>
                                    <a class="image small" data-src="<?php the_field('small_image');?>">
                                        <img src="<?php the_field('small_image');?>" alt="<?php the_title();?>">
                                    </a>
                                <?php endif;?>
                                <?php if(get_field('small_image3')):?>
                                    <a class="image small" data-src="<?php the_field('small_image2');?>">
                                        <img src="<?php the_field('small_image3');?>" alt="<?php the_title();?>">
                                    </a>
                                <?php endif;?>
                                <?php if(get_field('small_image5')):?>
                                    <a class="image small" data-src="<?php the_field('small_image5');?>">
                                        <img src="<?php the_field('small_image5');?>" alt="<?php the_title();?>">
                                    </a>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="tow-cols">
                            <?php the_content();?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="ct-item-title hidden"><?php the_title();?></div>
                        <div class="product_id hidden"><?php the_ID();?></div>
                        <button type="submit" class="btn btn-white order_form" data-modal="#detale-<?php the_ID();?>">Заказать</button>
                    </div>
                </div>
            </div>
        </div>
        <?php


    endwhile;
    wp_reset_postdata();
    ?>
<?php } ?>


<?php wp_footer(); ?>

</body>
</html>
