<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Home</title>
    <link rel = "icon" href ="img/logo.jpg" type = "image/x-icon">
    <style>
/* Styles for the Hero Section */
.hero {
  background-image: url('img/bakerybg.jpg'); /* Replace with your image URL */
  background-size: cover;
  background-position: center;
  color: black;
  padding: 100px 0;
  text-align: center;
}

.hero-content {
  max-width: 800px;
  margin: 0 auto;
}

.hero h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
}

.hero p {
  font-size: 1.2rem;
  margin-bottom: 30px;
}

.btn {
  display: inline-block;
  padding: 10px 20px;
  background-color: #f00;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #d00;
}
/* Updated Styles for the Hero Section */
.hero {
  background-image: url('img/bakerybg.jpg'); /* Replace with your image URL */
  background-size: cover;
  background-position: center;
  color: #fff;
  height: 500px; /* Increase the height as needed */
  padding: 100px 0; /* Adjust padding accordingly */
  text-align: center;
}

/* ... Rest of the CSS remains the same ... */

/* Add this style to center-align the cards */
.menu {
  text-align: center;
}

.menu h2 {
  margin-bottom: 20px;
}

.menu-cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 20px;
}

.menu-card {
  flex: 1;
  max-width: calc(25% - 20px); /* Four cards per row with 20px gap */
  border: 1px solid #ddd;
  padding: 20px;
  text-align: center;
}

.menu-card img {
  max-width: 100%;
  margin-bottom: 10px;
}

.menu-card h3 {
  margin: 10px 0;
}

.btn {
  display: inline-block;
  padding: 10px 20px;
  background-color: #f00;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
}

/* Updated Styles for the About Section */
.about {
  background-color: #f8f8f8;
  padding: 100px 0;
  text-align: center;
}

.about-content {
  max-width: 800px;
  margin: 0 auto;
}

.about h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
}

.about p {
  font-size: 1.2rem;
  line-height: 1.6;
  margin-bottom: 20px;
}

    </style>
  </head>
<body>
  <?php include 'partials/_dbconnect.php';?>
  <?php require 'partials/_nav.php' ?>
  
  <!-- New code starts -->
  <section class="hero">
  <div class="hero-content">
    <h1>Delicious Food Delivered to Your Doorstep</h1>
    <p>Order now and experience a culinary journey like never before.</p>
    <a href="#menu" class="btn">View Menu</a>
  </div>
</section>



  <!-- New code ends -->
  <!-- Category container starts here -->
  <section id="menu">
  <div class="container my-3 mb-5">
    <div class="col-lg-2 text-center bg-light my-3" style="margin:auto;border-top: 2px groove black;border-bottom: 2px groove black;">     
      <h2 class="text-center">Menu </h2>
    </div>
    <div class="row">
      <!-- Fetch all the categories and use a loop to iterate through categories -->
      <?php 
        $sql = "SELECT * FROM `categories`"; 
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
          $id = $row['categorieId'];
          $cat = $row['categorieName'];
          $desc = $row['categorieDesc'];
              echo '<div class="col-xs-3 col-sm-3 col-md-3">
                  <div class="card" style="width: 18rem;">
                    <img src="img/category-'.$id. '.jpg" class="card-img-top" alt="image for this category" width="249px" height="270px">
                    <div class="card-body">
                      <h5 class="card-title"><a href="viewPizzaList.php?catid=' . $id . '">' . $cat . '</a></h5>
                      <p class="card-text">' . substr($desc, 0, 30). '... </p>
                      <a href="viewPizzaList.php?catid=' . $id . '" class="btn btn-primary">View All</a>
                    </div>
                  </div>
                </div>';
        }
      ?>
    </div>
  </div>
  </section>

  <!-- About section -->
  <section id="about" class="about">
  <div class="about-content">
    <h2>About Us</h2>
    <p>Welcome to Dairy Farm, your go-to destination for a delightful culinary experience.</p>
    <p>At our restaurant, we take pride in serving an exquisite selection of bakery products and premium milk products.</p>
    <p>Our team of skilled bakers and dairy experts are dedicated to crafting treats that tantalize your taste buds and nourish your body.</p>
    <p>From freshly baked pastries to wholesome dairy products, we combine passion with quality to bring you a symphony of flavors.</p>
    <p>Experience the joy of savoring each bite and relishing every sip with Dairy Farm.</p>
  </div>
</section>



    <?php require 'partials/_footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
</body>
</html>