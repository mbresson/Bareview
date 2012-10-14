<?php if(!defined('PLX_ROOT')) exit; ?>

	<div id="nav">
		<div id="nav_menu">
			Menu
			<ul>
				<li id="menu_pages">
					Pages
					<ul>
						<?php $plxShow->staticList('', '<li><a href="#static_url">#static_name</a></li>'); ?>
					</ul>
				</li>

				<li id="menu_rss">
					RSS
					<ul>
						<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>"><?php $plxShow->lang('ARTICLES') ?></a></li>
						
						<li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>"><?php $plxShow->lang('COMMENTS') ?></a></li>
					</ul>
				</li>

				<li id="menu_admin"><a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a></li>
			</ul>
		</div>

		<div id="nav_home">
			<a href="<?php echo $plxShow->urlRewrite() ?>"><?php $plxShow->lang('HOME'); ?></a>
		</div>

		<div id="nav_top">
			<a href="<?php echo $plxShow->urlRewrite('#top') ?>"><?php $plxShow->lang('TOP') ?></a>
		</div>
		
		<div id="nav_bottom">
			<a href="<?php echo $plxShow->urlRewrite('#footer') ?>"><?php $plxShow->lang('BOTTOM') ?></a>
		</div>
	</div>
