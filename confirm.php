<?php 

include('includes/db_connect.php');

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
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap"
      rel="stylesheet"
    />
    <title>Confirmation | Audiov</title>
  </head>

  <body>
    <!-- Notification start -->
    <section class="notification">
      <div class="container">
        <header>
          <img
            src="./images/logo.png"
            alt="img"
            class="img-fluid wow bounce"
          />
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
        </div>
      </div>
    </section>
    <!-- Notification end -->

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
