<?php include(dirname(__FILE__).'/header.php'); ?>

<?php include(dirname(__FILE__).'/nav.php'); ?>

	<div id="section">

		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
		<div class="article">
			<h2><?php $plxShow->artTitle('link'); ?></h2>
			
			<p class="art_tags"><?php $plxShow->artTags('<a class="#tag_status" href="#tag_url">#tag_name</a>', ''); ?></p>
			
			<div class="art_chapo"><?php $plxShow->artChapo(); ?></div>

			<p class="art_infos">
				<?php $plxShow->artDate('#num_day #month #num_year(4)'); ?>,
				<?php $plxShow->artAuthor() ?>,
				<?php $plxShow->artNbCom() ?>.
			</p>
		</div>
		<?php endwhile; ?>

		<p id="pagination"><?php $plxShow->pagination(); ?></p>

	</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
