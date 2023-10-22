<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WCH Solutions</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    
</head>

<link rel="stylesheet" href="style1.css">  

<body >
    <section class="header">

        <!-- Navigation Bar -->
      <nav>
        <a onclick="scrollToSection('#imagelogo')" id="logo"> <img src="images/logo.svg" alt="logo for WCH Solutions goes here" ></a>  
        <div class="nav-links" id="Navlinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
              
              <li><a onclick="scrollToSection('#ourwork')">OUR WORK</a></li>
              <li><a onclick="scrollToSection('#more')">MORE INFORMATION</a></li>
              <li><a onclick="scrollToSection('#about')">ABOUT US</a></li>
              <li><a onclick="scrollToSection('#contact')">CONTACT US</a></li>
              <li><a onclick="scrollToSection('#involved')">GET INVOLVED</a></li>
              
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>  
    
       <div class="text-box">
            <h1>WCH Solutions</h1>
            <p class="para1">Bigdeing worlds<br>  We are a company that provides dynamic solutions to all your company's needs and challenges.
                <br>We provide effective solutions to companies, governments and non-governmental organizations, in a very un-matched professional way, offering the best services with a naturally- human touch, through cost effective and results- oriented strategies by making use of the top resources in South Africa as well as from all over the integrated world.</p>
                <!-- Change button link to the Murphy site-->
                <a href="login.php" class="visit-btn" id="big-button"> Play Murphy !!</a>

        </div>
       
    </section>

    <!-- End of navigation Bar -->

    <!-- Our work -->
    <section class="poduct" id="ourwork">
        <h1>Our Work</h1> 
        <div class="row">
            <div class="our-col">
                <h2>We provide dynamic solutions to all your company's needs </h2>
               <p>We provide effective solutions to companies, governments and non-governmental organizations, in a very un-matched professional way, offering the best services with a naturally- human touch, through cost effective and results- oriented strategies by making use of the top resources in South Africa as well as from all over the integrated world.</p> 
               <a onclick="scrollToSection('#more')" class="visit-btn blue-btn">EXPLORE NOW</a>
            </div>
    
            <div class="our-col">
               <img src="images/ourwork-team.jpg" alt=""> 
    
            </div>
    
    
        </div>
    </section>

<!-------more information ----- -->
<section class="poduct" id="more">
    <h1>More  Information</h1>
    <p>What we do. What you can expect from us</p>

    <div class="row">

        <div class="product-col">
            <img src="images/Basenji.jpg.webp" alt="information Technology image" class="image">
            <h3>BASENJI</h3>
            <p>Our Basenji tool is a set of questions derived from the
Protection Of Personal Information Act that defines where risks of non-compliance may appear in your organisation. </p>
        </div>

        <div class="product-col">
            <img src="images/Beagle.jpg.webp" alt="Business Training" class="image">
            <h3>BEAGLE</h3>
            <p>Create a unique, professional logo for your business
                Kickstart your brand with business card designs, social media graphics, app icons, letter heads and more </p>
        </div>

        <div class="product-col">
            <img src="images/Sherloc.jpg.webp" alt="Connections" class="image">
            <h3>SHERLOC</h3>
            <p>The Sherloc intervention will provide a true representation of an organisations Enterprise Architecture & IT-dependencies along with observations that can help plan for the future. </p>
        </div>

    </div>
</section>



    <!-- About Us -->
    <section class="poduct" id="about">
        <h1>About Us</h1>
        <p>What we do. What you can expect from us</p>
        <section class="our-work">
            <div class="row">
                
                <div class="our-col">
                    <img src="Office-unsplash.jpg" alt=""> 
                </div>

                <div class="our-col">
                    <h2>We provide dynamic solutions to all your company's needs </h2>
                    <p>We provide effective solutions to companies, governments and non-governmental organizations, in a very un-matched professional way, offering the best services with a naturally- human touch, through cost effective and results- oriented strategies by making use of the top resources in South Africa as well as from all over the integrated world.</p> 
                </div>
    
            </div>
    </section>


<!-- Call To Action -->
<section class="cta">
    <h1>Contact us to find out more on What we do</h1>
    <a onclick="scrollToSection('#contact')" class="visit-btn">  CONTACT US</a><!-- links to contact us page-->
</section>

<!-- contact Us -->
<section class="poduct" id="contact">
    <h1>Contact Us</h1>
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3583.47719450742!2d27.874266315252296!3d-26.083337165405446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e959ef5277b96a7%3A0xc4aa15508f8e5e8c!2sIIE%20MSA!5e0!3m2!1sen!2sza!4v1618254202325!5m2!1sen!2sza" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    
    </section>
    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>iFractory Consulting, 5 Libertas Rd, Bryanston, Sandton, 2191 <h5>
                        <p>Visit  for more information</p>   
                    </span>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>+27 (11) 875-7300<h5>
                        <p>Monday to Saturday, 10AM to 6PM</p>        
                    </span>
                </div>

                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>www.WCHSolutions.co.za<h5>
                        <p>Email us for any queries info@wchsolutions.co.za</p>        
                    </span>
                </div>

                <div class="icons">
                    <a href="https://www.youtube.com/@WCHSolutions"></a><i class="fa fa-youtube"></i></a>
                    <a href="https://www.linkedin.com/company/wchsolutions/"><i class="fa fa-linkedin"></i></a>
                </div>

                <br>
                <br>
            </div>
        </div>
        
    </section>
</section>


<!-- Get Involved, this is a form form participation-->
<br>
<p class="big">Become a part of the campaign for change. As WCH Solutions gets even closer 
    to changing communities with you contribution to the world at large while work we us.</p>
<section class="poduct" id="involved">
    <h1>If you seek to join us</h1>
    
    <br>
    <div class="forms">
    <form class="ent">
      <h3>enter your name</h3>
      
         <input type="text" placeholder="Enter Name">
      
      
      <h3>enter your email address</h3>
    
        <input type="email" placeholder="Enter your Email">
     

     <h3>enter your contact number</h3>
     
        <input type="text" placeholder="Enter your Number">

     <h3>enter how you seek to  get involved</h3>
     
 
        <label for="sponsor">
            <input type="checkbox">Sponsor
        </label>
        
        <label for="volunteer">
            <input type="checkbox">volunteer
        </label>
        
        <label for="client">
            <input type="checkbox">client
        </label>

        <h3>enter your contribution</h3>
        <input type="text" placeholder="Enter contribution">
       <br>
       <br>

       <div class="btn">
        <button type="submit" class="visit-btn blue-btn">Submit</button>
        <button type="reset" class="visit-btn blue-btn">Reset</button>
        </div>
    </form>
 </div>
 

</section>


<!-- ---footer--- -->
<section class="footer"> 
    <h4>About us</h4>
    <p>governments and non-governmental organizations , in a very un-matched professional way, offering the best services with a naturally- human touch,
    <br> through cost effective and results- oriented strategies by making use of the top resources in South Africa as well as from all over the integrated world.</p>
    
      <div class="icons">
        <a href="https://www.youtube.com/@WCHSolutions"></a><i class="fa fa-youtube"></i></a>
        <a href="https://www.linkedin.com/company/wchsolutions/"><i class="fa fa-linkedin"></i></a>
      </div>
    <p>Made by Group 13<i aria-hidden="true"></i> </p>
</section>


<!-- ---footer--- -->


<!--------JavaScript for toggle Menu----- -->
<script>
 
    var Navlinks = docmunt.getElementById("Navlinks");

    function showMenu(){
        Navlinks.style.right = "0";
    }
    function hideMenu(){
        Navlinks.style.right = "-200px";
    }
    // Function to smoothly scroll to a section when a button is clicked
    function scrollToSection(sectionId) {
      document.querySelector(sectionId).scrollIntoView({ behavior: 'smooth' });
    }
    
    // Add an event listener to the big button in the home section
    document.getElementById('big-button').addEventListener('click', function() {
      alert('You are entering the gaming sim!');
    });
</script>

</body>
</html>