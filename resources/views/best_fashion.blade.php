<!DOCTYPE html>
<html>
<head>
  <title>Checkout Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

  <style>
    /* Reset CSS */
    @import url('https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap');

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    /* Main styles */
    body {
      font-family: Arial, sans-serif;
      background-image: url('../img/BG.png');
      padding: 20px;
    }

    .checkout-container {
      display: flex;
      flex-wrap: wrap;
      max-width: 800px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 4px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .product-image {
      flex: 0 0 300px;
      margin-right: 20px;
    }

    .product-details {
      flex: 1 1 300px;
    }

    .product-details h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .product-details p {
      font-size: 16px;
      margin-bottom: 10px;
    }

    .product-features {
      margin-bottom: 20px;
    }

    .product-features p {
      margin-bottom: 5px;
    }

    .product-quantity {
      margin-bottom: 20px;
    }

    .product-quantity input {
      width: 50px;
      padding: 5px;
    }

    .cart-icon {
      font-size: 24px;
      color: #;
      margin-right: 5px;
    }

    .cart-button {
      padding: 10px 20px;
      font-size: 16px;
      font-weight: bold;
      text-decoration: none;
      color: black;
      background-color: #FBF7F7;
      border-radius: 4px;
      transition: background-color 0.3s;
    }

    .cart-button:hover {
      background-color: #0056b3;
    }
    .buy-now-button {
      padding: 10px 20px 5px 6px;
      font-size: 16px;
      font-weight: bold;
      text-decoration: none;
      color: #fff;
      background-color: #54DBF6;
      border-radius: 4px;
      transition: background-color 0.3s;
    }

    .buy-now-button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="checkout-container">
    <div class="product-image">
      <img src="{{ asset('img/products/f3.jpg') }}" alt="Product Image" width="100%">
    </div>
    <div class="product-details">
      <h2>Batik Gege</h2>
      <p>Rp.120.000</p>
      <div class="product-features">
        <p>Product Shipping</p>
      </div>
      <div class="product-quantity">
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" value="1" min="1">
      </div>
      <a href="cart" class="cart-button">
        <i class="cart-icon">&#128722;</i>
        Masukkan Keranjang
      </a>
      <a href="checkout"><button class="buy-now-button">Beli Sekarang</button></a>
    </div>
  </div>
  <div class="checkout-container">
    <div class="product-image">
      <img src="{{ asset('img/products/f6.jpg') }}" alt="Product Image" width="100%">
    </div>
    <div class="product-details">
      <h2>Kemeja</h2>
      <p>Rp.100.000</p>
      <div class="product-features">
        <p>Product Shipping</p>
      </div>
      <div class="product-quantity">
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" value="1" min="1">
      </div>
      <a href="#" class="cart-button">
        <i class="cart-icon">&#128722;</i>
        Masukkan Keranjang
      </a>
      <a href="checkout"><button class="buy-now-button">Beli Sekarang</button></a>
    </div>
  </div>
</body>
</html>
