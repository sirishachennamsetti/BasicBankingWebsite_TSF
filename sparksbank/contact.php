<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Banking website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
        .center{
            margin-top:14px;
            text-align:center;
            font-size:30px;
            font-family: 'Josefin Sans', sans-serif;
        }
        input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #0082e6;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #0092e6;
}

.container {
  border-radius: 5px;
  background-color: #ffffff;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
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
    <img src="images/1.png" style="width:100%; height: 550px;">
<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="Enter your Name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname"> Email id</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Enter your Email Address">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Type</label>
      </div>
      <div class="col-75">
        <select id="issue" name="issue">
          <option value="australia">Complaint</option>
          <option value="canada" selected>Request</option>
          <option value="usa">Reporting issues</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Message</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Enter your Message" style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
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