<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="css/nav.css">
  <link rel="shortcut icon" href="">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Home</title>
  <style>

    .box {
      display: flex;
      overflow-x: auto;
    }

    .box::-webkit-scrollbar{
      width: 0;
    }
    
    .box div{
    position: relative;
    top: 20px;
    left: 20px;
    padding: 25px;
    width: 188px;
    height: 245px;
    background-color: transparent;
    /*margin-right: 27px;*/
    margin-bottom: 27px;
    margin-left: 10px;
    margin-right: 5px;
    border-radius: 10px;
    justify-content: center;
    display: block;
    box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.22);


    }

   .logo{
    width: 100px;
    background-color: white;
    border-radius: 10px;
    display: flex;
    width: 188px;
    height: 188px;
    margin-left: -25px;
    margin-top: -25px;


    }
    h1 {
      font-size: 13px;
      margin-top: 4px;
      margin-left:-14px;
    }
    h2{
      font-weight: bold;
      font-size: 12px;
      margin-right: -19px;
      justify-content: center;
      position: relative;
      top: -10px;
      left: 2px;
      text-align: center;
      margin-top: 10px;
      color: #ff3b3f;
      display:inline-block;
    }

    h3{
      font-size: 10px;
      line-height: 0;
      position: relative;
      left: 35px;
      top: -39px;
    }

    h4{
      font-weight: bold;
      font-size: 12px;
    }

    .full-time{
    background-color: transparent;
    width: 55px;
    height: 18px;
    justify-content: center;
    display: flex;
    text-align: center;
    border-radius:6px;
    font-size: 12px;
    margin-top: 8px;
    margin-left: 18px;
    font-weight: bold;
   
   }

.min{
    margin-top: 8px;
    margin-left: 180px;
    font-weight: bold;
    background-color: #F4F4F4;
    width: 95px;
    height: 18px;
    display: flex;
    justify-content: center;
    text-align: center;
    font-size: 12px;
    border-radius:6px;

}

.klik{
  border-radius:10px;
  width:120px; 
  height: 25px; 
  background-color: #39D900;
  color:white;
  border: 0px; 
  float: right; 
  text-align: center; 
  justify-content: center; 
  font-size: 12px; 
  font-weight: bold; 
  margin-right: 8px;
}

.posisi{
  position: absolute;
  top: 20px;
  left: 20px;
  color: black;
  font-size: 24px;
}

#button1{
width: 25%;
height: 35px;
background-color: #5B5B5B;
border-radius: 10px 0 0 10px;
border-color: transparent;
padding: 5px;
color: black;
margin: 0px; 
display: inline-block;
position: relative;
top: 45px;
left: 32%;
text-align: center;
}
#button2{
width: 25%;
height: 35px;
background-color: #F4F4F4;
border-radius: 0px 10px 10px 0px;
border-color: transparent;
color: red;
margin: 0px; 
display: inline-block;
align-content: center;
position: relative;
top: 45px;
left: 31%;
}

.basictemp{
  position: relative;
  font-size: 18px;
  left: 35px;
  font-weight: bold;
  margin-top: 10px;
}


.rounded-circle {
    width: 10px;
    height: 10px;
    position:relative;
    left: -18px;
    display: inline-block;
}

.bgred{
  background: #ff3b3f !important;
}

.bgyellow{
  background: #ffc107!important;
}

.bggreen{
  background: #28a745!important;
}

.bgprimary{
background-color: #ff3b3f !important;
}

.bg-info {
    background-color: #17a2b8!important;
}
.bg-dark {
    background-color: #343a40!important;
}
.text-small {
    font-size: 12px !important;
}.rounded {
    border-radius: .25rem!important;
}.bg-warning {
    background-color: #ffc107!important;
}
.text-dark {
    color: #343a40!important;
}

.pos{
  position: relative;
  top: -10px;
  margin-left: -16px;
}

  </style>
</head>
  <body>
<div class="justify-content center">
    <button type="button home-button" id="button1" > <a href="/cv" style="color: black"> <strong> CV </strong> </a> </button>
    <button type="button contact-button" id="button2"> <a href="/event" style="color: black"> Event</a> </button>
</div>

    <a  class="posisi" href="/master">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <br><br><br><br>
    
  <div class="basictemp">Basic Template</div>
<!--kotak basic-->
    <div class="box ">
      <a href="" style="color: black; text-decoration: none">
        <div class="col-sm-0" >           
             <img src="images/1.jpg" class="logo" class="img-fluid" alt="">
             <h1>Basic 1</h1>
             <p class="rounded-circle bgred" style=""></p>
             <p class="rounded-circle bg-info" style=""></p>
             <p class="rounded-circle bggreen" style=";"></p>
             <p class="rounded-circle bgyellow" style=""></p>
             <p class="rounded-circle bgprimary" style=""></p>
             <p class="rounded-circle bg-dark" style=""></p>
             <span class=" pos text-small rounded bg-warning text-dark col-* px-2 py-1"> ATS</span>
             <h2>GRATIS</h2>    
        </div> 
      </a> 
      <a href="" style=" color: black; text-decoration: none;">
        <div class="col-sm-0" >           
             <img src="images/1.jpg" class="logo" class="img-fluid" alt="">   
             <h1>Basic 1</h1>
              <p class="rounded-circle bgred" style=""></p>
             <p class="rounded-circle bg-info" style=""></p>
             <p class="rounded-circle bggreen" style=";"></p>
             <p class="rounded-circle bgyellow" style=""></p>
             <p class="rounded-circle bgprimary" style=""></p>
             <p class="rounded-circle bg-dark" style=""></p>
             <span class=" pos text-small rounded bg-warning text-dark col-* px-2 py-1"> ATS</span>
             <h2>GRATIS</h2>     
        </div>
      </a>    
    </div>
<!--akhir kotak basic-->

<div class="basictemp">LOKAL Minimalist Template</div>
<!--kotak basic-->
    <div class="box ">
      <a href="" style="color: black; text-decoration: none">
        <div class="col-sm-0" >           
             <img src="images/2.jpg" class="logo" class="img-fluid" alt="">
             <h1>Minimalist 1</h1>
              <p class="rounded-circle bgred" style=""></p>
             <p class="rounded-circle bg-info" style=""></p>
             <p class="rounded-circle bggreen" style=";"></p>
             <p class="rounded-circle bgyellow" style=""></p>
             <p class="rounded-circle bgprimary" style=""></p>
             <p class="rounded-circle bg-dark" style=""></p>
             <span class=" pos text-small rounded bg-warning text-dark col-* px-2 py-1"> ATS</span>
             <h2>Rp 35.000</h2>      
        </div>
      </a>
      <a href="" style="color: black;text-decoration: none">   
        <div class="col-sm-0" >           
             <img src="images/2.jpg" class="logo" class="img-fluid" alt="">
             <h1>Minimalist 1</h1>
              <p class="rounded-circle bgred" style=""></p>
             <p class="rounded-circle bg-info" style=""></p>
             <p class="rounded-circle bggreen" style=";"></p>
             <p class="rounded-circle bgyellow" style=""></p>
             <p class="rounded-circle bgprimary" style=""></p>
             <p class="rounded-circle bg-dark" style=""></p>
             <span class=" pos text-small rounded bg-warning text-dark col-* px-2 py-1"> ATS</span>
             <h2>Rp 35.000</h2>        
        </div> 
      </a>
      <a href="" style="color: black;text-decoration: none;">     
        <div class="col-sm-0" >           
             <img src="images/2.jpg" class="logo" class="img-fluid" alt="">
             <h1>Minimalist 1</h1>
              <p class="rounded-circle bgred" style=""></p>
             <p class="rounded-circle bg-info" style=""></p>
             <p class="rounded-circle bggreen" style=";"></p>
             <p class="rounded-circle bgyellow" style=""></p>
             <p class="rounded-circle bgprimary" style=""></p>
             <p class="rounded-circle bg-dark" style=""></p>
             <span class=" pos text-small rounded bg-warning text-dark col-* px-2 py-1"> ATS</span>
             <h2>Rp 35.000</h2>      
        </div>
      </a>
      <a href="" style="color: black; text-decoration: none;">    
        <div class="col-sm-0" >           
             <img src="images/2.jpg" class="logo" class="img-fluid" alt="">
             <h1>Minimalist 1</h1>
              <p class="rounded-circle bgred" style=""></p>
             <p class="rounded-circle bg-info" style=""></p>
             <p class="rounded-circle bggreen" style=";"></p>
             <p class="rounded-circle bgyellow" style=""></p>
             <p class="rounded-circle bgprimary" style=""></p>
             <p class="rounded-circle bg-dark" style=""></p>
             <span class=" pos text-small rounded bg-warning text-dark col-* px-2 py-1"> ATS</span>
             <h2>Rp 35.000</h2>        
        </div>
       </a>     
    </div>
<!--akhir kotak basic-->

<div class="basictemp">LOKAL Elegant Template</div>
<!--kotak basic-->
    <div class="box ">
      <a href="" style="color: black; text-decoration: none;">
         <div class="col-sm-0" >           
             <img src="images/3.jpg" class="logo" class="img-fluid" alt="">
              <h1>Elegant 1</h1>
               <p class="rounded-circle bgred" style=""></p>
             <p class="rounded-circle bg-info" style=""></p>
             <p class="rounded-circle bggreen" style=";"></p>
             <p class="rounded-circle bgyellow" style=""></p>
             <p class="rounded-circle bgprimary" style=""></p>
             <p class="rounded-circle bg-dark" style=""></p>
             <span class=" pos text-small rounded bg-warning text-dark col-* px-2 py-1"> ATS</span>
             <h2>Rp 50.000</h2>       
        </div>  
      </a>
      <a href="" style="color: black; text-decoration: none;">  
        <div class="col-sm-0" >           
             <img src="images/3.jpg" class="logo" class="img-fluid" alt="">
              <h1>Elegant 1</h1>
               <p class="rounded-circle bgred" style=""></p>
             <p class="rounded-circle bg-info" style=""></p>
             <p class="rounded-circle bggreen" style=";"></p>
             <p class="rounded-circle bgyellow" style=""></p>
             <p class="rounded-circle bgprimary" style=""></p>
             <p class="rounded-circle bg-dark" style=""></p>
             <span class=" pos text-small rounded bg-warning text-dark col-* px-2 py-1"> ATS</span>
             <h2>Rp 50.000</h2>         
        </div>  
      </a>
      <a href="" style="color: black; text-decoration: none;">  
        <div class="col-sm-0" >           
             <img src="images/3.jpg" class="logo" class="img-fluid" alt="">
              <h1>Elegant 1</h1>
               <p class="rounded-circle bgred" style=""></p>
             <p class="rounded-circle bg-info" style=""></p>
             <p class="rounded-circle bggreen" style=";"></p>
             <p class="rounded-circle bgyellow" style=""></p>
             <p class="rounded-circle bgprimary" style=""></p>
             <p class="rounded-circle bg-dark" style=""></p>
             <span class=" pos text-small rounded bg-warning text-dark col-* px-2 py-1"> ATS</span>
             <h2>Rp 50.000</h2>       
        </div>  
      </a>
      <a href="" style="color: black; text-decoration: none;">  
        <div class="col-sm-0" >           
             <img src="images/3.jpg" class="logo" class="img-fluid" alt="">
              <h1>Elegant 1</h1>
               <p class="rounded-circle bgred" style=""></p>
             <p class="rounded-circle bg-info" style=""></p>
             <p class="rounded-circle bggreen" style=";"></p>
             <p class="rounded-circle bgyellow" style=""></p>
             <p class="rounded-circle bgprimary" style=""></p>
             <p class="rounded-circle bg-dark" style=""></p>
             <span class=" pos text-small rounded bg-warning text-dark col-* px-2 py-1"> ATS</span>
             <h2>Rp 50.000</h2>         
        </div>  
      </a>  
    </div>
<!--akhir kotak basic-->






          <br><br><br><br><br>
  
      <nav class="nav">
        <a href="/master" class="nav__link">
          <i class="material-icons nav__icon" style="width: 24px; height: 24px;">home</i>
        <span class="nav__text">Beranda</span>
      </a>
      <a href="/cv" class="nav__link">
        <i class="material-icons nav__icon" style="width: 24px; height: 24px; ">edit</i>
        <span class="nav__text">Fitur</span>
      </a>
      <a href="/notifikasi" class="nav__link">
        <i class="material-icons nav__icon" style="width: 24px; height: 24px; ">notifications</i>
        <span class="nav__text">Notifikasi</span>
      </a>
      <a href="/login" class="nav__link">
        <i class="material-icons nav__icon" style="width: 24px; height: 24px;">person</i>
        <span class="nav__text">Profil</span>
      </a>
    </nav>

   
    </body>

