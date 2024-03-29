<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>chanbari 商品一覧</title>
<link rel="stylesheet" href="./css/login.css">
<img src="./img/logo_google.png" alt="logo_google">
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
  .main-content {
    padding: 20px;
    text-align: center;
  }
  .product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    gap: 10px;
  }
  .product {
    border: 1px solid #ddd;
    padding: 10px;
    background: #fff;
  }
  .product img {
    width: 100%;
    height: auto;
  }
  .footer {
    background-color: #333;
    color: white;
    display: flex;
    justify-content: space-around;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
  }
  .footer div {
    text-align: center;
  }
</style>
</head>
<body>

<div class="header">
  <img src="logo-path.png" alt="chanbariのロゴ">
  <!-- ロゴ画像のパスを指定 -->
</div>

<div class="main-content">
  <h2>スマホでかんたんフリーSPACE</h2>
  <p>メルカリでかんたんに出品・購入させよう!</p>

  <div class="product-grid">
    <!-- 商品リストのサンプル -->
    <div class="product"><img src="no-image.png" alt="No Image"><p>タイトル</p></div>
    <!-- 繰り返し -->
  </div>
</div>

<div class="footer">
  <div>ホーム</div>
  <div>登録</div>
  <div>マイページ</div>
</div>

</body>
</html>
