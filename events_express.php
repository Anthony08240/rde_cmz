<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">    

    <title>Carolo Express</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- FontAwesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

</head>
  <body>

    <?php include('include/nav.php')?>

    <div class="header_img">
    <div class="d-flex align-items-end justify-content-center" style="height:250px;"><h2 class="header_text display-2 text-white"><strong>Carolo Express</strong></h2></div>
  </div>

  <!-- port du masque obligatoire -->

  <div class="container mask-1">
    <div class="mask mt-3 w-100 d-flex justify-content-between"><p class="mask_text mx-auto my-auto w-50 m-2 text-center text-danger">Pour la sécurité de tous, le port du masque est obligatoire ainsi que le respect des gestes barrières</p><img class="m-2 mask_img" style="" src="img/mask.webp"></div>
  </div>

  <div class="row w-100 text-center">
      <div class="col-xl-6 col-mb-10 order-xl-3 order-4 p-0 m-auto">
        <img class="evenementimg evenementimg-1 img-fluid d-block" src="img/capture_rde/express_15.jpg">
      </div>
      <div class="col-xl-6 col-mb-10 order-xl-4 order-3 my-auto p-0 m-0">
        <h2 class="text-center policetitres mt-5">Carolo Express</h2>
        <div class="w-75 mx-auto">
          <p class="policep">A travers les rues de Charleville-Mézières, le Carolo Express permet aux étudiants de découvrir la ville autrement avec ses moments incontournables et de nombreux lieux insolites ou méconnus.
         Etes-vous déjà entré au sein de la TOUR DU ROY ?
         <br><br>
         Le parcours est composé d’environ 10 étapes. Sur chaque étape, une énigme ou une mise en situation sera demandée. Les équipes qui auront découvert les lieux le plus rapidement possible remporteront cette course d’orientation. Le parcours du Carolo Express doit, bien évidemment, se faire à pied (sinon, c’est trop facile).
         <br><br>
         Afin de participer à cette manifestation, il est nécessaire au préalable de composer une équipe de 5 personnes.<p class="mb-5">
        </div>
      </div>
    </div>

    <div data-bs-parallax-bg="true" class="backgroundimages" style="height:auto; padding-bottom: 30px; background-image: url(img/gacolor.jpg);">
    <div class="showeventcarac" id="compteur">
        <h2 class=" policetitres text-center mt-5 text-shadow" style="color: white;">Caractéristiques</h2>
        <div class="row w-100 mt-5">
          <div class="col-xs-6 col-md-6 col-lg-6 col-xl-4">
                <div class="rounded-circle mx-auto my-auto">
                    <p class="text-center policetitres-proginc color-yellow-light">Date</p>
                    <p class="text-center policep" style="color: white; font-size: 1.5rem;"><strong><span id="compteur1">24</span>/<span id="compteur2">09</span>/20<span id="compteur3">20</span></strong></p>
                </div>
            </div>
            <div class="col-xs-6 col-md-6 col-lg-6 col-xl-4 mb-1">
                <div class="rounded-circle mx-auto my-auto">
                    <p class="text-center policetitres-proginc color-yellow-light">Horaires</p>
                    <p class="text-center policep" style="color: white; font-size: 1.5rem;"><strong><span id="compteur4">10</span>h<span id="compteur5">30</span></strong></p>
                </div>
            </div>
            <div class="col-xs-6 col-md-6 col-lg-6 col-xl-4 mb-1">
                <div class="rounded-circle mx-auto my-auto">
                    <p class="text-center policetitres-proginc color-yellow-light">Lieu</p>
                    <p class="text-center policep" style="color: white; font-size: 1.5rem;"><strong>Charleville-Mézières</strong></p>
                </div>
            </div>
        </div>
    </div></div>

    
    <div class="container-fluid my-5">
        <div class="row w-100 mb-5 mb-xl-0">
            <div class="txt_faq col-xl-6 col-mb-10 order-2 p-0 m-auto">
            <div class="d-flex align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6"><img src="img/mascotte_montre.png" style="width:100%;"></div>
                <a class="btn-sinscrire" href="event_register_caroloexpress.php"><button class="btn btn-secondary"><h2 class="policetitres" style="color: var(--color-yellow-middle); margin-bottom: 0!important;">S'inscrire</h2></button></a>
            </div>
            </div>
        </div>
    </div>
    <?php include('include/parallax.php')?>

    <div class="row my-4 justify-content-center align-items-center w-100 mx-auto">
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/capture_rde/warrior_11.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Carolo Warrior</p>
        <hr class="style-five">
        <center><a href="events_warrior.php" class="btn btn-secondary mb-2">Détails</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/7.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Pique-Nique</p>
        <hr class="style-five">
        <center><a href="events_pique-nique.php" class="btn btn-secondary mb-2">Détails</a></center>
      </div>
    </div>
  </div>

    <?php include('include/footer.php')?>

    <script src="./assets/js/noframework.waypoints.min.js"></script>
    <script type="text/javascript">

function gocompteur(startcount, endcount, duration, idTarget) {

    var b = endcount; // Nombre final du compteur
    var ctb = startcount; // Initialisation du compteur
    var bravo = Math.ceil((duration * 1000) / b); // On calcule l'intervalle de temps entre chaque rafraîchissement du compteur (durée mise en milliseconde)
    var nodes = document.getElementById(
        idTarget); // On récupère notre noeud où sera rafraîchi la valeur du compteur

    function countdown2() {
        nodes.innerHTML = ++ctb;
        if (ctb < b) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
            setTimeout(countdown2, bravo);
        }
    }

    setTimeout(countdown2, bravo);

}

var waypoint1 = new Waypoint({
  element: document.getElementById('compteur1'),
  handler: function(direction) {
        gocompteur(0,24,1.4,"compteur1");
  },
  offset: 'bottom-in-view' 
})

var waypoint2 = new Waypoint({
  element: document.getElementById('compteur2'),
  handler: function(direction) {
        gocompteur(0,9,0.9,"compteur2");
  },
  offset: 'bottom-in-view' 
})

var waypoint3 = new Waypoint({
  element: document.getElementById('compteur3'),
  handler: function(direction) {
        gocompteur(0,20,1,"compteur3");
  },
  offset: 'bottom-in-view' 
})

var waypoint4 = new Waypoint({
  element: document.getElementById('compteur4'),
  handler: function(direction) {
        gocompteur(0,9,0.7,"compteur4");
  },
  offset: 'bottom-in-view' 
})

var waypoint5 = new Waypoint({
  element: document.getElementById('compteur5'),
  handler: function(direction) {
        gocompteur(0,30,1,"compteur5");
  },
  offset: 'bottom-in-view' 
})

</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>