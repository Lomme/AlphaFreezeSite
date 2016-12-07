 <div class="row" style="background-color: white;padding-top:10px;padding-bottom: 10px;">
        <section class="col-xs-10 col-sm-8 col-md-8 col-lg-6" style="background-color: white;">
            <p style="text-align: left">Rue des Soldats 82</p>
            <p style="text-align: left">1082 Berchem-St-Agathe</p>
            <br>
            <div class="row">
                <div class="col-xs-1 col-sm-2 col-md-2 col-lg-2" style="background-color: white;">
                    <div class="row" style="background-color: white;">
                        <aside class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color: white;"/>
                    </div>
                </div>

                <section class="col-xs-10 col-sm-8 col-md-8 col-lg-4" style="background-color: white;">
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
                    <div style='overflow:hidden;height:350px;width:400px;'>
                        <div id='gmap_canvas' style='height:350px;width:400px;'>
                            <style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
                        <script type='text/javascript'>
                            function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(50.8503396,4.351710300000036),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(50.8503396,4.351710300000036)});infowindow = new google.maps.InfoWindow({content:'<strong>Alpha Freeze</strong><br>Bruxelles<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                    </div>
                </section>

                <div class="col-xs-1 col-sm-2 col-md-2 col-lg-6" style="background-color: white;">
                    <div class="row" style="background-color: white;">
                        <aside class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color: white;"/>
                    </div>
                </div>


            </div>

            <div class="row">

                <section class="col-xs-10 col-sm-8 col-md-8 col-lg-2" style="background-color: white;">
                    <a href="index.php?page=home"><img src="pictures/fb.png" class="icon"></a>
                </section>

                <div class="col-xs-1 col-sm-2 col-md-2 col-lg-10" style="background-color: white;">
                    <div class="row" style="background-color: white;">
                        <aside class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color: white;"/>
                    </div>
                </div>
            </div>

        </section>

        <section class="col-xs-10 col-sm-8 col-md-8 col-lg-6" style="background-color: white;">
            <form class="form-horizontal" role="form" method="post" action="index.php">
                <div class="form-group" style="background-color: white;">
                    <label for="name" class="col-sm-2 control-label" style="background-color: white;">Name</label>
                    <div class="col-sm-10" style="background-color: white;">
                        <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="" style="background-color: white;">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label" style="background-color: white;">Email</label>
                    <div class="col-sm-10" style="background-color: white;">
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                    </div>
                </div>
                <div class="form-group" style="background-color: white;">
                    <label for="message" class="col-sm-2 control-label" style="background-color: white;">Message</label>
                    <div class="col-sm-10" style="background-color: white;">
                        <textarea class="form-control" rows="4" name="message" style="background-color: white;"></textarea>
                    </div>
                </div>

                <div class="form-group" style="background-color: white;">
                    <div class="col-sm-10 col-sm-offset-2" style="background-color: white;">
                        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </section>
</div>