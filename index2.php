<?php
include('include/header.php');
?>

<div class="row m-0 index_div" style="height: 100vh">
  <div class="col-12 col-sm-12 col-md-6 col-lg-5 girl_div m-auto" style="padding: 0">
    <div class="fit_content d-flex float-right">
      <img class="float-right girl_image" src="assets/image/girl_cream.png" alt="girl" />
      <img class="mark1" id = "mark1"src="assets/image/mark_1.png" alt="mark_1" />
      <img class="mark2" src="assets/image/mark_1.png" alt="mark_2" />
      <img  class="mark3" src="assets/image/mark_1.png" alt="mark_3" />          
    </div>      
    <img class="h-100 wave_img" src="assets/image/BG_wave.png" alt="wave">  
  </div>
  <div class="col-12 col-sm-10 col-md-6 col-lg-7 m-auto">    
    <div class="text-center ml-md-5 text_div">
      <div class="text_div2">
        <div class="home_text2" style="color: #293D8A"> Raya Ini, Pilih Kebaikan!</div>
        <div class="home_text3" style="color: #293D8A">
            Pilih <img src="assets/image/logo.png" class="logo_image" style="height: 70px;width:120px; margin:2px"> Cream
            untuk membantu kulitnya<br /> agar terasa segar, lembut dan lembap
        </div>
        <div>
       <a href ="index3.php">
          <button type="button" id= "SETERUSNYA" class="btn btn-primary mt-5 btn-main">SETERUSNYA</button>
      </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="group_mobile_div py-3 text-center">     
  <p class="first_text1 mt-5 px-2" style="color: #293D8A"> Raya Ini, Pilih Kebaikan!</p>
  <div class="first_text1 px-2" style="color: #293D8A">
      Pilih <img src="assets/image/logo.png" class="logo_image" style="height: 70px; width:120px; margin:2px"> Cream
      untuk membantu kulitnya agar terasa segar, lembut dan lembap
  </div>
  <div>
  <a href ="index3.php">
          <button type="button" id= "SETERUSNYA" class="btn btn-primary mt-5 btn-main">SETERUSNYA</button>
      </a>
  </div>
  <div class="fit_content d-flex float-right">
    <img class="float-right girl_image" src="assets/image/girl_cream.png" alt="girl" />
    <img class="mark4" id = "mark1"src="assets/image/mark.png" alt="mark_1" /> 
  </div>   
  <img class="w-100 wave_img" src="assets/image/wave_mobile.png" alt="wave">    
</div>

<script type="text/javascript">
$("#SETERUSNYA").click(function(){
  window.location.href = 'index3.php';
});
  </script>

</body>

</html>

