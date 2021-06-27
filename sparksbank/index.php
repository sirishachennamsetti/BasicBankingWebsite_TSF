<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Banking website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
    .name{
      font-weight: bold;
      font-family: Tahoma;
      font-size: 20px;
    }
    .text{
      text-align: centre;
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
        <li><a href="customers.php">Our customers</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="images/1.png" style="width:100%; height: 550px;">
  
</div>

<div class="mySlides fade">

  <img src="images/2.png" style="width:100%; height: 550px;">
 
</div>

<div class="mySlides fade">
  <img src="images/3.png" style="width:100%; height: 550px;" >
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<a href="customers.php" class="button">Customer Details!</a><br><Br>
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
     <p>Designed and Developed by <span class="name">Sirisha Chennamsetti</span></p>
   </div>
 </footer>

  </body>

  <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>
</html>