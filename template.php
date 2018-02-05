
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title><?php display_title(); ?></title>
    <script src="https://use.fontawesome.com/3fa2ea47c5.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="assets/css/style.css">

   <style type="text/css">
   * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    text-align: justify;
  }
  body {
        background-color: #fce4ec;
  }

  html, body {
    height: 100%;
  }
  .page-wrap {
    min-height: 100%;
    margin-bottom: -125px; 
  }
  .page-wrap:after {
    content: "";
    display: block;
  }
  .site-footer, .page-wrap:after {
    height: 125px; 
  }
  .site-footer {
    background: #FFFFFF;
    padding: 10px;
  }


  input[type="checkbox"]{
    width: 30px;
  }

  .myForm,
  .myslide {
    height: 300px;
   
  }
  
  #myCarousel {
    width: 100%;
    height: 100%;
   
  }

  .form-horizontal{
    padding: 10px;
   border-style: ridge;
   border-radius: 5px;
   height: 100%;
   margin-bottom: 20px;

  }

  .lowerContent > p {
    width: 100%;
    height: 100%;
  }

  img{
    width: 100%;
   }
  .hovereffect {
    width:100%;
    height:100%;
    float:left;
    overflow:hidden;
    position:relative;
    text-align:center;
    cursor:default;
    }

  .hovereffect .overlay {
    width:100%;
    height:100%;
    position:absolute;
    overflow:hidden;
    top:0;
    left:0;
    opacity:0;
    background-color:rgba(0,0,0,0.5);
    transition:all .4s ease-in-out
    }

  .hovereffect h5 {
    text-transform:uppercase;
    color:#fff;
    text-align:center;
    position:relative;
    font-size:10px;
    background:rgba(0,0,0,0.6);
    transition:all .2s ease-in-out;
    padding:10px;
    }

  .hovereffect:hover .overlay {
    opacity:1;
    filter:alpha(opacity=100);
    }

  .hovereffect:hover h5,.hovereffect:hover  {
    opacity:1;
    filter:alpha(opacity=100);
    transform:translatey(0);
    }


   #addCart {
    width:50%;
   }

   #select {
    height: 32px;
   }

   h3 {
    text-align: right;
   }


  .row > p {
  
    padding: 10px;
  }


  li{
    display: inline-block;
    text-decoration: none;
  }
  .profile {
    margin:25px;

  }


  </style>
  </head>
  <body>



    <div class="page-wrap">
      <?php require "partials/nav.php"; ?>

      <div class='container'>
        <div id="content_area">
          <?php display_content(); ?>
        </div>
      </div>  
 
      
    </div>

    <footer class="site-footer">
      <?php require "partials/footer.php"; ?>
      
    </footer>




  </body>
  </html>
