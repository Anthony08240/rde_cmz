<?php require_once('traitements/connexiondb.php'); ?>
<Footer>
    <p class="footertitle">Partenaires</p>
    <div class="mx-auto container_footer">

        <?php $req = $bdd->prepare("SELECT * FROM rdepartners");
          $req->execute();

          while( $partner = $req->fetch() ) {
  
    ?>

        <div>
            <a href="<?= $partner['website_link'] ?>" target="_blank"><img src="img/<?= $partner['image'] ?>" class="hvr-pulse" alt="<?= $partner['alt'] ?>"></a>
        </div>

          <?php } ?>
    </div>

    <div class="copy"><a href="../mention.php" style="text-decoration:none; color:white">Mentions Légales</a></div>
    <div class="copy">© Copyright 2020 JJ.Yoyo.Val.Antho</div>
</footer>