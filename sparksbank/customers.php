
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
       @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
      .hnum-style{
          font-size:14px;
          color:grey;
          display: inline-block;
          background: #f2f2f2;
          -webkit-border-radius:2px;
          -moz-border-radius:2px;
          border-radius: 2px;
          line-height: 30px;
          padding: 0 14px;
      }
       .center{
            margin-top:14px;
            text-align:center;
            font-size:30px;
            font-family: 'Josefin Sans', sans-serif;
        }
        .link{
          color:white;
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
    </nav><br>
   <div class="container">
  <h2 class="center">Our Loyal customers</h2> <br>                  
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Last Name</th>
        <th>Account type</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
        <?php
            session_start();
            $con = mysqli_connect("localhost","root","","banking");


            $selectquery = " select * from customers ";

            $query = mysqli_query($con,$selectquery);

            $num = mysqli_num_rows($query);



            while($res = mysqli_fetch_array($query)){

                ?>
                 <tr>
                    <td><?php echo $res['fname'] ?></td>
                    <td><?php echo $res['lname'] ?></td>
                    <td><?php echo $res['account'] ?></td>
                    <td>Hidden Due to privacy</td>
                 </tr>
                 <?php
                }
                ?>
    </tbody>
  </table>
  </div>
</div><br><Br><Br><br><br>
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
           <a href="#" class="link"><i class="fas fa-phone-volume"></i>+91000000000</a>
         </div>
         <div class="email">
           <a href="#" class="link"><i class="fas fa-envelope"></i>thesparksbank@mail.com</a>
         </div>
       </div>
     </div>
     <div class="middle box">
       <div class="topic" class="link">Our Services</div>
       <div><a href="customers.php" class="link">Customer Details</a></div>
       <div><a href="#" class="link">Tranfer Money</a></div>
       <div><a href="#" class="link">Check Balance</a></div>
     </div>
     <div class="right box">
       <div class="topic">Join us for updates</div>
       <form action="#">
         <input type="text" placeholder="Enter email address">
         <input type="submit" name="" value="Send">
         
       </form>
     </div>
   </div>
   <div class="bottom">
     <p>Copyright © 2021 <a href="#">The Sparks Bank</a> All rights reserved</p>
   </div>
 </footer>
</body>
</html>








