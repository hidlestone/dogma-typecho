<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>
	<header>
		<h2><?php $this->archiveTitle(array(
			'category'  =>  _t('%s'),
			'search'    =>  _t('%s'),
			'tag'       =>  _t('%s'),
			'author'    =>  _t('%s')
			), '', ''); ?></h2>
	</header>
<?php if ($this->have()): ?>
	<div class="content">
		<div class="post">
			<ul class="post-list">
				<?php while($this->next()): ?>
				<li class="post-item">
					<a href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
		<div class="pagenav">
			<?php $this->pageLink('&laquo;上一页','prev'); ?><?php $this->pageLink('下一页&raquo;','next'); ?>
		</div>
	</div>
<?php else: ?>
	<div class="content">
		<div class="post">
			<div class="post-content">
				<p>没有找到相关内容，请更换查找条件后再试。</p>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php $this->need('footer.php'); ?>