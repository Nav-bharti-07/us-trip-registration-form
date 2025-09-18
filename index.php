<?php

include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>US Trip Registration Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Sriracha&display=swap"
    rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <img class="bcg" src="bcg.jpg" alt="IIT Kharagpur" />
    <div class="container">
      <h1>Welcome to NIT Trichy US Trip form</h1>
      <p>
        Enter your details and submit this form to confirm your participation in
        the trip
      </p>
      <?php
      if($insert === true){
      echo "<p class='submitMsg'> Thanks for submitting the form we are happy to see you joining us for the US trip</p>";
      }
      ?>

      <form action="index.php" method="post">
        
        <input
          type="text"
          name="name"
          id="name"
          placeholder="enter your name"
          required
        />
        <input type="text" name="age" id="age" placeholder="enter your age" />
        <input
          type="text"
          name="gender"
          id="gender"
          placeholder="enter your gender"
          required
        />
        <input
          type="email"
          name="email"
          id="email"
          placeholder="enter your email"
          required
        />
        <input
          type="number"
          name="phone"
          id="phone"
          placeholder="enter your phone"
          required
        />
        <textarea
          name="desc"
          id="desc"
          rows="10"
          cols="30"
          placeholder="enter any other information here"
          required
        ></textarea>
        <button class="btn">Submit</button>
      </form>
    </div>
    <script src="index.js"></script>
  </body>
</html>
