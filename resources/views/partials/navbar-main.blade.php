<nav class="nav-holder">
  <div class="container">

    <!-- Nav List -->
    <div class="nav-list style-1">
      <ul class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <li>
          <a href="/about">About</a>
          <ul>
            <li><a href="/about">About StudyChoice</a></li>
            <li><a href="{{ url('about/story')}}">Our Story</a></li>
            <li><a href="{{ url('about/team')}}">Team</a></li>
            <li><a href="{{ url('about/partner')}}">Our Partners</a></li>
          </ul>
        </li>
        <li>
        <a href="/student">Student</a> <!-- go to StudyChoice Portal -->
          <ul>
            <li><a href="#">Join SC Portal</a></li>
            <li><a href="#">Student Meetup</a></li>
            <li>
              <a href="#">Study Abroad</a>
              <ul>
                <li><a href="/about">Ultimate SC Guide</a></li>
                <li><a href="#">Scholarships</a></li> <!-- linked to scholarship -->
                <li><a href="#">Our Students Everywhere</a></li>
              </ul>
            </li>
            <li><a href="#">StudySmart</a></li> <!-- intelligence on studyportal: current career trends -->
          </ul>
        </li>
        <li>
        <a href="/scholarship">Scholarships</a>
          <ul>
            <li><a href="#">Apply</a></li>
            <li><a href="#">Sponsorship</a></li>
            <!-- <li><a href="#">Our Sponsors</a></li> -->
          </ul>
        </li>
        <li>
          <a href="/careers">Careers</a>
          <ul>
            <li><a href="#">CareerChoice</a></li><!-- intelligence on studyportal: current career trends -->

            <li>
              <a href="#">Institutions</a>
              <ul>
                <li><a href="#">Consulting & Analytics</a></li>
                <li><a href="#">Return on Investment(ROI)</a></li>
                <!-- <li><a href="#">Institutions</a></li> -->
              </ul>
            </li>
            <li><a href="#">Consulting</a></li>
          </ul>
        </li>
        <li>
          <a href="/events">News & Events</a>
          <ul>
            <li><a href="#">Events</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </li>
        <!-- <li>
          <a href="#">page</a>
          <ul>
            <li><a href="about.html">about</a></li>
            <li><a href="teacher-detail.html">teacher detail</a></li>
            <li><a href="gallery.html">gallerys</a></li>
          </ul>
        </li> -->
        <li><a href="/contact">contact</a></li>
      </ul>
    </div>
    <!-- Nav List -->

    <!-- Logo -->
    <div class="logo">
      <a class="position-center-y" href="/"><img src="images/logo-1.png" alt="StudyChoice logo"></a>
    </div>
    <!-- Logo -->

    <!-- Responsive Buttun -->
    <a class="navbar-btn collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><i class="fa fa-bars"></i></a>
    <!-- Responsive Buttun -->

  </div>
</nav>
<!-- Nav -->
