<?php 

  include('includes/db_connect.php');

  if (isset($_POST['submit'])) {
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    $query = "INSERT INTO users(email) VALUES('$email')";

    $run = mysqli_query($conn, $query) or die(mysqli_error());

    header("Location: confirm.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <link href="./css/animate.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600;700&display=swap"
      rel="stylesheet"
    />
    <title>Home | Audiov</title>
  </head>

  <body>
    <!-- Hero start -->
    <section class="bg_img px-1">
      <div class="container-fluid opacity px-3 pt-5 pb-5">
        <header>
        <a href="index.php">
          <img
            src="./images/logo.png"
            alt="img"
            class="mobile_font img-fluid wow bounce"
          />
        </a>
        </header>
      </div>

      <div class="container-fluid opacity">
        <div class="row">
          <div class="col-lg-8 mt-5 pl-lg-2">
            <h2 class="text-capitalize wow slideInLeft">
              animate your <br />
              favourite comic stories
            </h2>
          </div>

          <div class="col-lg-4 mt-5 mb-3 d-none d-lg-block">
            <img
              src="./images/phones.png"
              alt="img"
              class="img-fluid wow slideInRight"
            />
          </div>

          <div class="col-lg-7 col-sm-12 wow fadeInUp">
            <p class="pt-5 about wow pulse">
              Audiov is an animation app which allows user to animate their
              favorite comic story easily by creating professional animated
              video for commercial and personnal uses. Audiov will surely make a
              great impact in the Animation Industries
            </p>
          </div>

          <div class="col-md-8 forms wow fadeInLeft notified">
            <label for="form" class="text-white none px-1"
              >Stay Updated with Audiov Release Date
            </label>

            <form action="index.php" method="POST" class="form-inline">
              <input
                name="email"
                type="email"
                class="form-control form-control-lg mr-3 col-md-6 mt-2 mb-2"
                placeholder="Your Email" required
              />
             <button class="btn btn-danger btn-lg text-uppercase" type="submit"       name="submit">subscribe</button>
            </form>
          </div>

          <div class="col-sm-12 text-right mt-5 wow fadeInRight">
            <img
              src="./images/comics-label.png"
              alt="img"
              class="img-fluid labels mb-4"
            />
          </div>
        </div>

        <div class="row bg d-flex justify-content-center">
          <div class="col-sm-12 rectangle wow slideInLeft"></div>
        </div>
      </div>
    </section>
    <!-- Hero end -->

    <!-- Script start -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>

    <script src="./js/wow.js"></script>
    <script>
      new WOW().init();
    </script>
    <!-- Script end -->
  </body>
</html>
