<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pathirana Printers</title>
    <!-- Linking Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <!-- Linking Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Header / Navbar -->
    <header>
      <nav class="navbar">
        <a href="#" class="nav-logo">
          <h2 class="logo-text">🖨️ Pathirana Printing Press</h2>
        </a>

        <ul class="nav-menu">
          <button id="menu-close-button" class="fas fa-times"></button>

          <li class="nav-item">
            <a href="#" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">About us</a>
          </li>
          <li class="nav-item">
            <a href="#menu" class="nav-link">Products</a>
          </li>
          <li class="nav-item">
            <a href="#testimonials" class="nav-link">Login</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact us</a>
          </li>
        </ul>

        <button id="menu-open-button" class="fas fa-bars"></button>
      </nav>
    </header>

    <main>
      <!-- Hero section -->
      <section class="hero-section">
        <div class="section-content">
          <div class="hero-details">
            <h2 class="title">Welcome to Pathirana Printers</h2>
            <p class="description">Pathirana Printers is a professionally managed printing company offering a wide range of commercial printing service right from pre-press through fulfilment.</p>
            <div class="buttons">
              <a href="Registration.php" class="button order-now">Register</a>
              <a href="#contact" class="button contact-us">Contact Us</a>
            </div>
          </div>
          <div class="hero-image-wrapper">
            <img src="dashboard.jpeg" alt="img" class="hero-image" />
          </div>
        </div>
      </section>

      <!-- About section -->
      <section class="about-section" id="about">
        <div class="section-content">
          <div class="about-image-wrapper">
            <img src="about.jpg" alt="About" class="about-image" />
          </div>
          <div class="about-details">
            <h2 class="section-title">About Us</h2>
            <p class="text">Highest Quality Online Printing Services At our leading print shop, we offer a range of high-quality printing services at affordable rates...</p>
          </div>
        </div>
      </section>

      <!-- Product section -->
      <section class="menu-section" id="menu">
        <h2 class="section-title">Our Products</h2>
        <div class="section-content">
          <ul class="menu-list">
            <li class="menu-item">
              <img src="businesscard.jpeg" alt="businesscard.jpeg" class="menu-image" />
              <div class="menu-details">
                <h3 class="name">Business Cards</h3>
              </div>
            </li>
            <li class="menu-item">
              <img src="weddingcard.jpeg" alt="weddingcard" class="menu-image" />
              <div class="menu-details">
                <h3 class="name">Wedding cards</h3>
              </div>
            </li>
            <li class="menu-item">
              <img src="cakebox.jpeg" alt="cakebox" class="menu-image" />
              <div class="menu-details">
                <h3 class="name">Cake Box</h3>
              </div>
            </li>
            <li class="menu-item">
              <img src="banner.jpeg" alt="banner" class="menu-image" />
              <div class="menu-details">
                <h3 class="name">Banner</h3>
              </div>
            </li>
            <li class="menu-item">
              <img src="mugprintings.jpg" alt="banner" class="menu-image" />
              <div class="menu-details">
                <h3 class="name">Mug Printing</h3>
              </div>
            </li>
            <li class="menu-item">
              <img src="calender.jpg" alt="calender" class="menu-image" />
              <div class="menu-details">
                <h3 class="name">Wall and Desk Calender</h3>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!-- Testimonials section -->
      <section class="testimonials-section" id="testimonials">
         <div class="container">
 <form action="" id="form">
 <h2 class="section-title">Login</h2>
 <div class="input-group">
 <label for="username">Username</label>
 <input type="text" id="username" name="username" name="t1">
 <div class="error"></div>
 </div>
 <div class="input-group">
 <label for="password">Password</label>
 <input type="password" id="password" name="password" name="t2">
 <div class="error"></div>
 </div>
 <button type="submit" name="s1">Login</button>
 </form>
 </div>
      </section>

      <!-- Contact section -->
      <section class="contact-section" id="contact">
        <h2 class="section-title">Contact Us</h2>
        <div class="section-content">
          <ul class="contact-info-list">
            <li class="contact-info">
              <i class="fa-solid fa-location-crosshairs"></i>
              <p>Ruwenwella Road, Thalduwa, Avissawella</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-envelope"></i>
              <p>pathiranaprintsl@gmail.com</p>
            </li>
            <li class="contact-info">
              <i class="fa-solid fa-phone"></i>
              <p>0362 230 008</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-clock"></i>
              <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
            </li>
            <li class="contact-info">
              <i class="fa-regular fa-clock"></i>
              <p>Saturday: 10:00 AM - 3:00 PM</p>
            </li>
          </ul>

          <form action="#" class="contact-form">
            <input type="text" placeholder="Your NIC" class="form-input" name="t3" required />
			<input type="text" placeholder="Your name" class="form-input" name="t4" required />
            <input type="email" placeholder="Your email" class="form-input" name="t5" required />
            <textarea placeholder="Your message" class="form-input" name="t6" required></textarea>
            <input type="submit" class="button submit-button" name="s2">
          </form>
        </div>
      </section>

      <!-- Footer section -->
      <footer class="footer-section">
        <div class="section-content">
          <p class="copyright-text">© Pathirana Printers - Avissawella</p>

        </div>
      </footer>
    </main>

    <!-- Linking Swiper script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Linking custom script -->
    <script src="script.js"></script>
	<script src="logscript.js"></script>
	


<?php
	$x=$_POST["t1"];
	$y=$_POST["t2"];
	$con=mysqli_connect("localhost","root","","ProjectPathiranadb");

	if(isset($_POST["s1"]))
	{$sql="select*from LoginReg where Username='$x'";
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result))
	{$a=$row['Username'];
	 $b=$row['Password'];
	}
	if ($x==$a && $y==$b && $b=="Admin")
	{header("location:Admin.php?");
	}

	else
	{header("location:Customer.php?");
	}}
?>

<?php
	$NIC=$_POST["t3"];
	$Name=$_POST["t4"];
	$Email=$_POST["t5"];
	$Message=$_POST["t6"];
	$con=mysqli_connect("localhost","root","","ProjectPathiranadb");

	if(isset($_POST["s2"]))
	{$sql="insert into Contact values('$NIC','$Name','$Email','$Message')";
	$result=mysqli_query($con,$sql);
	}
?>
  </body>
</html>
