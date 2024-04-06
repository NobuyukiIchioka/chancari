<?php
$pageTitle = 'ログイン'; // ページタイトルを設定
$addCSS = ['login.css']; // このページ固有のCSSを設定、複数指定可能に変更
include 'includes/header.php'; 
?>
<main> 

<div class="login-container">
  <img class="logo-google" src="./img/logo_google.png" alt="logo_google">
  <a href="./home.php"  class="login btn">Googleでログイン</a>
  <!-- <button class="login btn">Googleでログイン</button> -->
  <div class="login-notice">
    <p>Googleアカウントでのログインをお願いしています。</p>
    <p>※アカウントがない方は取得はお願い致します。</p>
  </div>
  <p class="custom-separator">
  <h2 class="account">アカウントをお持ちでない方</h2>
  <a href="./home.php" class="register btn">新規登録</a>
  <!-- <button class="register btn">新規登録</button> -->
</div>

</main>
<?php include 'includes/footer.php'; ?>

