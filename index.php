<?php get_header(); ?>
<?php get_template_part('template-parts/navigation') ?>
<div class="container-fluid">


    <?php $query = new WP_Query(array(
        'post__not_in' => get_option('sticky_posts')
    ));
    ?>
    <div class="row">
        <div class="col-md-12">

            <div id="mdb-lightbox-ui"></div>

            <div class="mdb-lightbox">
                <div class="row">
                    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                            <figure class="col-md-4 images">
                                <a href="<?php the_permalink(); ?>">
                                    <?php echo get_the_post_thumbnail($post, 'large') ?>
                                </a>
                            </figure>
                    <?php endwhile;
                    endif; ?>
                </div>

            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>