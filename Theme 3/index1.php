<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Theme 3</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400"> <!-- Google web font "Open Sans", https://fonts.google.com/ -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">         <!-- Font Awesome, http://fontawesome.io/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                               <!-- Bootstrap styles, https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate-style.css">                            <!-- Templatemo style -->


      </head>

      <body>
        <div class="container-fluid">
            <div class="tm-body">
                <div class="tm-sidebar sticky">
                    <section id="welcome" class="tm-content-box tm-banner margin-b-15">
                        <div class="tm-banner-inner">
                            <i class="fa fa-film fa-4x margin-b-40"></i>
                            <h1 class="tm-banner-title">Creative</h1>
                                         
                        </div>                    
                    </section>
                    <nav class="tm-main-nav">
                        <ul class="tm-main-nav-ul">
                            <li class="tm-nav-item"><a href="index.html" class="tm-nav-item-link tm-button active">Gallery</a>
                            </li>
                            <li class="tm-nav-item"><a href="timeline.html" class="tm-nav-item-link tm-button">Timeline</a>
                            </li>
                            <li class="tm-nav-item"><a href="about.html" class="tm-nav-item-link tm-button">About</a>
                            </li>
                
                        </ul>
                    </nav>
                </div>
                
                <div class="tm-main-content tm-gallery-container">                    
                    <div class="grid">                                                    
                        <div class="grid-item"><img src="img/gallery-img-23-01.jpg" alt="Image"></div>
                        <div class="grid-item"><img src="img/gallery-img-11-01.jpg" alt="Image"></div>
                        <div class="grid-item"><img src="img/gallery-img-12-01.jpg" alt="Image"></div>
                        <div class="grid-item"><img src="img/gallery-img-11-02.jpg" alt="Image"></div>                        
                        <div class="grid-item"><img src="img/gallery-img-12-02.jpg" alt="Image"></div>
                        <div class="grid-item"><img src="img/gallery-img-23-02.jpg" alt="Image"></div>
                        <div class="grid-item"><img src="img/gallery-img-11-03.jpg" alt="Image"></div>
                        <div class="grid-item"><img src="img/gallery-img-23-03.jpg" alt="Image"></div>                        
                        <div class="grid-item"><img src="img/gallery-img-11-04.jpg" alt="Image"></div>
                        <div class="grid-item"><img src="img/gallery-img-11-05.jpg" alt="Image"></div>
                        <div class="grid-item"><img src="img/gallery-img-12-03.jpg" alt="Image"></div>
                        <div class="grid-item"><img src="img/gallery-img-12-04.jpg" alt="Image"></div>
                        <div class="grid-item"><img src="img/gallery-img-11-06.jpg" alt="Image"></div>
                        <div class="grid-item"><img src="img/gallery-img-23-04.jpg" alt="Image"></div>
                        <div class="grid-item"><img src="img/gallery-img-11-07.jpg" alt="Image"></div>
                        <div class="grid-item"><img src="img/gallery-img-23-05.jpg" alt="Image"></div>
                    </div>                    
                </div> <!-- tm-main-content -->
            </div>

            

        </div> <!-- container-fluid -->
        
        <!-- load JS files -->
        
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/imagesloaded.pkgd.min.js"></script> <!-- https://masonry.desandro.com/ -->
        <script src="js/masonry.pkgd.min.js"></script> <!-- https://masonry.desandro.com/ -->
        
        <!-- Templatemo scripts -->
        <script>  
    
        $(document).ready(function(){

            // init Masonry
            // https://codepen.io/craigwheeler/pen/MYjBga
            var $grid = $('.grid').masonry({
                
                // set itemSelector so .grid-sizer is not used in layout
                // itemSelector: '.grid-item',
                // use element for option
                // columnWidth: '.grid-sizer',
                // percentPosition: true

                itemSelector: '.grid-item',
                isFitWidth: true,
                columnWidth: 1
            });
            // layout Masonry after each image loads
            $grid.imagesLoaded().progress( function() {
              $grid.masonry('layout');
            });            

            // Update the current year in copyright
            $('.tm-current-year').text(new Date().getFullYear());        
        });

        </script>
    </body>
    </html>