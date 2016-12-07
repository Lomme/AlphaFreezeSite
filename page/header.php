<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 header-font">
	<div class="row">

        <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5">
          <div class="row">
            <aside class="col-xs-12 col-sm-12 col-md-12 col-lg-12"/>
          </div>
        </div>

        <section class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
          <img src="pictures/alpha.jpg">
        </section>

        <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5">

            <div class="col-xs-4 col-sm-5 col-md-5 col-lg-8">
                <div class="row">
                    <aside class="col-xs-12 col-sm-12 col-md-12 col-lg-12"/>
                </div>
            </div>

            <section class="col-xs-4 col-sm-2 col-md-2 col-lg-1">
                <a href="index.php?page=home&lang=fr"><img src="pictures/Fr.png" class="flag"></a>
            </section>

            <section class="col-xs-4 col-sm-2 col-md-2 col-lg-1">
                <a href="index.php?page=home&lang=en"><img src="pictures/Uk.png" class="flag"></a>
            </section>

            <section class="col-xs-4 col-sm-2 col-md-2 col-lg-1">
                <a href="index.php?page=home&lang=gr"><img src="pictures/Gr.png" class="flag"></a>
            </section>

            <section class="col-xs-4 col-sm-2 col-md-2 col-lg-1">
                <a href="index.php?page=home&lang=nl"><img src="pictures/Nl.png" class="flag"></a>
            </section>



        </div>

      </div>
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="row">

        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-3">
          <div class="row">
            <aside class="col-xs-12 col-sm-12 col-md-12 col-lg-12"/>
          </div>
        </div>

        <section class="col-xs-4 col-sm-6 col-md-8 col-lg-6 center-block">

          <?php
          $pageSource=$_GET["page"];
          $nav = "<div class=\"navbar navbar-default\">
<ul class=\"nav navbar-nav\">
                 <li ".(($pageSource == 'home') ? 'class="active"' : '')."> <a href=\"index.php?page=home\">".MENU_HOME."</a> </li>
                 <li ".(($pageSource == 'nous') ? 'class="active"' : '')."> <a href=\"index.php?page=nous\">".MENU_TEAM."</a> </li>
                 <li ".(($pageSource == 'produits') ? 'class="active"' : '')."> <a href=\"index.php?page=produits\">".MENU_PRODUCTS."</a> </li>
                 <li ".(($pageSource == 'contact') ? 'class="active"' : '')."> <a href=\"index.php?page=contact\">".MENU_CONTACT."</a> </li>
              </ul>
        </div>";
          echo $nav;
          ?>

        </section>

        <div class="col-xs-4 col-sm-3 col-md-2 col-lg-3">

        </div>

      </div>
</div>

	
