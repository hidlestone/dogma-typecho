<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<title><?php if($this->_currentPage>1) echo '第 '.$this->_currentPage.' 页 | '; ?><?php $this->archiveTitle(array(
		'category'  =>  _t('%s'),
		'search'    =>  _t('%s'),
		'tag'       =>  _t('%s'),
		'author'    =>  _t('%s')
		), '', ' | '); ?><?php $this->options->title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('style.min.css'); ?>?v=202002131">
	<?php $this->header("generator=&template=&pingback=&xmlrpc=&wlw="); ?>
</head>
<body>
<div id="container">
	<div id="main" role="main">