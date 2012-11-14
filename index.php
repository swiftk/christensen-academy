<!DOCTYPE html>
<html>
	<head>
		<title>Christensen Academy</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Cameron Christensen">
		<meta name="keywords" content="computer science, programming, learn, java, javascript, html, css, binary, processing, flash, actionscript, image manipulation, game maker">
		<meta name="description" content="Learn about computers and computer programming for free!">
    <link rel="shortcut icon" href="img/logo16.png">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/colorbox.css" />
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="css/ca.css" rel="stylesheet">
    
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30969336-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/showdown.js"></script>
<script src="js/jquery.blend-min.js"></script>
<script src="js/jquery.colorbox.js"></script>
	</head>
	<body>
	<div class="navbar nav-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Christensen Academy</a>
          <div class="nav-collapse">
            <ul class="nav">
				<li class="dropdown">
					<a href="#"
						  class="dropdown-toggle"
						  data-toggle="dropdown">
						  Learn
						  <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
					  <li><a href="#cs-basics" class="cs-basics-color">Computer Science Basics</a></li>
					  <li><a href="#web" class="web-color">Web Design and Development</a></li>
					  <li><a href="#game-maker" class="game-maker-color">Game Maker</a></li>
					  <li><a href="#processing" class="processing-color">Processing</a></li>
					  <li><a href="#java" class="java-color">Java</a></li>
					  <li><a href="#flash" class="flash-color">Flash</a></li>
					  <li><a href="#brain-teasers" class="brain-teasers-color">Brain Teasers</a></li>
					  <li><a href="#image-manipulation" class="image-manipulation-color">Image Manipulation</a></li>
					  <li><a href="#office" class="office-color">Office Applications</a></li>
					</ul>
				</li>
				<li><a data-toggle="modal" href="#about">About</a></li>
				<li><a data-toggle="modal" href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

	<!--modals-->
	<div class="modal hide fade" id="contact">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		<h3>cameron@christensenacademy.org</h3>
	  </div>
	</div>
	
	<div class="modal hide fade" id="about">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		<h3>About the Christensen Academy</h3>
	  </div>
	  <div class="modal-body">
      <p>
        <a href="http://www.youtube.com/embed/YOA0bDe4DdA">A video explanation</a>
      </p>
      <p>
        Hi, my name is Cameron Christensen, and I'm a high school teacher who has been inspired by Sal Khan and the <a href="http://www.khanacademy.org">Khan Academy</a>. If you'd like to learn about computers and computer programming, the Christensen Academy is for you!
      </p>
      <p>
         You'll notice that all of the videos are free. In addition, the software needed is free as well (except if you want to learn Flash). Simply put, all you need is a computer (Mac, Windows, or Linux), and you can learn everything I have to teach.
      </p>
      <p>
         I started making christensenacademy.org at the beginning of June 2012. You'll notice that I'm still actively creating content. At the moment, my efforts are focused on Web stuff, Adobe Flash, and office applications. I'll be producing videos on a regular basis throughout the remainder of 2012 and hopefully well into the future.
      </p>
      <p>
         My long-term vision for this site goes far beyond what you see on the site currently. If you're interested in reading my evolving thoughts on education and the Christensen Academy, you can follow <a href="http://christensenacademy.blogspot.com/">my blog</a>.
      </p>
      <p>
        If you'd like to learn even more about the Christensen Academy, you can check out my most recent <a href="http://www.youtube.com/embed/YOA0bDe4DdA">video explanation</a>.
      </p>
      <p>
         Kowabunga,<br><br> &ndash; Cam
      </p>
	  </div>
	</div>
	<!--/modals-->
	
  <div class="container-fluid">
      <div class="hero-unit hidden-phone" style="background:none">
        <div class="row-fluid">
          <div class="span2">
            <a href="http://www.youtube.com/embed/YOA0bDe4DdA"><img src="img/logo112.png" style="display:block;margin:0 auto;" alt="The Christensen Academy Logo" title="Learn about the Christensen Academy"></a>
          </div>
          <div class="span10">
            <h1>Hello, World!</h1>
            <p>Welcome to the Christensen Academy, where you can learn about computers and computer programming for free!</p>
          </div>
        </div>
      </div>   
          

<!-- *****************************
      START CS BASICS SECTION
     ***************************** -->
      <div class="row-fluid">
        <div class="hero-unit" id="cs-basics" >
          <h2>Computer Science Basics <small class="hidden-phone">Binary and More...</small></h2>
          
          <div class="row-fluid playlist"  id="cs-basics-hardware-software">
            <div class="span12">
              <h3>
                Computer Basics <small class="hidden-phone">Understanding Hardware, Software, and File Systems</small>
              </h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/S-5Bf9S3lVY?rel=0">Original Purpose of Computers</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/W2cdW0Dycco?rel=0">Binary System Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/-nuSLln-pY8?rel=0">Computer Hardware Basics</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/-3nWC29Uyug?rel=0">Computer Software Basics</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Iow1svZ3QQQ?rel=0">Computer Speed</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/sHm4L9VIJl0?rel=0">Computer File Sizes (Part 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/BchvDqb972Y?rel=0">Computer File Sizes (Part 2)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/j9EKn1rtUCY?rel=0">Computer Directory (Folder) Structure</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/mgWb3aWpAws?rel=0">File Systems (an additional thought)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/3SGs6TizpSI?rel=0">Files and Filenames</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/RPh3y2JJp_A?rel=0">File Types and Extensions</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Basic File Operations</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">The Command Line (Part 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">The Command Line (Part 2)</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row-fluid playlist">
            <div class="span12" id="cs-basics-binary">
              <h3>Binary <small class="hidden-phone"> Numbers, Character Encodings, and More!</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/UFrd2nje2xU?rel=0">Binary Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/L3TYt3hqqO4?rel=0">Binary Numbers Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/m14v6PLiRa4?rel=0">Ambiguity and Writing Binary Numbers</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/q0YUb1OIjP4?rel=0">Binary Numbers and Place Value</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/xaAkGXOWKiU?rel=0">Decimal to Binary Conversions</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/g8GSAESZV48?rel=0">Introduction to Other Number Systems</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/E4CBQAzbMe8?rel=0">Hexadecimal Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/YRVk-83qo_4?rel=0">Hexadecimal-Binary Conversions</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Negative Binary Integers</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Two's Compliment</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Binary Floating Point Numbers (Part 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Binary Floating Point Numbers (Part 2)</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Character Encoding</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Unicode and UTF-8</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Text File Sizes</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Computer Images and Binary</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Standard RGB Color</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Image File Sizes Types</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Digital Sound</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div><!--/row-->
      
<!-- *****************************
      END CS BASICS SECTION
     ***************************** -->
      
<!-- *****************************
      START WEB SECTION
     ***************************** -->
      
      <div class="row-fluid">
        <div class="hero-unit" id="web" >
          <h2>Web Design and Development <small class="hidden-phone">Learn HTML, CSS, JavaScript, and more</small></h2>
          
          <div class="row-fluid playlist">
            <div class="span12" id="web-intro">
              <h3>
                 <a href="https://github.com/christensenacademy/christensen-academy/blob/master/modules/web-design-and-development-intro/reference.md" rel="tooltip" title="Reference Guide" class="reference-guide"></a>
                Introduction <small class="hidden-phone"> to Web Design and Development</small>
              </h3>
            </div>
            <div class="row-fluid videos">
              <div class="span6 challenge-map" style="background-image:url('img/challenge-map_web-design-and-development-intro.png');height:349px;">             

<div style="position:absolute;top:27px;left:23px;">
  <a class="icon-leaf intro challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/web-design-and-development-intro/intro.md" rel="tooltip" title="Intro"></a></div>

<div style="position:absolute;top:69px;left:108px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/web-design-and-development-intro/challenges/internet-vs-www-challenge.md" rel="tooltip" title="Internet vs. WWW Challenge"></a></div>

<div style="position:absolute;top:130px;left:110px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/web-design-and-development-intro/challenges/http-request-response-challenge.md" rel="tooltip" title="HTTP Request-Response Challenge"></a></div>

<div style="position:absolute;top:180px;left:96px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/web-design-and-development-intro/challenges/web-standards-challenge.md" rel="tooltip" title="Web Standards Challenge"></a></div>

<div style="position:absolute;top:277px;left:104px;">
  <a class="big-project challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/web-design-and-development-intro/projects/ftp-project.md" rel="tooltip" title="FTP Project"></a></div>
              </div>
              <div class="span6">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/EbccXUin5Kw?rel=0">Internet vs. WWW: A Brief History</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/DbT6-GMWMmc?rel=0">Internet vs. WWW: Protocols</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/GZewdrk_gK8?rel=0">HTTP: Servers and Clients</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTTP: Domain Names and URLs</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML, CSS, JavaScript, and Other Resources</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">"Bandwidth"</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Download vs. Upload</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">The Browser Wars</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Web Standards and W3C</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Hosting</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Web Design vs. Web Development</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">FTP</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Wordpress and Friends</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="html-basics">
              <h3>
                <a href="https://github.com/christensenacademy/christensen-academy/blob/master/modules/html-basics/reference.md" rel="tooltip" title="Reference Guide" class="reference-guide"></a>
                HTML Basics <small class="hidden-phone">Learn How to Create Basic Websites</small>
              </h3>
            </div>
            <div class="row-fluid videos">
              <div class="span6 challenge-map" style="background-image:url('img/challenge-map_html-basics.png');height:476px;">             

<div style="position:absolute;top:18px;left:220px;">
  <a class="icon-leaf intro challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/html-basics/intro.md" rel="tooltip" title="Intro"></a></div>

<div style="position:absolute;top:65px;left:195px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/html-basics/challenges/text-editor-challenge.md" rel="tooltip" title="Text Editor Challenge"></a></div>

<div style="position:absolute;top:14px;left:71px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/html-basics/challenges/keyboard-shortcut-challenge.md" rel="tooltip" title="Keyboard Shortcut Challenge"></a></div>

<div style="position:absolute;top:88px;left:78px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/html-basics/challenges/basic-webpage-challenge.md" rel="tooltip" title="Basic Webpage Challenge"></a></div>

<div style="position:absolute;top:84px;left:22px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/html-basics/challenges/list-challenge.md" rel="tooltip" title="List Challenge"></a></div>

<div style="position:absolute;top:166px;left:108px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/html-basics/challenges/self-assessment.md" rel="tooltip" title="Self Assessment"></a></div>

<div style="position:absolute;top:241px;left:176px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/html-basics/challenges/absolute-path-challenge.md" rel="tooltip" title="Absolute Path Challenge"></a></div>

<div style="position:absolute;top:222px;left:109px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/html-basics/challenges/zip-challenge.md" rel="tooltip" title="Zip Challenge"></a></div>

<div style="position:absolute;top:272px;left:39px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/html-basics/challenges/meta-challenge.md" rel="tooltip" title="Meta Challenge"></a></div>

<div style="position:absolute;top:284px;left:291px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/html-basics/challenges/html-entities-challenge.md" rel="tooltip" title="HTML Entities Challenge"></a></div>

<div style="position:absolute;top:292px;left:152px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/html-basics/challenges/relative-path-challenge.md" rel="tooltip" title="Relative Path Challenge"></a></div>

<div style="position:absolute;top:360px;left:208px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/html-basics/challenges/validation-challenge.md" rel="tooltip" title="Validation Challenge"></a></div>
  
<div style="position:absolute;top:420px;left:125px;">
  <a class="big-project challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/html-basics/projects/website-project.md" rel="tooltip" title="Website Project"></a></div>
              </div>
              <div class="span6">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/GKyGPRgpa5g?rel=0">HTML, CSS, and JavaScript Overview</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/GoL1ZW3Lk38?rel=0">Text Editor for Web Development</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/dVOC77VvlIE?rel=0">HTML Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/5k0nTTwG1ys?rel=0">HTML Indentation</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/T9Mu-ViFdX8?rel=0">HTML Comments</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/9Ce85vnzAgM?rel=0">HTML Basic Structure</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/dIYKATMBwIc?rel=0">HTML Basic Elements</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/XrqC7giRuNg?rel=0">HTML Block vs. Inline (introductory explanation)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/LOdepOlsVX0?rel=0">HTML Lists (ordered and unordered)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/RwSNaS9XiYs?rel=0">HTML Nested (Hierarchical) Lists</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/z3STv2PZQ4w?rel=0">Keyboard Shortcuts</a></li>
<!-- The following videos need to be redone. The language I used to describe paths was very poor. Students got confused by what I meant when I said "link" -->
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/y05_twXvacU?rel=0">HTML Attributes Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/r38j0rnQ17Q?rel=0">HTML Relative Links</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/87B0pFlc7Xc?rel=0">Working with Zip Files</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/qItZlfOmG3o?rel=0">HTML Absolute Links</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">URLs and Absolute Links</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/sQ5-v9MmPI0?rel=0">HTML Links to Other Resources</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/KU4V-bCN4Ag?rel=0">HTML Email Link</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ilRD2T9qiAU?rel=0">HTML Void (Empty) Elements: br, hr, and img</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Xa3m4xP4QTk?rel=0">HTML Image (img) Tag</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/twCSSSsF3PM?rel=0">HTML Accessibility Intro (alt and longdesc)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/reZC1VpnotE?rel=0">HTML Title Attribute (making tool tips)</a></li>
<!-- REDO with talk of SEO, better description of description, and no wrong info about UTF-8 -->
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/POwgA7u3h4E?rel=0">HTML Meta Tag</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/QVP9FQi7tiA?rel=0">HTML Validation Service</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/oRQTw_J1dgA?rel=0">HTML Validation Service (Part 2)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/1wpus8NNl5g?rel=0">HTML Reserved and Special Characters</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/OJUyMP5QaKM?rel=0">HTML Review (Chipmunk Voice)</a></li>
                </ul>
              </div>
            </div>
          </div>
              
          <div class="row-fluid playlist">
            <div class="span12" id="css-basics">
              <h3>
                <a href="https://github.com/christensenacademy/christensen-academy/blob/master/modules/css-basics/reference.md"  rel="tooltip" title="Reference Guide" class="reference-guide"></a>
              
                CSS Basics <small class="hidden-phone">Learn How to Add Visual Styling to Your Webpages</small>
              </h3>
            </div>
<div class="row-fluid videos">
              <div class="span6 challenge-map" style="background-image:url('img/challenge-map_css-basics.png');height:383px;">             

<div style="position:absolute;top:21px;left:132px;">
  <a class="icon-leaf intro challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-basics/intro.md" rel="tooltip" title="Intro"></a></div>
  
<div style="position:absolute;top:72px;left:115px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-basics/challenges/three-types-of-css-challenge.md" rel="tooltip" title="Three Types of CSS Challenge"></a></div>  
  
<div style="position:absolute;top:138px;left:128px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-basics/challenges/css-validation-challenge.md" rel="tooltip" title="CSS Validation Challenge"></a></div>
  
<div style="position:absolute;top: 189px;left:48px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-basics/challenges/color-challenge.md" rel="tooltip" title="Color Challenge"></a></div>

<div style="position:absolute;top: 198px;left:87px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-basics/challenges/selectors-challenge.md" rel="tooltip" title="Selectors Challenge"></a></div>
  
<div style="position:absolute;top:220px;left:160px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-basics/challenges/pixel-percent-em-challenge.md" rel="tooltip" title="Pixel-Percent-EM Challenge"></a></div>
  
<div style="position:absolute;top:272px;left:105px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-basics/challenges/text-challenge.md" rel="tooltip" title="Text Challenge"></a></div>
  
<div style="position:absolute;top:274px;left:165px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-basics/challenges/font-challenge.md" rel="tooltip" title="Font Challenge"></a></div>

<div style="position:absolute;top:341px;left:128px;">
  <a class="big-project challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-basics/projects/site-remodelling-project.md" rel="tooltip" title="Site Remodelling Project"></a></div>
              </div>
              <div class="span6">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/q6aHmSzzt7Y?rel=0">CSS (Cascading Style Sheets) Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/D47UsLHs7Rw?rel=0">An Intuitive Feel for CSS</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/tqhhpwO67Pc?rel=0">3 Types of CSS (Inline CSS)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/l0QXi4ryvDc?rel=0">3 Types of CSS (Internal / Embedded)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/PGH01VxYhv8?rel=0">3 Types of CSS (External)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/SPp_hKEpMeQ?rel=0">Internal and External CSS Equivalency</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/eIkDr8r2gRw?rel=0">CSS Comments</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/d_v322FfpXM?rel=0">CSS Inheritance</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Rsnq8H3UiBw?rel=0">Google Chrome and CSS Inheritance</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/9L91PUMoyAg?rel=0">CSS Validator</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/JlXAYLo2ohA?rel=0">CSS Colors (RGB)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ZUAM-IMdwE4?rel=0">CSS Colors (Hexadecimal)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.?rel=0">Eyedroppers and Color Pickers</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/VN3Z6VM4Fr8?rel=0">HTML and CSS: Classes and IDs</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/EVJzZaDq0oM?rel=0">CSS: The Cascade</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/6p29D0tetDQ?rel=0">Google Chrome and the Cascade</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/FhYgNI_0DiI?rel=0">HTML Multiple Classes</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">More CSS Selectors</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/7GuBcFWlGVc?rel=0">CSS Size Units (em, %, px, and pt)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/nBgpS74f5Z4?rel=0">CSS Text Properties</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/5Zt2KbxBqA4?rel=0">CSS Basic Font Properties</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Zjk0hK6jNvk?rel=0">CSS Fonts (font-family property)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Basics Review</a></li>
                </ul>
              </div>
            </div>
          </div>
          
           <div class="row-fluid playlist">
            <div class="span12" id="css-layouts">
              <h3>
                <a href="https://github.com/christensenacademy/christensen-academy/blob/master/modules/css-layouts/reference.md"  rel="tooltip" title="Reference Guide" class="reference-guide"></a>
              
                CSS Layouts <small class="hidden-phone">Learn How to Create Page Layouts in CSS</small>
              </h3>
            </div>
            <div class="row-fluid videos">
              <div class="span6 challenge-map" style="background-image:url('img/challenge-map_css-layouts.png');height:441px;">             

<div style="position:absolute;top:5px;left:75px;">
  <a class="icon-leaf intro challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-layouts/intro.md" rel="tooltip" title="Intro"></a></div>

<div style="position:absolute;top:75px;left:45px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-layouts/challenges/box-model-basics-challenge.md" rel="tooltip" title="Box Model Basics Challenge"></a></div>

<div style="position:absolute;top:52px;left:155px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-layouts/challenges/parents-challenge.md" rel="tooltip" title="Parents (Boxes in Boxes) Challenge"></a></div>

<div style="position:absolute;top:115px;left:162px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-layouts/challenges/self-assessment.md" rel="tooltip" title="Self Assessment"></a></div>

<div style="position:absolute;top:170px;left:45px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-layouts/challenges/basic-layout-challenge-1.md" rel="tooltip" title="Basic Layout Challenge 1"></a></div>
  
<div style="position:absolute;top:171px;left:81px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-layouts/challenges/basic-layout-challenge-2.md" rel="tooltip" title="Basic Layout Challenge 2"></a></div>
  
<div style="position:absolute;top:166px;left:198px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-layouts/challenges/basic-layout-challenge-3.md" rel="tooltip" title="Basic Layout Challenge 3"></a></div>
  
<div style="position:absolute;top:117px;left:228px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-layouts/challenges/background-image-challenge.md" rel="tooltip" title="Background Image Challenge"></a></div>
    
<div style="position:absolute;top:232px;left:91px;">
  <a class="small-project challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-layouts/projects/basic-layout-project.md" rel="tooltip" title="Basic Layout Project"></a></div>
      
<div style="position:absolute;top:298px;left:25px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-layouts/challenges/absolute-positioning-challenge.md" rel="tooltip" title="Absolute Positioning Challenge"></a></div>
        
<div style="position:absolute;top:298px;left:61px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-layouts/challenges/absolute-positioning-layout-challenge.md" rel="tooltip" title="Absolute Positioning Layout Challenge"></a></div>        

<div style="position:absolute;top:298px;left:129px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-layouts/challenges/float-text-wrapping-challenge.md" rel="tooltip" title="Float: Text Wrapping Challenge"></a></div>
  
<div style="position:absolute;top:298px;left:168px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-layouts/challenges/float-menu-challenge.md" rel="tooltip" title="Float: Menu Challenge"></a></div>

<div style="position:absolute;top:295px;left:200px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-layouts/challenges/float-layout-challenge.md" rel="tooltip" title="Float: Layout Challenge"></a></div>
  
<div style="position:absolute;top:323px;left:292px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-layouts/challenges/float-faux-columns-challenge.md" rel="tooltip" title="Float: Faux Columns Challenge"></a></div>
    
<div style="position:absolute;top:362px;left:178px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-layouts/challenges/full-page-layout-challenge.md" rel="tooltip" title="Full Page Layout Challenge"></a></div>
      
<div style="position:absolute;top:388px;left:178px;">
  <a class="challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-layouts/challenges/zen-garden-challenge.md" rel="tooltip" title="Zen Garden Challenge"></a></div>
  
<div style="position:absolute;top:396px;left:290px;">
  <a class="big-project challenge" data-toggle="modal" href="#challenge-popup" data-link="./modules/css-layouts/projects/complex-layout-project.md" rel="tooltip" title="Complex Layout Project"></a></div>
              </div>
              
              <div class="span6">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ctneMmLjqRE?rel=0">Span (inline) vs Div (block) Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/XQTfdsKFY-w?rel=0">Span vs. Div Example</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/69dakFTlK7Q?rel=0">Box Model Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/HkutufcDyCU?rel=0">Chrome Developer Tools Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Qs_8vUzD7qQ?rel=0">Width and Height</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/yQxn9kW7REE?rel=0">Margins</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/-fVkpWtVm9U?rel=0">Margins (Centering Elements)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/QKCLjHBrG6o?rel=0">Collapsing Margins</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/CdgA2bOZbt4?rel=0">Padding</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/smzwIEwAEEc?rel=0">Borders</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/OJiWobKJ12I?rel=0">Background Images</a></li>
<!-- Background Image Position Video Needed -->
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/nnjjTS3RtDA?rel=0">Background Image Gradient</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/v6bGsJvaWUw?rel=0">Normal Flow</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/pgy58w1N1_I?rel=0">Relative Positioning</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/gM-XYH5uGuw?rel=0">Absolute Positioning</a></li>
<!-- Redo Stretch Effect: Focus needs to be on layouts -->
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/7Flnyl2fabY?rel=0">Absolute Positioning "Stretch" Effect</a></li>
<!-- Redo Stretch Effect Challenge: focus needs to be on creating a column in a layout -->
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Mwdb3Vx6FmU?rel=0">Float Property</a></li>
<!-- Add in a float challenge for making a column -->
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/C1bd0luue6s?rel=0">Clear</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/AoI1uWL1w-c?rel=0">Floating Menu Items</a></li>
<!-- Add in another page layout challenge -->
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">ZG Case Study (Part 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">ZG Case Study (Part 2)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">ZG Case Study (Part 3)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Layouts Review</a></li>
                </ul>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="javascript-basics">
              <h3>
                JavaScript Basics <small class="hidden-phone">with jQuery</small>
              </h3>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="html-in-depth">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">HTML <small class="hidden-phone">in Depth</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">XHTML vs. HTML</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Why "A" is for Anchor</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Make One or More Elements into a Link</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Quirks Mode</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML5 Boilerplate</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML Structural Elements</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML Tables</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Deprecated HTML Attributes</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">The lang (Language) Attribute</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML Forms</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML Forms</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML Forms</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HTML Forms</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="css-in-depth">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">CSS <small class="hidden-phone">in Depth</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/5t_4_UMo4JY?rel=0">Pre Element and white-space</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/C1-gW70Wszc?rel=0">CSS Nested Selectors</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Grouped Selectors</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Universal Selector</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Advanced CSS Selectors</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Pseudo Classes</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Pseudo Classes</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Pseudo Classes</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Pseudo Elements</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Shorthand Propreties</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Shorthand Propreties</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Shorthand Propreties</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS Shorthand Propreties</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/AiOgwMmAkiQ?rel=0">CSS rgba (transparent colors)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/rQbs-QaFtbk?rel=0">CSS @import</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS for Tables (Part 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">CSS for Tables (Part 2)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Link Tag Media Attribute for CSS</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Styling Forms (Part 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Styling Forms (Part 2)</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="javascript-in-depth">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">JavaScript <small class="hidden-phone">in Depth</small></h3>
            </div>
            <div class="row-fluid videos">
              
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="web-related">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">Related Topics</h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Browser Plugins</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/6sch0T2PUS4?rel=0">Browser Cache Explanation</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Flash</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Information Architecture</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Information Architecture Challenge: School Website</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Navigation</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Usability</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Accessibility</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Typography (Part 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Typography (Part 2)</a></li>
                </ul>
              </div>
            </div>
          </div> 
          
          <div class="row-fluid playlist">
            <div class="span12" id="web-server">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">Server Side Programming <small class="hidden-phone">an Introduction...</small></h3>
            </div>
            <div class="row-fluid videos">
              
            </div>
          </div>
          
        </div>
      </div><!--/row-->
      
<!-- *****************************
      END WEB SECTION
     ***************************** -->
      




<!-- *****************************
      GAME MAKER
     ***************************** -->
      
      <div class="row-fluid">
        <div class="hero-unit" id="game-maker" >
          <h2>Game Maker <small class="hidden-phone">Learn how to make computer games!</small></h2>

          <div class="row-fluid playlist">
            <div class="span12" id="game-maker-intro">
              <h3>Intro to Game Maker</h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/tOasHfeLIGc?rel=0">Game Maker Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/KA3WEs0aZJ0?rel=0">Game Maker Versions</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/9lu_t4odW2M?rel=0">Why Learn Game Maker?</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/NFFFjP9EQFw?rel=0">Why Learn through Projects?</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/19ixFAFsmZc?rel=0">A Successful Attitude</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="game-maker-p1">
              <h3>Project: On the Loose! <small class="hidden-phone">Create Your First Game!</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="">Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/gXJuQ0MN_gw?rel=0">Create, Save, and Play</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/zf4LE4ImH0g?rel=0>Resources (Images and Sounds)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ho_l7QDl3jk?rel=0">Sprites</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/r3TGBebLSU0?rel=0">Objects, Rooms, and Instances</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/DhdB9pvBmVg?rel=0">Events and Actions (Part 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/OJ4QyCI7zL4?rel=0">Events and Actions (Part 2)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Ah6ae2sBC0s?rel=0">Music and Sounds</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/NLB_0sRW2Bc?rel=0">Alarms</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/uzNxavrvefQ?rel=0">Increasing the Difficulty</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/t1Wn7TQTX94?rel=0">Relative Speeds</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/z-ei8xibAxY?rel=0">Game Info</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/dR1YdUNHe4U?rel=0">Rubric Discussion</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="game-maker-p2">
              <h3>Project: Projectile Comet <small class="hidden-phone">A Game of Intergalactic Wizardry!</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="">Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/tOqGYO6nuQ0?rel=0">Sprites</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/VPRjRuACJjI?rel=0">Coordinates and Wizard Movement</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/127tmb9qwX4?rel=0">Set Wizard Boundaries</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/EW2RaIfyk04?rel=0">Shoot Comets</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/EW2RaIfyk04?rel=0">Bad Guys</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/UK-NwGetJGE?rel=0">Comets Hit Bad Guys</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/9jnT4_tszdE?rel=0">Moving Background</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/41Xi8j-TAQQ?rel=0">Score and Health</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/f4k_qth1sFk?rel=0">Enhancement Ideas</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="game-maker-p3">
              <h3>Project: Global Thermonuclear Pong <small class="hidden-phone">Why Not....</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/6U6zMyJgRvo?rel=0">Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/q4uTJIESNXg?rel=0">Variables</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/MJEbu1NNbt4?rel=0">Sprites</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/yl4xiCifmxE?rel=0">Left Paddle Movement</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/1b_XwfoD3tQ?rel=0">Left Paddle (Part 2)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/GQhbN5mblUo?rel=0">Right Paddle</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/PzR1C8qR2o0?rel=0">Ball Direction and Speed</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Lp8Lf5HFg6Q?rel=0">Ball Bounce</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/a2THVUyZS8k?rel=0">Smart Bounce (Left Paddle)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/MrK2XbTovz8?rel=0">Smart Bounce (Right Paddle)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/SiN9FBR2qag?rel=0">Score Variables</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/7rnUMPNRFjY?rel=0">Drawing the Score (Part 1)</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/DiZCaNYmlwM?rel=0">Drawing the Score (Part 2)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/h5muYUKlwOk?rel=0">Explosoin Animation</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/wa3i5AB0MRQ?rel=0">Animation Strips with the GIMP</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/38NZoaKCeCk?rel=0">Animation Sprites from Sprite Sheets</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/b_UByqcP-eA?rel=0">Escalating Difficulty</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/DJTV4LBkOH4?rel=0">Wrapping Things Up</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="game-maker-p4">
              <h3>Project: Four <small class="hidden-phone">Great Name. Great Game.</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/DPpHEgtZ82k?rel=0">Background Tile Set (Part 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/z1xyrDn3dUI?rel=0">Background Tile Set (Part 2)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/LzqltQ3vEtg?rel=0">Walking Sprite</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Yxg8Z9PoKfw?rel=0">Animated Sprites from Tile Sets</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/T2udr1XO1Bg?rel=0">Game Maker: Finding Animated Sprites</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/SAZUg6Eoogs?rel=0">Grid Movement</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/HaYv0Xzzz2g?rel=0">Inheritance Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/alEfhT7bPec?rel=0">Inheritance for Collisions</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/LqMDg7O5HLo?rel=0">Sprite Speed</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/628EtUSeUuw?rel=0">Change Instance</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/CYIfwN1AXFM?rel=0">Toggle Sprite Subimages</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/tL0Xrzho8cQ?rel=0">Rooms and Persistence</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div><!--/row-->
      
<!-- *****************************
      GAME MAKER
     ***************************** -->      
     



<!-- *****************************
      PROCESSING
     ***************************** -->
      
      <div class="row-fluid">
        <div class="hero-unit" id="processing" >
          <h2>Processing <small class="hidden-phone">Learn how to program using the Processing language!</small></h2>
 
          <div class="row-fluid playlist">
            <div class="span12" id="processing-intro">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">Intro to Processing <small class="hidden-phone"> Why Processing is a Great Intro to Computer Programming</small></h3>
            </div>
            <div class="row-fluid videos">
              
            </div>
          </div>
          
<?php echo file_get_contents('./modules/khan-cs/module.html', true); ?>
          
          <div class="row-fluid playlist">
            <div class="span12" id="processing-intermediate">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">Processing Intermediate <small class="hidden-phone">A Step Beyond the Basics</small></h3>
            </div>
            <div class="row-fluid videos">
              
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="processing-advanced">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">Processing Advanced <small class="hidden-phone">Digging Deeper Into Advanced Features</small></h3>
            </div>
            <div class="row-fluid videos">
              
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="processing-expert">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">Processing Expert <small class="hidden-phone">Go Big or Go Home...</small></h3>
            </div>
            <div class="row-fluid videos">
              
            </div>
          </div>
        </div>
      </div><!--/row-->
      
<!-- *****************************
      PROCESSING
     ***************************** -->        

<!-- *****************************
      JAVA
     ***************************** -->
      
      <div class="row-fluid">
        <div class="hero-unit" id="java" >
          <h2>JAVA <small class="hidden-phone">Learn how to program in Java!</small></h2>
          
          <div class="row-fluid playlist">
            <div class="span12" id="java-intro">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">Intro to Java <small class="hidden-phone"></small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/D73umIWtdk4">Hello World</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="java-basics">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">The Basics <small class="hidden-phone">Data Types, Variables, and Control Structures</small></h3>
            </div>
            <div class="row-fluid videos">
              
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="java-classes-and-objects">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">Classes and Objects <small class="hidden-phone">Understanding Java's Object-Oriented Programming Model</small></h3>
            </div>
            <div class="row-fluid videos">
              
            </div>
          </div>
          
          
          <div class="row-fluid playlist">
            <div class="span12" id="java-programming-competitions">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">Programming Competitions <small class="hidden-phone">A Jumpstart for Beginners</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Intro to Programming Competitions</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Using Java for Programming Competitions</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Basic Template and Strategy that Works for Most Problems</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Intro to Variables</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Strings and Scanners</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Primitive Types</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Doing Math</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">If Statements</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Loops</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">For Loops</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Nested Loops</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Arrays</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Classes</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">ArrayList</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">HashMap</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div><!--/row-->
      
<!-- *****************************
      JAVA
     ***************************** -->   

<!-- *****************************
      FLASH
     ***************************** -->
      
      <div class="row-fluid">
        <div class="hero-unit" id="flash" >
          <h2>Adobe Flash <small class="hidden-phone">and ActionScript 3</small></h2>
    
          <div class="row-fluid playlist">
            <div class="span12" id="flash-intro">
              <h3>Intro to Flash and ActionScript 3 <small class="hidden-phone">An Overview of What You Can Make in Flash and What is Involved in the Process</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/EdauXIWYOQ4?rel=0">Intro to Flash and ActionScript</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/cfEch0V5dvw?rel=0">Don't Worry about the Version</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/w5Qp7nHyYGY?rel=0">.fla vs .swf</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/sDFjfEqnySM?rel=0">Workspace: Reset Essentials</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/sU3-Ur8s910?rel=0">Workspace: Stage and Tools Panel</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/bEPHpfsi4dY?rel=0">Zoom</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/PaCKvUtwGTQ?rel=0">Workspace: Timeline and Animation</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/jkscZYqAUWY?rel=0">Workspace: Library and Properties Panels</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/KPKAXHlChAM?rel=0">Workspace: Actions Panel</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.?rel=0">Flash Workspace: Recap with Game Examples</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="flash-drawing">
              <h3>
                <a href="https://github.com/christensenacademy/christensen-academy/blob/master/modules/drawing-in-flash/reference.md"  rel="tooltip" title="Reference Guide" class="reference-guide"></a>
                Drawing in Flash<small class="hidden-phone"> Using Flash as a Drawing Tool to Create Vector Graphics</small>
              </h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/JqyyhDKqfrk?rel=0">Intro to Drawing Playlist</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/PBR5QpDvm-o?rel=0">Stroke and Fill</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/VGI1YYa_d8A?rel=0">Ink Bottle and Paint Bucket</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/BbCZcPeDrl8?rel=0">Primitive Shapes vs. Objects Drawings</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/cLxPEVbTNFQ?rel=0">Ordering Objects on the Stage (Arrange)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/_wGWhbQnV2k?rel=0">Colors Basics</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/RZ9nTquwmXo?rel=0">Alpha (Transparency and Opacity)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/7-VP3A8Htqw?rel=0">Eyedropper Tool</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/6MqxZBJRLik?rel=0">Line, Pencil, and Paintbrush Tools</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/YRf3LDKf7zQ?rel=0">Vector vs Bitmap (Raster)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/K6g8YAumxnU?rel=0">Subselection Tool (Anchor Points)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ptG9DBSSFf0?rel=0">More on Anchor Points</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/1wSg0Ork5XI?rel=0">Paint Bucket Tool (Gap Options)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/CZbM9_hypqg?rel=0">Controlling Curves (Anchor Points and Handlebars)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Cbh7pUGEXuU?rel=0">Controlling Curves (Types of Anchor Points)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/hnRW6_XCdGI?rel=0">Pen Tool Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/fyixUWnK8Q0?rel=0">Layers Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Paste in Place</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/WMlukBMuouE?rel=0">Transform Tool</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/jHF1SQgxahQ?rel=0">Yin Yang Drawing Challenge</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/BH1i0mNWCSI?rel=0">Drawing a class="youtube" hand (Example)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/BoVxZjuiF_E?rel=0">Drawing a Car (Example)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/YRNv8hXEh-M?rel=0">Drawing a T-Shirt Design (Example)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/GEGJLV0n2pg?rel=0">Intro to the Rest of the Drawing Playlist</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/IRXCVialMsw?rel=0">Symbols and Instances</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/V9pLXuVQum0?rel=0">Copy Symbols Between Projects</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/hNSEfcsxIgA?rel=0">Editing Symbols</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/jSgzLy54yiU?rel=0">Editing Instances</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/2WKb1gH5qJU?rel=0">Symbols Inside of Symbols</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/iRaxebpt9R0?rel=0">Flash Coordinate System</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/FTRozSAJ8pg?rel=0">Registration Points</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/fICj7OX56gM?rel=0">Transformation Points</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/KdOvIjK3wy4?rel=0">Rulers, Grids, and Alignment</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/8OdAX4UfBRM?rel=0">Gradients</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Colors Panel in Depth</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/2lPFE4W3E-Q?rel=0">Text Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/czGCxGP2c3Y?rel=0">Fruit Basket Scene (Example)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/g-Pbdvdc0Vg?rel=0">Monster Example (Example)</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="flash-animation">
              <h3>
                <a href="https://github.com/christensenacademy/christensen-academy/blob/master/modules/animating-in-flash/reference.md"  rel="tooltip" title="Reference Guide" class="reference-guide"></a>
                Animating in Flash <small class="hidden-phone">Using Flash to Make Animated "Movies" with Some Interactive Parts</small>
              </h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Intro to Playlist</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Examples of Animations Online</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/4IJtl99pT7I?rel=0">Timeline (Layers and Frames)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ALom2HMiDbs?rel=0">Intro to Reading the Timeline</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/u-BTUgiGkOk?rel=0">Frame-by-Frame Animation</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/jS3lRTL5Mk8?rel=0">Frame-by-Frame Animation (Eye Example)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/v0R9RBkewqQ?rel=0">Christensen Academy-Style (Example)</a></li>
<li><i class="icon-leaf"></i> <a class="youtube" href="http://bit.ly/OM5RXq">Frame-by-Frame Animation Challenge</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Graphic Symbols vs. Movie Clip Symbols</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/olRhUq2ZkkQ?rel=0">Animation in Movie Clip Symbol (Example 1)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/5VPc3imRNCQ?rel=0">Animations in Movie Clips (Example 2)</a></li>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/waMFV2GLy0k?rel=0">Motion Tweens Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/NP5LMNTAuJ4?rel=0">Types of Keyframes Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/st4UXzXmGSc?rel=0">Controlling Tween Paths </a></li>
<li><i class="icon-leaf"></i> <a class="youtube" href="http://bit.ly/RnTHR3">Butterfly Animation Challenge</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/YGt9ZSWznfw?rel=0">Pan and Zoom Effects</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ptMVy_a4Qcc?rel=0">Bone Tool on Primitives</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/zxiy4LAtxe0?rel=0">Bone Tool on Instances</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/HDgmn2Flx0w?rel=0">More on the Bone Tool</a></li>
<li><i class="icon-leaf"></i> <a class="youtube" href="https://github.com/christensenacademy/christensen-academy/blob/master/modules/animating-in-flash/challenges/bone-tool-animation-challenge.md">Bone Tool Animation Challenge</a></li>
<!-- Get rid of this project. It is unecessary. -->
<li><i class="icon-leaf"></i> <a href="http://bit.ly/VMYjE0">Single Scene Animation Project</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<!-- Make new sound video with the recommendation that audio editing skills be exercised instead of telling sounds to stop -->
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/j7X42K0fGfw?rel=0">Inserting a Sound</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/5splLSEcbac?rel=0">Inserting Music</a></li>
<!-- Get rid of this video. Scenes are a distraction. -->
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Shape Tweens</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Complex Timelines</a></li>
<!-- Alter this challenge to use my example project animation. Give clear specific instructions for what the playback controls should do. -->
<li><i class="icon-leaf"></i> <a class="youtube" href="http://bit.ly/VAJgi8">Multi-Scene Animation Project</a></li>
                </ul>
                </ul>
              </div>
            </div>
          </div>
          
<?php echo file_get_contents('./modules/beginning-actionscript/module.html', true); ?>

          
          <div class="row-fluid playlist">
            <div class="span12" id="flash-as3-intermediate">
              <h3 class="future-playlist" rel="tooltip" title="Playlist not yet made.">Intermediate ActionScript <small class="hidden-phone">Using Classes and More...</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-leaf"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Intro to Playlist</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
                </ul>
              </div>
            </div>
          </div>
          
        </div>
      </div><!--/row-->
      
<!-- *****************************
      FLASH
     ***************************** -->   
     
     
<!-- *****************************
      Brain Teasers
     ***************************** -->
      
      <div class="row-fluid">
        <div class="hero-unit" id="brain-teasers" >
          <h2>Brain Teasers <small class="hidden-phone"> Open Your Mind</small></h2>
          
          <div class="row-fluid playlist">
          
            <div class="span12" id="brain-teasers-intro">
              <h3>
                <a href="https://github.com/christensenacademy/christensen-academy/blob/master/modules/brain-teasers/brain-teaser-reference.md"  rel="tooltip" title="Reference Guide" class="reference-guide"></a>
                Brain Teasers<small class="hidden-phone"> I might eventually separate these by difficulty...</small>
              </h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/xihDL-uPYe8?rel=0">E.T.T.B</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/FigvXEE2g8w?rel=0">Robot Hats</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/npxGA8rSWqg?rel=0">Robo Grid</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/m2PmTw8hnwo?rel=0">Antidote</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/YnlbJR_mMs0?rel=0">Beeping Bot</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/SU9WMkIUvH8?rel=0">Symbol Square</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/d3yzjQvqClY?rel=0">Symbol Square (Solution)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/TPlFVwQpQRk?rel=0">Robo Progeny</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/eBVJ5wb3vWU?rel=0">Robo Break Dance</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/CKcxr1jQBeE?rel=0">Chopsticks</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/UoGKPmLjynU?rel=0">Axels</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/HSYOB04vLqw?rel=0">Spaceship</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/W3emxjmcNnk?rel=0">Pink Turtles</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/SzUI7njSmdw?rel=0">Boating for President</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div><!--/row-->
      
<!-- *****************************
      Brain Teasers
     ***************************** -->   


<!-- *****************************
      IMAGE MANIPULATION
     ***************************** -->
      
      <div class="row-fluid">
        <div class="hero-unit" id="image-manipulation" >
          <h2>Image Manipulation <small class="hidden-phone">Learn About Digital Images and How to Manipulate Them with the GIMP!</small></h2>

          <div class="row-fluid playlist">
            <div class="span12" id="image-manipulation-intro">
              <h3>Image Manipulation Intro <small class="hidden-phone"> The Basics of Working with Digital Images</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/SJkQ9FbzbnI">Pixels</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/KPzTZPSM_II">Image Resolution</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/CIToOlO6SKc">RGB Color</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/FxyR47wJvZQ">Image Types</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Downloading Images from Online</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Copyright and Creative Commons</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Fxzs6uTlgak">Screenshots</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ZePmBnM6c8s">GIMP vs. Photoshop</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Drawing Tablets</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="color-theory">
              <h3>Color Theory <small class="hidden-phone">What You Should Know about Colors</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Color Wheel and Primary Colors</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Subtractive Color Mixing</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Additive Color Mixing</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Visual Spectrum</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Colors, Tints, and Shades</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Warm vs. Cool</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="future-video" rel="tooltip" title="Video no yet made.">Color Schemes</a></li>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="gimp-basics">
              <h3>GIMP Basics <small class="hidden-phone"> The Basics of Image Manipulation with the GIMP</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/zqt-TWGR6D4?rel=0">Download the GIMP</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/4cyaZECGmo4?rel=0">Crop and Resize</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/LPGQ6Mo_Ims?rel=0">Drawing Tools</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/5hDVI_NXNO8?rel=0">Saving and Exporting Images</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/zBmyHAWTX3Y?rel=0">Selection Tools</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/2ydTejq9OIU?rel=0">Layers</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/5SWEJbP2Qq8?rel=0">Removing Backgrounds</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/TjanJBXbRcI?rel=0">Swapping Heads</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/A9CrKxD1_XI?rel=0">New Image</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/MVpUScfF-N0?rel=0">Open Image</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/FLA3hn9JTa0?rel=0">Paste Image</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/HBwoXRX4HOw?rel=0">Save vs. Export</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/KFqMaVtfcGw?rel=0">Restore Default Workspace</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/RGLPl0h033A?rel=0">Single Window Mode</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/1hspw3d5JX4?rel=0">Zoom</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/AYOsR6ZrXpA?rel=0">Brush Size</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/opDalqJc-e0?rel=0">Choosing Colors</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/eQ2VTCPNKII?rel=0">Layers</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/yvQVj34vXZc?rel=0">Selection Tools</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/y4Tomb1Y2hM?rel=0">Selected Areas</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/L64evL-egk0?rel=0">Floating Selections</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/OYCXp3Lh38Q?rel=0">New Layer from Floating Selection</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/aOVAkS-8ulc?rel=0">Fuzzy Selection Tool</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/zEKdwS-k7Z0?rel=0">Invert a Selection</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/A_mchmFBUtI?rel=0">Special Background Layer</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Itw8JiCT-Tg?rel=0">Crop Image</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/MB2Dkd11fCg?rel=0">Scale Image and Layers</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/W5gKDoMltaU?rel=0">Transform Tools</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="gimp-intermediate">
              <h3>GIMP Intermediate <small class="hidden-phone">Going Beyond the Basics</small></h3>
            </div>
            <div class="row-fluid videos">
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="gimp-advanced">
              <h3>GIMP Advanced <small class="hidden-phone">On the Road to Mastery</small></h3>
            </div>
            <div class="row-fluid videos">
            </div>
          </div>
          
        </div>
      </div><!--/row-->
      
<!-- *****************************
      IMAGE MANIPULATION
     ***************************** -->        
     
      
<!-- *****************************
      START OFFICE
     ***************************** -->
      
      <div class="row-fluid">
        <div class="hero-unit" id="office" >
          <h2>Office Applications <small class="hidden-phone">Learn How to Use Word Processors, Spreadsheets, and More!</small></h2>
          
          <div class="row-fluid playlist">
            <div class="span12" id="office-word-processing">
              <h3>Word Processing <small class="hidden-phone"> Learn the Basics of Microsoft Word</small></h3>
            </div>
            <div class="row-fluid videos">
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/NNz3n0CDSsA?rel=0">Intro to Word Processing</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/WaD06I9esx8?rel=0">Word Processor vs. Text Editor</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/gd1RVv1JB5M?rel=0">Ribbon Hero</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Fk5u6pt37V4?rel=0">New Document</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/8wlFWU-MnU8?rel=0">Save and Save As</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Kke054AzHNU?rel=0">Opening Files</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/sEHWLv0R8nc?rel=0">Cut, Copy, and Paste (Keyboard Shortcuts)</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/vTx6ZhZsGp4?rel=0">Paste Special</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/E26pJ3FIRKM?rel=0">Undo and Redo</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/s5qh7DciNpU?rel=0">Zoom</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/XNRNTLJXuQo?rel=0">Fonts (Size and Type)</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/GrExHDdLvSo?rel=0">Bold, Italic, Underling</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/xi5ODkx60Cg?rel=0">Subscripts and Superscripts</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ZU5ekrlHLsA?rel=0">Colors, Background Colors, and Text Effects</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/giLVFoOu8Pc?rel=0">Clear Formatting and the Format Painter</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/8GhV3EbestE?rel=0">Font Defaults</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/nboSYtmiPRA?rel=0">Styles and Themes Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/RbpcXDwWQeg?rel=0">Lists Intro</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/WZagxWWwqVQ?rel=0">Multi-Level Lists</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/KNJ165mv9GU?rel=0">Spacing between List Items</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/JnvxJuAcMOA?rel=0">Controlling List Numbering</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/XtnzLzfFWMA?rel=0">Selecting Text with the Keyboard</a></li>
                </ul>
              </div>
              <div class="span4">
                <ul class="unstyled">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/Q4guX_Z3BaQ?rel=0">Find and Replace</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/kvYc4L04wCI?rel=0">Page Size</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/4zikfQcBItA?rel=0">Portrait and Landscape</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/MWAf01eOYlc?rel=0">Margins</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/T2OAmp30nDE?rel=0">Line Spacing</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/MeUlaSuusx4?rel=0">Aligning (and Justifying) Text</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/ASv7jU3pQjg?rel=0">Indenting</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/T0BbQBc6Xcw?rel=0">Tabs</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/YE69f48pU1U?rel=0">Tabs (Part 2)</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="row-fluid playlist">
            <div class="span12" id="office-spreadsheets">
              <h3>Spreadsheets <small class="hidden-phone">Learn the Basics of Microsoft Excel and Other Spreadsheet Applications</small></h3>
            </div>
            <div class="row-fluid videos">
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="http://www.youtube.com/embed/xDswIATeNDk">Custom Shortcuts</a></li>
<li><i class="icon-play-circle icon-white"></i> <a class="youtube" href="">Macros</a></li>

            </div>
          </div>
          
        </div>
      </div><!--/row-->
      
<!-- *****************************
       END OFFICE
     ***************************** -->   

     <footer>
     </footer>
	</div> <!-- End container -->

<div id="challenge-popup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h1 id="challenge-header"></h1>
  </div>
  <div class="modal-body" id="challenge-popup-content">
    
  </div>
</div>

  <script>
$('.future-video').each(function(index) {
    var messages = ["Rome wasn't built in a day...", "Hold you horses, cowboy!", "Patience, young grasshopper.", "I'm workin' on it...", "This video has not yet been made.", "IN PRODUCTION", "Google it for now...", "Please check back later.", "Yet to be made...", "I haven't made this yet.", "I'm plannin' on makin' it...", "Video not yet made." ];
    $(this).attr("title", messages[Math.floor(Math.random()*messages.length)]);
});
$('.future-video').tooltip({
  placement: 'right'
});
$('.future-playlist').tooltip({
  placement: 'top'
});
$('.reference-guide').tooltip({
  placement: 'top'
});
$('.challenge').tooltip({
  placement: 'top'
});
$('.intro').tooltip({
  placement: 'top'
});
$('.challenge-map-heading').tooltip({
  placement: 'right'
});

$('.challenge').blend();
$('.big-project').blend();
$('.small-project').blend();

$(document).ready(function(){
  var converter = new Showdown.converter();
  
 $(".challenge").click(function(event){   
   event.preventDefault();
   var pathToChallenge = $(this).attr("data-link");
   $('#challenge-header').html($(this).attr("data-original-title"));
   $.ajax({  
    url: pathToChallenge,  
    cache: false}).done(function( html ) {  
    $('#challenge-popup-content').html(converter.makeHtml(html));
  });
 });
 
$(".youtube").colorbox({iframe:true, innerWidth:853, innerHeight:480});
});
  </script>
	</body>
</html>