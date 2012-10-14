<?php if(!defined('PLX_ROOT')) exit; ?>

	<?php if($plxShow->plxMotor->plxRecord_coms): ?>
		<div id="com">
			<h2 id="comments"><?php echo $plxShow->artNbCom() ?></h2>
			
			<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>

				<div id="<?php $plxShow->comId(); ?>" class="com_atom">
					<blockquote>
						<p class="com_content"><?php $plxShow->comContent() ?></p>
					</blockquote>

					<p class="com_infos">
						<span class="com_date"><?php $plxShow->comDate('#num_day #month #num_year(4), #hour:#minute'); ?></span>,
						<span class="com_author"><?php $plxShow->comAuthor('link'); ?></span> |
						<a class="com_link" href="<?php $plxShow->ComUrl() ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>">#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?></a>
					</p>
				</div>
			<?php endwhile; # Fin de la boucle sur les commentaires ?>

			<div class="com_rss"><?php $plxShow->comFeed('rss',$plxShow->artId()); ?></div>
		</div>
	<?php endif; ?>

	<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
		<h2 id="com_write"><?php $plxShow->lang('WRITE_A_COMMENT') ?></h2>
		
		<form id="form" action="<?php $plxShow->artUrl(); ?>#form" method="post">
			<fieldset>
				<p id="form_alert"><?php $plxShow->comMessage(); ?></p>

				<table>
					<tr>
						<td>
							<label for="form_name"><?php $plxShow->lang('NAME') ?>&nbsp;:</label>
						</td>

						<td>
							<label for="form_site"><?php $plxShow->lang('WEBSITE') ?>&nbsp;:</label>
						</td>

						<td>
							<label for="form_mail"><?php $plxShow->lang('EMAIL') ?>&nbsp;:</label>
						</td>
					</tr>

					<tr>
						<td>
							<input id="form_name" name="name" type="text" size="20" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" />
						</td>

						<td>
							<input id="form_site" name="site" type="text" size="20" value="<?php $plxShow->comGet('site',''); ?>" />
						</td>

						<td>
							<input id="form_mail" name="mail" type="text" size="20" value="<?php $plxShow->comGet('mail',''); ?>" />
						</td>
					</tr>
				</table>

				<label for="form_content"><?php $plxShow->lang('COMMENT') ?>&nbsp;:</label>
				<textarea id="form_content" name="content" rows="3" cols="10"><?php $plxShow->comGet('content',''); ?></textarea>

				<?php if($plxShow->plxMotor->aConf['capcha']): ?>
					<label for="form_captcha"><strong><?php echo $plxShow->lang('ANTISPAM_WARNING') ?></strong>&nbsp;:</label>
					<p><?php $plxShow->capchaQ(); ?>&nbsp;:&nbsp;<input id="form_captcha" name="rep" type="text" size="10" /></p>
					<input name="rep2" type="hidden" value="<?php $plxShow->capchaR(); ?>" />
				<?php endif; ?>

				<input id="form_submit" type="submit" value="<?php $plxShow->lang('SEND') ?>" />
			</fieldset>
		</form>
	<?php else: ?>
		<p><?php $plxShow->lang('COMMENTS_CLOSED') ?>.</p>
	<?php endif; # Fin du if sur l'autorisation des commentaires ?>

