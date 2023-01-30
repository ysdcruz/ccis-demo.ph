<?php
	if(isset($_GET['ID'])) {
    if(isset($_GET['reply']))
      $linkID = $_GET['reply'];
    else
      $linkID = $_GET['ID'];

    $linkExplode = explode('/', $linkID);
    $ID = $linkExplode[0];
    $post_date = date_format(date_create_from_format("mdy", $linkExplode[1]), 'F d, Y');
    $post_title = $linkExplode[2];

    $link = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    
	} else
		header('location:../forum.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forum – College of Computer and Information Sciences</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/content/general/icon.ico">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.css">
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="../js/jquery-3.6.0.min.js"></script>
		<script src="../js/front.js"></script>
		<script src="../js/back.js"></script>
		<script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
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
    <div id="link-copied">
      <span>Link copied to clipboard.</span>
    </div>
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
		<div id="report-modal" class="modal">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-header">
						<h2>Submit a Report</h2>
						<div class="modal-close modal-dismiss">
              <img src="../images/icons/close.png" alt="Close Icon">
						</div>
					</div>
          <p>Help us understand what's happening with this post. Describe it and we'll see what we can do.</p>
          <div id="report-container">
            <span id="redundant" class="report-reason">Redundant Post</span>
            <span class="report-reason">Harassment</span>
            <span class="report-reason">Threatening violence</span>
            <span class="report-reason">Hate</span>
            <span class="report-reason">Sexualization of minors</span>
            <span class="report-reason">Sharing personal information</span>
            <span class="report-reason">Pornography</span>
            <span class="report-reason">Prohibited transaction</span>
            <span class="report-reason">Self-harm or suicide</span>
            <span class="report-reason">Misinformation</span>
            <span class="report-reason">Spam</span>
          </div>
          <div id="redundant-link-container">
            <i class="fas fa-link"></i>
            <input type="text" name="redundant-link" id="redundant-link" placeholder="Link of similar post">
          </div>
          <div id="report-detail-container">
            <p><span>(Optional)</span> Describe what happened...</p>
            <textarea name="report-detail" id="report-detail" placeholder="Elaborate what is wrong with this post..."></textarea>
          </div>
					<div class="modal-button-holder modal-alert-button-holder">
						<div class="btn btn-default modal-dismiss">Cancel</div>
						<div id="submit-report" class="single-thread-report btn btn-red">Report</div>
					</div>
				</div>
			</div>
		</div>
		<div id="confirm-modal" class="modal">
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
							<i></i>
						</div>
						<div>
							<p class="modal-alert-header"></p>
							<p class="modal-alert-content"></p>
						</div>
					</div>
					<div id="delete-thread-yes-cancel" class="modal-button-holder modal-alert-button-holder">
						<div></div>
						<div>
							<div class="btn btn-default modal-dismiss modal-dismiss-btn">Cancel</div>
							<div id="delete-thread-btn" class="btn btn-green">Yes</div>
						</div>
					</div>
					<div id="delete-reply-yes-cancel" class="modal-button-holder modal-alert-button-holder">
						<div></div>
						<div>
							<div class="btn btn-default modal-dismiss modal-dismiss-btn">Cancel</div>
							<div id="delete-reply-btn" class="btn btn-green">Yes</div>
						</div>
					</div>
					<div id="close-thread-yes-cancel" class="modal-button-holder modal-alert-button-holder">
						<div></div>
						<div>
							<div class="btn btn-default modal-dismiss modal-dismiss-btn">Cancel</div>
							<div id="close-thread-btn" class="btn btn-green">Yes</div>
						</div>
					</div>
					<div id="confirm-yes-cancel" class="modal-button-holder modal-alert-button-holder">
						<div></div>
						<div>
							<div class="btn btn-default modal-dismiss modal-dismiss-btn">Cancel</div>
							<div id="cancel-update" class="btn btn-green confirm-close">Yes</div>
						</div>
					</div>
					<div id="confirm-ok" class="modal-button-holder modal-alert-button-holder">
						<div></div>
						<div>
							<div class="btn btn-green save-close" data-reload="">OK</div>
						</div>
					</div>
					<div id="confirm-ok-fail" class="modal-button-holder modal-alert-button-holder">
						<div></div>
						<div>
							<div class="btn btn-green modal-dismiss modal-dismiss-btn">OK</div>
						</div>
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
          <span><a href="../forum.php?ID=1&amp;category=general-forum">General Forum</a></span>
        </div>
      </div>
        <div id="main-inner" class="width-limit">
          <div id="main-column">
            <div class="main-thread-container">
              <div id="thread-starter" class="main-thread">
                <div class="thread-vote-container">
                  <div class="vote-container">
                    <div id="thread-vote-up" class="vote-up"><i class="fas fa-sort-up"></i></div>
                    <div id="thread-vote-value" class="vote-value">1</div>
                    <div id="thread-vote-down" class="vote-down"><i class="fas fa-sort-down"></i></div>
                  </div>
                </div>
                <div id="main-thread-header">
                  <h3>Welcome to CCIS Discussion Forum!</h3>
                  <p id="main-thread-audience"><i class="fas fa-users"></i>Everyone can reply</p>
                  <p class="main-thread-hr"></p>
                </div>
                <div id="main-thread-type">
                  <i class="far fa-comment-alt"></i>
                </div>
                <div class="main-thread-content">
                  <div class="thread-description">
                    <h1>Welcome to CCIS Discussion Forum!</h1>
                    <p><img src="../images/thread/1/20220117-61e534b5183be0.73842684.jpg"></p>
                    <p>The CCIS Website itself was developed by <strong>Ysabel Dela Cruz</strong> (me), <strong>Ron-Arvil Villar</strong>, and <strong>Gerald Rongcales</strong> as part of requirements for the courses Capstone Project 1 and 2. We integrated this discussion forum to have the proper platform to acknowledge the concerns of CCIS constituents.</p>
                    <p><br></p>
                    <p>Thank you!</p>
                  </div>
                  <div id="main-thread-tag">
                    <div class="tag">Test post</div>
                  </div>
                  <div class="main-thread-author">
                    <a href="../profile.php?ID=1&amp;ydelacruz#/about" class="main-thread-author-img">
                      <img src="../images/user/1/1.jpeg">
                    </a>
                    <a href="../profile.php?ID=1&amp;ydelacruz#/about" class="main-thread-name">Ysabel Dela Cruz</a>
                    <p class="main-thread-details">posted <?php echo $post_date; ?></p>
                  </div>
                  <div class="thread-action">
                    <div>
                      <div class="thread-reply">
                        <i class="fas fa-comment-dots fa-lg"></i><span>Reply</span>
                      </div>
                    </div>
                    <div>
                      <div class="thread-share">
                        <i class="fas fa-share-square fa-lg"></i><span>Share</span>
                      </div>
                      <div class="thread-copy-link" data-url="<?php echo $link; ?>">
                        <i class="fas fa-link fa-lg"></i><span>Copy Link</span>
                      </div>
                    </div>
                    <div>
                      <div class="thread-report modal-toggle" data-target="report-modal">
                        <i class="fas fa-flag fa-lg"></i><span>Report</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="thread-replies" class="main-thread">
                <div class="reply-header">
                  <h3>0 replies</h3>
                  <p class="main-thread-hr"></p>
                </div>
                <div id="thread-no-reply">
                  <p>There are no replies yet to this thread.</p>
                </div>
              </div>
              <div id="write-reply" class="main-thread ">
                <div class="reply-header">
                  <h3 id="input-header">Your reply</h3>
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
                        placeholder: 'Type your reply...',
                        theme: 'snow'
                      });
                    </script>
                  </div>
                  <div id="create-reply" class="button-container">
                    <div id="thread-reply-btn" class="btn btn-green" data-thread_detail="<?php echo '/' . $linkExplode[1] . '/' . $linkExplode[2]; ?>">Reply</div>
                  </div>
                </div>
              </div>
              <div class="main-thread">
                <div id="thread-ender">Not satisfied with the replies? Browse more threads tagged with <div class="tag">Test post</div> or <a href="submit.php">create your own thread</a>.
              </div>
            </div>
          </div>
          <div id="content-menu">
            <div id="search-sidebar">
              <i class="fas fa-search fa-lg"></i>
              <input type="text" id="forum-search" placeholder="Search for a keyword or tag...">
              <div id="search-tooltip">
                Use <span>[tag]</span> to search for tags
              </div>
            </div>
            <div class="content-sidebar">
              <h3>CATEGORIES</h3>
              <ul>
                <li><a href="../forum.php?ID=1&amp;category=general-forum">General Forum</a></li>
                <li><a href="../forum.php?ID=2&amp;category=academic-concerns">Academic Concerns</a></li>
                <li><a href="../forum.php?ID=3&amp;category=student-community-forum">Student Community Forum</a></li>
                <li><a href="../forum.php?ID=4&amp;category=student-organization">Student Organization</a></li>
              </ul>
            </div>
            <div class="content-sidebar">
              <h3>POPULAR TAGS</h3>
              <div class="tag" data-tag_id="7">Test post</div>
              <div class="tag" data-tag_id="6">Feedback</div>
              <div class="tag" data-tag_id="4">Admission</div>
              <div class="tag" data-tag_id="2">Advice</div>
              <div class="tag" data-tag_id="3">Enrollment</div>
              <div class="tag" data-tag_id="1">Programming</div>
              <div class="tag" data-tag_id="5">Web Programming</div>
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