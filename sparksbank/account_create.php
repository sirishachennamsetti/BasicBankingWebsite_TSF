<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
     <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
       <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong></strong>
                    <?php echo $_SESSION['status']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                         unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Customer Details</h4>
                    </div>
                    <div class="card-body">

                        <form action="account_details.php" method="POST" enctype="multipart/form-data">
                            <div class="from-group mb-3">
                                <label for="">First Name</label>
                                <input type="text" name="fname" class="form-control" required />
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Last Name</label>
                                <input type="text" name="lname" class="form-control" required />
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Account Type</label>
                                <select name="account" class="form-control">
                                    <option value="">Account</option>
                                    <option value="Current account" selected>Current account</option>
                                    <option value="Savings account" selected>Savings account </option>
                                    <option value="Salary account" >Salary account</option>
                                    <option value="Fixed deposit account" >Fixed deposit account
                                </option>
                                </select> <br>
                                <div class="from-group mb-3">
                                    <label for="">Amount Deposit</label>
                                    <input type="number" name="amount" class="form-control" min="1000" required />
                                </div>
                            </div>
                            <div class="from-group mb-3">
                                <button type="submit" name="save_select" class="btn btn-primary">Create</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br><br>
    <!-- footer starts Here -->
<footer>
   <div class="content">
     <div class="left box">
       <div class="upper">
         <div class="topic">About us</div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio quibusdam voluptate earum nostrum similique. Cum voluptatibus animi eum ipsam, porro accusamus minima, tempore unde impedit aspernatur placeat, nostrum dignissimos recusandae.</p>
       </div>
       <div class="lower">
         <div class="topic">Contact us</div>
         <div class="phone">
           <a href="#" class="link"><i class="fas fa-phone-volume"></i>+91000000000</a>
         </div>
         <div class="email">
           <a href="#" class="link"><i class="fas fa-envelope"></i>sirisha@gmail.com</a>
         </div>
       </div>
     </div>
     <div class="middle box">
       <div class="topic">Our Services</div>
       <div><a href="#" class="link">Open a account</a></div>
       <div><a href="#" class="link">Tranfer Money</a></div>
       <div><a href="#" class="link">Check Balance</a></div>
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
     <p>Copyright © 2021 <a href="#">SBI</a> All rights reserved</p>
   </div>
 </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            maxFileSize = 10*1024*1024; //10Mb
            $("#uploadFile").change(function(){
                fileSize = this.files[0].size;
                if(fileSize>maxFileSize){
                    this.setCustomValidity("File is too large upload file less than 10mb");
                    this.reportValidity();
                }else{
                    this.setCustomValidity('')
                }
            });
        });
    </script>
</body>

</html>