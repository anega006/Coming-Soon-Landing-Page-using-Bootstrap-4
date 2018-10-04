<?php
    $emailError = '';
    $result = '';

    if(isset($_POST['submit'])){
        
        
        $headers =  'MIME-Version: 1.0' . "\r\n"; 
        $headers .= 'From: Your name <info@address.com>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $header .= 'From: '.$_POST['email']."\r\n";
        $to = 'anega006@gmail.com';
        $subject = 'Email signup';
        $body = 'Please sign me up to the mailing list';
            
        if(!isset($_POST['email'])){
            $emailError = '<div class="text-danger><i class="fa fa-exclamation-triangle" aria-hidden="true></i> &nbsp;Please enter a valid email address</div>';
        }
        
        if(!$emailError){
            if(mail($to, $subject, $body, $header)){
                $result = '<div class="text-success"><i class="fa fa-check" aria-hidden="true></i> &nbsp;Thank You! We will keep you updated.</div>';
            }
            else{
                $result = '<div class="text-danger><i class="fa fa-exclamation-triangle" aria-hidden="true></i> &nbsp;Sorry there has been an error, please try again.</div>';
            }
        }
        
    }

?>          


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Just+Another+Hand">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Bootstrap 4</title>
  </head>
  <body>
    
      <section id="logo">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 text-center">
                      <img src="img/img/my-logo.png" class="img-fluid" height="300px" width="280px">
                  </div>
              </div>
          </div>
      </section>
      
      <section id="intro">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 text-center">
                      <p class="text-center">We're working hard, we'll be ready to launch in...</p>
                  </div>
              </div>
          </div>
      </section>
      
      <section id="counter">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 text-center">
                      <div class="countdown"></div>
                  </div>
              </div>
          </div>
      </section>
      
      <section id="icons">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 text-center">
                      <ul class="list-inline">
                          <a href="" target="blank"><li class="list-inline-item"><i class="fa fa-3x twitter fa-twitter-square" aria-hidden="true"></i></li></a>
                          <a href="" target="blank"><li class="list-inline-item"><i class="fa fa-3x facebook fa-facebook-square" aria-hidden="true"></i></li></a>
                          <a href="" target="blank"><li class="list-inline-item"><i class="fa fa-3x googleplus fa-google-plus-square" aria-hidden="true"></i></li></a>
                          <a href="" target="blank"><li class="list-inline-item"><i class="fa fa-3x instagram fa-instagram" aria-hidden="true"></i></li></a>
                      </ul>
                  </div>
              </div>
          </div>
      </section>
      
      <section id="signup">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 text-center">
                      <form class="form-inline" role="form" method="post" action="#signup">
                          <input type="email" class="form-control form-control-sm" name="email" placeholder="info@example.com">
                          <button type="submit" class="btn btn-sm btn-signup" name="submit" value="send">Find out more</button>
                      </form>
                      
                      <?php if(empty($emailError)){ echo $emailError;}?>
                      <?php if(empty($result)){ echo $result;}?>
     
                  </div>
              </div>
          </div>
      </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.js"></script>   
    <script type="text/javascript">
    $(function() {
        $('.countdown').countdown({
        date: "September 12, 2080 10:00:00"
        });
    });
    </script> 
      
  </body>
</html>
