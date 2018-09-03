<?php get_header(); ?>

<header class="uk-background-secondary text-white pt-5 pb-6">
	<div class="uk-container">
		<h1 class="text-white m-0 pb-1"><?php bloginfo('name'); ?></h1>
		<span><?php bloginfo('description'); ?></span>
	</div>
</header>


<div class="main pt-6 pb-6">
	<div class="uk-container">
		<?php if(have_posts()): ?>
			<?php while(have_posts()): the_post() ?>
				<article class="uk-article uk-card uk-card-default uk-card-hover uk-card-body">
					<h3 class="uk-article-title">
						<?php the_title() ?>
					</h3>
					<div class="meta uk-background-secondary py-3 pl-3
					 text-white uk-article-meta">
						Created By: <?php the_author() ?>
						on <?php the_time('F j, Y g:i a') ?>
					</div>

					<?php if(has_post_thumbnail()): ?>
						<div class="img-post">
							<?php the_post_thumbnail(); ?>
						</div>
					<?php endif; ?>

					<?php the_content() ?>
					<div class="uk-grid-small uk-child-width-auto" uk-grid>
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

