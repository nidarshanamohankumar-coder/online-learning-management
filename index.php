  <?php include("header.php");
  ?>
  <link rel="stylesheet" href="index.css">
  <title>Home - Learn with Akshayam 360</title>
<section>
  <div class="hero-slider">
    <div class="slide slide-active" style="background-image:url('images/top8.jpg');"></div>
    <div class="slide" style="background-image:url('images/top7.jpg');"></div>
    <div class="slide" style="background-image:url('images/top4.png');"></div>
    <div class="slide" style="background-image:url('images/top4.png');"></div>
    
    <div class="hero-content">
      <p style="font-weight:bold;text-transform:uppercase;letter-spacing:2px;font-size:35px">Akshayam 360</p>
      <p>Who We are</p>
    </div>
  </div>
</section>


<div class="texts">

<h1 class="gradient typing">Knowledge builds Confidence, and Confidence builds success... </h1>
<div class="arr">
<img src="images/arrow.png" alt="Arrow">
</div>

<div class="batch">
<img src="images/batch.jpg" alt="batch">
</div>
  </div>

<div class="training">
 <h2>Internship Training </h2>
 <div class="icon-circle">
 <img src="images/internship.png" alt="internship">
 </div>
</div>

<section class="internship-section">

  <h2 class="section-title">Build Real Skills with our Internship Program</h2>

  <p class="section-desc">
    At <b style="color:rgb(46, 46, 129)">Akshayam 360</b>, we provide career-oriented internships with real-time
    learning, mentor guidance, and an official Internship Completion Certificate.
  </p>

  <!-- ROW 1 -->
  <div class="internship-row from-left">
    <div class="row-left">
      <img src="images/tech.jpg" alt="technical">
      <h3> Technical Development</h3>
    </div>
    <div class="row-content">
       In our <b>Technical Development internship</b>, students gain <b>hands-on experience</b> in
  multiple modern technologies including <b>programming, web development, and real-time
  project implementation.  </b>
  We focus on practical learning rather than theory, helping interns build real
  <b>industry-ready skills, confidence, and problem-solving ability.</b> <br>
  Anyone who approaches <b style="color:rgb(46, 46, 129)">Akshayam 360</b> for internship training will receive
  <b>structured guidance, mentor support, and meaningful project exposure</b> that
  truly adds value to their career journey. Our goal is not just training —
  it is preparing students to step confidently into the professional world.
    </div>
  </div>

  <!-- ROW 2 -->
  <div class="internship-row left from-right">
    <div class="row-left">
      <img src="images/data3.jpg" alt="technical">
      <h3> Data Entry and Office Tools</h3>
    </div>
    <div class="row-content">
       This internship helps students develop accuracy, speed, and professional
 <b>data management skills</b> using <b>modern office tools, spreadsheets, and
  real-time workflows.</b> With practical training and guided tasks, learners
  gain confidence to handle <b>administrative and data-related responsibilities</b>
  in real workplace environments.
    </div>
  </div>

  <!-- ROW 3 -->
  <div class="internship-row from-left">
    <div class="row-left">
      <img src="images/digital1.png" alt="technical">
      <h3>Digital Marketing</h3>
    </div>
    <div class="row-content">
        Our <b>Digital Marketing</b> internship provides hands-on experience in <b>building
  strong online presence</b> and promoting <b>businesses through modern digital
  strategies.</b> Interns learn the fundamentals of <b>Search Engine Optimization (SEO),</b>
  social media marketing, content creation, and audience engagement techniques
  used by real companies. <br>
  Through practical <b>assignments, campaign planning, and performance analysis,</b>
  students understand how to reach the right audience, increase brand visibility,
  and generate meaningful online growth.
    </div>
  </div>

</section>


<div class="margin">
<div class="training">
 <h2>Practical Workshops and Technical Events </h2>
 <div class="icon-circle">
 <img src="images/workshop.png" alt="internship">
 </div>
</div>
</div>

<section class="internship-section">

  <h2 class="section-title">Build Real Skills with our Internship Program</h2>

  <p class="section-desc">
    At <b style="color:rgb(46, 46, 129)">Akshayam 360</b>, We offer industry-oriented workshops designed with real-time hands-on learning, experienced mentor support, 
    and an official certificate of participation to enhance students’ career readiness.
  </p>

  <!-- ROW 1 -->
  <div class="internship-row from-left">
    <div class="row-left">
      <img src="images/workshop1.png" alt="technical">
      <h3>Workshops</h3>
    </div>
    <div class="row-content">
      At <b style="color:rgb(46, 46, 129);">Akshayam 360,</b> we regularly conduct <b>hands-on technical workshops</b> and skill-based training 
      sessions designed to help students move beyond classroom theory and experience <b> real-time practical learning.</b>
Each workshop is guided by experienced mentors and focuses on  <b>industry-relevant tools, technologies, 
and problem-solving approaches </b>that prepare learners for real career opportunities.
    </div>
  </div>

  <!-- ROW 2 -->
  <div class="internship-row left from-right">
    <div class="row-left">
      <img src="images/tech1.jpg" alt="technical">
      <h3>Technical Events</h3>
    </div>
    <div class="row-content">
       This internship helps students develop accuracy, speed, and professional
 <b>data management skills</b> using <b>modern office tools, spreadsheets, and
  real-time workflows.</b> With practical training and guided tasks, learners
  gain confidence to handle <b>administrative and data-related responsibilities</b>
  in real workplace environments.
    </div>
  </div> 
</section>






<?php include('footer.php'); ?>
<script>
  document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll('.slide');
  let currentIndex = 0;

  setInterval(() => {
    slides[currentIndex].classList.remove('slide-active');

    currentIndex = (currentIndex + 1) % slides.length;

    slides[currentIndex].classList.add('slide-active');
  }, 4000);
});

</script>

   <script>
const rows = document.querySelectorAll(".internship-row");

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
    }
  });
}, { threshold: 0.3 });

rows.forEach(row => observer.observe(row));
</script>

