<html>

<head>
    <title>Expense Manager</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./styles/custom.css">
  <script type="text/javascript" src="./scripts/custom.js"></script>
</head>

<data-spy="scroll" data-target="#navbarSupportedContent">
    <header >
        <nav class="navbar navbar-expand-lg navbar-light"  id="stickynavbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">LOGO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#about">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact-us">CONTACT US</a>
                        </li>
                    </ul>
                    <li class="nav-item">
                        <button type="SignIn" class="btn btn-primary"><a class="nav-link" href="registrationform.php">SignIn</a></button>
                    </li>
                </div>
            </div>
        </nav>

        <div class="mid">
             <img src="images/CoverImage.png" class="img-fluid"> 
        </div>

    </header>

    <section id="about" class="ABOUT py-5">
        <div class="row align-items-center container my-5 mx-auto">
            <div class="text col-lg-6 col-md-6 col-12 w-50 pt-3 pb-3">
                <h6>ABOUT</h6>
                <h2>Expense Manager</h2>
                <p>Our website is an <b> "Expense Management System"</b>. In this website you can calculate your budget easily. So, you can calculate your budget by one click. It is extremely helpful to develop the most accurate budget.
                 </p>
                 
                <a class="text-dark" href="registrationform.php" > GET START</a>
            </div>
            <div class="img col-lg-6 col-md-6 col-12 w-50 pt-3 pb-3">
                <img class="img-fluid" src="images/about.png" width="90%">
            </div>

        </div>
    </section>
    <section id="portfolio" class="PORTFOLIO py-5">

        <div class="col mx-auto align-items-center my-5">
            <div class="heading text-center">
                <h2 class="font-weight-bold pb-5 text-light">How To Use It?</h2>
            </div>
            <div class="row mx-auto justify-content-center align-items-center text-center container">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="one m-2">
                        <img class="img-container" src="images/step1.png">
                        <h5 class="font-weight-bold pt-4">Step# 1</h5>
                        <p><b>Registerartion<br>Login<br></b>Register on Expense Manager and then login</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="one m-2">
                        <img class="img-container" src="images/step2.png">
                        <h5 class="font-weight-bold pt-4">Step# 2</h5>
                        <p><b>Expense Manager</b><br>After Login <br>You comes on Expense Manager Page and enter product name, product price and select the Quantity</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="one m-2">
                        <img class="img-container" src="images/step3.png">
                        <h5 class="font-weight-bold pt-4">Step# 3</h5>
                        <p><b>Total</b><br>After Enter the Product Name, Price and Quantity<br>click on Total button<br> And then you get the total expense</p> 
                    </div>

                    
                </div>
            </div>
        </div>


       
    </section>

    <section id="services" class="SERVICES py-5">
        <div class="row align-items-center container my-5 mx-auto">
            <div class="img col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
                <img class="img-fluid" src="images/services.png" width="90%">
            </div>

            <div class="text col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
                <h6>SERVICES</h6>
                <h2>Expense Manager</h2>
                <p>We have provide you the option on the<b>"Expense Manager" </b>which will sum up the total price or total amount you expend in particular month. So, you can calculate your expense easily by one click. It is extremely helpful to develop the most accurate budget.  </p>
                 <ul >
                    <li><b>Calulate the accurate budget</b></li>
                    <li><b>Provide the user friendly interface</b></li>
                    <li><b>Calculate budget by one click</b></li>
                </ul>
               
            </div>

        </div>
    </section>

    <section id="contact-us" class="CONTACT-US py-5">
        <div class="row align-items-center container my-5 mx-auto">
            <div class="text col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
                <h6>CONTACT US</h6>
                <div class="row text-left">                      
                      <form action="contact-us.php" method="post">
                          <div class="form-group">
                              <label for="email">Email:</label>
                              <input type="email" class="form-control" id="email" name="email" required>
                          </div>
                          <div class="form-group">
                              <label for="subject">Subject:</label>
                              <input type="subject" class="form-control" id="subject" name="subject" required>
                          </div>
                          <div class="form-group">
                              <label for="message">Message:</label>
                              <textarea class="form-control" id="message" name="message" required></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </form>                                 
                    </div>
   
                
            </div>
            
            <div class="img col-lg-6 col-md-6 col-12 w-50 pt-3 pb-3">
                <img class="img-fluid" src="images/contact-us.png" width="90%">
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-2 text-light">
        <div class="footer-copyright text-center py-3">© 2021. All rights reserved.</div>
    </footer>
    <!-- Footer -->

    <script>
        window.onscroll = function () { myFunction() };

        var header = document.getElementById("stickynavbar");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>
</body>

</html>
