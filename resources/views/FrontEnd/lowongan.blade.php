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
    
    .box{
      padding: 5px;
      position: relative;
      top: -55px;
      margin-top: 60px;
      margin-left: 33px;
      margin-bottom: -40px;
      width: 348px;
      height: 100px;
      border-radius: 10px;
      background-color: #f4f4f4;
         box-shadow: 4px 3px 5px rgba(0, 0, 0, 0.22);
         display: block;
    }

   .logo{
    width: 40px;
    height: 40px;
    justify-content: left;
    margin-left: 10px;
    margin-right: 5px;
    background-color: white;
    float: left;


    }

    h5 {
      font-size: 16px;
      margin: 10px;
      margin-left: 10px;
    }
    p{
      font-weight: normal;
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
  width:60px; 
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

.filter {
  position: relative;
  left: 3px;
  border: 1px;
  outline: 1px;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
  margin: 5px;
  font-weight: bold
}
.filter:hover {
  background-color: white;
  border :none;
  outline: none;
}

.filter.active {
  background-color: #ff3b3f;
  color: white;
  box-shadow: 4px 3px 5px rgba(0, 0, 0, 0.22);
  border-radius: 10px;
  border: none;
}

.show {
  display: block;
}

.container {
  margin-top: 10px;
  overflow: hidden;
  
}
  </style>
</head>
  <body>
    <a  class="posisi" href="/master">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <br><br><br><br>
    <form class="example" action="/action_page.php" style="margin:auto;max-width: 350px; position: relative; left: 0px;">
        <input type="text" placeholder="Search.." name="search2">
          <button type="submit"><i class="fa fa-search"></i></button>
    </form>

    <div id="myBtnContainer" style="margin-top: 5px;">
      <button class="filter active" onclick="filterSelection('all')"> Semua</button>
      <button class="filter" onclick="filterSelection('designer')"> Designer</button>
      <button class="filter" onclick="filterSelection('fotografi')"> Fotografi</button>
      <button class="filter" onclick="filterSelection('marketing')"> Marketing</button>
    </div>



<!--kotak-->
    <div class="box designer">
        <div class="col-sm-0" >           
             <img src="images/google.png" class="logo rounded-circle " class="img-fluid" alt="">
                  <a href="#" class="btn klik">Lamar</a>
                    <a href="/Deskripsi" style="color: black">
                    <h5> Designer
                      <p class="text muted"> Jakarta,Indonesia</p>
                    </h5>
                    </a> 
                  <div class="row">
                      <div class="full-time">
                        <h4>Full time</h4> 
                      </div>
                      <div class="min">
                        <h4> 3.000.000/Bulan</h4>  
                      </div>   
            </div>      
        </div>  
    </div>
<!--akhir kotak-->


<!--kotak-->
    <div class="box designer">
        <div class="col-sm-0" >           
             <img src="images/google.png" class="logo rounded-circle " class="img-fluid" alt="">
                  <a href="#" class="btn klik">Lamar</a>
                    <a href="/Deskripsi" style="color: black">
                    <h5> Designer
                      <p class="text muted"> Jakarta,Indonesia</p>
                    </h5>
                    </a> 
                  <div class="row">
                      <div class="full-time">
                        <h4>Full time</h4> 
                      </div>
                      <div class="min">
                        <h4> 3.000.000/Bulan</h4>  
                      </div>   
            </div>      
        </div>  
    </div>
<!--akhir kotak-->


<!--kotak-->
    <div class="box IT">
        <div class="col-sm-0" >           
             <img src="images/google.png" class="logo rounded-circle " class="img-fluid" alt="">
                  <a href="#" class="btn klik">Lamar</a>
                    <a href="/Deskripsi" style="color: black">
                    <h5> IT
                      <p class="text muted"> Jakarta,Indonesia</p>
                    </h5>
                    </a> 
                  <div class="row">
                      <div class="full-time">
                        <h4>Full time</h4> 
                      </div>
                      <div class="min">
                        <h4> 3.000.000/Bulan</h4>  
                      </div>   
            </div>      
        </div>  
    </div>
<!--akhir kotak-->


<!--kotak-->
    <div class="box IT">
        <div class="col-sm-0" >           
             <img src="images/google.png" class="logo rounded-circle " class="img-fluid" alt="">
                  <a href="#" class="btn klik">Lamar</a>
                    <a href="/Deskripsi" style="color: black">
                    <h5> IT
                      <p class="text muted"> Jakarta,Indonesia</p>
                    </h5>
                    </a> 
                  <div class="row">
                      <div class="full-time">
                        <h4>Full time</h4> 
                      </div>
                      <div class="min">
                        <h4> 3.000.000/Bulan</h4>  
                      </div>   
            </div>      
        </div>  
    </div>
<!--akhir kotak-->


<!--kotak-->
    <div class="box marketing">
        <div class="col-sm-0" >           
             <img src="images/google.png" class="logo rounded-circle " class="img-fluid" alt="">
                  <a href="#" class="btn klik">Lamar</a>
                    <a href="/Deskripsi" style="color: black">
                    <h5> Marketing 
                      <p class="text muted"> Jakarta,Indonesia</p>
                    </h5>
                    </a> 
                  <div class="row">
                      <div class="full-time">
                        <h4>Full time</h4> 
                      </div>
                      <div class="min">
                        <h4> 3.000.000/Bulan</h4>  
                      </div>   
            </div>      
        </div>  
    </div>
<!--akhir kotak-->


<!--kotak-->
    <div class="box Marketing">
        <div class="col-sm-0" >           
             <img src="images/google.png" class="logo rounded-circle " class="img-fluid" alt="">
                  <a href="#" class="btn klik">Lamar</a>
                    <a href="/Deskripsi" style="color: black">
                    <h5> Marketing 
                      <p class="text muted"> Jakarta,Indonesia</p>
                    </h5>
                    </a> 
                  <div class="row">
                      <div class="full-time">
                        <h4>Full time</h4> 
                      </div>
                      <div class="min">
                        <h4> 3.000.000/Bulan</h4>  
                      </div>   
            </div>      
        </div>  
    </div>
<!--akhir kotak-->


<!--kotak-->
    <div class="box fotografi">
        <div class="col-sm-0" >           
             <img src="images/google.png" class="logo rounded-circle " class="img-fluid" alt="">
                  <a href="#" class="btn klik">Lamar</a>
                    <a href="/Deskripsi" style="color: black">
                    <h5> Fotografi 
                      <p class="text muted"> Jakarta,Indonesia</p>
                    </h5>
                    </a> 
                  <div class="row">
                      <div class="full-time">
                        <h4>Full time</h4> 
                      </div>
                      <div class="min">
                        <h4> 3.000.000/Bulan</h4>  
                      </div>   
            </div>      
        </div>  
    </div>
<!--akhir kotak-->




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

    <script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("box");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("Filter");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
    </body>

