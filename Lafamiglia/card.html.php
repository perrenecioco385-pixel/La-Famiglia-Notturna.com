<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>La Famiglia Notturna - Cards</title>
  <style>
    body {
        font-family: Arial, sans-serif;
        background: url("images/La.jpg.jpeg") no-repeat center center fixed;
        background-size: cover;
        margin: 0;
        padding: 0;
    }

    .header {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px 40px;
    }

    .header h1 {
        color: #e5d6d6;
        font-family: Arial;
        font-size: 50px;
        font-weight: bolder;
        margin: 0;
    }

    .container {
        text-align: center;
        padding: 30px;
        background: rgba(19, 9, 9, 0.534);
        border-radius: 10px;
        max-width: 1200px;
        margin: 40px auto;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    .card-container {
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
    }

    .card {
        background: #211818;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 200px;
        padding: 15px;
        text-align: center;
        transition: transform 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        object-fit: contain;
    }

    .card h3 {
        margin: 10px 0;
        font-size: 18px;
    }

    .card h3 a {
        color: #e1dfdf;
        text-decoration: none;
    }

    .card h3 a:hover {
        color: #ffcc00;
    }

    .card p {
        font-size: 14px;
        color: #8d0f0f;
    }

    /* Back to Homepage Button */
    .back-home {
        display: inline-block;
        margin-top: 30px;
        padding: 10px 20px;
        background: #8d0f0f;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        transition: background 0.3s;
    }

    .back-home:hover {
        background: #ffcc00;
        color: #000;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <div class="header">
      <h1>La Famiglia Notturna</h1>
  </div>

  <div class="container">
    <div class="card-container">

      <!-- Example Card 1 -->
      <div class="card">
        <img src="images/krix.jpg.jpeg" alt="Crxzyruhl">
        <h3><a href="background.php?name=crxzyruhl">Crxzyruhl Zarikano</a></h3>
        <p>Il Corvo</p>
      </div>

      <!-- Card 2 -->
      <div class="card">
        <img src="images/gio.jpg.jpeg" alt="Giovanni">
        <h3><a href="background.php?name=giovanni">Giovanni Cafesino</a></h3>
        <p>Il Drago</p>
      </div>

      <!-- Card 3 -->
      <div class="card">
        <img src="images/jynx.jpg.jpeg" alt="Jynx">
        <h3><a href="background.php?name=jynx">Jynx Vlymirdye Laux Montague </a></h3>
        <p>La Vipera</p>
      </div>

      <!-- Card 4 -->
      <div class="card">
        <img src="images/aiyu.jpg.jpeg" alt="Aiyu">
        <h3><a href="background.php?name=aiyu">Aiyu Kshmr </a></h3>
        <p>Il Leone</p>
      </div>

      <!-- Card 5 -->
      <div class="card">
        <img src="images/lyle.jpg.jpeg" alt="Lyle">
        <h3><a href="background.php?name=lyle">Lyle Youseff Von-Trapp </a></h3>
        <p>Il Silencio</p>
      </div>

      <!-- Card 6 -->
      <div class="card">
        <img src="images/bea.jpg.jpeg" alt="Beaul">
        <h3><a href="background.php?name=beaul">Beaul Zarikano</a></h3>
        <p>La Volpe</p>
      </div>

      <!-- Card 7 -->
      <div class="card">
        <img src="images/kyra.jpg.jpeg" alt="Kyra">
        <h3><a href="background.php?name=kyra">Kyra Scott</a></h3>
        <p>La Morte Nera</p>
      </div>

      <!-- Card 8 -->
      <div class="card">
        <img src="images/demi.jpg.jpeg" alt="Demi">
        <h3><a href="background.php?name=demi">Demi Reiss Grey </a></h3>
        <p>Il Giudice</p>
      </div>

    </div>

    <!-- Back to Homepage Button -->
    <a href="index.php" class="back-home">⬅ Back to Homepage</a>
  </div>
</body>
</html>
