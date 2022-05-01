<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>College Managment System</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/style.css'; ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/home_screen.css'; ?>">
    </head>
<body>
          <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
              <h1 class = "heading">
               <span>G</span>overnment
               <span>P</span>olytechnic
               <span>A</span>mravati
              </h2>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="<?php echo base_url(). 'Welcome/homeNavigation/branches'?>"data-after="branches">Department</a></li>
            <li><a href="#admission" data-after="admission">admission</a></li>
            <li><a href="#facilities" data-after="facilities">facilities</a></li>
            <li><a href="<?php echo base_url(). 'Welcome/homeNavigation/about'?>" data-after="about">about</a></li>
            <li><a href="<?php echo base_url(). 'Welcome/homeNavigation/student_login'?>"data-after="login">login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
        <img id = "image" src="<?php echo base_url('img/gpa.jpg'); ?>" />
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">Insti<span>i</span>tute</h1>
        <p>Government Polytechnic, Amravati is an autonomous institute of Government of Maharashtra which is one of the oldest institutes established in 1955.
        This institute had a long history of producing technical manpower and rendering technical services to the society.
         Many students of this institute are chairing the topmost positions in Govt. offices and in the reputed companies.
         Some of pass-out students became successful entrepreneurs. Looking to the overall performance of the institute, M. S. had awarded academic autonomy to this institute from 1995.
        Failure doesn't mean you are a failure it just means you haven't succeeded yet.</p>
      </div>
    </div>
  </section>
  <!-- End About Section -->

</body>
</html>