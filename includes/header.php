<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $pageTitle; ?></title> <!-- ページタイトルを動的に設定 -->
<!-- <link rel="stylesheet" href="css/HTML5 Doctor CSS Reset.css"> -->
<link rel="stylesheet" href="css/destyle.css"><!-- reset.css destyle　強めなリセット -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="icon" href="img/favicon.ico" type="image/x-icon"><!-- ファビコン画像 -->

<!-- CSSシートを動的に追加 -->
<?php
if (isset($addCSS)) {
    if (is_array($addCSS)) {
        foreach ($addCSS as $cssFile) {
            echo '<link rel="stylesheet" href="css/'.$cssFile.'">';
        }
    } else {
        echo '<link rel="stylesheet" href="css/'.$addCSS.'">';
    }
}
?>

</head>

<body>
<header>
<div class="header-container">
  <div class="logo">
    <div class="logo-container">
    <a href="./index.php">
      <img class="logo-img" src="./img/logo.png" alt="ロゴ">
      <img class="title-img" src="./img/svg/chancari.svg" alt="タイトル">
    </a>
    </div>
  </div>

  <nav class="navi header00">
    <p>ようこそ！</p>
    <ul class="nav-links">
      <li><a href="./login.php">新規登録</a></li>
      <li><a href="./login.php">ログイン</a></li>
    </ul>
  </nav>

  <div class="header01">ログイン</div>
</div><!-- header-container -->
</header>
