<?php

  $msg="";

  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "kapture.")
  or die("Не удалось подключиться к БД" . mysqli_error($db));

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {

    $photo = $_FILES['photo']['name'];
    $target = "upload/".basename($photo);

  	//Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($db, "INSERT INTO products (productName, productType, productDescription, productPrice, productPhoto) VALUES ('{$_POST['name']}', '{$_POST['type']}', '{$_POST['description']}', '{$_POST['price']}', '$photo')");
    //Если вставка прошла успешно
    if ($sql) {
        echo '<p>Данные успешно добавлены в таблицу.</p>';
    } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($db) . '</p>';
    }

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
}
?>

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
          камеры.<br />
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
          <h3 style="text-align: left;">добавить товар ↓</h3>
            <ul>
                <li><a href="products.php#product__item">новые товары</a></li> |
                <li><a href="cameras.php#product__item">камеры</a></li> |
                <li><a href="lens.php#product__item">объективы</a></li> |
                <li><a href="accessory.php#product__item">аксессуары</a></li> |
                <li style="font-weight:800;"><u>+</u></li>
            </ul>
        </div>
        <form action="#product__item" method="POST" enctype="multipart/form-data">
            <div class="form__field">
            <label for="name">название товара</label>
            <input type="text" name="name" id="name">
            </div>
            <div class="form__field">
            <label for="type">тип товара</label>
            <select name="type" id="type">
                <option selected disabled>выберите...</option>
                <option value="камера">камера</option>
                <option value="объектив">объектив</option>
                <option value="аксессуар">аксессуар</option>
            </select>
            </div>
            <div class="form__field">
                <label for="description">описание товара</label>
                <textarea name="description" id="description" maxlength="255" cols="30" rows="5"></textarea>
            </div>
            <div class="form__field">
            <label for="price">цена товара (в рублях)</label>
            <input type="number" min="100" name="price" id="price">
            </div>
            <div class="form__field">
            <label for="photo">фото товара (рекомендуем 1200х900)</label>
            <input type="hidden" name="size" value="350000">
            <input type="file" name="photo">
            </div>
            <button type="submit" name="upload">добавить товар</button>
        </form>
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
