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
		<div class="uk-width-3-4\@l">
			<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post() ?>
					<article class="uk-article">
						<h3 class="uk-article-title">
							<?php the_title() ?>
						</h3>

						<?php if(has_post_thumbnail()): ?>
							<div class="img-post">
								<?php the_post_thumbnail(); ?>
							</div>
						<?php endif; ?>

						<?php the_content() ?>

					</article>
				<?php endwhile; ?>
			<?php else: ?>
				<?php echo wpautop('Sorry , No Posts were found'); ?>
			<?php endif; ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>

