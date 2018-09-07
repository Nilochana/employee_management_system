<!DOCTYPE html>
<html>

<head>
    <title>Machine Learning</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="
        stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
        animate.css/3.5.2/animate.min.css">
</head>

<body>
    <header>


        <!--start nav bar-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>


                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">


                        <div>

                            <ul class="main-nav animated slideInDown" id="check-class">
                        </div>
                        <li>
                            <a href="index.html">PAYROLL</a>
                        </li>
                        <li>
                            <a href="about.html">EMPLOYEE</a>
                        </li>
                        <li>
                            <a href="sponcers.html">LEAVE</a>
                        </li>
                        <li>
                            <a href="#">WORKFLOW</a>
                        </li>

                        </ul>
                    </ul>
                    <a href="#" class="mobile-icon" onclick="slideshow()">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!--end nav bar-->
        <nav>
            <div class="row clearfix">
                <br>
                <br>
                <br>
                <img src="images/r2.jpg" class="r1">
                
                <a href="#" class="mobile-icon" onclick="slideshow()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </nav>

        <div class="maiin-content-header">
            <center>
            <br>
            <br>
            <br>
            <h1>EMPLOYEE MANAGEMENT SYSTEM<br></h1>
               
            <a href="#" class="btn btn-full"> click to sign in</a>
            <a href="#" class="btn btn-nav"> click to Register</a>
            <br>
            <br>
           <a herf="#" ><button class="btn btn-success">RSVP</button></a>
        </div>
    </center>
    </header>
    <center>
    <footer class="footer">
            <!-- <footer id="footer" class="footer text-center" style="padding: 2rem 0">
                                                    <div class="footer-menu">
                                    <ul class="nav unstyled">
                                        <li>
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li>
                                            <a href="about.html">About</a>
                                        </li>
                                        <li>
                                            <a href="speach.html">Speakers</a>
                                        </li>
                                       
                                        <li>
                                            <a href="chart.html">Schedule</a>
                                        </li>
            
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                              
                                Footer menu end -->
                            
        <P>copy right &copy; 2018 ML HACKATHON</P>
    </footer>
</center>
    <script type="text/javascript">

        function slideshow() {

            var x = document.getElementById('check-class');
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

    </script>


</body>

</html>