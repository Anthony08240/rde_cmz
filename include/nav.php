<script type="text/javascript">
$(function(){
    var lastScrollTop = 0;
    if (typeof navCloud === 'undefined') { 
              navCloud = false; 
              $("#header-top").addClass("nav-svg");
              $(".navbar-toggler").addClass("navbar-toggler-svg");
              $(".logocmz-nav").attr("src","assets/img/Logo_CH_color_white.svg");
            } else {
              $("#header-top").addClass("nav-cloud");
              $(".navbar-toggler").addClass("navbar-toggler-cloud");
              $(".logocmz-nav").attr("src","assets/img/Logo_CH_color.svg");              
          }
    $(window).scroll(function(){


        st = $(this).scrollTop();
        
        if(navCloud){
          if(st<$("#top_slider_container").height()) {
            $("#header-top").addClass("nav-cloud");
            $("#header-top").removeClass("nav-svg");
            $(".navbar-toggler").addClass("navbar-toggler-cloud");
            $(".navbar-toggler").removeClass("navbar-toggler-svg");
            $(".logocmz-nav").addClass("logocmz-nav-cloud");
            $(".logocmz-nav").removeClass("logocmz-nav-svg");
            $(".logocmz-nav").attr("src","assets/img/Logo_CH_color.svg");
          } else {
            $(".navbar-toggler").removeClass("navbar-toggler-cloud");
            $(".navbar-toggler").addClass("navbar-toggler-svg");
            $("#header-top").removeClass("nav-cloud");
            $("#header-top").addClass("nav-svg");
            $(".logocmz-nav").removeClass("logocmz-nav-cloud");
            $(".logocmz-nav").addClass("logocmz-nav-svg");
            $(".logocmz-nav").attr("src","assets/img/Logo_CH_color_white.svg");
          }
        } else {
          $(".navbar-toggler").removeClass("navbar-toggler-cloud");
          $(".navbar-toggler").addClass("navbar-toggler-svg");
          $("#header-top").removeClass("nav-cloud");
          $("#header-top").addClass("nav-svg");
          $(".logocmz-nav").removeClass("logocmz-nav-cloud");
          $(".logocmz-nav").addClass("logocmz-nav-svg");
          $(".logocmz-nav").attr("src","assets/img/Logo_CH_color_white.svg");
        }


        lastScrollTop = st;
    });

    $(".filtersButton").click(function () {

        $("#filtersCollapse" ).toggleClass("filtersExpanded");

    });

});




</script>



<header id="header-top" class="container-fluid navbar-container fixed-top d-flex align-items-start justify-content-between" style="height: 70px;">
  <!-- <div id="header-top" class=" "> -->
  <nav class="navbar navbar-expand-lg navbar-dark justify-content-between pt-0 pt-lg-1">
      <button class="navbar-toggler order-1 mx-auto" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
  
      <div class="collapse navbar-collapse order-4 order-lg-1 justify-content-center mt-3" id="navbarToggler">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link policetitres-nav" href="index.php">Accueil<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
  
      <div class="collapse navbar-collapse order-5 order-lg-2 justify-content-center mt-3" id="navbarToggler">
        <ul class="navbar-nav">
          <li class="nav-item dropdown policetitres-nav">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Programme
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="event.php">Tous les évènements</a>
              <a class="dropdown-item" href="events_express.php">Carolo Express</a>
              <a class="dropdown-item" href="events_warrior.php">Carolo Warrior</a>
              <a class="dropdown-item" href="events_pique-nique.php">Pique-Nique</a>
            </div>
          </li>
        </ul>
      </div>

      <div class="navbar-brand mx-auto order-2 order-lg-3 justify-content-center align-items-start d-flex pt-2 pt-lg-4"><a href="http://www.charleville-mezieres.fr/"><img class="logocmz-nav d-block" src="assets/img/Logo_CH_color.svg"></a></div>
  
      <div class="collapse navbar-collapse order-6 order-lg-4 justify-content-center mt-3" id="navbarToggler">
        <ul class="navbar-nav">
          <li class="nav-item dropdown policetitres-nav">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Inscriptions
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="event_register_caroloexpress.php">Carolo Express</a>
              <a class="dropdown-item" href="event_register_carolowarrior.php">Carolo Warrior</a>
              <a class="dropdown-item" href="event_register_piquenique.php">Pique-Nique</a>
            </div>
          </li>
        </ul>
      </div>
    
      <div class="collapse navbar-collapse order-7 order-lg-5 justify-content-center mt-3" id="navbarToggler">
        <ul class="navbar-nav">
          <li class="nav-item dropdown policetitres-nav">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Contact
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="faq.php">FAQ</a>
              <a class="dropdown-item" href="contact.php">Formulaire contact</a>
            </div>
          </li>
        </ul>
      </div>
  </nav>

</header>