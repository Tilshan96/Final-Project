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
            <a href="Profile.php" class="nav-link">Profile</a>
		</li>
          <li class="nav-item">
            <a href="COrder.php" class="nav-link">Order</a>
		</li>
          <li class="nav-item">
            <a href="CPayment.php" class="nav-link">Payment</a>
          </li>
          <li class="nav-item">
            <a href="Quatation.php" class="nav-link">Quotation</a>
		</li>
		<li class="nav-item">
            <a href="Home.php" class="nav-link">Exit</a>
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
            <p class="description">You can Make and Manage your Orders in here.....</p>
            <div class="buttons">
              <a href="COrderfrm.php" class="button order-now">Add</a>
              <a href="COrderManage.php" class="button contact-us">Manage</a>
            </div>
          </div>
          <div class="hero-image-wrapper">
            <img src="order.jpeg" alt="img" class="hero-image" />
          </div>
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
  </body>
</html>
