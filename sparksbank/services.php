<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Banking website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');

    .center {
      margin-top: 14px;
      text-align: center;
      font-size: 30px;
      font-family: 'Josefin Sans', sans-serif;
    }

    .wrapper {
      padding: 5px;
      max-width: 960px;
      width: 95%;
      margin: 20px auto;
    }


    .columns {
      display: flex;
      flex-flow: row wrap;
      justify-content: center;
      margin: 5px 0;
    }

    .column {
      flex: 1;
      border: 1px solid gray;
      margin: 2px;
      padding: 10px;

      &:first-child {
        margin-left: 0;
      }

      &:last-child {
        margin-right: 0;
      }

    }
    .link{
      color:black;


    }
  </style>
</head>

<body>
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">The Sparks Bank</label>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="services.php">Services</a></li>
       <li><a href="customers.php">Our Customers</a></li>  
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
  <img src="images/2.png" style="width:100%; height: 550px;">
  <br>
  <div class="wrapper">
    <section class="columns">
      <div class="column">
        <h2><a href="customers.php" class="link">Customer details</a></h2>
      </div>
      <div class="column">
        <h2><a href="transcationhistory.php" class="link">Transaction Details</a></h2>
      </div>
      <div class="column">
        <h2><a href="transfermoney.php" class="link">Transfer Money</a></h2>
      </div>

    </section>



  </div>
  <hr><br>

  <!-- footer starts here -->


  <footer>
    <div class="content">
      <div class="left box">
        <div class="upper">
          <div class="topic">About us</div>
          <p>We are a banking Network which offer a wide range of services with Trust , Accountability to all our customers across the cities.</p>
        </div>
        <div class="lower">
          <div class="topic">Contact us</div>
          <div class="phone">
            <a href="#"><i class="fas fa-phone-volume"></i>+91000000000</a>
          </div>
          <div class="email">
            <a href="#"><i class="fas fa-envelope"></i>thesparksbank@mail.com</a>
          </div>
        </div>
      </div>
      <div class="middle box">
        <div class="topic">Our Services</div>
        <div><a href="#">Customer Details</a></div>
        <div><a href="#">Tranfer Money</a></div>
        <div><a href="#">Check Balance</a></div>
      </div>
      <div class="right box">
        <div class="topic">Join us for updates</div>
        <form action="#">
          <input type="text" placeholder="Enter email address">
          <input type="submit" name="" value="Send">
          <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </form>
      </div>
    </div>
    <div class="bottom">
      <p>Copyright © 2021 <a href="#">The Sparks Bank</a> All rights reserved</p>
    </div>
  </footer>

</body>

</html>