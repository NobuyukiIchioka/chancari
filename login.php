<?php
$pageTitle = 'ログイン'; // ページタイトルを設定
$addCSS = ['style.css', 'header2.css']; // このページ固有のCSSを設定、複数指定可能に変更
include 'includes/header.php'; 
?>
<main> 

<div class="login-container">
  <button class="google-btn">Googleでログイン</button>
  <div class="alternative">
    <a href="#">パスワードを忘れた方はこちら</a>
    <a href="#">ログインできない方はこちら</a>
  </div>
  <div class="separator"><span>または</span></div>
  <a href="#" class="create-account">新規登録</a>
  <a href="#" class="signin">アカウントをお持ちでない方</a>
</div>

</main>
<?php include 'includes/footer.php'; ?>







<style>
  body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background: #f7f7f7;
  }

  
  

  .header {
    background-color: #fff;
    padding: 20px;
    text-align: center;
  }

  .header img {
    height: 50px; /* ロゴの高さを適宜調整 */
  }

  .login-container {
    max-width: 300px;
    margin: 30px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  }

  .google-btn {
    background-color: #4285f4;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    margin-top: 10px;
    width: 100%;
    cursor: pointer;
  }

  .alternative {
    text-align: center;
    margin-top: 20px;
  }

  .alternative a {
    color: #4285f4;
    text-decoration: none;
  }

  .separator {
    text-align: center;
    margin: 20px 0;
    line-height: 1px;
    background: #e0e0e0;
  }

  .separator span {
    background: #fff;
    padding: 0 10px;
  }

  .create-account, .signin {
    display: block;
    background-color: #34a853;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    margin: 10px auto;
    width: calc(100% - 20px);
    text-align: center;
    text-decoration: none;
  }

</style>
</head>

