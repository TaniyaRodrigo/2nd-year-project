<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FaceID</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <script src="my_js.js"></script>

    <style type="text/css">
    .mySlides{
        display:none;
    }
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: relative;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    } 
    .infportal{
        
    
    }
    </style>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.search-box input[type="text"]').on("keyup input", function(){
            /* Get input value on change */
            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".result");
            if(inputVal.length){
                $.get("search.php", {term: inputVal}).done(function(data){
                    // Display the returned data in browser
                    resultDropdown.html(data);
                });
            } else{
                resultDropdown.empty();
            }
        });
        
        // Set search input value on click of result item
        $(document).on("click", ".result p", function(){
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            $(this).parent(".result").empty();
        });
    });
    
    </script>


</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">FaceID</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" style="position: fixed; margin-left: 250px;" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#about">about</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#search">Search for Missing</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#portal">information Portal</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact">Contact us</a></li>
                    <li class="nav-item dropdown" style="padding-top:7px;">
                    <button type="button" class="btn btn-primary dropdown-toggle btn-signIN"  data-toggle="dropdown">
                            Sign In
                    </button>
                    <div class="dropdown-menu" >
                        <a class="dropdown-item" href="./AdminLogin.php">Officials</a>
                        <a class="dropdown-item" href="./Userlogin.php">Registered User</a>
                    </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image: url('assets/img/faceid4.jpg')" >
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading text-uppercase img-title-main"><span>National Unrecognized
                     Persons  Database</span></div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" style="opacity: 0.8;" role="button" href="#search">Search</a></div>
            </div>
    </header>
    <section id="about" style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">about</h2>
                    </br></br>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner aboutImage" role="listbox" style=" width:1144px; height: 500px !important;">
                        <div class="carousel-item active ">
                        <img class="d-block w-100" src="./assets/img/skull/skull (1).jpg" alt="First slide" style=" width:1143px; height: 500px !important;">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/img/skull/skull (2).jpg" alt="Second slide" style=" width:1143px; height: 500px !important;">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/img/skull/skull (3).jpg" alt="Third slide" style=" width:1143px; height: 500px !important;">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/img/skull/skull (4).jpg" alt="Fourth slide" style=" width:1143px; height: 500px !important;">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/img/skull/skull (5).jpg" alt="Fifth slide" style=" width:1143px; height: 500px !important;">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                

                <div class="w3-content w3-section" style="max-width:1400px">
                    <div class="w3-container w3-xlarge w3-white w3-card-4">
                        <p style="font-size:15px;">
                        Forensic facial reconstruction is still at its infancy in Sri Lanka and is yet to utilize the advanced technologies 
                        of other countries. Hence introducing a more efficient multimedia based technique to the local forensic officials in
                        order to improve the efficiency and the accuracy of the reconstructions is the aim of this study. In contrast to the
                        other mechanisms used for facial reconstruction by others, this paper adopts a novel approach of muscle based facial
                        reconstruction which goes hand in hand with the manual reconstruction process. The adopted process involved,
                        acquiring a 3D model of the skull and digitally sculpting muscles in a 3D environment, followed by adding different 
                        facial features to improve identification. The research also encompassed a tissue thickness analysis that is conducted 
                        for the first time on Sri Lankans as well as a facial component analysis, both of which were needed to improve the accuracy
                        of the final output.</p>
                        <p><span class="w3-tag w3-grey" style="font-size:15px;"><a href="./assets/pdf/3D_Facial_Reconstruction.pdf">Read Full Article </a> </span>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <section id="search" style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <form name="searchform" action="./searchresult.php" method="post" onsubmit="return required()">
                        <h2 class="text-uppercase section-heading">Search</h2>
                        <!-- Select district -->
                        <select class="browser-default custom-select custom-select-lg mb-3" name="dist" id="dist" #ss style="font-size:20px;">
                            <option selected>Select District</option>
                            <option value="Ampara">Ampara</option>
                            <option value="Anuradhapura">Anuradhapura</option>
                            <option value="Badulla">Badulla</option>
                            <option value="Batticaloa">Batticaloa</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Galle">Galle</option>
                            <option value="Gampaha">Gampaha</option>
                            <option value="Hambantota">Hambantota</option>
                            <option value="Jaffna">Jaffna</option>
                            <option value="Kalutara">Kalutara</option>
                            <option value="Kandy">Kandy</option>
                            <option value="Kegalle">Kegalle</option>
                            <option value="Kilinochchi">Kilinochchi</option>
                            <option value="Kurunegala">Kurunegala</option>
                            <option value="Mannar">Mannar</option>
                            <option value="Matale">Matale</option>
                            <option value="Matara">Matara</option>
                            <option value="Monaragala">Monaragala</option>
                            <option value="Mullaitivu">Mullaitivu</option>
                            <option value="Nuwara Eliya">Nuwara Eliya</option>
                            <option value="Polonnaruwa">Polonnaruwa</option>
                            <option value="Puttalam">Puttalam</option>
                            <option value="Ratnapura">Ratnapura</option>
                            <option value="Trincomalee">Trincomalee</option>
                            <option value="Vavuniya">Vavuniya</option>
                        </select>

                        <!-- Select police area   -->
                        <select class="custom-select custom-select-sm" name="polarea" id="polarea" #ss style="font-size:13px;">
                            <option selected>Select Police Area</option>
                            <option value="Ampara Division">AMPARA DIVISION</option>
                            <option value="Kandy Division">KANDY DIVISION</option>
                            <option value="Gampola Division">GAMPOLA DIVISION</option>
                            <option value="Matale Division">MATALE DIVISION</option>
                            <option value="Nuwaraeliya Division">NUWARAELIYA DIVISION</option>
                            <option value="Hatton Division">HATTON DIVISION</option>
                            <option value="Batticaloa Division">BATTICALOA DIVISION</option>
                            <option value="Trincomalee Division">TRINCOMALEE DIVISION</option>
                            <option value="Kantale Division">KANTALE DIVISION</option>
                            <option value="Anuradhapura Division">ANURADHAPURA DIVISION</option>
                            <option value="Polonnaruwa Division">POLONNARUWA DIVISION</option>
                            <option value="Kankasanthurai Division">KANKASANTHURAI DIVISION</option>
                            <option value="Jaffa Division">JAFFNA DIVISION</option>
                            <option value="Vavunia Division">VAVUNIYA DIVISION</option>
                            <option value="Kilinochchi Division">KILINOCHCHI DIVISION</option>
                            <option value="Mannar Division">MANNAR DIVISION</option>
                            <option value="Mulathivu Division">MULATHIVU DIVISION</option>
                            <option value="Kurunegala Division">KURUNAGALA DIVISION</option>
                            <option value="Kuliyapitiya Division">KULIYAPITIYA DIVISION</option>
                            <option value="Nikaweratiya Division">NIKAWERATIYA DIVISION</option>
                            <option value="Puttalam Division">PUTTALAM DIVISION</option>
                            <option value="Chilaw Division">CHILAW DIVISION</option>
                            <option value="Ratnapura Division">RATNAPURA DIVISION</option>
                            <option value="Kegalle Division">KAGALLE DIVISION</option>
                            <option value="Seethawaka Division">SEETHAWAKAPURA DIVISION</option>
                            <option value="Matara Division">MATARA DIVISION</option>
                            <option value="Galle Division">GALLE DIVISION</option>
                            <option value="Elpitiya Division">ELPITIYA DIVISION</option>
                            <option value="Tangalle Division">TANGALLE DIVISION</option>
                            <option value="Badulla Division">BADULLA DIVISION</option>
                            <option value="Andrawela Division">ANDARAWELA DIVISION</option>
                            <option value="Monaragala Division">MONARAGALA DIVISION</option>
                            <option value="Colombo Central Division">COLOMBO CENTRAL DIVISION</option>
                            <option value="Colombo North Division">COLOMBO NORTH DIVISION</option>
                            <option value="Colombo South Division">COLOMBO SOUTH DIVISION</option>
                            <option value="Kelaniya Division">KELANIYA DIVISION</option>
                            <option value="Gampaha Division">GAMPAHA DIVISION</option>
                            <option value="Negombo Division">NEGOMBO DIVISION</option>
                            <option value="Nugegoda Division">NUGEGODA DIVISION</option>
                            <option value="Mount Lavinia Division">MOUNT LAVINIA DIVISION</option>
                            <option value="Panadura Division">PANADURA DIVISION</option>
                            <option value="Kaluthara Division">KALUTARA DIVISION</option>
                        </select> 
                        <br>
                        <br>
                        <!-- <form action="/action_page.php" > -->
                            Missing Date : <input type="date" id="fday" name="fday" style="border-radius: 7px;">
                        <br>
                        <br>
                        <button type="submit" name="submit" class="btn btn-outline-primary"><h3>Search</h3> </button>
                    </form>
                </div>
            </div>

            <!-- checking the form validation -->    
            <script>
                function required(){
                    
                    var empt = document.forms["searchform"]["dist"].value;
                    var empt1 = document.forms["searchform"]["polarea"].value;
                    var empt2 = document.forms["searchform"]["fday"].value;
                    if (empt == "Select District" && empt1 == "Select Police Area" && empt2 == ""){
                        alert("Please input a Value to Search");
                        return false;
                    }
                        return true; 
                }
            </script> 

            <!-- Viewing last 8 Data's entered into the database -->
            <?php
                    $con = mysqli_connect("localhost","root","","faceid");
                    if (!$con){
                        die('Could not connect: ' . mysqli_error());
                    }      
                
                    $sql="SELECT * FROM unidentifiedbodies ORDER BY date DESC LIMIT 8";

                    // echo $sql;
                
                    $result = mysqli_query($con,$sql);
                    
                    if (!$result) {
                        die('Error: ' . mysqli_error($con));
                    }?>

                    <div class="row cardContainer" >
                    <?php
                    While ($row = mysqli_fetch_assoc($result)){
                        $a=$row['facialphotograph'];   ?>
                        <div class="card cardDetail "> 
                           <!-- <p><img src="./assets/img/faceid.jpg" width="250px" height="150px" alt="sometext" hspace="15"/></p> -->
                            <?php
                                echo "<img class='card-img-top' src ='data:image/jpg;base64," . base64_encode($a) . "' alt = ''/ height=170px width=auto  >  "; ?>
                                <div class="card-body">
                                    <p class="list-group-item"><?php echo $row['date'];?></p>
                                    <p class="list-group-item"><?php echo $row['policearea'];?></p>
                                    <p class="list-group-item"><?php echo $row['province'];?></p>
                                    <p class="list-group-item"><?php echo $row['district'];?></p>
                               </div>
                            </div>
                        <?php                        
                    }?>        
                </div>  
            <br>
            <br>
            <!-- <p align="center"><button type="button" class="btn btn-outline-primary"><h5>View More Data</h5></button></p> -->
        </div>
    </section>
    <!-- <section id="infoportal" class="bg-light" style="background-color: #f5f5f5;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Information portal</h2>
                    <h3 class="section-subheading text-muted">About our researches and other things</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 infoportal-item">
                    <a href="#infoportalModal1" class="infoportal-link" data-toggle="modal">
                        <div class="infoportal-hover">
                            <div class="infoportal-hover-content"></div>
                        </div><img class="img-fluid" src="assets/img/imageicon.png" width="200" height="200"></a>
                    <div class="infoportal-caption">
                        <h4><a href="imagegallery.html">Images</a></h4>
                        <p class="text-muted">Image Gallery</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 infoportal-item">
                    <a href="#infoportalModal2" class="infoportal-link" data-toggle="modal">
                        <div class="infoportal-hover">
                            <div class="infoportal-hover-content"></div>
                        </div><img class="img-fluid" src="assets/img/videoicon.png" width="200" height="200"></a>
                    <div class="infoportal-caption">
                        <h4><a href="videogallery.html">Videos</a></h4>
                        <p class="text-muted">Video Gallery</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 infoportal-item">
                    <a href="#infoportalModal3" class="infoportal-link" data-toggle="modal">
                        <div class="infoportal-hover">
                            <div class="infoportal-hover-content"></div>
                        </div><img class="img-fluid" src="assets/img/magazineicon.png" width="200" height="200"></a>
                    <div class="infoportal-caption">
                        <h4><a href="magazinegallery.html">Magazines</a></h4>
                        <p class="text-muted">Data from Magazines</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 infoportal-item">
                    <a href="#infoportalModal4" class="infoportal-link" data-toggle="modal">
                        <div class="infoportal-hover">
                            <div class="infoportal-hover-content"></div>
                        </div><img class="img-fluid" src="assets/img/booksicon.png" width="200" height="200"></a>
                    <div class="infoportal-caption">
                        <h4><a href="booksgallery.html">Books</a></h4>
                        <p class="text-muted">Data from Books</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 infoportal-item">
                    <a href="#infoportalModal5" class="infoportal-link" data-toggle="modal">
                        <div class="infoportal-hover">
                            <div class="infoportal-hover-content"></div>
                        </div><img class="img-fluid img-fluid" src="assets/img/paperarticleicon.png" width="170" height="170"></a>
                    <div class="infoportal-caption">
                        <h4><a href="articlegallery.html">Paper Articles</a></h4>
                        <p class="text-muted">Articles</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 infoportal-item">
                    <a href="#infoportalModal6" class="infoportal-link" data-toggle="modal">
                        <div class="infoportal-hover">
                            <div class="infoportal-hover-content"></div>
                        </div><img class="img-fluid" src="assets/img/othericon.png" width="200" height="200"></a>
                    <div class="infoportal-caption">
                        <h4><a href="othergallery.html">Other Resources</a></h4>
                        <p class="text-muted">All other resources</p>
                    </div>
                </div>
            </div>
        </div>
    </section>  -->
    
    <section id="portal" style="background-color: white">
        <div class="infportal">
            <h2 class="w3-center">Information Portal</h2>
            <?php
            $conn = mysqli_connect("localhost","root","","faceid");
            if (!$conn){
                die('Could not connect: ' . mysqli_error());
            } 
            $result="SELECT * FROM portal";
            $res = mysqli_query($conn,$result);
            if (!$result) {
                die('Error: ' . mysqli_error($con));
            }

            while($row = mysqli_fetch_assoc($res)){ ?>
                <div class="w3-content w3-section" style="max-width:1400px">
                <div class="mySlides w3-container w3-xlarge w3-white w3-card-4">
                    <p><span class="w3-tag w3-yellow"><?php echo $row['date']?></span>
                    <p style="font-size:18px;"><?php echo $row['article'] ?></p>
                </div>
            <?php
            }?>

            <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(carousel, 3000); // Change image every 3 seconds
                }
            </script>
        </div>
    </section>
        
    
    <section id="contact" style="background-image:url('assets/img/map-image.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Inform About Missing Persons</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="./contactus/form.php" method="POST" id="contactForm" name="contactForm" onsubmit="return checking()">
                        <div class="form-row">
                            <div class="col col-md-6">
                                <div class="form-group"><input class="form-control" type="text" required="" name="name" placeholder="Your Name *"><small class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="email" required="" name="email" placeholder="Your Email *"><small class="form-text text-danger help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="tel" required="" name="phone" placeholder="Your Phone *"><small class="form-text text-danger help-block lead"></small></div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><textarea class="form-control" required="" name="message" placeholder="Your Message *"></textarea><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col-md-6">
                                <div calss="form-group"><input class="form-control" type="file" name="picture" placeholder="Upload Image *" accept="image/*"><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <!-- <div class="col">
                                <div class="clearfix"></div>
                            </div> -->
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase" type="submit" id="sendMessageButton" >Send Message</button></div>
                        </div>
                    </form>

                    <!-- Checking the form validation -->
                    <script>
                        function checking(){
                            
                            var empt = document.forms["contactForm"]["name"].value;
                            var empt1 = document.forms["contactForm"]["email"].value;
                            var empt2 = document.forms["contactForm"]["phone"].value;
                            var empt3 = document.forms["contactForm"]["message"].value;
                            if (empt == "" || empt1 == "" || empt2 == "" || empt3 == ""){
                                alert("Please input a Value to Submit");
                                return false;
                            }
                                return true; 
                        }
                    </script>
                </div>
            </div>
        </div>
    </section>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>