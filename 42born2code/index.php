<?php get_header() ?>

<div id="content_index">
  <div id="jumbotron">
    <div id="jumbo_wrap">
      <div id="hero_title">
        <h2>Bienvenue a la maison</h2>
        <h3>Louez des logements uniques auprès d'hôtes locaux dans 190+ pays</h3>
        <a href="http://wp.local.42.fr:8080/?page_id=4" id="mode_btn" class="btn" >Mode d'emploi</a>
      </div>
    </div>
    <div id="blocsearch"> <?php include('searchform.php'); ?></div>
  </div>
  <section id="preview">
    <div id="preview_wrap">
    <h3>Juste pour le weekend</h3>
    <h4>Découvrez de nouveaux logements incroyables près de chez vous.</h4>
    <ul id="grille">
      <li class="bloc">
        <a href="#">
          <figure class="bloc_content" id="bruxelles">
            <figcaption class="caption">Bruxelles</figcaption>
          </figure>
        </a>
      </li>
      <li class="bloc">
        <a href="#">
          <figure class="bloc_content" id="lilles">
            <figcaption class="caption">Lilles</figcaption>
          </figure>
        </a>
      </li>
      <li class="bloc">
        <a href="#">
          <figure class="bloc_content" id="london">
            <figcaption class="caption">London</figcaption>
          </figure>
        </a>
      </li>
    </ul>
  </div>
  </section>
<!-- #ici code -->
</div>
<?php get_footer() ?>
