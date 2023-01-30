<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>College of Computer and Information Sciences</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/content/general/icon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/front.js"></script>
    <script src="js/back.js"></script>
    <script>
      let initHeader = 0;

      window.onload = function() {
        initHeader = document.getElementById('nav-header-container').offsetTop;
      };

      window.onscroll = function() {
        if(window.pageYOffset > 0)
          $('#home-down').fadeOut(200);
        else
          $('#home-down').css('display', 'flex');

        if(window.pageYOffset > initHeader)
          $('.nav-tab').removeClass('nav-trans');
        else
          $('.nav-tab').addClass('nav-trans');
      };
    </script>
  </head>
  <body>
    <header>
      <div id="website-header-container" class="home-header">
        <div id="website-header" class="width-limit">
          <i id="nav-bar" class="fas fa-bars fa-lg"></i>
          <div id="logo-container">
            <a id="logo-link" href="index.php"><img id="logo-img" src="images/content/general/logo.png" alt="Logo"></a>
            <a href="index.php"><p id="ccis" data-web_init="CCIS" data-web_name="College of Computer and Information Sciences">CCIS</p></a>
          </div>
          <div id="right-options">
            <div id="search-container" class="modal-toggle" data-target="search-modal">
              <div id="search-img-container">
                <img src="images/icons/search-icon-white.png" id="search-icon-white" alt="Search Icon">
                <img src="images/icons/search-icon.png" id="search-icon" class="hidden" alt="Search Icon">
              </div>
            </div>
            <div id="user-container">
              <div>
                <div id="user-img-container" style="">
                  <img src="images/icons/user-icon-white.png" id="user-icon-white" alt="User Icon">
                  <img src="images/icons/user-icon.png" id="user-icon" class="hidden" alt="User Icon">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="nav-bg" class="bg"></div>
      <div id="nav-header-container" class="home-header">
        <div id="nav-header" class="width-limit">
          <ul id="nav" class="nav-responsive">
            <div class="sidebar-close">
              <img src="images/icons/close-white.png" alt="Close Icon">
            </div>
            <li class="nav-tab nav-trans active">
              <a href="index.php">HOME</a>
            </li>
            <li class="nav-tab nav-trans nav-dropdown">
              <a href="about.php">ABOUT</a>
              <div class="chevron-container">
                <span class="chevron"></span>
              </div>
              <div class="dropdown">
                <ul class="sub-menu">
                  <a href="about/ccis-history.php"><li class="sub-nav">CCIS and its History</li></a>
                  <a href="about/mission-goals.php"><li class="sub-nav">Mission and Goals</li></a>
                  <a href="about/contact-us.php"><li class="sub-nav">Contact Us</li></a>
                </ul>
              </div>
            </li>
            <li class="nav-tab nav-trans nav-dropdown">
              <span>NEWS</span>
              <div class="chevron-container">
                <span class="chevron"></span>
              </div>
              <div class="dropdown">
                <ul class="sub-menu">
                  <a href="news/news.php"><li class="sub-nav">News</li></a>
                  <a href="news/announcements.php"><li class="sub-nav">Announcements</li></a>
                </ul>
              </div>
            </li>
            <li class="nav-tab nav-trans nav-dropdown">
              <a href="student.php">STUDENT</a>
              <div class="chevron-container">
                <span class="chevron"></span>
              </div>
              <div class="dropdown">
                <ul class="sub-menu">
                  <a href="student/programs.php"><li class="sub-nav">Programs</li></a>
                  <a href="student/organizations.php"><li class="sub-nav">Student Organizations</li></a>
                  <a href="student/handbook.php"><li class="sub-nav">Student Handbook</li></a>
                  <a href="student/forms.php"><li class="sub-nav">Downloadable Forms</li></a>
                </ul>
              </div>
            </li>
            <li class="nav-tab nav-trans">
              <a href="faculty.php">FACULTY</a>
            </li>
            <li class="nav-tab nav-trans nav-dropdown">
              <a href="forum.php">FORUM</a>
              <div class="chevron-container">
                <span class="chevron"></span>
              </div>
              <div class="dropdown">
                <ul class="sub-menu">
                  <a href="forum.php?ID=1&amp;category=general-forum"><li class="sub-nav">General Forum</li></a>
                  <a href="forum.php?ID=2&amp;category=academic-concerns"><li class="sub-nav">Academic Concerns</li></a>
                  <a href="forum.php?ID=3&amp;category=student-community-forum"><li class="sub-nav">Student Community Forum</li></a>
                  <a href="forum.php?ID=4&amp;category=student-organization"><li class="sub-nav">Student Organization</li></a>
                </ul>
              </div>
            </li>
            <li class="nav-tab nav-trans">
              <a href="gallery.php">GALLERY</a>
            </li>
            <li class="nav-tab nav-trans nav-dropdown">
              <span>LINKS</span>
              <div class="chevron-container">
                <span class="chevron"></span>
              </div>
              <div class="dropdown">
                <ul class="sub-menu">
                  <a href="https://www.pup.edu.ph/about/calendar" target="_blank"><li class="sub-nav">University Calendar</li></a>
                  <a href="https://sisstudents.pup.edu.ph/" target="_blank"><li class="sub-nav">Student Information System</li></a>
                </ul>
              </div>
            </li>
          </ul>
          <div id="notif-nav" class="notif-responsive">
            <div class="sidebar-close">
              <img src="images/icons/close.png" alt="Close Icon">
            </div>
            <h3>Notifications</h3>
            <div id="all-notif">
              <div class="notif notif-new">
                <div class="notif-user">
                  <img src="images/icons/user-icon.png">
                </div>
                <div class="notif-info">
                  <p class="notif-desc"><strong>Ysabel Dela Cruz</strong> replied to your thread.</p>
                  <p class="notif-time">September 24, 12:02 am</p>
                </div>
              </div>
              <div class="notif">
                <div class="notif-user">
                  <img src="images/icons/user-icon.png">
                </div>
                <div class="notif-info">
                  <p class="notif-desc"><strong>Ysabel Dela Cruz</strong> replied to your thread.</p>
                  <p class="notif-time">September 24, 12:02 am</p>
                </div>
              </div>
              <!-- div id = "no-notif"> IF NO NOTIF
                <i class = "fas fa-bell fa-3x"></i>
                <h4>No notifications yet</h4>
                <p>You're all caught up!</p>
                <p>Check again later for new updates.</p>
              </div -->
            </div>
          </div>
          <div id="profile-nav" class="profile-responsive">
            <div class="sidebar-close">
              <img src="images/icons/close-white.png" alt="Close Icon">
            </div>
            <a href="sign-in.php#sign-up" id="signup">Sign Up</a>
            <a href="sign-in.php#log-in" id="login">Log In</a>
          </div>
        </div>
      </div>
    </header>
    <div id="top"><span></span></div>
    <div id="search-modal" class="modal">
      <div>
        <div id="search-close">
          <img src="images/icons/close-white.png" alt="Close Icon">
        </div>
        <div id="modal-search-container">
          <i class="fas fa-search fa-lg"></i>
          <input type="text" id="modal-search" placeholder="Find Pages, News, &amp; Threads...">
          <div id="search-btn">
            <i class="fas fa-search fa-lg"></i>
            <span>SEARCH</span>
          </div>
        </div>
      </div>
    </div>
    <div id="sign-out-modal" class="modal">
      <div class="modal-content">
        <div class="modal-body">
          <div class="modal-header">
            <h2></h2>
            <div class="modal-close modal-dismiss">
              <img src="images/icons/close.png" alt="Close Icon">
            </div>
          </div>
          <div class="modal-alert">
            <div>
              <i class="fas fa-exclamation-circle fa-3x alert-yellow"></i>
            </div>
            <div>
              <p class="modal-alert-header">Sign Out</p>
              <p>Are you sure you want to sign out?</p>
            </div>
          </div>
          <div class="modal-button-holder modal-alert-button-holder">
            <div class="btn btn-default modal-dismiss">Cancel</div>
            <a href="server/signout.php" id="sign-out" class="btn btn-red"><i class="fas fa-sign-out-alt"></i>Sign Out</a>
          </div>
        </div>
      </div>
    </div>
    <div id="main">
      <div class="full-image">
        <img src="images/content/home/cover.jpeg" class="cover-img">
        <div class="width-limit">
          <p id="tagline" class="Your Dreams.<br>Our Mission.">Your Dreams.<br>Our Mission.</p>
        </div>
      </div>
      <div id="home-down" class="down">
        <div>
          <p>KNOW MORE</p>
          <i class="fas fa-chevron-down"></i>
        </div>
      </div>
      <div id="main-inner">
        <div id="overview-header">
          <div class="width-limit">
            <h1 id="title-header">Why CCIS?<br></h1>
            <p>The College of Computer and Information Sciences with its two departments, the Department of Computer Science and the Department of Information Technology, provides quality IT education relevant to the changing needs of the fast-paced industry. The college commits to produce passionate, intellectual, and ingenious graduates and entrepreneurs that serve the society.<br><br>With four decades of history, the College of Computer and Information Sciences continues its journey and reputation in molding globally competent and skillfully trained future professionals.</p>
            <p class="overview-hr"></p>
          </div>
        </div>
        <div class="preview-banner" style="background-image: url('images/content/home/preview.jpeg')">
          <div class="green-trans-ll-ur"></div>
          <div class="preview-content preview-bottom width-limit">
            <p class="banner-med banner-title caption-left">Four decades of providing</p>
            <p class="banner-large banner-title caption-left">Quality IT Education</p>
            <p class="banner-small banner-title caption-left">relevant to the&nbsp;changing needs of the Society</p>
            <p class="button-holder caption-right">
              <a href="about/ccis-history.php" class="banner-link">
                <button class="init-button-white hover-button-black">LEARN MORE</button>
              </a>
            </p>
          </div>
        </div>
        <div id="grid-header">
          <div class="width-limit">
            <p class="overview-hr"></p>
            <p class="overview-sub">WHAT'S HAPPENING</p>
            <h1 id="title-header">Latest News &amp; Announcements</h1>
            <div class="preview-grid grid-3">
              <a href="news/post.php?ID=3/news/012622/ccis-certified-level-iv" class="grid-link">
                <img src="images/content/posts/news/default.png">
                <div class="cover-shade"></div>
                <div class="grid-content">
                  <p class="grid-type">News</p>
                  <p class="grid-title">CCIS Certified Level IV</p>
                  <p class="read-more">Read More <span class="html-right-arrow">→</span></p>
                </div>
              </a>
              <a href="news/post.php?ID=2/announcements/012622/suspension-of-synchronous-class-activities" class="grid-link">
                <img src="images/content/posts/announcements/default.png">
                <div class="cover-shade"></div>
                <div class="grid-content">
                  <p class="grid-type">Announcement</p>
                  <p class="grid-title">Suspension of Synchronous Class Activities</p>
                  <p class="read-more">Read More <span class="html-right-arrow">→</span></p>
                </div>
              </a>
              <a href="news/post.php?ID=1/announcements/011922/welcome-to-ccis-website" class="grid-link">
                <img src="images/content/posts/announcements/cover/1/cover.png">
                <div class="cover-shade"></div>
                <div class="grid-content">
                  <p class="grid-type">Announcement</p>
                  <p class="grid-title">Welcome to CCIS Website!</p>
                  <p class="read-more">Read More <span class="html-right-arrow">→</span></p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    <footer>
      <div id="pre-foot-container">
        <div id="pre-foot" class="width-limit">
          <div id="pre-foot-content">
            <div>
              <h4>CCIS</h4>
              <ul>
                <li><a href="news/news.php">News</a></li>
                <li><a href="student.php">Student</a></li>
                <li><a href="faculty.php">Faculty</a></li>
              </ul>
            </div>
            <div>
              <h4>QUICK LINKS</h4>
              <ul>
                <li><a href="https://www.pup.edu.ph/about/calendar" target="_blank">University Calendar</a></li>
                <li><a href="https://sisstudents.pup.edu.ph/" target="_blank">Student Information System</a></li>
                <li><a href="forum.php">Forum</a></li>
              </ul>
            </div>
            <div>
              <h4>GET TO KNOW US</h4>
              <ul>
                <li><a href="about.php">About</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="about/contact-us.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="page-foot-container">
        <div id="page-foot" class="width-limit">
          <div id="page-foot-content">
            <div id="foot-logo-container">
              <div class="foot-logo">
                <img src="images/content/general/univ.png" alt="University">
              </div>
              <div class="foot-logo">
                <img src="images/content/general/logo.png" alt="College">
              </div>
            </div>
            <div class="page-foot-info">
              <div class="page-foot-icon-container">
                  <i class="fas fa-map-marker-alt fa-lg"></i>
              </div>
              <div class="page-foot-description">2/F North Wing (N-206) Main Student Building, PUP A. Mabini Campus, Anonas St., Sta. Mesa, Manila, Philippines 1016</div>
            </div>
            <div class="page-foot-info">
              <div class="page-foot-icon-container">
                <a href="https://www.facebook.com/PUPCCISOfficial" target="_blank"><i class="fab fa-facebook-square fa-lg"></i></a>
              </div>
              <div class="page-foot-description">
                <a href="https://www.facebook.com/PUPCCISOfficial" target="_blank">College of Computer and Information Sciences</a>
              </div>
            </div>
            <div class="page-foot-info">
              <div class="page-foot-icon-container">
                <i class="fas fa-phone fa-lg"></i>
              </div>
              <div class="page-foot-description">(+63 2) 716-4032</div>
            </div>
            <div class="page-foot-info">
              <div class="page-foot-icon-container">
                <a href="mailto:ccis@pup.edu.ph"><i class="fas fa-envelope fa-lg"></i></a>
              </div>
              <div class="page-foot-description">
                <a href="mailto:ccis@pup.edu.ph">ccis@pup.edu.ph</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div id="load-modal" class="modal" data-backdrop="static" data-keyboard="false">
      <svg>
        <g>
          <path d="M 50,100 A 1,1 0 0 1 50,0"></path>
        </g>
        <g>
          <path d="M 50,75 A 1,1 0 0 0 50,-25"></path>
        </g>
        <defs>
          <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
            <stop offset="0%" style="stop-color: #047c5a; stop-opacity: 1"></stop>
            <stop offset="100%" style="stop-color: #00A879; stop-opacity: 1"></stop>
          </linearGradient>
        </defs>
      </svg>
      </div>
    </div>
  </body>
</html>