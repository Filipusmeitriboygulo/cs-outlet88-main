<!DOCTYPE html>
<html>
<head>
    <title>Promo Landing Page</title>
    <style>
        /* Global styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Header styles */
        header {
            background-image: url('../img/BG.png');
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .hero {
            background-image: url('../img/hero.jpg');
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        /* Banner styles */
        .promo-banner {
            background-image: url('../img/BG.png');
            padding: 20px;
            text-align: center;
        }

        .promo-banner h1 {
            background-image: url('../img/BG.png');
            font-size: 24px;
            margin: 0;
        }

        /* Card styles */
        .promo-cards {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .promo-card {
            width: 300px;
            margin: 10px;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .promo-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .promo-card .card-body {
            padding: 10px;
        }

        .promo-card .btn {
            width: 100%;
            padding: 10px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            text-align: center;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        /* Footer styles */
        footer {
            background-image: url('../img/BG.png');
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="hero">
            <img src="{{ asset('img/banner/b1.jpg') }}" alt="">
        </div>
    </header>

    <div class="promo-banner">
        <h1 class="promo">Promo</h1>
        <p class="promo">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum provident ea sint 
            repellendus doloremque, porro facilis ipsam temporibus voluptatibus quos. Omnis blanditiis nisi error soluta veritatis sequi vel amet dolorum?
        </p>

        <div class="promo-cards">
            <div class="promo-card">
                <img src="img/products/f4.jpg" alt="Sweater">
                <div class="card-body">
                    <a href="#" class="btn">SWEATER</a>
                </div>
            </div>
            <div class="promo-card">
                <img src="img/products/f5.jpg" alt="Long Sleeve">
                <div class="card-body">
                    <a href="#" class="btn">LONG SLEEVE</a>
                </div>
            </div>
            <div class="promo-card">
                <img src="img/products/f6.jpg" alt="T-Shirt">
                <div class="card-body">
                    <a href="#" class="btn">T-SHIRT</a>
                </div>
            </div>
        </div>
    </div>

    

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; cs_outlet88</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Instagram</a></li>
          <li class="list-inline-item"><a href="#">Facebook</a></li>
          <li class="list-inline-item"><a href="#">Tiktok</a></li>
        </ul>
      </footer>
</body>
</html>
