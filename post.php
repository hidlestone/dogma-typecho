<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>
	<header>
		<h2><?php $this->title(); ?></h2>
	</header>
	<div class="content">
		<div class="post">
			<div class="post-content"><?php $this->content(); ?></div>
			<div class="post-meta"><?php $this->author(); ?> @ <?php $this->date('Y-m-d'); ?> in <?php $this->category(); ?></div>
		</div>
		<?php $this->need('comments.php'); ?>
	</div>
<div class="mixed_site_nav_wrap site_nav_wrap">
      <ul class="mixed_site_nav site_nav sm sm-base">
  <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
		<?php while($pages->next()): ?>
			<li><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
		<?php endwhile; ?>
      </ul>
      <div class="clear clear_nav_inline_end"></div>
    </div>
<?php $this->need('footer.php'); ?>