<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-group button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        .form-group button:hover {
            background-color: #218838;
        }
        .contact-info {
            margin-top: 20px;
            text-align: center;
        }
  </style>
</head>

<?php include('mainheader.php'); ?>
<body>
    <!--Header section-->
    <?php include ('navigationbar.php');  ?>

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
        <div> <p>"Eat Well, Live Well, Order Now!"</p></div>

      </div>
    </section>

    <h1>Contact Us</h1>
    <section>
<div class="container">
    <form id="contactForm">
        <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Your Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit">Send Message</button>
        </div>
    </form>

    <div class="contact-info">
        <h2>Contact Information</h2>
        <p><strong>Phone:</strong> +251-901925923</p>
        <p><strong>Email:</strong> satorian@gmail.com</p>
        <p><strong>Address:</strong> Emperial street, Addis Abeba</p>
    </div>
</div>
 </section>

  <!-- footer  -->
  <?php include ('footer.php');  ?>

<!--javascript-->
    <script src="js/script.js">
         document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();
        alert('Your message has been sent!');
        this.reset(); // Clear the form fields
    });
    </script>
</body>
</html>







