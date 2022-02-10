<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/style/style.css" />
    <link
      rel="shortcut icon"
      href="../assets/images/logo1.png"
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
        <a href="../index.php" class="nav__logo"
          >kapture<span style="color: red">.</span></a
        >
        <ul>
          <li><a href="products.php">товары</a></li>
          <li><a href="about.html">о нас</a></li>
          <li><a href="contact.html">контакты</a></li>
        </ul>
      </nav>
    </header>
    <section class="hero">
      <div class="hero__particle1"></div>
      <div class="hero__particle2"></div>
      <div class="hero__particle3"></div>
      <div class="hero__container container">
        <h1>
        <span style="color: red">камеры.</span><br />
          объективы.<br />
          аксессуары.
        </h1>
        <h2>каталог товаров</h2>
      </div>
      <div class="hero__grid">
        <div class="hero__grid-pic1">
          <img src="../assets/images/camera.png" alt="" />
        </div>
        <div class="hero__grid-pic2">
          <img src="../assets/images/lens.png" alt="" />
        </div>
        <div class="hero__grid-pic3">
          <img src="../assets/images/camera1.png" alt="" />
        </div>
      </div>
    </section>
    <section id="product__item" class="product">
      <div class="hero__particle4"></div>
      <div class="hero__particle5"></div>
      <div class="product__container container">
          <div class="product__catalogue">
          <h3 style="text-align: left;">камеры ↓</h3>
            <ul>
                <li><a href="products.php#product__item">новые товары</a></li> |
                <li><u>камеры</u></li> |
                <li><a href="lens.php#product__item">объективы</a></li> |
                <li><a href="accessory.php#product__item">аксессуары</a></li> |
                <li><a style="font-weight: 800;" href="add.php#product__item">+</a></li>
            </ul>
        </div>
        <?php
        $link = mysqli_connect("localhost", "root", "", "kapture.");
        $sql = "SELECT `productName`, `productType`, `productDescription`, `productPrice`, `productPhoto` FROM `products` WHERE `productType`='камера' ORDER BY `ID` DESC";

        if($result = $link->query($sql)){
          $rowsCount = $result->num_rows;
          foreach($result as $row){
              echo '<div class="product__item">
              <div class="product__item-img">
                <img src="upload/' . $row["productPhoto"] . '" alt="" />
              </div>
              <div class="product__item-txt">
                <h4>' . $row["productName"] . '</h4>
                <p class="type">' . $row["productType"] . '</p>
                <p>' . $row["productDescription"] . '</p>
                <div class="product__item-group">
                    <p class="price">' . $row["productPrice"] . 'р</p>
                    <p><a style="margin-right: 1rem; font-size:1.5rem; color: red;" href="#"><i class="bx bx-edit-alt"></i></a><a href="" class="buy">купить →</a></p>
                </div>
              </div>
            </div>';}}
      ?>
        </div>
      </div>
    </section>
    <footer>
      <a href="index.html" class="nav__logo"
        >kapture<span style="color: red">.</span></a
      >
      <p>© 2022 <a href="https://www.github.com/sh4vk4">sh4vk4/g4vk4</a></p>
    </footer>
  </body>
</html>
