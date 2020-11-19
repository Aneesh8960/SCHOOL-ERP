<!DOCTYPE html>
<html>
<head>
<style>
body{
background-image: radial-gradient(green,skyblue,yellow);
background-repeat:no-repeat;
background-size:cover;
}
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 200px;
}


* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
<?php 
include "basic/navbar.html";
?>    
<font color="#7f0ef0"><i><h2 align="center">Image  Gallery</h2></i></font>

<br>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image/devi1.jfif">
      <img src="image/devi1.jfif" alt="Cinque Terre" />
    </a>
   
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image/devi2.jfif">
      <img src="image/devi2.jfif" alt="Cinque Terre" />
    </a>
   
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image/i1.png">
      <img src="image/i1.png" alt="Cinque Terre" />
    </a>
   
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image/i2.png">
      <img src="image/i2.png" alt="Cinque Terre" />
    </a>
   
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image/s1.png">
      <img src="image/s1.png" alt="Cinque Terre" />
    </a>
   
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image/p1.jpg">
      <img src="image/p1.jpg" alt="Cinque Terre" />
    </a>
   
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image/p2.jpg">
      <img src="image/p2.jpg" alt="Cinque Terre" />
    </a>
   
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image/p3.jpg">
      <img src="image/p3.jpg" alt="Cinque Terre" />
    </a>
   
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image/p4.jpg">
      <img src="image/p4.jpg" alt="Cinque Terre" />
    </a>
   
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image/p5.jpg">
      <img src="image/p5.jpg" alt="Cinque Terre" />
    </a>
   
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image/p6.jpg">
      <img src="image/p6.jpg" alt="Cinque Terre" />
    </a>
   
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image/p7.jpg">
      <img src="image/p7.jpg" alt="Cinque Terre" />
    </a>
   
  </div>
</div>



<div class="clearfix"></div>

<div style="padding:6px;">
  
</div>
<?php 
include "basic/footer.html";
?>
</body>
</html>
