<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>
	<header>
		<h2><?php $this->title(); ?></h2>
	</header>
	<div class="content">
		<div class="post">
			<div class="post-content"><?php $this->content(); ?></div>
			<div class="post-meta"><?php $this->author(); ?> @ <?php $this->date('Y-m-d'); ?></div>
		</div>
		<?php $this->need('comments.php'); ?>
	</div>
<?php $this->need('footer.php'); ?>