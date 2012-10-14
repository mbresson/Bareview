<?php include(dirname(__FILE__).'/header.php'); ?>

<?php include(dirname(__FILE__).'/nav.php'); ?>

	<div id="section">

		<div class="article">
			<h2><?php $plxShow->artTitle(''); ?></h2>

			<p class="art_tags"><?php $plxShow->artTags('<a class="#tag_status" href="#tag_url">#tag_name</a>', ''); ?></p>

			<div class="art_content"><?php $plxShow->artContent(); ?></div>

			<p class="art_infos">
				<?php $plxShow->artDate('#num_day #month #num_year(4)'); ?>,
				<?php $plxShow->artAuthor() ?>.
			</p>
		</div>

		<?php include(dirname(__FILE__).'/commentaires.php'); ?>
	</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
