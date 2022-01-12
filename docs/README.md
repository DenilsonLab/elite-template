# Welcome
**Elite - Responsive Portfolio Template**

# Settings
Template settings

## Colors
You can change all the colors of the template in `src/css/style.css`
```css
:root {
  --crimsom : #dc143c;
  --pink: #fe397a;
  --light-blue: #3498DB;
  --blue: #0099FF;
  --turquoise: #1ABC9C;
  --green-sea: #16A085;
  --esmerald: #2ECC71;
  --nephritis: #27AE60;
  --alizarin: #E74C3C;
  --pomegranate: #C0392B;
  --yellow: #F1C40F;
  --carrot: #E67E22;
  --pumpkin: #D35400;
  --cloud: #ECF0F1;
  --silver: #BDC3C7;
  --concrete: #95A5A6;
  --asbestos: #7F8C8D;
  /* Dark Colors */
  --wet-asphalt: #34495E;
  --midnight-blue: #2C3E50;
  --dark-bg-1: #24263B;
  --dark-bg-2: #1F2235;
  /* Font Color */
  --dark-font-color: #dfdfdf;
  --light-bg-color: #F2F4F9;

}
```
## Contact Form PHP
To modify the form is submitted, you can use the following settings, folders `includes/form_setting.php`. In `includes/mailer.php` you can find the php code to send the emails
```php
	/*Form settings*/
	$subj = "New message from your Website"; //letter subject
	$to = 'your@gmail.com'; // Enter Your E-mail
	$from = 'website_admin@email.com'; // Admin e-mail
	$fromName = 'Elite Portfolio'; // Your company name
	$charset = 'UTF-8';
```

## HTML Structure
### Fonts and Styles

```html
  <!-- 
        Fonts
  -->
  <link rel="preconnect" href="https://fonts.gstatic.com">  
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />
  <!-- 
         Fonts
  -->

  <!--OWL Slider Css -  -->
  <link rel="stylesheet" href="./src/css/owl.carousel.min.css">
  <link rel="stylesheet" href="./src/css/owl.theme.default.css">

  <!-- Styles -->
  <link rel="stylesheet" href="./src/css/library/bootstrap.min.css">
  <link rel="stylesheet" href="./src/css/animate.min.css">
  <link rel="stylesheet" href="./src/css/style.css">
  <!-- Styles -->

```

### Navbar
```html
  <!-- Header -->
  <header class="header cover">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 m-auto ">
          <nav data-toggle="sticky-onscroll"
            class="navbar sticky-top navbar-light navbar-expand-lg justify-content-between">
            <a class="navbar-brand" href="#">
              <span class="d-inline-block align-center header__logo-text">Elite Template</span>
            </a>

            <!-- Navbar Items -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
              aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="fas fa-bars navbar-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav  ml-auto">

                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#about-me">About</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#skills">Skills</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#blog-post">Blog</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#contact">Contact</a>
                </li>
              </ul>
            </div>
            <!-- Navbar Items -->
          </nav>
        </div>

      </div>

    </div>
  </header>
  <!-- Header End -->
```
### Hero
```html
  <!-- Hero -->
  <section class="hero section container-fluid no-gutters" style="scroll-behavior: smooth;">
    <div class="row">
      <div class="col-md-10 m-auto  ">
        <div class="row ">
          <div class="hero__left col-md-8 pl-5">
            <div class="hero__left--name animate__animated animate__bounceInLeft animate__delay-2s">
              <h1>Hi, I am Tony Stark</h1>
            </div>
            <div class="hero__left--description animate__animated animate__bounceInLeft animate__delay-2s">
              <span>
                I am a professional software engineer and web developer with more than 10 years of experience
              </span>
              <a href="#portfolio" class="btn btn-jobs">My Work</a>
            </div>
          </div>
          <div class="hero__right col-md-4 ">
            <div class="hero__right--img animate__animated animate__bounceInRight animate__delay-2s">
              <img src="./src/images/example-man-right.png" alt="Im Tony Stark">
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero -->
```

### Services
```html
  <!-- Services -->
  <section class="services section" id="services" style="scroll-behavior: smooth;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto">
          <div class="section__title text-center">
            <span>SERVICES</span>
            <h2>My Services</h2>
            <div class="section__description">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis laborum delectus nobis perspiciatis
                inventore libero provident vero vel vitae dolore?
              </p>
            </div>
          </div>
        </div>
        <div class="services__cards p-3">
          <div class="row">
            <div class="col-md-4">

              <div class="card services__card animate__animated animate__backInLeft animate__delay-2s ">
                <div class="card-icon">
                  <i class="fas fa-code">
                  </i>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Web Development</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita eveniet sunt
                    enim quidem! Accusamus, adipisci.</p>
                </div>
              </div>

            </div>
            <div class="col-md-4">

              <div class="card services__card animate__animated animate__backInLeft animate__delay-2s ">
                <div class="card-icon">
                  <i class="fas fa-desktop"></i>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Web Design</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita eveniet sunt
                    enim quidem! Accusamus, adipisci.</p>
                </div>
              </div>

            </div>
            <div class="col-md-4">

              <div class="card services__card animate__animated animate__backInLeft animate__delay-2s ">
                <div class="card-icon">
                  <i class="fas fa-search"></i>
                </div>
                <div class="card-body">
                  <h5 class="card-title">SEO</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita eveniet sunt
                    enim quidem! Accusamus, adipisci.</p>
                </div>
              </div>

            </div>

            <div class="col-md-4">

              <div class="card services__card animate__animated animate__backInLeft animate__delay-2s ">
                <div class="card-icon">
                  <i class="fas fa-camera"></i>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Web Development</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita eveniet sunt
                    enim quidem! Accusamus, adipisci.</p>
                </div>
              </div>

            </div>
            <div class="col-md-4">

              <div class="card services__card animate__animated animate__backInLeft animate__delay-2s ">
                <div class="card-icon">
                  <i class="fas fa-desktop"></i>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Web Design</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita eveniet sunt
                    enim quidem! Accusamus, adipisci.</p>
                </div>
              </div>

            </div>
            <div class="col-md-4">

              <div class="card services__card animate__animated animate__backInLeft animate__delay-2s ">
                <div class="card-icon">
                  <i class="fas fa-search"></i>
                </div>
                <div class="card-body">
                  <h5 class="card-title">SEO</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita eveniet sunt
                    enim quidem! Accusamus, adipisci.</p>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Services -->
```

### About Me

```html
  <!-- About me -->
  <section class="about-me section" id="about-me" style="scroll-behavior: smooth;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto">
          <div class="section__title text-center">
            <span></span>
            <h2>About Me</h2>
            <div class="section__description">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis laborum delectus nobis perspiciatis
                inventore libero provident vero vel vitae dolore?
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 text-center animate__animated animate__fadeIn animate__delay-2s">
          <img src="./src/images/example-man-left.png" alt="Example Men">
        </div>
        <div class="col-md-7 text-left animate__animated animate__fadeIn animate__delay-2s ">
          <h3 class="about-me__title">Hi There</h3>
          <div class="about-me__description">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quo accusamus nam quibusdam iusto
              consequuntur aspernatur dolor necessitatibus nemo. Assumenda nostrum aperiam cupiditate unde laborum.</p>
            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi maiores
              voluptates earum?</p>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6 col-12">
              <div class="about-me__contact-info">
                <span>Name:</span>
                <p>Jane Doe</p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12">
              <div class="about-me__contact-info">
                <span>Email:</span>
                <p>jane@doe.com</p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12">
              <div class="about-me__contact-info">
                <span>Phone:</span>
                <p>+1 234 567 890</p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12">
              <div class="about-me__contact-info">
                <span>LinkedIn:</span>
                <p>Jane_doe43</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About me -->
```

### Skills
```html
  <!-- Skills -->
  <section class="skills section" id="skills" style="scroll-behavior: smooth;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto">
          <div class="section__title text-left no-border">
            <span>Skills</span>
            <h2>I'm good at these things</h2>
            <div class="section__description">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis laborum delectus nobis perspiciatis
                inventore libero provident vero vel vitae dolore?
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="skills__skil-bar">
            <div class="skill">
              <div class="skill-name">HTML</div>
              <div class="skill-bar">
                <div class="skill-per" per="95"></div>
              </div>
            </div>
          </div>
          <div class="skills__skil-bar">
            <div class="skill">
              <div class="skill-name">CSS</div>
              <div class="skill-bar">
                <div class="skill-per" per="93"></div>
              </div>
            </div>
          </div>
          <div class="skills__skil-bar">
            <div class="skill">
              <div class="skill-name">JavaScript</div>
              <div class="skill-bar">
                <div class="skill-per" per="87"></div>
              </div>
            </div>
          </div>
          <div class="skills__skil-bar">
            <div class="skill">
              <div class="skill-name">PHP</div>
              <div class="skill-bar">
                <div class="skill-per" per="90"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- skills -->
```
### Portfolio
```html
  <!-- portfolio -->
  <section class="portfolio section" id="portfolio" style="scroll-behavior: smooth;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto">
          <div class="section__title text-center">
            <span>My Work</span>
            <h2>Portfolio</h2>
            <div class="section__description">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis laborum delectus nobis perspiciatis
                inventore libero provident vero vel vitae dolore?
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Grid -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="portfolio__filter text-center filters">
            <ul class="list-inline">
              <li class="list-inline-item list-inline-item-selected" data-filter="*">All</li>
              <li class="list-inline-item" data-filter=".web">Web</li>
              <li class="list-inline-item" data-filter=".desing">Desing</li>
              <li class="list-inline-item" data-filter=".seo">SEO</li>
            </ul>
          </div>
        </div>

        <div class="col-md-12">
          <div class="portfolio__content">
            <div class="container">
              <div class="row portfolio__items">

                <div class=" portfolio__item col-md-4 mb-5 all web">
                  <a href="" data-toggle="modal" data-target="#portfolio1">
                    <img src="./src/images/portfolio-image-1.jpeg" style="width: auto;" class="img-fluid rounded"
                      alt="">
                    <div class="portfolio__details">
                      <span class="portfolio__category">
                        Web
                      </span>
                      <h3 class="portfolio__title">Personal Webpage</h3>
                    </div>
                  </a>

                  <!-- Portfolio Modal -->
                  <div class="modal fade" id="portfolio1" tabindex="-1" role="dialog" aria-labelledby="portfolio1"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <img src="./src/images/portfolio-image-1.jpeg" class="img-fluid rounded" alt="">
                        </div>
                        <div class="modal-footer">
                          <p>Personal Webpage</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Modal -->

                </div>

                <div class=" portfolio__item col-md-4 mb-5 all web">
                  <a href="" data-toggle="modal" data-target="#portfolio2">
                    <img src="./src/images/portfolio-image-2.jpeg" style="width: auto;" class="img-fluid rounded"
                      alt="">
                    <div class="portfolio__details">
                      <span class="portfolio__category">
                        Web
                      </span>
                      <h3 class="portfolio__title">Portfolio Desing</h3>
                    </div>
                  </a>

                  <!-- Portfolio Modal -->
                  <div class="modal fade" id="portfolio2" tabindex="-1" role="dialog" aria-labelledby="portfolio2"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <img src="./src/images/portfolio-image-2.jpeg" class="img-fluid rounded" alt="">
                        </div>
                        <div class="modal-footer">
                          <p>Logo Desing</p>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class=" portfolio__item col-md-4 mb-5 all desing">
                  <a href="" data-toggle="modal" data-target="#portfolio3">
                    <img src="./src/images/portfolio-image-3.jpeg" style="width: auto;" class="img-fluid rounded"
                      alt="">
                    <div class="portfolio__details">
                      <span class="portfolio__category">
                        Web
                      </span>
                      <h3 class="portfolio__title">Logo Design</h3>
                    </div>
                  </a>

                  <!-- Portfolio Modal -->
                  <div class="modal fade" id="portfolio3" tabindex="-1" role="dialog" aria-labelledby="portfolio3"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <img src="./src/images/portfolio-image-3.jpeg" class="img-fluid rounded" alt="">
                        </div>
                        <div class="modal-footer">
                          <p>Logo Design</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class=" portfolio__item col-md-4 mb-5 all web">
                  <a href="" data-toggle="modal" data-target="#portfolio4">
                    <img src="./src/images/portfolio-image-4.jpeg" style="width: auto;" class="img-fluid rounded"
                      alt="">
                    <div class="portfolio__details">
                      <span class="portfolio__category">
                        Web
                      </span>
                      <h3 class="portfolio__title">Personal Webpage</h3>
                    </div>
                  </a>

                  <!-- Portfolio Modal -->
                  <div class="modal fade" id="portfolio4" tabindex="-1" role="dialog" aria-labelledby="portfolio4"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <img src="./src/images/portfolio-image-4.jpeg" class="img-fluid rounded" alt="">
                        </div>
                        <div class="modal-footer">
                          <p>Personal Webpage</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Modal -->

                </div>

                <div class=" portfolio__item col-md-4 mb-5 all web">
                  <a href="" data-toggle="modal" data-target="#portfolio5">
                    <img src="./src/images/portfolio-image-5.jpeg" style="width: auto;" class="img-fluid rounded"
                      alt="">
                    <div class="portfolio__details">
                      <span class="portfolio__category">
                        Web
                      </span>
                      <h3 class="portfolio__title">Portfolio Desing</h3>
                    </div>
                  </a>

                  <!-- Portfolio Modal -->
                  <div class="modal fade" id="portfolio5" tabindex="-1" role="dialog" aria-labelledby="portfolio5"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <img src="./src/images/portfolio-image-5.jpeg" class="img-fluid rounded" alt="">
                        </div>
                        <div class="modal-footer">
                          <p>Logo Desing</p>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class=" portfolio__item col-md-4 mb-5 all desing">
                  <a href="" data-toggle="modal" data-target="#portfolio6">
                    <img src="./src/images/portfolio-image-6.jpeg" style="width: auto;" class="img-fluid rounded"
                      alt="">
                    <div class="portfolio__details">
                      <span class="portfolio__category">
                        Web
                      </span>
                      <h3 class="portfolio__title">Logo Design</h3>
                    </div>
                  </a>

                  <!-- Portfolio Modal -->
                  <div class="modal fade" id="portfolio6" tabindex="-1" role="dialog" aria-labelledby="portfolio6"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <img src="./src/images/portfolio-image-6.jpeg" class="img-fluid rounded" alt="">
                        </div>
                        <div class="modal-footer">
                          <p>Logo Design</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- portfolio -->
  ```

### Pricing
```html

 <!-- Pricing -->
  <section class="pricing section" id="pricing" style="scroll-behavior: smooth;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto">
          <div class="section__title text-center">
            <span>My price </span>
            <h2>
              Look at my offers
            </h2>
            <div class="section__description">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis laborum delectus nobis perspiciatis
                inventore libero provident vero vel vitae dolore?
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4  col-sm-6 animate__animated animate__fadeIn animate__delay-2s">
          <div class="card pricing-card pricing-plan-basic">
            <div class="card-body">
              <i class="fas fa-cubes pricing-plan-icon "></i>
              <p class="pricing-plan-title">Basic</p>
              <h3 class="pricing-plan-cost ml-auto">$249.99</h3>
              <ul class="pricing-plan-features">
                <li>Unlimited conferences</li>
                <li>100 participants max</li>
                <li>Custom Hold Music</li>
                <li>10 participants max</li>
              </ul>
              <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
            </div>
          </div>
        </div>
        <div class="col-md-4  col-sm-6 animate__animated animate__fadeIn animate__delay-2s">
          <div class="card pricing-card pricing-card-highlighted  pricing-plan-pro">
            <div class="card-body">
              <i class="fas fa-trophy pricing-plan-icon "></i>
              <p class="pricing-plan-title">Pro</p>
              <h3 class="pricing-plan-cost ml-auto">$699</h3>
              <ul class="pricing-plan-features">
                <li>Unlimited conferences</li>
                <li>100 participants max</li>
                <li>Custom Hold Music</li>
                <li>10 participants max</li>
              </ul>
              <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
            </div>
          </div>
        </div>
        <div class="col-md-4  col-sm-6 animate__animated animate__fadeIn animate__delay-2s">
          <div class="card pricing-card pricing-plan-enterprise">
            <div class="card-body">
              <i class="fas fa-building pricing-plan-icon "></i>
              <p class="pricing-plan-title">Enterprise</p>
              <h3 class="pricing-plan-cost ml-auto">$1500</h3>
              <ul class="pricing-plan-features">
                <li>Unlimited conferences</li>
                <li>100 participants max</li>
                <li>Custom Hold Music</li>
                <li>10 participants max</li>
              </ul>
              <a href="#!" class="btn pricing-plan-purchase-btn">Purchase</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Pricing -->
```

### Projects Counter
```html
  <!-- Projects Counter -->
  <section class="project-counter mb-5 pt-5 pb-5" id="project-counter" style="scroll-behavior: smooth;">
    <div class="container">
      <div class="row">
        <div class="col-md-3  col-sm-4">
          <div class="counter__container">
            <div class="counter__icon">
              <i class="fab fa-instagram"></i>
            </div>
            <span class="counter" data-target="2500">

            </span>
            <div class="counter__text">
              <h5>Followers</h5>
            </div>
          </div>
        </div>

        <div class="col-md-3  col-sm-4">
          <div class="counter__container">
            <div class="counter__icon">
              <i class="fas fa-briefcase"></i>
            </div>
            <span class="counter" data-target="56">

            </span>
            <div class="counter__text">
              <h5>Projects</h5>
            </div>
          </div>
        </div>
        <div class="col-md-3  col-sm-4">
          <div class="counter__container">
            <div class="counter__icon">
              <i class="fas fa-coffee"></i>
            </div>
            <span class="counter" data-target="138">

            </span>
            <div class="counter__text">
              <h5>Cups of Coffe</h5>
            </div>
          </div>
        </div>
        <div class="col-md-3  col-sm-4">
          <div class="counter__container">
            <div class="counter__icon">
              <i class="fas fa-camera"></i>
            </div>
            <span class="counter" data-target="5345">

            </span>
            <div class="counter__text">
              <h5>Photos Taken</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Projects Counter -->
```

### Testimonials
```html
  <!-- Testimonials -->
  <section class="testimonial" id="testimonial" style="scroll-behavior: smooth;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto">
          <div class="section__title text-left no-border">
            <span>TESTIMONIALS</span>
            <h2>Happy with Customers & Clients</h2>
            <div class="section__description">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis laborum delectus nobis perspiciatis
                inventore libero provident vero vel vitae dolore?
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 testimonials owl-carousel owl-theme">
          <div class="testimonial-container">
            <div class="testimonial__profile">
              <img class="testimonial__photo"
                src="https://images.unsplash.com/photo-1521225099409-8e1efc95321d?ixlib=rb-1.2.1&auto=format&fit=crop&h=153&q=80"
                alt="">
              <div class="testimonials__info">
                <div class="testimonial__stars">
                  <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <p class="testimonial__name">
                  Jhon Doe
                </p>
                <span class="testimonial__work">
                  Web Developer
                </span>
              </div>
            </div>
            <div class="testimonial__comment">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita velit labore suscipit distinctio,
                officiis
                deserunt rem blanditiis ducimus. Voluptate quaerat assumenda qui veniam facilis doloribus maiores
                impedit
                ducimus cum accusamus.</p>
              <div class="testimonial__icon">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
              </div>
            </div>
          </div>

          <div class="testimonial-container">
            <div class="testimonial__profile">
              <img class="testimonial__photo"
                src="https://images.unsplash.com/photo-1521225099409-8e1efc95321d?ixlib=rb-1.2.1&auto=format&fit=crop&h=153&q=80"
                alt="">
              <div class="testimonials__info">
                <div class="testimonial__stars">
                  <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <p class="testimonial__name">
                  Jhon Doe
                </p>
                <span class="testimonial__work">
                  Web Developer
                </span>
              </div>
            </div>
            <div class="testimonial__comment">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita velit labore suscipit distinctio,
                officiis
                deserunt rem blanditiis ducimus. Voluptate quaerat assumenda qui veniam facilis doloribus maiores
                impedit
                ducimus cum accusamus.</p>
              <div class="testimonial__icon">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
              </div>
            </div>
          </div>

          <div class="testimonial-container">
            <div class="testimonial__profile">
              <img class="testimonial__photo"
                src="https://images.unsplash.com/photo-1521225099409-8e1efc95321d?ixlib=rb-1.2.1&auto=format&fit=crop&h=153&q=80"
                alt="">
              <div class="testimonials__info">
                <div class="testimonial__stars">
                  <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <p class="testimonial__name">
                  Jhon Doe
                </p>
                <span class="testimonial__work">
                  Web Developer
                </span>
              </div>
            </div>
            <div class="testimonial__comment">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita velit labore suscipit distinctio,
                officiis
                deserunt rem blanditiis ducimus. Voluptate quaerat assumenda qui veniam facilis doloribus maiores
                impedit
                ducimus cum accusamus.</p>
              <div class="testimonial__icon">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- Testimonials -->

```

### Clients
```html
  <!-- Clients -->
  <section class="clients" id='clients' style="scroll-behavior: smooth;">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-md-12">
          <ul class="client-list owl-carousel owl-theme">
            <li>
              <img src="./src/images/brands/brand-1.png" alt="">
            </li>
            <li>
              <img src="./src/images/brands/brand-2.png" alt="">
            </li>
            <li>
              <img src="./src/images/brands/brand-3.png" alt="">
            </li>
            <li>
              <img src="./src/images/brands/brand-4.png" alt="">
            </li>
            <li>
              <img src="./src/images/brands/brand-5.png" alt="">
            </li>
            <li>
              <img src="./src/images/brands/brand-6.png" alt="">
            </li>
            <li>
              <img src="./src/images/brands/brand-7.png" alt="">
            </li>
            <li>
              <img src="./src/images/brands/brand-8.png" alt="">
            </li>
            <li>
              <img src="./src/images/brands/brand-9.png" alt="">
            </li>
            <li>
              <img src="./src/images/brands/brand-10.png" alt="">
            </li>

          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Clients -->
```
### Blog
```html
  <!-- Blog Posts -->
  <section class="blog-posts" id='blog-post' style="scroll-behavior: smooth;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto">
          <div class="section__title text-center">
            <span>Blog</span>
            <h2>
              Check out our latest posts
            </h2>
            <div class="section__description">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis laborum delectus nobis perspiciatis
                inventore libero provident vero vel vitae dolore?
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="blog-posts-list owl-carousel owl-theme">
          <div class="card post">
            <div class="card-head">
              <img class="card-img" src="./src/images/blog-img.jpg" alt="Bologna">
              <div class="card-img-overlay post__categorie">
                <a href="#" class="btn btn-light btn-sm">Pets</a>
              </div>
            </div>

            <div class="card-body">
              <h4 class="card-title post__title">Lorem ipsum dolor sit amet.</h4>
              <small class="text-muted cat">
                <i class="far fa-clock text-info"></i> Read 5 min
              </small>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
              <a href="#" class="btn btn-read-more">Read more <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
              <div class="views">Mar 21, 09:00AM
              </div>
              <div class="stats">
                <i class="far fa-eye"></i> 15
                <i class="far fa-comment"></i> 4
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- Blog Posts -->
```

### Contact 
```html
  <!-- Contact Form -->
  <section class="section" id="contact" style="scroll-behavior: smooth;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto">
          <div class="section__title text-center">
            <span>
              Here you can contact me
            </span>
            <h2>
              Contact Me
            </h2>
            <div class="section__description">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis laborum delectus nobis perspiciatis
                inventore libero provident vero vel vitae dolore?
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="address" >
            <a href="#">
            <i class="fas fa-map-marker-alt"></i>
            <span>Locate us</span>
            <p>27203 Hollow Road, North </p>
            </a>
            </div>
        </div>
        <div class="col-lg-4">
          <div class="phone" >
            <a href="#">
            <i class="fas fa-phone"></i>
            <span>Call me</span>
            <p>910-569-5701</p>
            </a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="email" >
            <a href="#">
            <i class="fas fa-at"></i>
            <span>Email</span>
            <p>jhon@doe.com</p>
            </a>
          </div>
        </div>


        <div class="col-md-12 contact-social-media">
          <ul>
            <li><a href="#" target="_blank">
                <i class="fab fa-facebook" tabindex="0"></i>
              </a></li>
            <li><a href="#" target="_blank">
                <i class="fab fa-codepen" tabindex="0"></i>
              </a></li>
            <li><a href="#" target="_blank">
                <i class="fab fa-instagram" tabindex="0"></i>
              </a></li>
            <li><a href="#" target="_blank">
                <i class="fab fa-github" tabindex="0"></i>
              </a></li>
            <li><a href="#">
                <i class="fab fa-youtube" tabindex="0" target="_blank"></i>
              </a></li>
            <li><a href="#">
                <i class="fab fa-pinterest" tabindex="0" target="_blank"></i>
              </a></li>
          </ul>
        </div>
        <div class="col-md-12">
          <form class="contact-form" id="contact_form">
            <label for="name"> Name
              <input type="text" name="name" id="name" placeholder="Your Name" required>
            </label>

            <label for="email"> Email
              <input type="email" name="email" id="email" placeholder="Your Email" required>
            </label>

            <label for="subject"> Subject
              <input type="text" name="subject" id="subject" placeholder="Your Subject" required>
            </label>

            <label for="message"> Message
              <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
            </label>
            <div class="submit_messages">
              <div id="success_message">
                The message was sent correctly.
              </div>
              <div id="error_message">
                Please complete all the fields correctly.
              </div>
            </div>
            <button class="btn btn-contact-me" type="submit">Send</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Form -->
```
### Footer
```html
  <section class="section footer" id="footer" style="scroll-behavior: smooth;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p>Copyright © 2020. All Rights Reserved </p>
        </div>
      </div>
    </div>
  </section>

```

# Credits
--------------------------------------


## **Icons used:**

- FontAwesome 5 - https://fontawesome.com/


--------------------------------------


## **Free Google Fonts used**

- Google Fonts, Poppins


--------------------------------------


## **Source & Credits**

- Bootstrap Framework - https://getbootstrap.com/
- FontAwesome - https://fontawesome.com/
- Animate.css - https://daneden.github.io/animate.css/
- jQuery - https://jquery.com/
- Isotope - https://isotope.metafizzy.co/
- jQuery Validation Plugin - http://jqueryvalidation.org/
- Owl Carousel 2 - https://owlcarousel2.github.io/OwlCarousel2/

--------------------------------------


## **Photos Credits**

- Freepik - https://www.freepik.com/
- Pixabay - https://pixabay.com/

# Creator Profile & Contact

- **Discord: RewriteRule#5569**