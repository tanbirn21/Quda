<!DOCTYPE html>
<html lang="en"> 
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An awesome single page portfolio html template. You can easily design your portfolio website using
    dite teeniark">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cuda - An awesome single page portfolio html template</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="resources/img/favicon.png" type="image/x-icon">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- VENDORS FILES -->
    <link rel="stylesheet" href="vendors/css/normalize.css">
    <link rel="stylesheet" href="vendors/css/grid.css">
    <!-- RESOURCES FILES -->
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/responsive.css">
</head>
<body>
  <!-- START HEADER SECTION -->
  <header id="home">
    <nav>
        <div class="row">
            <a href="#home">
                <img src="resources/img/logo.png" class="logo" alt="Cuda">
            </a>
            <ul class="main-nav">
                <li class="active"><a class="active" href="#home">Home</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#team">Team</a></li> 
                <li><a href="#portfolio">portfolio</a></li>
                <li><a href="#testimonial">Testimonial</a></li>  
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="mobile-menu">
                <span style="color: #fff;" onclick="openNav()">&#9776;</span>
                <div id="myNav" class="overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="overlay-content">
                        <a onclick="closeNav()" href="#home">Home</a>
                        <a onclick="closeNav()" href="#service">Service</a>
                        <a onclick="closeNav()" href="#team">Team</a>
                        <a onclick="closeNav()" href="#portfolio">portfolio</a>
                        <a onclick="closeNav()" href="#testimonial">Testimonial</a> 
                        <a onclick="closeNav()" href="#contact">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="hero-text-box">
            <h1 class="gh">Hi there! We are the new kids on the block and we build awesome websites and mobile apps.</h1>
                <a href="#contact" class="btn btn-hero">work with us</a>
        </div>
    </div>
  </header>
  <!-- END HEADER SECTION -->
  <!-- START SERVICE SECTION -->
  <section class="service-section js--service--section" id="service">
    <div class="row">
        <h2>SERVICES WE PROVIDE</h2>
        <p class="little-description">
            We are working with both individuals and businesses from all over the globe to create awesome websites and applications.
        </p>
    </div>
    <div class="row">
        <div class="col span_1_of_4 box">
            <img src="resources/img/flag.png" alt="Flag" class="service-icon">
            <h3>BRANDING</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
        </div>
        <div class="col span_1_of_4 box">
            <img src="resources/img/crayon.png" alt="Crayon" class="service-icon">
            <h3>DESIGN</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem lorem ipsum dolor</p>
        </div>
        <div class="col span_1_of_4 box">
            <img src="resources/img/gears.png" alt="Gear" class="service-icon">
            <h3>DEVELOPMENT</h3>
            <p>At vero eos et accusamus et iusto odio dignissimos qui blanditiis praesentium.</p>
        </div>
        <div class="col span_1_of_4 box">
            <img src="resources/img/rocket.png" alt="Rocket" class="service-icon">
            <h3>ROCKET SCIENCE</h3>
            <p>Et harum quidem rerum est et expedita distinctio. Nam libero tempore.</p>
        </div>
    </div>
  </section>
  <!-- END SERVICE SECTION -->
  <!-- START TEAM SECTION -->
  <section class="team-section" id="team">
    <div class="row">
        <h2>MEET OUR BEAUTIFUL TEAM</h2>
        <p class="little-description">We are a small team of designers and developers, who help brands with big ideas.</p>
    </div>
    <div class="row">
        <div class="col span_1_of_4 box">
            <img src="resources/img/1.jpg" alt="ANNE HATHAWAY" class="team-member">
            <h3>ANNE HATHAWAY</h3>
            <span class="role">CEO / Marketing Guru</span>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
            <div class="social-link">
                <ul>
                    <li><a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col span_1_of_4 box">
            <img src="resources/img/2.jpg" alt="KATE UPTON" class="team-member">
            <h3>KATE UPTON</h3>
            <span class="role">Creative Director</span>
            <p>Duis aute irure dolor in in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat non diam proident.</p>
            <div class="social-link">
                <ul>
                    <li><a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col span_1_of_4 box">
            <img src="resources/img/3.jpg" alt="OLIVIA WILDE" class="team-member">
            <h3>OLIVIA WILDE</h3>
            <span class="role">Lead Designer</span>
            <p>Nemo enim ipsam voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem nesciunt.</p>
            <div class="social-link">
                <ul>
                    <li><a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col span_1_of_4 box">
            <img src="resources/img/4.jpg" alt="ASHLEY GREENE" class="team-member">
            <h3>ANNE HATHAWAY</h3>
            <span class="role">SEO / Developer</span>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            <div class="social-link">
                <ul>
                    <li><a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
  </section>
  <!-- END TEAM SECTION -->
  <!-- END SKILL SECTION -->
  <section class="skill-section" id="skill">
    <div class="row">
        <h2>WE GOT SKILLS</h2>
        <p class="little-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
    </div>
    <div class="row">
        <div class="col span_1_of_4 box">
            <svg class="radial-progress web-design" data-percentage="90" viewBox="0 0 80 80">
                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">90%</text>
            </svg>
            <h3>WEB DESIGN</h3>
        </div>
        <div class="col span_1_of_4 box">
            <svg class="radial-progress html-css" data-percentage="75" viewBox="0 0 80 80">
                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">75%</text>
            </svg>
            <h3>HTML / CSS</h3>
        </div>
        <div class="col span_1_of_4 box">
            <svg class="radial-progress grapics-design" data-percentage="70" viewBox="0 0 80 80">
                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">70%</text>
            </svg>
            <h3>GRAPICS DESIGN</h3>
        </div>
        <div class="col span_1_of_4 box">
            <svg class="radial-progress ui-ux" data-percentage="80" viewBox="0 0 80 80">
                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">80%</text>
            </svg>
            <h3>UI / UX</h3>
        </div>
    </div>
  </section>
  <!-- END SKILL SECTION -->
  <!-- START PORTFOLIO SECTION -->
  <section class="portfolio-section" id="portfolio">
    <div class="row">
        <h2>OUR PORTFOLIO</h2>
        <p class="little-description">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur,  adipisci velit, sed quia non numquam</p>
    </div>
    <div class="row">
        <div class="portfolio-filter">
            <button type="button" data-filter="all">all</button>
            <button type="button" data-filter=".web">web</button>
            <button type="button" data-filter=".apps">apps</button>
            <button type="button" data-filter=".icons">icons</button>
        </div>
    </div>
    <div class="row container">
        <div class="col span_1_of_2 mix apps box">
            <img src="resources/img/portfolio1.png" alt="ISOMETRIC PERSPECTIVE MOCK-UP" class="portfolio-image">
            <h4>ISOMETRIC PERSPECTIVE MOCK-UP</h4>
        </div>
        <div class="col span_1_of_2 mix apps web box">
            <img src="resources/img/portfolio2.png" alt="TIME ZONE APP UI" class="portfolio-image">
            <h4>TIME ZONE APP UI</h4>
        </div>
        <div class="col span_1_of_2 mix icons box">
            <img src="resources/img/portfolio3.png" alt="VIRO MEDIA PLAYERS UI" class="portfolio-image">
            <h4>VIRO MEDIA PLAYERS UI</h4>
        </div>
        <div class="col span_1_of_2 mix icons apps web box">
            <img src="resources/img/portfolio1.png" alt="BLOG / MAGAZINE FLAT UI KIT" class="portfolio-image">
            <h4>BLOG / MAGAZINE FLAT UI KIT</h4>
        </div>
    </div>
    <!-- HIDDEN LODE MORE BUTTON ------------------- 
    <div class="row">
        <a href="#" class="btn btn-load-more">load more projects</a>
    </div>
    ------------------------------------------------->
  </section>
  <!-- END PORTFOLIO SECTION -->
  <!-- END TESTIMONIAL SECTION -->
  <section class="testimonial" id="testimonial">
    <div class="row">
        <h2>WHAT POEPLE SAY ABOUT US</h2>
        <p class="little-description">
        Our clintes love us!
    </p>
    </div>
    <div class="row">
        <div class="col span_1_of_2 box">
            <div class="client-photo">
                <img src="resources/img/1.jpg" alt="CHANEL IMAN">
            </div>
            <div class="client-review">
                <p>"Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque."</p>
                <h3>CHANEL IMAN</h3>
                <span class="role">CEO Of Pinterest</span>
            </div>
        </div>
        <div class="col span_1_of_2 box">
            <div class="client-photo">
                <img src="resources/img/2.jpg" alt="ADRIANA LIMA">
            </div>
            <div class="client-review">
                <p>"Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque."</p>
                <h3>ADRIANA LIMA</h3>
                <span class="role">Founder Of Instagram</span>
            </div>
        </div>
        <div class="col span_1_of_2 box">
            <div class="client-photo">
                <img src="resources/img/3.jpg" alt="ANNE HATHAWAY">
            </div>
            <div class="client-review">
                <p>"Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque."</p>
                <h3>ANNE HATHAWAY</h3>
                <span class="role">Lead Designer At Behance</span>
            </div>
        </div>
        <div class="col span_1_of_2 box">
            <div class="client-photo">
                <img src="resources/img/1.jpg" alt="EMMA STONE">
            </div>
            <div class="client-review">
                <p>"Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque."</p>
                <h3>EMMA STONE</h3>
                <span class="role">Co-Founder Of Shazam</span>
            </div>
        </div>
    </div>
  </section>
  <!-- END TESTIMONIAL SECTION -->
  <!-- END CONTACT SECTION -->
  <section class="contact-section" id="contact">
    <div class="row">
        <h2>GET IN TOUCH</h2>
        <p class="little-description">1600 Pennsylvania Ave NW, Washington, DC 20500, United States of America. Tel: (202) 456-1111</p>
    </div>
    <div class="row">
        <form action="ty@tanbirbb.com" method="post">
            <div class="row">
                <div class="col span_1_of_2">
                    <input type="text" name="Name" placeholder="Your Name *" required>
                </div>
                <div class="col span_1_of_2">
                    <input type="email" name="Email" placeholder="Your Email *" required>
                </div>
            </div>
            <div class="row">
                <textarea name="Message" cols="30" rows="10" placeholder="Your Message *" required></textarea>
            </div>
            <div class="row">
                <input type="submit" value="SEND MESSAGE" class="btn btn-submit">
            </div>
        </form>
    </div>
  </section>
  <!-- END CONTACT SECTION -->
  <!-- END FOOTER SECTION -->
  <footer class="footer-section">
    <div class="row">
        <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Google+</a></li>
            <li><a href="#">Linkedin</a></li>
            <li><a href="#">Behance</a></li>
            <li><a href="#">Dribbble</a></li>
            <li><a href="#">GitHub</a></li>
        </ul>
    </div>
  </footer>
  <!-- END FOOTER SECTION -->
  
   

   
   <!-- JS SCRIPTS -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
   <script src="vendors/js/html5shiv.min.js"></script>
   <script src="vendors/js/respond.min.js"></script>
   <script src="vendors/js/selectivizr-min.js"></script>
   <script src="vendors/js/jquery.waypoints.min.js"></script>
   <script src="vendors/js/mixitup.min.js"></script>
   <script src="resources/js/main.js"></script>
    
</body>
</html>