<?php
  if (isset($_POST['send-btn'])) {
    $clientName = $_POST['client-name'];
    $clientEmail = $_POST['client-email'];
    $subject = $_POST['subject'];
    $text = $_POST['text'];
    $to = "badadavid04@gmail.com, badaodavid04@gmail.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th></th>
<th></th>
</tr>
<tr>
<td><strong>Client Email</strong></td>
<td>.$clientName.</td>
</tr>
<tr>
<td><strong>Client Email</strong></td>
<td>.$clientEmail.</td>
</tr>
<tr>
<td><strong>Client Email</strong></td>
<td>.$subject.</td>
</tr>
<tr>
<td><strong>Client Email</strong></td>
<td>.$text.</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$clientEmail.'>' . "\r\n";
$headers .= 'Cc:' . "\r\n";

$mailSent = mail($to,$subject,$message,$headers);

    if ($mailSent === true) {
      echo "<script>alert('Your Email Has Been Sent Successfully. I'll Get Back To You As Soon As Possible')</script>";
    }
    else{
      echo"<script>alert('Sorry An Error Occured Please Try Again OR Contact Me Through My Social Media Platforms')</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bada O. David</title>
    <link rel="stylesheet" href="plugins/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="plugins/animate/animate.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=The+Nautigal:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main id="home">
        <nav class="fixed-top  navbar-dark wow fadeInDown">
            <div class="container ">
                <a href="" class="my"><div> Bada <span class="o">O.</span> David </div></a>  
                <ul>
                    <li><a href="#home" class="scrollto active home">Home</a></li>
                    <li><a href="#about" class="scrollto">About Me</a></li>
                    <li><a href="#services" class="scrollto">Services</a></li>
                    <li><a href="#works" class="scrollto">My Works</a></li>
                    <li><a href="#contacts" class="scrollto">Contact</a></li>
                </ul>
 
            </div>
        </nav>
        <div class="container section1">
            <div class="row ">
                <div class="col-5 wow slideInLeft">
                    <img src="img/116532548_288204682606509_4641127802972010941_n.jpg" class="img" alt="">
                </div>
                <div class="col-7 word wow slideInRight">Hi! My name is David and I'm a Web Designer and Web Developer</div>
            </div>
        </div>
    </main>
    <section id="about" class=" background-image2">

        <div class="container">
            
            <div class="row shadow text-dark shadow py-5 px-3 wow rollIn 5s">
                <div class="col-md-6  me">
                    <h2 class="text-center about wow zoomInUp mt-2"> ABOUT ME</h2>
                    <br><br>
                    <div class="name">
                        <div class="image-container col-lg-3 ">
                            <img src="img/116532548_288204682606509_4641127802972010941_n.jpg" alt="" class="image rounded">
                        </div>
                        <div class="col-8">
                            <b>Name:</b> Bada Oluwatimilehin David
                            <br>
                            <b>Profile:</b> Full Stack Web Developer 
                            <br>
                            <b>Email:</b> badadavid04@gmail.com
                            
                            <b>Phone:</b> +234(0) 806 1646 761
                        </div>
                    </div>
                    
                    <div class="skill col-6">
                        <p class="title-s text-center"><b>FRONT-END</b></p>
                        <span>HTML</span> <span class="pull-right">92%</span>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span>CSS3</span> <span class="pull-right">75%</span>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span>BOOTSTRAP</span> <span class="pull-right">90%</span>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span>JAVASCRIPT</span> <span class="pull-right">80%</span>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span>REACT</span> <span class="pull-right">88%</span>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill col-6">
                        <p class="title-s text-center"><b>BACK-END</b></p>
                        <span>PHP</span> <span class="pull-right">70%</span>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span>NODE JS</span> <span class="pull-right">80%</span>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span>MY SQL</span> <span class="pull-right">90%</span>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        
                    </div>
                </div>  
                <div class="container text-justify col-md-6">
                    <div class="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus eaque placeat ab aliquid deleniti recusandae
                        voluptates consectetur sapiente labore laborum itaque molestiae totam non assumenda nobis, commodi fugiat iusto. 
                        Doloremque rem magni cupiditate similique sequi libero facilis iusto repudiandae blanditiis officia quis eum inventore
                        sed nam ipsam minus, velit consequatur aut dolor! Accusamus consectetur, aliquam aspernatur amet eos quod repudiandae 
                        quia necessitatibus ipsa aliquid ratione vero, perferendis asperiores voluptatem. Reiciendis, optio sequi. Sapiente eius
                        enim pariatur iure nam repellendus quaerat facere impedit odio? Ducimus quibusdam suscipit, nulla ipsum aliquam explicabo
                        excepturi eos, reiciendis, nobis saepe at ab magnam ullam. Commodi maiores fuga minus quas molestias porro, labore numquam
                        enim fugiat magnam reiciendis nesciunt iste animi voluptatum aliquam? Inventore, soluta itaque. Iure totam exercitationem
                        tenetur! Cupiditate vero molestias incidunt veritatis voluptas iusto asperiores esse assumenda quod natus atque vitae,
                        voluptatem recusandae facere provident tempore architecto? Dolore saepe voluptatum ex praesentium labore!
                    </div> 
                </div>
            
                
            </div>
            
        </div>
        
    </section>
    <section class="services" id="services">
        <h2 class="services-heading"> SERVICES</h2>
        <div class="container">
            <div class=" service-card">
                <div class="cards shadow">
                    <img src="icons/icons8-web-design-64.png" alt="">
                    <div class="service-main">Web Design</div>
                    <div class="service-text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </div>
                </div>
                <div class="cards shadow">
                    <img src="icons/icons8-web-development-64.png" alt="">
                    <div class="service-main">Web Development</div>
                    <div class="service-text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </div>
                </div>
                <div class="cards shadow">
                    <img src="icons/icons8-responsive-design-58.png" alt="">
                    <div class="service-main">Responsive Design</div>
                    <div class="service-text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slides" id="works" >
        <h2 class="works">MY WORKS</h2>
        <div class="container">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active bg-dark"></li>
                  <li data-target="#demo" data-slide-to="1" class="bg-dark"></li>
                  <li data-target="#demo" data-slide-to="2" class="bg-dark"></li>
                  <li data-target="#demo" data-slide-to="3" class="bg-dark"></li>
                  <li data-target="#demo" data-slide-to="4" class="bg-dark"></li>
                  <li data-target="#demo" data-slide-to="5" class="bg-dark"></li>
                  <li data-target="#demo" data-slide-to="6" class="bg-dark"></li>
                  <li data-target="#demo" data-slide-to="7" class="bg-dark"></li>
                  <li data-target="#demo" data-slide-to="8" class="bg-dark"></li>
                  <li data-target="#demo" data-slide-to="9" class="bg-dark"></li>
                  <li data-target="#demo" data-slide-to="10" class="bg-dark"></li>
    
                </ul>
                
                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="slides/e-tailor.png" alt="Los Angeles" width="1100" height="500">
                  </div>
                  <div class="carousel-item">
                    <img src="slides/e-tailorAdmin.png" alt="Chicago" width="1100" height="500">
                  </div>
                  <div class="carousel-item">
                    <img src="slides/ecommerce-signUp.png" alt="New York" width="1100" height="500">
                  </div>
                  <div class="carousel-item">
                    <img src="slides/ecommerce.png" alt="New York" width="1100" height="500">
                  </div>
                  <div class="carousel-item">
                    <img src="slides/ecommerce2.png" alt="New York" width="1100" height="500">
                  </div>
                  <div class="carousel-item">
                    <img src="slides/ecommerce-login.png" alt="New York" width="1100" height="500">
                  </div>
                  <div class="carousel-item">
                    <img src="slides/school.png" alt="New York" width="1100" height="500">
                  </div>
                  <div class="carousel-item">
                    <img src="slides/school-admin.png" alt="New York" width="1100" height="500">
                  </div>
                  <div class="carousel-item">
                    <img src="slides/xfinance-login.png" alt="New York" width="1100" height="500">
                  </div>
                  <div class="carousel-item">
                    <img src="slides/xfinance.png" alt="New York" width="1100" height="500">
                  </div>
                  <div class="carousel-item">
                    <img src="slides/xfinance-signUp.png" alt="New York" width="1100" height="500">
                  </div>
                </div>
                
                <!-- Left and right controls -->
                <!-- <a class="carousel-control-prev " href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon "></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon "></span>
                </a> -->
            </div>
        </div>
    </section>

    <section class="contact" id="contacts" class="">
      <h2 class="contact-mainText">CONTACT</h2>
      
        <div class="contact-row">
          <div class="col-md-6 ">
            <div class="hit">Hit me up on...</div>
            <div class="socials">
              <div class="row1">
                <a href="" class=" social what ">
                  <div>Whatsapp</div>
                  <div class="fa fa-whatsapp fa-3x"></div>
                  
                </a>
                <a href="" class=" social ig">
                  <div>Instagram</div>
                  <div class="fa fa-instagram fa-3x"></div>
                </a>
              </div>
              
              <div class="row2">
                <a href="" class=" social fb">
                  <div>Facebook</div>
                 <div class="fa fa-facebook mt-2 fa-3x"></div>
                </a>
                <a href="" class=" social lin">
                  <div>LinkedIn</div>
                  <div class="fa fa-linkedin fa-4x"></div>
                </a>
              </div>
              <div class="row3">
                <a href="" class=" social twi">
                  <div>Twitter</div>
                  <div class="fa fa-twitter fa-4x"></div>
                </a>
                <a href="" class="social tele">
                  <div>Telegram</div>
                  <div class="fa fa-telegram mt-2 fa-3x"></div>
                </a>
              </div>

            </div>
          </div>
          
          <form method="post" action="index.php" name="email" class="col-md-6">
            <div class="inputs">
              <input type="text" class="col-6" name="client-name" required placeholder="Your Name">
              <input type="email" class="col-5" name="client-email" required placeholder="Your Email Address">
            </div>
            <input type="text" class="col-12 my-3" name="subject" required placeholder="Subject">
            <textarea id="" placeholder="Message" name="text" required class="col-12" cols="30" rows="10" maxlength="300"></textarea>
            <input type="submit" id="submitBtn" name="send-btn" value="Send Message">
          </form>
        </div>
    </section>
    <footer>
      <div class="">
        <small class=""><i class="fa fa-copyright pr-1"></i>Copyright <strong>Bada O. David</strong>. All Rights Reserved</small>
      </div>
      <div><small class="">Designed by Bada Oluwatimiehin David</small></div>
    </footer>

    
    <script src="plugins/bootstrap/assets/js/vendor/jquery-slim.min.js"></script>
    <!-- <script src="plugins/bootstrap/assets/js/vendor/popper.min.js"></script> -->
    <script src="plugins/bootstrap/assets/js/vendor/clipboard.min.js"></script>
    <script src="plugins/bootstrap/assets/js/vendor/anchor.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/wow/wow.min.js"></script>
    <script>
      new WOW().init()
    </script>
</body>
</html>