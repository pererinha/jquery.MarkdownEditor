<!DOCTYPE HTML>
<html>
<head>
	<title>jquery.MarkdownEditor - preview</title>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
</head>
<body>
<div class="container">
	<form action="preview/preview.php" method="post">
	<h1>jquery.MarkdownEditor - preview</h1>
	<div style="margin:5px;padding:15px;border:1px solid #000;background:#F5F5F5;">
	<?php
	include( 'lib/markdown.php' );
	include( 'lib/geshi.php' );
	echo Markdown::parse( $_POST['markdown-it'] );
	?>
	</div>
	<p>
		<a href="https://github.com/pererinha/jquery.MarkdownEditor">Get the code</a> | 
		<a href="http://qbnz.com/highlighter/documentation.php">GeSHi</a>
	</p>
</div>
</body>
</html>
