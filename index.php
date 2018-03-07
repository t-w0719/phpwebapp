<!DOCTYPE html>
<html lang="ja">
<head>
	<title>共通部分をphpで管理するデモ</title>
<link rel="stylesheet" type="text/css" href="/css/example.css">
</head>
<body>
//ここにheader要素を読み込みます
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>
 <main>
phpでmainの要素を読み込みました
 </main>
<?php include( dirname(__FILE__) . '/footer.php'); ?>
</body>
</html>
