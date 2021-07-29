<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="css/des.css">
  <link rel="shortcut icon" href="">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Home</title>
  <style >
    
  .kotak1{
      padding: 50px;
      height: 240px;
     background-color: #F4F4F4;
     border-radius: 0px 0px 25px 25px ;
    background-image: url('images/google.png');  
    background-size: cover; 
    background-position: center; 
    background-color: : white;
   
    }

    .logo{
    width: 60px;
    height: 60px;
    justify-content: center;

}
.company{
    margin-top: -13px;
    justify-content: center;
}
.tengah {
    position: absolute;
    top: 60px;
    left: 22px;
}

.full-time{
    background-color: white;
    width: 80px;
    height: 26px;
    text-align: center;
    justify-content: center;
    font-size: 16px;
    border-radius:6px;
    position: relative;
    top: 40px;
    left: -20px;
    display: flex;
    margin : 3px;
   
}

.min{
    background-color: transparent;
    width: 220px;
    height: 26px;
    text-align: center;
    justify-content: center;
    font-size: 14px;
    border-radius:6px;
    position: relative;
    top: 15px;
    left: 160px;
    display: flex;
    font-weight: bold;

}

.posisi{
  position: absolute;
  top: 20px;
  left: 20px;
  color: black;
  font-size: 24px;
  
}

h1{
  font-size: 16px;
  font-weight: bold;
  margin-left: 20px;


}

h2{
  font-size: 14px;
  font-weight: normal;
  margin-left: 20px;
  line-height: 1.5;
  text-align: justify;
  margin-right: 10px;
}

.flex-container {
  display: flex;
  flex-wrap: nowrap;
}

.flex-container > div{
  border-radius:10px;
  width:50%; 
  height: 35px; 
  background-color: blue;
  text-align: center;
  justify-content: center;
  display: flex;
}

#button1{
width: 48%;
height: 35px;
background-color: transparent;
border : 0px;
color: red;
margin: 2px; 
display: inline-block;
}

.previous {
  background-color: #f1f1f1;
  color: black;
  position: absolute;
}
.round {
  border-radius: 50%;
}


  </style>
</head>
  <body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!--kotak-->
                <div class="kotak1" >
                    <a onclick="toggle()" class="posisi" href="/master">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      </a>
                  
                            <div class="row  company">
                                <div class="col-sm-0">
                                    <img src="images/google.png" class="logo rounded-circle " class="img-fluid" alt="">
                                </div> 
                            </div>
                            <div >
                                <h5 style="text-align: center;">Senior Ux Researcher
                                  <p class="text-muted">Jakarta, Indonesia</p>
                                </h5>
                            </div><br>
                            <div class="row">
                                  <div class="full-time">
                                    <p>Full time</p> 
                                  </div>
                                  <div class="full-time">
                                    <p>Remote</p> 
                                  </div>
                                  <div class="min">
                                      <p> 3.000.000 - 5.000.000 Bulan  </p>  
                                  </div> 
                            </div>
                </div>
                  <!--akhir kotak-->

                   <button type="button home-button" id="button1" > <a href="/Deskripsi" style="color: black"> <strong> Deskripsi Pekerjaan </strong> </a> </button>
                   <button type="button contact-button" id="button1"> <a href="/Persyaratan" style="color: black">Persyaratan </a> </button>

                  <div>
                    <h1> Apa Yang Akan Kamu Lakukan
                    </h1>
                    <h2>
                       &emsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                       &emsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    </h2>
                  </div>



  <div class="d-flex justify-content-center">
    <a href="#" class="btn btn-primary"
      style="border-radius:10px;width:330px; height: 35px; background-color: #39D900;color:white; border: 0px"> <strong> Lamar
      </strong> </a>
  </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>

  </body>

  </html>

