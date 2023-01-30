<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Thread – College of Computer and Information Sciences</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/content/general/icon.ico">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.css">
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="../js/jquery-3.6.0.min.js"></script>
		<script src="../js/front.js"></script>
		<script src="../js/back.js"></script>
		<script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
      window.onload = function() {
        $('#topic-selected').find('.forum-selection').find('div').first().click();
        $('document, body').click();
      };
    </script>
  </head>
  <body>
    <header>
      <div id="website-header-container">
        <div id="website-header" class="width-limit">
          <i id="nav-bar" class="fas fa-bars fa-lg"></i>
          <div id="logo-container">
            <a id="logo-link" href="../index.php"><img id="logo-img" src="../images/content/general/logo.png" alt="Logo"></a>
            <a href="../index.php"><p id="ccis" data-web_init="CCIS" data-web_name="College of Computer and Information Sciences">College of Computer and Information Sciences</p></a>
          </div>
          <div id="right-options">
            <div id="search-container" class="modal-toggle" data-target="search-modal">
              <div id="search-img-container">
                <img src="../images/icons/search-icon.png" id="search-icon" alt="Search Icon">
              </div>
            </div>
            <div id="user-container">
              <div>
                <div id="user-img-container" style="">
                  <img src="../images/icons/user-icon.png" id="user-icon" alt="User Icon">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="nav-bg" class="bg"></div>
      <div id="nav-header-container">
        <div id="nav-header" class="width-limit">
          <ul id="nav">
            <div class="sidebar-close">
              <img src="../images/icons/close-white.png" alt="Close Icon">
            </div>
            <li class="nav-tab">
              <a href="../index.php">HOME</a>
            </li>
            <li class="nav-tab nav-dropdown">
              <a href="../about.php">ABOUT</a>
              <div class="chevron-container">
                <span class="chevron"></span>
              </div>
              <div class="dropdown">
                <ul class="sub-menu">
                  <a href="../about/ccis-history.php"><li class="sub-nav">CCIS and its History</li></a>
                  <a href="../about/mission-goals.php"><li class="sub-nav">Mission and Goals</li></a>
                  <a href="../about/contact-us.php"><li class="sub-nav">Contact Us</li></a>
                </ul>
              </div>
            </li>
            <li class="nav-tab nav-dropdown">
              <span>NEWS</span>
              <div class="chevron-container">
                <span class="chevron"></span>
              </div>
              <div class="dropdown">
                <ul class="sub-menu">
                  <a href="../news/news.php"><li class="sub-nav">News</li></a>
                  <a href="../news/announcements.php"><li class="sub-nav">Announcements</li></a>
                </ul>
              </div>
            </li>
            <li class="nav-tab nav-dropdown">
              <a href="../student.php">STUDENT</a>
              <div class="chevron-container">
                <span class="chevron"></span>
              </div>
              <div class="dropdown">
                <ul class="sub-menu">
                  <a href="../student/programs.php"><li class="sub-nav">Programs</li></a>
                  <a href="../student/organizations.php"><li class="sub-nav">Student Organizations</li></a>
                  <a href="../student/handbook.php"><li class="sub-nav">Student Handbook</li></a>
                  <a href="../student/forms.php"><li class="sub-nav">Downloadable Forms</li></a>
                </ul>
              </div>
            </li>
            <li class="nav-tab">
              <a href="../faculty.php">FACULTY</a>
            </li>
            <li class="nav-tab nav-dropdown active">
              <a href="../forum.php">FORUM</a>
              <div class="chevron-container">
                <span class="chevron"></span>
              </div>
              <div class="dropdown">
                <ul class="sub-menu">
                  <a href="../forum.php?ID=1&amp;category=general-forum"><li class="sub-nav">General Forum</li></a>
                  <a href="../forum.php?ID=2&amp;category=academic-concerns"><li class="sub-nav">Academic Concerns</li></a>
                  <a href="../forum.php?ID=3&amp;category=student-community-forum"><li class="sub-nav">Student Community Forum</li></a>
                  <a href="../forum.php?ID=4&amp;category=student-organization"><li class="sub-nav">Student Organization</li></a>
                </ul>
              </div>
            </li>
            <li class="nav-tab">
              <a href="../gallery.php">GALLERY</a>
            </li>
            <li class="nav-tab nav-dropdown">
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
          <div id="profile-nav">
            <div class="sidebar-close">
              <img src="../images/icons/close-white.png" alt="Close Icon">
            </div>
              <a href="../sign-in.php#sign-up" id="signup">Sign Up</a>
              <a href="../sign-in.php#log-in" id="login">Log In</a>
            </div>
        </div>
      </div>
    </header>
    <div id="top"><span></span></div>
		<div id="search-modal" class="modal">
      <div>
        <div id="search-close">
          <img src="../images/icons/close-white.png" alt="Close Icon">
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
              <img src="../images/icons/close.png" alt="Close Icon">
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
						<a href="../server/signout.php" id="sign-out" class="btn btn-red"><i class="fas fa-sign-out-alt"></i>Sign Out</a>
					</div>
				</div>
			</div>
		</div>
		<div id="incomplete-modal" class="modal">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-header">
						<h2></h2>
						<div class="modal-close modal-dismiss">
              <img src="../images/icons/close.png" alt="Close Icon">
						</div>
					</div>
					<div class="modal-alert">
						<div>
							<i class="fas fa-exclamation-circle fa-3x alert-red"></i>
						</div>
						<div>
							<p class="modal-alert-header">Required Fields Incomplete</p>
							<p>Required fields should not be blank.</p>
						</div>
					</div>
					<div class="modal-button-holder modal-alert-button-holder">
            <div></div>
						<div class="btn btn-default modal-dismiss">OK</div>
					</div>
				</div>
			</div>
		</div>
    <div id="main" class="space-above">
      <div id="breadcrumbs-container">
        <div id="breadcrumbs" class="width-limit">
          <span><a href="../index.php">Home</a></span>
          <span class="breadcrumbs-next"></span>
          <span><a href="../forum.php">Forum</a></span>
          <span class="breadcrumbs-next"></span>
          <span>New Thread</span>
        </div>
      </div>
      <div id="main-inner" class="width-limit">
        <div id="new-thread-layout">
          <div id="main-content" class="new-header">
            <h2>Create a thread</h2>
          </div>
          <div id="content-menu" class="new-instruction">
            <div id="search-sidebar">
              <i class="fas fa-search fa-lg"></i>
              <input type="text" id="forum-search" placeholder="Search for a keyword or tag...">
              <div id="search-tooltip">
                Use <span>[tag]</span> to search for tags
              </div>
            </div>
            <div class="content-sidebar">
              <h3>Writing a Thread</h3>
              <p>Before you write a post, <em>search the site</em> to make sure your question hasn't been answered before.</p>
              <hr>
              <h4>Asking a Question</h4>
              <ol>
                <li>Describe your problem but make it concise; include details if necessary.</li>
                <li>Tell us what you have tried and if you have searched for answers but did not solve your problem.</li>
              </ol>
              <hr>
              <h4>Creating a Discussion Forum</h4>
              <ol>
                <li>Always be respectful; behave like you would in real life.</li>
                <li>Be direct to the point.</li>
                <li>Be sure your post addresses a new opinion or thought not yet discussed.</li>
              </ol>
            </div>
          </div>
          <div id="new-content-container">
            <div id="new-content-identity" class="new-content">
              <div>
                <p>Category</p>
                <div id="topic-selected" class="forum-dropdown-selected">
                  <div class="dropdown-selected-content">General Forum</div>
                  <div class="chevron-container">
                    <span class="chevron chevron-green"></span>
                  </div>
                  <div class="forum-selection" style="display: none; opacity: 1; visibility: visible;">
                    <div class="forum-category selected-option" data-cat_id="1">General Forum</div>
                    <div class="forum-category" data-cat_id="2">Academic Concerns</div>
                    <div class="forum-category" data-cat_id="3">Student Community Forum</div>
                    <div class="forum-category" data-cat_id="4">Student Organization</div>
                  </div>
                </div>
              </div>
              <div>
                <p>Type</p>
                <div class="forum-selection-radio">
                  <div class="forum-type forum-option selected-option" data-thread_type="D"><i class="fas fa-comment-alt"></i>Discussion</div>
                  <div class="forum-type forum-option" data-thread_type="Q"><i class="fas fa-question"></i>Question</div>
                </div>
              </div>
            </div>
            <div id = "new-content-body" class = "new-content">
              <label for = "title-thread" class = "required">
              <span>Title</span>
              </label>
              <input type = "text" name = "title-thread" id = "title-thread" value = "<?php if(isset($_GET['ID'])) echo $threadRow['thread_title']; ?>" maxlength = "255"/>
              <div class = "character-limit">
                <span class = "char-count">0</span>
                <span class = "char-limit">/255</span>
              </div>
              <label for = "body-thread" class = "required">
                <span>Body</span>
              </label>
              <div id = "body-thread-container">
                <div id = "body-thread-style">
                  <span class = "ql-formats">
                    <button class = "ql-bold"></button>
                    <button class = "ql-italic"></button>
                    <button class = "ql-underline"></button>
                    <button class = "ql-strike"></button>
                  </span>
                  <span class = "ql-formats">
                    <button class = "ql-link"></button>
                    <button class = "ql-blockquote"></button>
                    <button class = "ql-code-block"></button>
                    <button class = "ql-image"></button>
                  </span>
                  <span class = "ql-formats">
                    <button class = "ql-header" value = "1"></button>
                    <button class = "ql-header" value = "2"></button>
                    <button class = "ql-list" value = "ordered"></button>
                    <button class = "ql-list" value = "bullet"></button>
                  </span>
                </div>
                <div id = "body-thread">
                </div>
                <script>
                  let quill = new Quill('#body-thread', {
                    modules: {
                      toolbar: '#body-thread-style'
                    },
                    placeholder: 'Type post content...',
                    theme: 'snow'
                  });
                </script>
              </div>
              <label for = "tag-thread">
                <i class = "fas fa-tags"></i>Tags
              </label>
              <div id = "tag-container">
                <div id = "new-tag-prompt" class = "tag-option"><i class = "fas fa-plus"></i>Add tag</div>
              </div>
              <div id = "audience-thread">
                <span>Who can reply to this thread:</span>
                <div class = "forum-selection-radio">
                  <div class = "forum-audience forum-option selected-option" data-thread_To = "E"><i class = "fas fa-users"></i>Everyone</div>
                  <div class = "forum-audience forum-option" data-thread_To = "A"><i class = "fas fa-user-lock"></i>Officials/Moderators</div>
                </div>
              </div>
              <div class = "button-container">
                <div id = "post-thread-btn" class = "btn btn-green">Post</div>
              </div>
            </div>
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
                <li><a href="../news/news.php">News</a></li>
                <li><a href="../student.php">Student</a></li>
                <li><a href="../faculty.php">Faculty</a></li>
              </ul>
            </div>
            <div>
              <h4>QUICK LINKS</h4>
              <ul>
                <li><a href="https://www.pup.edu.ph/about/calendar" target="_blank">University Calendar</a></li>
                <li><a href="https://sisstudents.pup.edu.ph/" target="_blank">Student Information System</a></li>
                <li><a href="../forum.php">Forum</a></li>
              </ul>
            </div>
            <div>
              <h4>GET TO KNOW US</h4>
              <ul>
                <li><a href="../about.php">About</a></li>
                <li><a href="../faculty.php">Faculty</a></li>
                <li><a href="../gallery.php">Gallery</a></li>
                <li><a href="../about/contact-us.php">Contact</a></li>
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
                <img src="../images/content/general/univ.png" alt="University">
              </div>
              <div class="foot-logo">
                <img src="../images/content/general/logo.png" alt="College">
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
  </body>
</html>