<?php include('mainheader.php'); ?>
<body>
    <!--Header section-->
    <?php include ('navigationbar.php');  ?>
    
    <section class="hero">
       <div class="new"></div>
        <div class="container">
            <div class="hero-content">
              <img src="coimage/food-1.png" alt="no-image">
                <h1>Satisfy your hunger with<br><span>our fast delivery service.</span></h1>
                <p class="color-change"><h2>Experience the taste of fresh, <br>high-quality ingredients, expertly prepared <br> and delivered straight to your doorstep."</h2></p>
                
            </div>
        </div>
    </section>

    <!-- Best Organic Section -->
    <section class="organic-section container">
      
      <div class="organic-image">
          <img src="coimage/home-img.png" alt="Organic Food">
      </div>

      <div class="organic-image">
            <img src="coimage/home-parallax-img.png" alt="Organic Food">
      </div>

      <div class="organic-content">

        <div><h1>Welcome Satorians</h1></div>
        <div> <h2>Different spices for the different tastes 😋</h2></div>
        <div> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>

      </div>

    </section>
    
 <!-- Features Section -->
 <section class="features">
    <div class="container">
        <div class="insider"> 
            <h2>Our Specials</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <img src="coimage/food-1.png" alt="">
                <i class="fas fa-leaf feature-icon"></i>
                <h3>Special-Natural fish</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="feature-card">
                <img src="coimage/food-2.png" alt="">
                <i class="fas fa-seedling feature-icon"></i>
                <h3>Chilly Cheeseburger</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="feature-card">
                <img src="coimage/food-3.png" alt="">
                <i class="fas fa-shield-alt feature-icon"></i>
                <h3>Sweet chill chicken</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            
        </div>
    </div>
</section>
    <!--product menu start-->
    <div class="menu-container">
      <h1 class="menu-title">Our Menu</h1>
      <h2 class="menu-subtitle">Our Top Dishes</h2>
      
      <div class="menu-grid">
          <!-- Item 1 -->
          <div class="menu-item">
              <div class="food-image">
                  <img src="coimage/food-1.png" alt="Burger">
              </div>
              <div class="food-details">
                  <div class="food-name">Special Fish</div>
                  <div class="food-price">200.00ETB</div>
              </div>
          </div>

          <!-- Item 2 -->
          <div class="menu-item">
              <div class="food-image">
                  <img src="coimage/food-2.png" alt="Pizza">
              </div>
              <div class="food-details">
                  <div class="food-name">Special Burger</div>
                  <div class="food-price">300.00ETB</div>
              </div>
          </div>

          <!-- Item 3 -->
          <div class="menu-item">
              <div class="food-image">
                  <img src="coimage/food-3.png" alt="Sandwich">
              </div>
              <div class="food-details">
                  <div class="food-name">Special Pizza</div>
                  <div class="food-price">200.00ETB</div>
              </div>
          </div>

          <!-- Item 4 -->
          <div class="menu-item">
              <div class="food-image">
                  <img src="coimage/food-4.png" alt="Burger">
              </div>
              <div class="food-details">
                  <div class="food-name">Normal burger</div>
                  <div class="food-price">150.00ETB</div>
              </div>
          </div>

          <!-- Item 5 -->
          <div class="menu-item">
              <div class="food-image">
                  <img src="coimage/food-5.png" alt="Fries">
              </div>
              <div class="food-details">
                  <div class="food-name">Normal Pizza</div>
                  <div class="food-price">200.00ETB</div>
              </div>
          </div>

          <!-- Item 6 -->
          <div class="menu-item">
              <div class="food-image">
                  <img src="coimage/blog-1.jpg" alt="Pizza">
              </div>
              <div class="food-details">
                  <div class="food-name">Chicken Burger</div>
                  <div class="food-price">250.00ETB</div>
              </div>
          </div>
      </div>
  </div>

  <?php include ('footer.php');  ?>

    <script src="js/script.js">
       
    </script>
</body>
</html>