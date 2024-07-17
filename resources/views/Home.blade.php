<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glint</title>
    <!-- <link rel="icon" href="{{url('assests/img/img2.jpg')}}" type="image/jpg"> -->
    <link rel="icon" href="{{url('assets/images/img3.jpg')}}" type="image/jpg">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/backtotop.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="assets/css/flaticon_expovent.css">
    <!-- <link rel="stylesheet" href="{{url('assests/css/fontawesome-pro.css')}}"> -->
    <link rel="stylesheet" href="{{url('assets/css/spacing.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
    


    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{url('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/owl.theme.green.min.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

    <style>
        .home-content__buttons {
            border: 1px solid white;
        }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100%;
            width: 150px;
            position: fixed;
            top: 0;
            right: -250px; /* Hide the sidebar initially */
            background-color: #111;
            padding-top: 20px;
            transition: 0.3s;
        }
        .sidebar.active {
            right: 0;
        }
        .sidebar h2 {
            color: white;
            text-align: center;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #444;
        }
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
        }
        .sidebar ul li a:hover {
            background-color: #575757;
        }
        .content {
            margin-right: 20px;
            padding: 20px;
            transition: 0.3s;
        }
        .menu-bars {
            position: fixed;
            top: 20px;
            right: 50px;
            cursor: pointer;
            z-index: 1;
            background-color:black;
        }
        .bar {
            width: 35px;
            height: 5px;
            background-color: white;
            margin: 6px 0;
            transition: 0.4s;
        }
        .content.active {
            margin-right: 270px;
        }
        
        
        
        
        /* CSS */
       .menu-container {
    display: flex;
    justify-content: flex-end; /* Aligns content to the right */
    margin-top: 20px;
}

.menu-link h4 {
    color: green;
}
button:hover
{
  background-color:white;

}
.large-brush-icon {
            color: green;
            font-size: 100px; /* Controls the size of the icon */
            margin-left: 20px;
        }
        .carousel-inner img {
      width: 100%;
      height: 100%;
    }
    .slick-slide img {
            display: block;
            width: 100%;
            height: auto;
            margin: 0 auto;
        }
        .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  .contact-box {
            background-color: black;
            height: 600px;
            border: 1px solid black;
            margin-top: 50px;
            color: white;
        }
        input[type="text"]:focus {  
  border-color: dodgerBlue;  
  box-shadow: 0 0 8px 0 dodgerBlue;  
}  
  
.inputWithIcon input[type="text"] {  
  padding-left: 40px;  
}  
  
.inputWithIcon {  
  position: relative;  
}  
  
.inputWithIcon i {  
  position: absolute;  
  left: 10;  
  top: 8px;  
  padding: 9px 8px;  
  color: #aaa;  
  transition: 0.3s;  
}  
  
.inputWithIcon input[type="text"]:focus + i {  
  color: dodgerBlue;  
}  
  
.inputWithIcon.inputIconBg i {  
  background-color: #aaa;  
  color: #fff;  
  padding: 9px 4px;  
  border-radius: 4px 0 0 4px;  
}  
  
.inputWithIcon.inputIconBg input[type="text"]:focus + i {  
  color: #fff;  
  background-color: dodgerBlue;  
} 
        @keyframes marqueeUp {
            from {
                transform: translateY(100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .marquee {
            animation: marqueeUp 1s ease-out;
        }
        .c1{
            width: 1020px;
        }
nav{
    height:40px;
    width:70px;
    margin-left:335px;
    margin-top:20px;
    background-color:black;
    color:green;
    /* position:sticky; */
}
.n1
{
    margin-left:860px;
    width:60px;

}

.box:hover{
transform:scale(1.3);
z-index:1;
}
img5
{
    width:10000 px;
}
.c5 {
    width: 100%;
    max-width: 100%;
    height: auto;
}

@media (max-width: 768px) {
    .col-sm-2 {
        width: 100%; /* Ensure full width on smaller screens */
        text-align: center; /* Center align for better readability */
        margin-bottom: 20px; /* Add spacing between elements */
    }
    .col-sm-6 {
        width: 100%; /* Ensure full width on smaller screens */
        text-align: center; /* Center align for better readability */
    }
    .col-sm-4 {
        width: 100%; /* Ensure full width on smaller screens */
        text-align: center; /* Center align for better readability */
        margin-top: 20px; /* Add spacing between elements */
    }
}


    </style>
   
</head>
<body>
<div class="container-fluid c5" style="background-image: url('{{ url('assets/images/img5.jpeg') }}');">
    <div class="row">
        <div class="col-sm-2 text-center">
            <h1 style="color: white;">Glint</h1>
        </div>
        <div class="col-sm-6">
            <h4 class="marquee" style="color: darkgrey; margin-top: 80px;">Welcome To Glint</h4>
            <h1 class="marquee" style="color: white; margin-top: 30px;">
                We are a creative group<br>
                of people who design<br>
                influential brands and<br>
                digital experiences.
            </h1>
            <button type="button" class="btn btn-light marquee" style="border: 1px solid white;">START A PROJECT</button>
            <button type="button" class="btn btn-light marquee" style="border: 1px solid white;">MORE ABOUT US</button>
            <i class="fa fa-facebook "style="margin-left:1200px;  color:white;"></i>
           <i class="fa fa-twitter"style="margin-left:1200px;  color:white;"></i>
           <i class="fa fa-instagram "style="margin-left:1200px;  color:white;"></i>
           <i class="fa fa-behance" aria-hidden="true" style="margin-left:1200px;  color:white;"></i>
           <i class="fa fa-dribbble" style="margin-left:1200px; color:white;"aria-hidden="true"></i>

            <!-- <i class="fa fa-facebook" style="margin-left:180px;"></i> -->
         

        </div>        <!-- HTML -->


        <div class="col-sm-4">
           <!-- HTML -->
           <nav class="navbar sticky-top ">Menu
           <i class="fa fa-facebook "style="margin-top:180px;margin-left:300px;  color:white;"></i>
           <i class="fa fa-twitter"style="margin-top:30px;margin-left:300px;  color:white;"></i>
           <i class="fa fa-instagram "style="margin-top:40px;margin-left:300px;  color:white;"></i>
           <i class="fa fa-behance" aria-hidden="true" style="margin-top:40px;margin-left:300px;  color:white;"></i>
           <i class="fa fa-dribbble" style="margin-top:40px;margin-left:300px; color:white;"aria-hidden="true"></i>
        
           <div class="sidebar" id="sidebar"style="color:green;">
           <!-- <nav class="navbar navbar-expand-xs navbar-light bg-dark">hello -->
                <h2>Navigation</h2>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#work">Work</a></li>
                    <li><a href="#client">Client</a></li>
                    <br>
                    <br>
                    <p style="font-size:11px;font-family:times new roman;marquee;color:#757575;"> Perspiciatis hic praesentium nesciunt. Et neque a dolorum voluptatem porro iusto sequi veritatis libero enim. Iusto id suscipit veritatis neque reprehenderit..</p>
                    <br>
                    <i class="fa fa-facebook "style="color:white"></i>
 <i class="fa fa-twitter"style="color:white"></i>
  <i class="fa fa-instagram" style="color:white"></i>
   <i class="fa fa-behance"style="color:white"></i>
     <i class="fa fa-dribbble"style="color:white"></i>
           
                </ul>
                  <div class="content">
                <div class="menu-bars" id="menu-bars" style="background-color:black;">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
               
                </div>
                
            </div>
            <!-- <div class="content">
                <div class="menu-bars" id="menu-bars" style="background-color:black;">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
               
                </div>
                 -->
                <!-- <i class="fa fa-facebook"></i> -->

            </div>
        
        </div>
     
    </div>
</nav>
</div>
   
<div class="container-fluid" style="background-color:#39B54A; "id="about">
    <div class="row">
        <div class="col-sm-12">
         <p style="text-align:center; font-style:bold;font-size:20px; margin-top:30px;font-family:arial;"> HELLO THERE<p>
          
          <h1 style="text-align:center; font-style:bold;font-size:80px;margin-top:10px;font-family:arial; color:white;"> We Are Glint<hr><h1>
            <!-- <hr style="width:80%;color:white;margin-left:20px;height:20px;"> -->
            <h5 style="text-align:center; margin:80px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ,<br>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure<br> dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.

<h5>
        </div>
        <div class="col-sm-2">
          <h1 style="color:white; margin-left:110px;font-size:80px;">127<h1>
          <p style="text-align:center; font-style:bold;font-size:20px; margin-left:120px;font-family:arial;"> Awards Received

</div>
<div class="col-sm-3">
          <h1 style="color:white; margin-left:180px;font-size:80px;">1505<h1>
          <p style="text-align:center; font-style:bold;font-size:20px; margin-left:120px;font-family:arial;"> Cups of <span>Coffee</span>


</div>
<div class="col-sm-3">
          <h1 style="color:white; margin-left:180px;font-size:80px;">109<h1>
          <p style="text-align:center; font-style:bold;font-size:20px; margin-left:120px;font-family:arial;">Projects Completed



</div>
<div class="col-sm-3">
          <h1 style="color:white; margin-left:180px;font-size:80px;">102<h1>
          <p style="text-align:center; font-style:bold;font-size:20px; margin-left: 10px;font-family:arial;">Happy Client</p>


</div>
</div>
</div>
</div>
<div class="container-fluid" >
    <div class="row">
        <div class="col-sm-12">
         <p style="text-align:center; font-style:bold;font-size:20px; margin-top:30px;font-family:arial; color:green;"id="services"> WHAT WE DO
<p>
<h1 style="text-align:center; font-style:bold;font-size:40px;margin-top:10px;margin-left:40px;font-family:arial;">We’ve got everything you need to <br>launch and grow  your business
<hr></h1>
 
</div>
</div>
</div>
<div class="container-fluid marquee">
    <div class="row">
        <div class="col-sm-1 ">
        <!-- <i class="fa fa-paint-brush large-brush-icon marquee" style="font-size: 30px; margin-left:140px;"></i> -->
         <img src="{{url('assets/images/paint2.png')}}" style="margin-left:130px;;width:50px; height:50px;">
        <!-- <i class=" fa fa-life-buoy"> -->
       <!-- <h1> <i class=" fas fa-solid fa-brush"style= "color:green;"></i><h1>
      -->
        
</div>
<div class="col-sm-5">
    <h3 style="font-style:bold;color:darkblack;  margin-left:80px; marquee;">Brand Identity</h3>
    <!-- <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis. Sunt suscipit voluptas ipsa in tempora esse soluta sint.<p> -->
<h5 style="font-size:13px; font-family:times new roman ;marquee;color:#757575;margin-left:80px;">  Nemo cupiditate ab quibusdam quaerat impedit magni. <br>Earum suscipit ipsum laudantium. Quo delectus est. <br>Maiores voluptas ab sit natus veritatis ut. Debitis nulla <br>cumque veritatis. Sunt suscipit voluptas ipsa in tempora <br>esse soluta sint.</h5>
    
</div>
    <div class="col-sm-1">
          <!-- <i class=" fa fa-life-buoy large-brush-icon"></i> -->
           <i class="fa fa-cog service large-brush-icon  marquee"style="font-size: 40px; margin-left:120px;"></i>
          
    </div>
    <div class="col-sm-5">
    <h3 style="font-style:bold;color:darkblack; margin-left:70px; marquee;">Illustration
</h3>
<h5 style="font-size:13px; font-family:times new roman ;marquee;color:#757575;margin-left:60px;">  Nemo cupiditate ab quibusdam quaerat impedit magni. <br>Earum suscipit ipsum laudantium. Quo delectus est. <br>Maiores voluptas ab sit natus veritatis ut. Debitis nulla <br>cumque veritatis. Sunt suscipit voluptas ipsa in tempora <br>esse soluta sint.</h5>
    
    </div>
</div>
</div>
<div class="container-fluid marquee">
    <div class="row">
        <div class="col-sm-1"> 
        <i class="fa fa-bullhorn large-brush-icon marquee" aria-hidden="true"style="font-size: 40px; margin-left:130px;"></i>

        </div>
        <div class="col-sm-5">
        <h3 style="font-style:bold;color:darkblack;  margin-left:72px; marquee;">Marketing</h3>
 
    <!-- <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis. Sunt suscipit voluptas ipsa in tempora esse soluta sint.<p> -->
  <h5 style="font-size:13px; font-family:times new roman ;marquee;color:#757575;;margin-left:60px;">  Nemo cupiditate ab quibusdam quaerat impedit magni. <br>Earum suscipit ipsum laudantium. Quo delectus est. <br>Maiores voluptas ab sit natus veritatis ut. Debitis nulla <br>cumque veritatis. Sunt suscipit voluptas ipsa in tempora <br>esse soluta sint.</h5>
    
</div>
<div class="col-sm-1">
<i class="fa fa-globe large-brush-icon marquee" aria-hidden="true" style="font-size: 40px; margin-left:100px;"></i>


        </div>
        <div class="col-sm-5">
     <h3 style="font-style:bold;color:darkblack;  margin-left:50px; marquee;">Web Design
</h3>
    <!-- <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis. Sunt suscipit voluptas ipsa in tempora esse soluta sint.<p> -->
 <h5 style="font-size:13px; font-family:times new roman ;marquee;color:#757575 ;margin-left:55px;">  Nemo cupiditate ab quibusdam quaerat impedit magni. <br>Earum suscipit ipsum laudantium. Quo delectus est. <br>Maiores voluptas ab sit natus veritatis ut. Debitis nulla <br>cumque veritatis. Sunt suscipit voluptas ipsa in tempora <br>esse soluta sint.</h5>
    
</div>
    </div>
    </div>
    <div class="container-fluid marquee">
    <div class="row">
        <div class="col-sm-1">
    <i class="fa fa-cube large-brush-icon marquee;" aria-hidden="true"style="font-size: 40px; margin-left:130px;;"></i>
    </div> 
    <div class="col-sm-5">
    <h3 style="font-style:bold;color:darkblack;  margin-left:80px; marquee;">Packing Design</h3>
 
    <!-- <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis. Sunt suscipit voluptas ipsa in tempora esse soluta sint.<p> -->
<h5 style="font-size:13px; font-family:times new roman ;marquee;color:#757575;;margin-left:80px;">  Nemo cupiditate ab quibusdam quaerat impedit magni. <br>Earum suscipit ipsum laudantium. Quo delectus est. <br>Maiores voluptas ab sit natus veritatis ut. Debitis nulla <br>cumque veritatis. Sunt suscipit voluptas ipsa in tempora <br>esse soluta sint.</h5>
</div>
<div class="col-sm-1">
    <i class="fa fa-briefcase large-brush-icon marquee;" aria-hidden="true"  aria-hidden="true"style="font-size: 40px;  margin-left:75px"></i>
    </div>
    <div class="col-sm-5">
      <h3 style="font-style:bold;color:darkblack; marquee margin-right:150px;">Web Development
</h3>
    <!-- <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis. Sunt suscipit voluptas ipsa in tempora esse soluta sint.<p> -->
 <h5 style="font-size:13px; font-family:times new roman ;marquee;color:#757575;">  Nemo cupiditate ab quibusdam quaerat impedit magni. <br>Earum suscipit ipsum laudantium. Quo delectus est. <br>Maiores voluptas ab sit natus veritatis ut. Debitis nulla <br>cumque veritatis. Sunt suscipit voluptas ipsa in tempora <br>esse soluta sint.</h5>
    
</div>
    </div>
    </div>

    <div class="container-fluid" style="background-color:#111111;"id="work">
    <div class="row">
        <div class="col-sm-12">
         <p style="text-align:center; font-style:bold;font-size:20px; margin-top:50px;font-family:arial; color:green;"> RECENT WORKS
<p>
          
          <h4 style="text-align:center; font-style:bold;font-size:50px;margin-top:10px; margin-left:20px;font-family:arial; color:white;"> We love what we do, check out <br>some of our latest works<hr><h4>
            <hr style="width:80%;color:black;margin-left:20px;height:20px;">
           
        </div>
    </div>
    </div>
    <div class="container  marquee">
    <div class="row">
        <div class="col-sm-6 box ">
        <img src="{{url('assets/images/lady-shutterbug.jpg')}}" style=" margin-left:40px;width:500px; height:600px; transition:1s;">
   
    </div>
    <div class="col-sm-6 box">
        <img src="{{url('assets/images/woodcraft.jpg')}}" style=" margin-left:40;width:350px; height:600px;">
   
    </div>
    <div class="col-sm-6 box">
        <img src="{{url('assets/images/the-beetle.jpg')}}" style=" margin-left:40px;width:550px; height:500px;">
   
    </div>
    <div class="col-sm-6 box">
        <img src="{{url('assets/images/grow-green.jpg')}}" style=" margin-left:40px;width:300px; height:500px;">
   
    </div>
    <div class="col-sm-6 box">
        <img src="{{url('assets/images/guitarist.jpg')}}" style=" margin-left:40px;width:550px; height:500px;">
   
    </div>
    <div class="col-sm-6 box">
        <img src="{{url('assets/images/palmeira.jpg')}}" style=" margin-left:40px;width:300px; height:500px;">
       
    </div>
   <a href=""><nav class="navbar n1" ><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
</nav>
    </div>
    </div>
    <div class="container-fluid mr-2" style="background-color:lightgrey; height:400px;" id="client">
    <div class="row">
        <div class="col-sm-12">
        <p style="text-align:center; font-style:bold;font-size:20px; margin-top:30px;font-family:arial;color:green;">Our Client <p>
        <h4 style="text-align:center; font-style:bold;font-size:50px;margin-top:10px;font-family:arial; color:black;"> Glint has been honored to partner<br> up with these clients
<hr></h4>
    </div>
    </div>

    <div class="slider" style="background-color:lightgrey; margin-left:50px;" >
    <div>
        <img src="{{url('assets/images/apple1.jpg')}}" alt="Apple" style="height:100px; width:100px; color:grey; margin-left:auto;">
    </div>
    <div>
        
        <img src="{{url('assets/images/atom.jpg')}}" alt="Atom" style="height:100px; width:100px; ">
</div>
        <div>
        <img src="{{url('assets/images/blackberry.jpg')}}" alt="Blackberry" style="height:100px; width:100px;">
    
        </div>
        <div>
        <img src="{{url('assets/images/dropbox.jpg')}}" alt="DropBox" style="height:100px; width:100px;">
</div>
        <div>
        <img src="{{url('assets/images/envato.jpg')}}" alt="envato" style="height:100px; width:100px;">
    </div>
    <div>
        <img src="{{url('assets/images/firefox.jpg')}}" alt="firefox" style="height:100px; width:100px;">
    </div>
    <div>
        <img src="{{url('assets/images/joomla.jpg')}}" alt="jooma" style="height:100px; width:100px;">
    </div>
    <div>
        <img src="{{url('assets/images/magento.jpg')}}" alt="magento" style="height:100px; width:100px;">
    </div>



    <div>
        <img src="{{url('assets/images/apple1.jpg')}}" alt="Apple" style="height:100px; width:100px;">
    </div>
    <div>
        <img src="{{url('assets/images/atom.jpg')}}" alt="Atom" style="height:100px; width:100px;">
    </div>
    <div>
        <img src="{{url('assets/images/blackberry.jpg')}}" alt="Blackberry" style="height:100px; width:100px;">
    </div>
    <div>
        <img src="{{url('assets/images/dropbox.jpg')}}" alt="DropBox" style="height:100px; width:100px;">
    </div>
    <div>
        <img src="{{url('assets/images/envato.jpg')}}" alt="envato" style="height:100px; width:100px;">
    </div>
    <div>
        <img src="{{url('assets/images/firefox.jpg')}}" alt="firefox" style="height:100px; width:100px;">
    </div>
    <div>
        <img src="{{url('assets/images/joomla.jpg')}}" alt="jooma" style="height:100px; width:100px;">
    </div>
    <div>
        <img src="{{url('assets/images/magento.jpg')}}" alt="magento" style="height:100px; width:100px;">
    </div>

  
    </div>
    
    <!-- <div class="container-fluid c1 slider " style="background-color:lightgrey;">
    <div>
        <img src="{{url('assets/images/apple1.jpg')}}" alt="Apple">
    </div>
    <div>
        <img src="{{url('assets/images/atom.jpg')}}" alt="Atom">
    </div>
    <div>
        <img src="{{url('assets/images/blackberry.jpg')}}" alt="Blackberry">
    </div>
    <div>
        <img src="{{url('assets/images/dropbox.jpg')}}" alt="DropBox">
    </div>
    <div>
        <img src="{{url('assets/images/envato.jpg')}}" alt="Grape">
    </div>
    <div>
        <img src="{{url('assets/images/firefox.jpg')}}" alt="Grape">
    </div>
    <div>
        <img src="{{url('assets/images/joomla.jpg')}}" alt="Grape">
    </div>
    <div>
        <img src="{{url('assets/images/magento.jpg')}}" alt="Grape">
    </div> -->

    <!-- <div>
        <img src="{{url('assets/images/apple1.jpg')}}" alt="Apple">
    </div>
    <div>
        <img src="{{url('assets/images/atom.jpg')}}" alt="Atom">
    </div>
    <div>
        <img src="{{url('assets/images/blackberry.jpg')}}" alt="Blackberry">
    </div>
    <div>
        <img src="{{url('assets/images/dropbox.jpg')}}" alt="DropBox">
    </div>
    <div>
        <img src="{{url('assets/images/envato.jpg')}}" alt="Grape">
    </div>
    <div>
        <img src="{{url('assets/images/firefox.jpg')}}" alt="Grape">
    </div>
    <div>
        <img src="{{url('assets/images/joomla.jpg')}}" alt="Grape">
    </div>
    <div>
        <img src="{{url('assets/images/magento.jpg')}}" alt="Grape">
    </div> -->
</div>
<!-- <div class="container-fluid" style="background-color:lightgrey;"> -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel" style="background-color:lightgrey;">
        
        <ul class="carousel-indicators">
        
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="container">

        <div class="carousel-inner">
            <div class="carousel-item active">
              
                <p style="text-align:center">Tim Cook is the CEO of Apple and serves on its board of directors.

Before being named CEO in August 2011, Tim was Apple’s chief operating officer and was responsible for all of the company’s worldwide sales and operations, including end-to-end management of Apple’s supply chain, sales activities, and service and support in all markets and countries. He also headed Apple’s Macintosh division and played a key role in the continued development of strategic reseller and supplier relationships, ensuring flexibility in response to an increasingly demanding marketplace.

Prior to joining Apple, Tim was vice president of Corporate Materials for Compaq and was responsible for procuring and managing all of Compaq’s product inventory.

Previous to his work at Compaq, Tim was the chief operating officer of the Reseller Division at Intelligent Electronics.

Tim also spent 12 years with IBM, most recently as director of North American Fulfillment where he led manufacturing and distribution functions for IBM’s Personal Computer Company in North and Latin America.

Tim earned an MBA from Duke University, where he was a Fuqua Scholar, and a Bachelor of Science degree in Industrial Engineering from Auburn University.

</p>
 
                <img class="rounded-circle" src="{{url('assets/images/user1.jpg')}}" alt="Los Angeles" style="width:40px; margin-left:550px;">
               
                    <h4 style="margin-left:500px;">Team Cook</h4>
                
                <p style="margin-left:500px; margin-bottom:30px;">CEO of Apple</p>
            </div>

            <div class="carousel-item">
                <!-- <br>
                <img class="rounded-circle" src="{{url('assets/images/user2.jpg')}}" alt="Chicago" style="width:40px;  margin-left:550px;">
                <br>
                -->
                <p style="text-align:center"> Sundar Pichai is an Indian-American business executive known for being the CEO of Alphabet Inc., the parent company of Google. He was born on June 10, 1972, in Madurai, Tamil Nadu, India. Pichai grew up in a modest household and showed early interest in technology and engineering.

Education and Early Career:
Education: Pichai earned his degree in Metallurgical Engineering from the Indian Institute of Technology (IIT) Kharagpur. He then pursued a Master of Science in Material Sciences and Engineering from Stanford University, followed by an MBA from the Wharton School of the University of Pennsylvania.
Early Career: Before joining Google, Pichai worked at McKinsey & Company and had stints in engineering and product management at Applied Materials.
Career at Google:
Joining Google: Sundar Pichai joined Google in 2004, initially working on the Google Toolbar and later leading the team that launched Google Chrome, which became one of the most popular web browsers globally.
Rise to Prominence: Pichai's success with Chrome and other projects led to him overseeing various Google products, including Android, Chrome, Google Apps, and Google Drive.
CEO of Google: In August 2015, Pichai was appointed CEO of Google, following the company’s restructuring into Alphabet Inc. In December 2019, he also became the CEO of Alphabet Inc., succeeding Larry Page.
Leadership and Achievements:
Product Innovation: Under Pichai’s leadership, Google has continued to innovate in areas such as artificial intelligence, cloud computing, and hardware.
Global Expansion: He has overseen Google's expansion into new markets and has been instrumental in navigating the company through various challenges, including regulatory scrutiny and competition.
Advocacy: Pichai is known for his advocacy for diversity in technology and has been vocal about the importance of AI ethics and data privacy.
Sundar Pichai is widely respected for his technical acumen, calm demeanor, and visionary leadership in steering Google and Alphabet towards continued growth and innovation.






</p>


<img class="rounded-circle" src="{{url('assets/images/user2.jpg')}}" alt="Chicago" style="width:40px;  margin-left:550px;">
                <h4 style="margin-left:500px;">Sundar Pichai</h4>
                
                <p style="margin-left:500px; margin-bottom:30px;">CEO of google</p>
            </div>
            <div class="carousel-item">
                <!-- <br>
            <img class="rounded-circle" src="{{url('assets/images/user3.jpg')}}" alt="Chicago" style="width:40px;  margin-left:550px;"> -->
                <!-- <br> -->
               
                <p style="text-align:center"> The CEO of Microsoft is Satya Nadella. He has held this position since February 4, 2014. Here’s a brief overview of his background and career:

Early Life and Education:
Birth: Satya Nadella was born on August 19, 1967, in Hyderabad, India.
Education: He earned a bachelor's degree in Electrical Engineering from the Manipal Institute of Technology. Nadella then moved to the United States to pursue higher education, obtaining a Master of Science in Computer Science from the University of Wisconsin-Milwaukee and an MBA from the University of Chicago Booth School of Business.
Career at Microsoft:
Joining Microsoft: Nadella joined Microsoft in 1992. Over the years, he held several key positions in the company, contributing to its growth and innovation.
Key Roles: Before becoming CEO, Nadella served as the Executive Vice President of Microsoft’s Cloud and Enterprise group, where he was responsible for building and running the company's computing platforms, developer tools, and cloud services.
CEO Appointment: On February 4, 2014, Nadella was appointed CEO of Microsoft, succeeding Steve Ballmer. His leadership has been marked by a strategic shift towards cloud computing and artificial intelligence.
Leadership and Achievements:
Cloud Computing: Nadella has been instrumental in transforming Microsoft into a leading cloud computing company with Azure, its cloud platform, becoming a significant revenue generator.
Cultural Change: He is credited with revitalizing Microsoft's corporate culture, emphasizing collaboration, innovation, and empathy.
Acquisitions: Under his leadership, Microsoft made several high-profile acquisitions, including LinkedIn, GitHub, and the gaming company ZeniMax Media.
Growth and Innovation: Nadella has focused on expanding Microsoft’s services and products, including AI, gaming, and enterprise software, driving substantial growth in the company’s market value.
Satya Nadella is recognized for his visionary leadership, fostering a culture of innovation, and steering Microsoft through a period of significant transformation and growth.






</p>
<img class="rounded-circle" src="{{url('assets/images/user3.jpg')}}" alt="Chicago" style="width:40px;  margin-left:550px;">
   
                <h4 style="margin-left:500px;">Satya nadla</h4>
                
                <p style="margin-left:500px; margin-bottom:30px;">CEO of Microsoft</p>
                </div>   
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#demo" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</div>
<!-- </div> -->
<div class="container-fluid" style="background-image:url('{{url('assets/images/bubble2.jpg')}}'); height:1000px;"id="contact">
    <div class="row">
        <div class="col-sm-12">
            <h4 style="text-align:center; font-weight:bold; font-size:20px; margin-top:30px; font-family:arial; color:green;">
                Contact Us
            </h4>
        </div>
        <div class="col-sm-12">
            <h2 style="text-align:center; font-weight:bold; font-size:40px; margin-top:30px; font-family:arial; color:white;">
                Reach out for a new project or just <br>say hello
            </h2>
        </div>
        <div class="col-md-6 contact-box" style="margin-left: auto; margin-right: auto; background-color:black; padding:50px;">
           <p style="margin-left:20px;"> SEND US A MESSAGE
      <div class="form-group">
            <label for="name">Your Name</label>
              <hr style="color:white; border:1px solid white;">
            <!-- <input type="text" class="form-control" id="name" placeholder="Enter your name"> -->
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
                <hr style="color:white; border:1px solid white;">
            <!-- <input type="email" class="form-control" id="email" placeholder="Enter your email"> -->
        </div>
        <div class="form-group">
            <label for="email">Subject</label>
                <hr style="color:white; border:1px solid white;">
            <!-- <input type="email" class="form-control" id="email" placeholder="Enter your email"> -->
        </div>
        <div class="form-group">
            <label for="message">Message</label>
               <hr style="color:white; border:1px solid white;">
        </div>
        <button type="submit" class="btn btn -primary"style= "background-color:green;color:white; width:400px;">Submit</button>

           
        </div>
        <div class="col-md-6 contact-box" style="margin-left: auto; margin-right: auto;background-color:black; padding:50px; padding:50px; width:500px;">
            CONTACT INFO <br> <br>
            <p style="color:green">Where to Find Us<br>
            <p style="color:grey">1600 Amphitheatre Parkway<br>
Mountain View,<br> CA
94043 US</p>

 <p style="color:green">Email Us At</p>
   <p style="color:grey">contact@glintsite.com
<br>
info@glintsite.com

</p>
<p style="color:green">Call Us<br>
<p style="color:grey">Phone: (+63) 555 1212

<br>
Mobile: (+63) 555 0100
<br>
Fax: (+63) 555 0101
<br>
 <i class="fa fa-facebook "style="color:white"></i><span>
 <i class="fa fa-twitter"style="color:white"></i>
  <i class="fa fa-instagram" style="color:white"></i>
   <i class="fa fa-behance"style="color:white"></i>
     <i class="fa fa-dribbble"style="color:white"></i>
           
          
        </div>
      

    </div>
    
</div>
<div class="container-fluid" style="background-image:url('{{url('assets/images/bubble2.jpg')}}'); height:600px;">
    <div class="row">
        <!-- <div class="col-sm-12">
            <h4 style="text-align:center; font-weight:bold; font-size:20px; margin-top:30px; font-family:arial; color:green;">
                Contact Us
            </h4>
        </div>
        <div class="col-sm-12">
            <h1 style="text-align:center; font-weight:bold; font-size:60px; margin-top:30px; font-family:arial; color:white;">
                Reach out for a new project or just <br>say hello
            </h1>
        </div> -->
        <div class="col-md-6 contact-box" style="margin-left: auto; margin-right: auto; background-color:black; padding:50px;">
             <h1 style="color:green">Glint</h1>
     <p style="color:grey">Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Quaerat voluptas autem necessitatibus vitae aut.

             
        </div>
        <div class="col-md-6 contact-box" style="margin-left: auto; margin-right: auto;background-color:black; padding:50px; padding:50px;">
            Get Notified
 <br> <br>
         <p style="color:grey">Quia quo qui sed odit. Quaerat voluptas autem <br>necessitatibus vitae aut non alias sed quia.<br> Ut itaque enim optio ut excepturi deserunt iusto porro.

<div class = "inputWithIcon input-group">  
  <input type = "text" placeholder ="&#xf003 Email" >
  <span class="input-group-text" style="background-color:lightgreen;font-color:white;">Subcribe</span>

   
  <!-- <i class = "fa fa-envelope fa-lg fa-fw" aria-hidden = "true"> </i>   -->
</div>  

    
        </div>
      

    </div>
    
</div> 
</body>



<!-- <div class="container-fluid" style="background-color:#39B54A;">
    <div class="row">
        <div class="col-sm-12">
         <p style="text-align:center; font-style:bold;font-size:20px; margin-top:30px;font-family:arial; color:white;"> We Are Glint<p>
        </div>
</div>
</div>
</div> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->

<!-- Initialize Owl Carousel -->
<!-- <script src="{{url('assets/js/script.js')}}"></script> -->
<script>
    document.getElementById('menu-bars').onclick = function() {
        document.getElementById('sidebar').classList.toggle('active');
        document.querySelector('.content').classList.toggle('active');
    };
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 6,
            slidesToScroll: 6,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });
</script>


</body>
</html>
