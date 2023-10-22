<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>




<body>
  <div class="wrapper">
    

 <!-- Header for other pages besides the home page -->
  <header>        

    <h1>MURPHY</h1>
    <nav>
  
    <ul>
         <li><a href="home.php">Home</a></li>

    </ul>

  </nav>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="style1.css"> 

 </header>

 <!-- end Header for other pages besides the home page -->

    <!-- Sign Form -->
    <section class="form signup">

      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Profile Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>

        <div class="field button">

          <input type="submit" name="submit" value="Continue to Murphy">

        </div>

      </form>
      
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
    <!-- end of Sign Form -->
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
