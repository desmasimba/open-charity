<!-- HEADER REGION -->
<div class="header-wrapper clearfix">
	<div class="header-inner region-inner">
		<div class="logo-div">
			<?php if ($logo): ?>
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
					<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
				</a>
			<?php endif; ?>
		</div>	
 
		<!-- Main Menu -->
		<div class="main-menu">
			<?php print render($page['main_menu']); ?>
		</div>
	</div>	
</div>

<!-- PREFACE REGIONS -->
<div class="preface-wrapper clearfix">
	<div class="preface-inner region-inner">
		<?php print render($page['preface_first']); ?>
		<?php print render($page['preface_second']); ?>
	</div>	
</div> 

<!-- CONTENT REGION -->
<div class="content-wrapper clearfix">
	<div class="content-inner region-inner">
		<h1><?php print $title; ?></h1>
		<?php print render($page['content']); ?>
	</div>	
</div>

<!-- POSTSCRIPT REGIONS -->
<div class="postscript-wrapper clearfix">
	<div class="postscript-inner region-inner">
		<?php print render($page['postscript_first']); ?>
		<?php print render($page['postscript_second']); ?>
	</div>	
</div> 

<!-- BASE REGION -->
<div class="base-wrapper clearfix">
	<div class="base-inner region-inner">
		<?php print render($page['base']); ?>
	</div>	
</div> 

<!-- FOOTER REGIONS -->
<div class="footer-wrapper clearfix">
	<div class="footer-inner">
		<?php print render($page['footer_first']); ?>
		<?php print render($page['footer_second']); ?>
	</div> 
</div>	
