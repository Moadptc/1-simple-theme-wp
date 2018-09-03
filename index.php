<?php get_header(); ?>

<header class="uk-background-secondary text-white pt-5 pb-6">
    <div class="uk-container">
        <h1 class="text-white m-0 pb-1"><?php bloginfo('name'); ?></h1>
        <span><?php bloginfo('description'); ?></span>
    </div>
</header>

<?php get_template_part('navbar'); ?>

<div class="main pt-6 pb-6">
    <div class="uk-container">
	    <?php if(have_posts()): ?>
		    <?php while(have_posts()): the_post() ?>
                <article class="uk-article uk-card uk-card-default uk-card-hover uk-card-body">
                    <h3 class="uk-article-title">
                        <a href="<?php the_permalink(); ?>">
			                <?php the_title() ?>
                        </a>
                    </h3>
                    <div class="meta uk-article-meta uk-background-secondary
                    py-3 pl-3 text-white">
                        Created By: <?php the_author() ?>
                        on <?php the_time('F j, Y g:i a') ?>
                    </div>

                    <?php if(has_post_thumbnail()): ?>
                        <div class="img-post">
	                        <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>

	                <?php the_excerpt() ?>

                    <div class="uk-grid-small uk-child-width-auto" uk-grid>
                        <div>
                            <a class="uk-button uk-button-text" href="<?php the_permalink(); ?>">
                                Read more
                            </a>
                        </div>
                        <div>
                            <a class="uk-button uk-button-text" href="#">
                                5 Comments
                            </a>
                        </div>
                    </div>

                </article>
		    <?php endwhile; ?>
	    <?php else: ?>
		    <?php echo wpautop('Sorry , No Posts were found'); ?>
	    <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>

