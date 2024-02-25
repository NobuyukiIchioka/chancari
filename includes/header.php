<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $pageTitle; ?></title> <!-- ページタイトルを動的に設定 -->
<link rel="stylesheet" href="css/HTML5 Doctor CSS Reset.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<!-- ファビコン画像 -->
<!-- 動的にスタイルシートリンクを追加 -->
<?php
if (isset($addCSS)) {
    echo '<link rel="stylesheet" href="css/'.$addCSS.'">';
}
?>
</head>

<body>
<header>
<div class="header-container">
  <div class="logo">
    <div class="logo-container">
    <a href="./index.html">
      <img class="logo-img" src="./img/logo.png" alt="chancariのロゴ">
      <img class="title-img" src="./img/svg/chancari.svg" alt="chancariのタイトル">
    </a>
    </div>
  </div>

  <nav class="navi">
    <p>ようこそ！</p>
    <ul class="nav-links">
      <li><a href="./login.html">新規登録</a></li>
      <li><a href="./login.html">ログイン</a></li>
    </ul>
  </nav>
</div><!-- header-container -->
</header>

