<!DOCTYPE html>
<html>
<head>
  <title>Steve & Steve Pest Control</title>
  <style>
    body {font-family: Arial, sans-serif;}
    div {padding-left: 25px; padding-right: 25px;}
    .main {text-align: center; margin: 0 auto; max-width: 800px;}
    .hero {background-color: #8BC34A; color: white; padding: 50px 0;}
    .hero img {max-width: 100%; height: auto;}
    .services {background-color: #FFFFFF; padding: 50px 0;}
    .about {background-color: #F5F5F5; padding: 50px 0;}
    .contact {background-color: #8BC34A; color: white; padding: 50px 0;}
  </style>
</head>
<body>
<?php
    $strJsonFileContents = file_get_contents("variables.json");
    $array = json_decode($strJsonFileContents, true);
    $phone = $array["phone"];
    $email = $array["email"];
    $city = $array["city"];
    $state = $array["state"];
?>
  <div class="main">
    <div class="hero">
      <img src="header.jpg" alt="Steve & Steve Pest Control">
      <h1>Welcome to Steve & Steve Pest Control</h1>
      <p>Your ultimate solution to pest problems in your home and business</p>
    </div>
    <div class="services">
        <h2>Our Services</h2>
        <p>We provide comprehensive pest control solutions for:</p>
        <ul>
          <li>Residential properties</li>
          <li>Commercial properties</li>
          <li>Industrial facilities</li>
        </ul>
        <p>We handle a wide range of pests, including but not limited to:</p>
        <ul>
          <li>Ants</li>
          <li>Termites</li>
          <li>Rodents</li>
          <li>Cockroaches</li>
          <li>Bed bugs</li>
          <li>Mosquitoes</li>
        </ul>
      </div>
      
      <div class="about">
        <h2>About Us</h2>
        <p>Steve & Steve Pest Control is a family-owned business based in <?php echo $city . ', ' . $state; ?>. We've earned a reputation for fast, reliable, and eco-friendly pest control services. Our trained professionals are licensed, insured, and dedicated to ensuring your space remains pest-free. We understand the disruption pests can cause, and we strive to handle your pest control needs promptly and efficiently.</p>
      </div>
      
      <div class="contact">
        <h2>Contact Us</h2>
        <p>Interested in our services or have a question? Don't hesitate to reach out!</p>
        <p>Phone: <?php echo $phone; ?></p>
        <p>Email: <?php echo $email; ?></p>
        <p>We look forward to keeping your home and business pest-free!</p>
      </div>
    </div>
</body>
</html>
