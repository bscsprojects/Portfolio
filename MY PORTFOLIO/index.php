<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $redirect = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header("Location: $redirect");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jonavie's Portfolio</title>

  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<!-- Background Animation -->
<div class="liquid-ether-container">
  <canvas id="liquid-ether"></canvas>
</div>

<!-- Navbar -->
<header>
  <div class="logo">Jonavie's Portfolio</div>
  <nav>
    <a href="#hero" class="active">Home</a>
    <a href="#about">About</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact</a>
  </nav>
</header>

<!-- Hero Section -->
<section id="hero" class="hero">
  <div class="hero-text">
    <p class="intro">Hello There!</p>
    <h1>I'm <span class="highlight">Jonavie A. Torreon</span>,<br> 3rd Year Computer Science.</h1>
    <p class="desc">
      I create modern, responsive, and interactive websites. With a passion for design and coding, 
      I help businesses and individuals bring their ideas to life online.
    </p>
    <div class="hero-buttons">
      <a href="#projects" class="btn-fill">View My Portfolio</a>
    </div>
  </div>
  <div class="hero-img">
    <img src="images/profile.jpg" alt="Profile Picture">
  </div>
</section>

<!-- About Section -->
<section id="about" class="about-section">
  <h2 class="section-title">About Me</h2>

  <!-- Tabs -->
  <div class="tabs">
    <button class="tab-btn active" data-tab="personal">Personal</button>
    <button class="tab-btn" data-tab="family">Family</button>
    <button class="tab-btn" data-tab="pets">Pets</button>
  </div>

  <!-- Tab Content -->
  <div class="tab-container">

    <!-- Personal -->
    <div id="personal" class="tab-content active">
      <div class="card">
        <h3>Personal Info</h3>
        <p><strong>Full Name:</strong> Jonavie A. Torreon</p>
        <p><strong>Birthday:</strong> December 14, 2004</p>
        <p><strong>Course:</strong> Bachelor of Science in Computer Science (3rd Year)</p>
        <p><strong>Hobbies:</strong> Editing, Reading, Coding, Drawing</p>
        <p><strong>Dream:</strong> To become a skilled Software Engineer (Airline Systems)</p>
      </div>

      <h2 class="section-title">My Achievements</h2>
      <div class="achievements-grid">
        <div class="achievement-card">
          <h3>Elementary</h3>
          <p>Graduated Elementary with honors at Plaza Central Elementary School.</p>
          <p>Girl Scout of the Philippines</p>
          <p>Regional Qualifier in Lawn Tennis</p>
          <p>Yes-O Campers</p>
          <p>Band Majorette</p>
        </div>
        <div class="achievement-card">
          <h3>High School</h3>
          <p>Graduated High School with honors at Tabon M. Estrella National High School.</p>
        </div>
        <div class="achievement-card">
          <h3>Senior High School</h3>
          <p>Graduated with high honors at Tabon M. Estrella National High School (STEM Strand).</p>
        </div>
        <div class="achievement-card">
          <h3>College</h3>
          <p>Multimedia Team (SY 2023-2024)</p>
          <p>Pseudocode.com Society Public Information Officer</p>
          <p>College of Computer Studies Ambassador</p>
        </div>
      </div>


<!-- Projects Section -->
<section id="projects" class="page-section">
  <h2 class="section-title">My Projects</h2>
  <div class="projects-grid">
    <div class="project-card">
      <div class="project-img">
        <img src="images/mywebsite.png" alt="Personal Portfolio">
      </div>
      <div class="project-info">
        <h3>Personal Portfolio</h3>
        <p>A personal website showcasing my background, skills, and achievements.</p>
        <a href="#">🔗 View Project</a>
      </div>
    </div>

    <div class="project-card">
      <div class="project-img">
        <img src="images/expensetracker.png" alt="Expense Tracker App">
      </div>
      <div class="project-info">
        <h3>Expense Tracker App</h3>
        <p>A native Android app built with Java that helps users record and manage daily expenses.</p>
        <a href="#">🔗 View Project</a>
      </div>
    </div>

    <div class="project-card">
      <div class="project-img">
        <img src="images/brewside.png" alt="Brew Side Website">
      </div>
      <div class="project-info">
        <h3>Brew Side Website</h3>
        <p>A Software Engineering project. Brew Side is a coffee shop website with a menu, 
        shopping cart, and checkout system inspired by Shopee’s design.</p>
        <a href="https://brewside.cs-soft-eng.com/index.php">🔗 View Project</a>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
  <h2 class="section-title">Get in Touch</h2>
  <form action="https://formspree.io/f/movkqbre" method="POST" class="contact-form">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
    <button type="submit">Send Message</button>
  </form>
  <div class="social-links">
    <a href="https://www.facebook.com/jonavie.torreon.1"><i class="fab fa-facebook"></i></a>
    <a href="https://www.instagram.com/jnv_ie/"><i class="fab fa-instagram"></i></a>
    <a href="https://www.tiktok.com/@jnv_ie"><i class="fab fa-tiktok"></i></a>
    <a href="mailto:ascarez.jonavie@gmail.com"><i class="fas fa-envelope"></i></a>
  </div>
</section>

<!-- Grades Section -->
<section id="grades" class="page-section">
  <h2 class="section-title">My Grades</h2>
  <div id="grades-output" style="background:#f8f8f8;padding:20px;border-radius:10px;max-width:400px;margin:auto;text-align:center;">
    <p><strong>Midterm:</strong> <span id="midterm-grade">Loading...</span></p>
    <p><strong>Final:</strong> <span id="final-grade">Loading...</span></p>
  </div>
</section>

<!-- Scripts -->
<script src="scripts/script.js"></script>

</body>
</html>
