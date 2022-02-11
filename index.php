<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style/style.css" />
    <link
      rel="shortcut icon"
      href="assets/images/logo1.png"
      type="image/x-icon"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;800;900&display=swap"
      rel="stylesheet"
    />
    <title>kapture.</title>
  </head>
  <body>
    <header>
      <nav class="container">
        <a href="index.php" class="nav__logo"
          >kapture<span style="color: red">.</span></a
        >
        <ul>
          <li><a href="pages/products.php">товары</a></li>
          <li><a href="pages/about.html">о нас</a></li>
          <li><a href="pages/contact.html">контакты</a></li>
        </ul>
      </nav>
    </header>
    <section class="hero">
      <div class="hero__particle1"></div>
      <div class="hero__particle2"></div>
      <div class="hero__particle3"></div>
      <div class="hero__particle4"></div>
      <div class="hero__particle5"></div>
      <div class="hero__particle6"></div>
      <div class="hero__particle7"></div>
      <div class="hero__container container">
        <h1>
          запечатляй.<br />
          твори.<br />
          создавай.<br />
        </h1>
        <h2>интернет-магазин качественной фотоаппаратуры</h2>
      </div>
      <div class="hero__grid">
        <div class="hero__grid-pic1">
          <img src="assets/images/camera.png" alt="" />
        </div>
        <div class="hero__grid-pic2">
          <img src="assets/images/lens.png" alt="" />
        </div>
        <div class="hero__grid-pic3">
          <img src="assets/images/camera1.png" alt="" />
        </div>
      </div>
    </section>
    <section class="featured">
        <h3>мы рекомендуем ↓</h3>
      <div class="featured__container container">
      <?php
        $link = mysqli_connect("localhost", "root", "", "kapture.");
        $sql = "SELECT `productName`, `productDescription`, `productPrice`, `productPhoto` FROM `products` WHERE `productPurchases` > 500 LIMIT 3";
        if($result = $link->query($sql)){
            $rowsCount = $result->num_rows;
            foreach($result as $row)
            {
                echo '<div class="featured__item">
                <img src="/pages/upload/' . $row["productPhoto"] . '" alt="" />
              <h4>' . $row["productName"] . '</h4>
              <p>' . $row["productDescription"] . '</p>
              <div class="product__item-group">
                  <p class="price">' . $row["productPrice"] . 'р</p>
                <a href="#" class="buy">купить →</a>
            </div>
            </div>';}}?>
      </div>
    </section>
    <section class="info">
      <div class="info__container container">
        <div class="info__img">
          <img src="assets/images/camera2.png" alt="" />
          <a href="pages/about.html">узнать больше →</a>
        </div>
        <div class="info__text">
          <h3>почему стоит выбрать нас?</h3>
          <p>
            <b>kapture<span style="color: red">.</span></b> - lorem, ipsum dolor
            sit amet consectetur adipisicing elit. Eaque maiores blanditiis
            quasi nulla doloribus voluptatibus mollitia praesentium, iusto quo.
            Nam, eveniet consequatur omnis corporis doloribus placeat dolorem
            perspiciatis optio ratione sapiente.
          </p>
          <div class="info__icons">
            <div class="info__icons-item">
              <i class="bx bx-purchase-tag-alt"></i>
              <p>доступная цена</p>
            </div>
            <div class="info__icons-item">
              <i class="bx bx-aperture"></i>
              <p>4K+ full HD</p>
            </div>
            <div class="info__icons-item">
              <i class="bx bx-map"></i>
              <p>GPS трекинг</p>
            </div>
            <div class="info__icons-item">
              <i class="bx bx-wifi"></i>
              <p>Wi-Fi/NFC</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="addinfo">
      <div class="addinfo__block black">
        <p class="number">01.</p>
        <h4>отличия в деталях</h4>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis
          assumenda illum quod adipisci, quisquam iure culpa fugit, error saepe
          amet necessitatibus cupiditate pariatur voluptatibus laudantium!
        </p>
      </div>
      <div class="addinfo__block pic1">
        <a class="credit">© Дмитрий Бердник</a>
      </div>
      <div class="addinfo__block pic2">
        <a class="credit">© Эмилиано Витториоси</a>
      </div>
      <div class="addinfo__block">
        <p class="number">02.</p>
        <h4>непрерывная четкость</h4>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis
          assumenda illum quod adipisci, quisquam iure culpa fugit, error saepe
          amet necessitatibus cupiditate pariatur voluptatibus laudantium!
        </p>
      </div>
    </div>
    <footer>
      <a href="index.html" class="nav__logo"
        >kapture<span style="color: red">.</span></a
      >
      <p>© 2022 <a href="https://www.github.com/sh4vk4">sh4vk4/g4vk4</a></p>
    </footer>
  </body>
</html>
