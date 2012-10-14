<?php include(dirname(__FILE__).'/header.php'); ?>

<?php include(dirname(__FILE__).'/nav.php'); ?>

	<div id="section">

		<div id="article">

				<h2 class="error_title"><?php $plxShow->lang('ERROR') ?> :</h2>
				
				<p class="error_content"><?php $plxShow->erreurMessage(); ?></p>

		</div>

	</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>

