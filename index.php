<?php
/**
 * Theme Dogma redesigned by 旅途の风 on Typecho
 * 
 * @package dogma
 * @author payn
 * @version 1.0
 * @link http://wordplay.work/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div class="mixed_site_nav_wrap site_nav_wrap">
      <ul class="mixed_site_nav site_nav sm sm-base">
		<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
		<?php while($pages->next()): ?>
			<li><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
		<?php endwhile; ?>
      </ul>
      <div class="clear clear_nav_inline_end"></div>
    </div>

	<!-- <header>
		<h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> </h1>
	</header> -->
	<div class="content">
		<div class="post">
			<ul class="post-list">
				<?php while($this->next()): ?>
				<li class="post-item">
					<a href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a>
					<span class="post-meta">
					</span>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
		<div class="pagenav">
			<?php $this->pageLink('&laquo;上一页','prev'); ?><?php $this->pageLink('下一页&raquo;','next'); ?>
		</div>
	</div>
<?php $this->need('footer.php'); ?>