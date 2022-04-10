<?php require_once('connection.php');?>
<?php
  if(isset($_POST['name'])||isset($_POST['message'])||isset($_POST['email'])){
    $name = $_POST['name'];
    $message = $_POST['message'];
    $email = $_POST['email'];
  }      
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      complete responsive tour and travel agency website design tutorial
    </title>

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- header section starts  -->

    <header>
      <div id="menu-bar" class="fas fa-bars"></div>

      <a href="#" class="logo"><span>Desti</span>nations</a>

      <nav class="navbar">
        <a href="#">home</a>
        <a href="index.html">destinations</a>
        <a href="#">plan your trip</a>
        <a href="#">things to do</a>
        <a href="#">contact us</a>
      </nav>

      <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
      </div>

      <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here..." />
        <label for="search-bar" class="fas fa-search"></label>
      </form>
    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">
      <div class="content">
        <h3>adventure awaits</h3>
        <!--<p>dicover new places with us</p>-->
      </div>

      <div class="controls">
        <span class="vid-btn active" data-src="images/1.mp4"></span>
        <span class="vid-btn" data-src="images/2.mp4"></span>
        <span class="vid-btn" data-src="images/3.mp4"></span>
        <span class="vid-btn" data-src="images/4.mp4"></span>
        <span class="vid-btn" data-src="images/5.mp4"></span>
      </div>

      <div class="video-container">
        <video src="images/1.mp4" id="video-slider" loop autoplay muted></video>
      </div>
    </section>

    <!-- home section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">
      <h1 class="heading">
        <span>d</span>
        <span>e</span>
        <span>s</span>
        <span>t</span>
        <span>i</span>
        <span>n</span>
        <span>a</span>
        <span>t</span>
        <span>i</span>
        <span>o</span>
        <span>n</span>
        <span>s</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <img src="images/g-4.jpg" alt="" />
          <div class="content">
            <h3>Heritage Kandy</h3>
            <p>
              A pilgrimage destination for the Temple of Tooth relic (a sacred
              tooth of the Buddha)
            </p>
            <a href="Kandy.html" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-5.jpg" alt="" />
          <div class="content">
            <h3>Ella</h3>
            <p>
              Ella has the best parts of Sri Lanka rolled into one, jungle
              mountains, rolling tea plantations, and epic waterfalls
            </p>
            <a href="Ella.html" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-6.jpg" alt="" />
          <div class="content">
            <h3>Galle</h3>
            <p>
              A fortified city built by the portuguese in South and southeast
              Asia
            </p>
            <a href="Galle.html" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-7.jpg" alt="" />
          <div class="content">
            <h3>Sigiriya</h3>
            <p>
              A UNESCO listed world heritage site, One of the best examples of
              ancient Urbun planning
            </p>
            <a href="Sigiriya.html" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-8.jpg" alt="" />
          <div class="content">
            <h3>NuwaraEliya</h3>
            <p>
              Known as "The city of light", glamours with a picturesque
              landscape and temperate climate
            </p>
            <a href="Nuwaraeliya.html" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="images/g-9.jpg" alt="" />
          <div class="content">
            <h3>Arugambay beach</h3>
            <p>
              The most popular surf spot and the only international surf
              competition venue in Sri Lanka
            </p>
            <a href="Arugambay.html" class="btn">see more</a>
          </div>
        </div>
      </div>
    </section>
    <!-- review section starts  -->

    <section class="review" id="review">
      <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
        <span>s</span>
      </h1>

      <div class="swiper-container review-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="box">
              <img src="images/pic4.png" alt="" />
              <h3>
                <?php  
                    if(isset($name)){
                    echo "{$name}";
                    }
                ?>
              </h3>
              <?php
                if(isset($name)){
                  echo "<p>";
                  echo "message: {$message}";
                  echo "</p>";
                }
              ?>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">
      <h1 class="heading">
        <span>C</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
      </h1>

      <div class="row">
        <div class="image">
          <img src="images/contact-img.svg" alt="" />
        </div>

        <form action="Home.php" method="POST" id="form" onclick="formValidate()">
          <div class="inputBox">
            <input type="text" placeholder="name" id="name" name="name" />
            <!-- to prevent @ check by the browser type setted to text -->
            <input type="text" placeholder="email" id="email" name="email" />
          </div>
          <div class="errorClass">
            <div id="nameError"></div>
            <div id="emailError"></div>
          </div>
          <textarea
            placeholder="message"
            name="message"
            cols="30"
            rows="10"
            id="message"
          ></textarea>
          <div id="messageError" class="errorClass"></div>
          <input type="submit" class="btn" value="send message" id="submit" />
        </form>
        
      </div>
    </section>

    <!-- contact section ends -->

    <!-- footer section  -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>about us</h3>
          <p>
            We provide information related to local destinations. This is a
            platform to display destination management companies that provides
            local travel services where you can reserve transportation.
          </p>
        </div>

        <div class="box">
          <h3>follow us</h3>
          <a href="#">facebook</a>
          <a href="#">instagram</a>
          <a href="#">twitter</a>
          <a href="#">linkedin</a>
        </div>
      </div>

      <h1 class="credit">created by <span> Group-15 </span></h1>
    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <!-- <script src="script.js"></script> -->
    <!-- <script src="formValidation.js"></script> -->
    
  </body>
</html>
