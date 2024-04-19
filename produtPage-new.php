<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/stylev6.blade.css">
<link rel="stylesheet" href="css/prodnew.css">


</head>
<body>
<?php include('assets/mobile_menu.php');?>
<section id="#prodsec" class="glob_lr">
<div class="container-fluid">
<div class="row">
<div class="col-lg-4">
    <div>
    <div class="containerCheckbox d-flex">
  <span id="windowsLabel">Windows</span>

  <label class="switch" for="checkbox">
    <input type="checkbox" id="checkbox" />
    <div class="slider round"></div>
  </label>
  <span id="macLabel">Mac</span>
</div>
    </div>
    <div class="heroCategoryParent">
        <h5>Category</h5>
        <div class="heroCategory border-bottom">
            <ul>
                <li>
                    <img src="images/forensic-small.png" />
                    <span>Data Recovery</span>
                </li>
                <li>
                    <img src="images/forensic-small.png" />
                    <span>File Repair</span>
                </li>
                <li>
                    <img src="images/forensic-small.png" />
                    <span>Data Erasure</span>
                </li>
                <li>
                    <img src="images/forensic-small.png" />
                    <span>Email Repair</span>
                </li>
                <li>
                    <img src="images/forensic-small.png" />
                    <span>Email Converter</span>
                </li>
                <li>
                    <img src="images/forensic-small.png" />
                    <span>Toolkit</span>
                </li>
                <li>
                    <img src="images/forensic-small.png" />
                    <span>Forensic</span>
                </li>
            </ul>
        </div>

        <div class="trendingSoftware">
<div>
    <h5>Trending Software</h5>
    <div class="d-flex">  <img src="images/tsrapiddr.png" />    
<div>
    <h5>Raid Data Recovery</h5>
    <p>Lorem Ipsum is simply dummy text of the printing </p>
</div>
</div>    
<div class="d-flex">
    <img src="images/tstapedr.png" />
<div>
    <h5>Tape Data Recovery</h5>
    <p>Lorem Ipsum is simply dummy text of the printing </p>
</div>    
</div>
<div class="d-flex">
    <img src="images/trmssqlt.png" />   
<div>
    <h5>MS SQL Toolkit</h5>
    <p>Lorem Ipsum is simply dummy text of the printing </p>
</div>    
</div>
<div class="d-flex">
    <img src="images/trdrivee.png" /> 
<div>
    <h5>Drive Erasure</h5>
    <p>Lorem Ipsum is simply dummy text of the printing </p>
</div>    
</div>
        </div>
</div>
</div>
</div>
<div class="col-lg-8 pl-lg-0">
    <div class="sliderBanner">
        <h6>STELLAR® DATA RECOVERY FOR ANDROID®</h6>
        <h5>Simple yet Powerful Android® Data Recovery Tool</h5>
        <p>Recover lost or deleted photos, videos, music, messages, contacts, WhatsApp Chat & media, etc., from any Android® phone.</p>
        <button>Free Download</button>
    </div>
    <div class="productList">
    <h3>Top Products</h3>
    </div>
</div>

</div>
</div>
</section>


<?php include('assets/footer.php');?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
$(function(){
var recordfile=new file_js();
recordfile.screenshot_open();
 recordfile.limage();
recordfile.go_to();
recordfile.infoCookie();
if(screen.width > 768){
recordfile.menu_top();
}
});</script>
    
    </script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://www.stellarinfo.com/public/frontEnd/js/globalv1.js"></script> 
   
   <script>
        document.getElementById("checkbox").addEventListener("change", function() {
  var windows = document.getElementById("windows");
  var mac = document.getElementById("mac");
  
  if (this.checked) {
    windowsLabel.style.fontWeight = "500";
    macLabel.style.fontWeight = "600";
    macLabel.style.color = "#181617";
    windowsLabel.style.color = "#c9c9c9"
    console.log("dsds")
  } else {
    windowsLabel.style.fontWeight = "600";
    macLabel.style.fontWeight = "500";
    macLabel.style.color = "#c9c9c9"
    windowsLabel.style.color = "#181617"

    console.log("1221")

  }
});

        </script>

<script type="text/javascript">
    WebFontConfig = {
        google: { families: ["Open Sans:300,400,500,600,700", "Montserrat:300,400,500,600,700&display=swap"] },
    };
    (function () {
        var wf = document.createElement("script");
        wf.src = "https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js";
        wf.type = "text/javascript";
        wf.async = "true";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>
</body>
</html>