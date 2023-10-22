<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");


   

  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>

<!--Fetching user data -->

        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }

        ?>

        <!--Fetching Phone/Score data-->


        <!--Fetching Phone/Score data-->






        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="php/images/<?php echo $row['img']; ?>" alt="">

        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>




      </header>

      <div class="chat-box">

      </div>


      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>

    </section>

    <!--Gallery Inserts Here-->
<style>
   .sliding-gallery {
  position: relative;
}

.gallery {
  display: flex;
  overflow: hidden;

}

.gallery img {
  width: 100%;
  height: auto;
  transition: transform 0.3s ease-in-out;
  transform: scale(1.1)
}


.gallery-nav {
  margin-top: 10px;
  text-align: center;
}

.prev-btn,
.next-btn {
  padding: 5px 10px;
  font-size: 18px;
  border-radius: 50%;
}

.prev-btn:focus,
.next-btn:focus {
  outline: none;
  border-radius: 50%;
}

  </style>
</head>
<body>
  <div class="sliding-gallery">
    <div class="gallery">
      <img src="images/1Murphy.JPG" alt="Image 1">
      <img src="images/2Murphy.JPG" alt="Image 2">
      <img src="images/3Murphy.JPG" alt="Image 3">
      <img src="images/4Murphy.JPG" alt="Image 4">
      <img src="images/5Murphy.JPG" alt="Image 5">
      <img src="images/6Murphy.JPG" alt="Image 6">
      <img src="images/7Murphy.JPG" alt="Image 7">
      <img src="images/8Murphy.JPG" alt="Image 8">
      <img src="images/9Murphy.JPG" alt="Image 9">
      <img src="images/10Murphy.JPG" alt="Image 10">
      <img src="images/11Murphy.JPG" alt="Image 1">
      <img src="images/12Murphy.JPG" alt="Image 2">
      <img src="images/13Murphy.JPG" alt="Image 3">
      <img src="images/14Murphy.JPG" alt="Image 4">
      <img src="images/15Murphy.JPG" alt="Image 5">
      <img src="images/16Murphy.JPG" alt="Image 6">
      <img src="images/17Murphy.JPG" alt="Image 7">
      <img src="images/18Murphy.JPG" alt="Image 8">
      <img src="images/19Murphy.JPG" alt="Image 9">
      <img src="images/20Murphy.JPG" alt="Image 10">
           <img src="images/21Murphy.JPG" alt="Image 10">
                <img src="images/22Murphy.JPG" alt="Image 10">
                     <img src="images/23Murphy.JPG" alt="Image 10">
                          <img src="images/24Murphy.JPG" alt="Image 10">
    </div>
    <div class="gallery-nav">
      <button class="prev-btn">&lt;</button>
      <button class="next-btn">&gt;</button>
    </div>
  </div>

  <script>
   const gallery = document.querySelector('.gallery');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const images = gallery.getElementsByTagName('img');

let currentIndex = 0;

prevBtn.addEventListener('click', () => {
  navigateGallery(-1);
});

nextBtn.addEventListener('click', () => {
  navigateGallery(1);
});

function navigateGallery(direction) {
  currentIndex += direction;
  
  if (currentIndex < 0) {
    currentIndex = images.length - 1;
  } else if (currentIndex >= images.length) {
    currentIndex = 0;
  }
  
  showImage(currentIndex);
}

function showImage(index) {
  for (let i = 0; i < images.length; i++) {
    images[i].style.transform = `translateX(-${index * 100}%)`;
  }
}

showImage(currentIndex);

  </script>
    <!--images\10Murphy.JPG 

    <div class="gallery">

    <div class="gallery-item">
      <img src="images\10Murphy.jpg" alt="Image 1">
    </div>
    <div class="gallery-item">
      <img src="images\10Murphy.jpg" alt="Image 2">
    </div>
    <div class="gallery-item">
      <img src="images\10Murphy.jpg" alt="Image 3">
    </div>
    <div class="gallery-item">
      <img src="images\10Murphy.jpg" alt="Image 1">
    </div>
    <div class="gallery-item">
      <img src="images\10Murphy.jpg" alt="Image 1">
    </div>
    <div class="gallery-item">
      <img src="images\10Murphy.jpg" alt="Image 1">
    </div>
    <div class="gallery-item">
      <img src="images\10Murphy.jpg" alt="Image 1">
    </div>
    <div class="gallery-item">
      <img src="images\10Murphy.jpg" alt="Image 2">
    </div>
    <div class="gallery-item">
      <img src="images\10Murphy.jpg" alt="Image 3">
    </div>
    <div class="gallery-item">
      <img src="images\10Murphy.jpg" alt="Image 1">
    </div>
    <div class="gallery-item">
      <img src="images\10Murphy.jpg" alt="Image 1">
    </div>
    <div class="gallery-item">
      <img src="images\10Murphy.jpg" alt="Image 1">
    </div> -->

   


    <!-- Add more gallery items here -->
  </div>







    <!--Gallery Inserts End Here-->





  </div>



  <!--Picture of europe-->

 <style>
    #overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      z-index: 9999;
    }

    #overlay img {
      display: block;
      margin: 50px auto;
      max-width: 90%;
      max-height: 90%;
    }

    #close-btn {
      position: absolute;
      top: 20px;
      right: 20px;
      color: #fff;
      font-size: 24px;
      cursor: pointer;
      z-index: 10000;
    }

    .textlink{
      font-size: 20px;
      font-family: Arial, sans-serif;
      padding-right: 20%;
    }
  </style>

  <div class="textlink">

  <a href="#" id="open-link">Open Map</a>

  </div>

  <div id="overlay">
    <span id="close-btn">&times;</span>
    <img src="images\Europe.png" alt="Picture">
  </div>

  <script>
    document.getElementById("open-link").addEventListener("click", function(event) {
      event.preventDefault();
      document.getElementById("overlay").style.display = "block";
    });

    document.getElementById("close-btn").addEventListener("click", function() {
      document.getElementById("overlay").style.display = "none";
    });
  </script>


  <!--Picture of europe ends-->






  <script src="javascript/chat.js"></script>

</body>
</html>
