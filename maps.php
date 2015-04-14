<?php 

try {
    $dns = new PDO("mysql:host=localhost;dbname=bulut","root","");
    
    if(isset($_POST["gonder"])){
        
       

            $ekle = $dns->query("insert into kordinat VALUES ('".$_REQUEST["lat"]."','".$_REQUEST["lng"]."')");
            }

    

}catch(Exception $ex) {
    echo "Hata : ". $ex->getMessage();;
}


 ?>



<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    
    <link rel="stylesheet" type="text/css" href="pure-min.css" />
        

    
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1008641-85', 'auto');
  ga('send', 'pageview');

</script>
<title>Get Lat Long from Address Convert Address to Coordinates</title> 
<meta name="description" content="A handy tool to get lat long from address, helps you to convert address to coordinates (latitude longitude) on map, also calculates the gps coordinates." />

</head>
<body>


<div class="content">
<div class="main">
             

<div class="pure-g">            
            <div class="pure-u-1 pure-u-md-2-3">
<form class="pure-form graybox padding10" id="latlongform" method="post">

                                  
            
    <div class="pure-g">
                <div class="pure-u-1-2 pure-u-md-1-2 resultlatlong">
                        <label for="lat">Enlem</label>
                        <input type="text" name="lat" id="lat" value="" placeholder="Enlem Koordinatı" /><br/>
                        <div class="social">
<div id="fb-root"></div>
<div class="fb-like" data-send="true" data-layout="button_count" style="vertical-align:super;" data-width="100" data-show-faces="false"></
</div>                </div>
                <div class="pure-u-1-2 pure-u-md-1-2 resultlatlong">
                        <label for="lng">Boylam</label>
                        <input type="text" name="lng" id="lng" value="" placeholder="Boylam Koordinatı" />
                </div>
                <input type="submit" value="gonder" name="gonder">
   <div>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- latlong -->


        <div id="latlongmap" style="height:450px; ">
        </div>

</form>
        <div class="pure-g">            
            <div class="pure-u-1 pure-u-md-1-3">

                <h3 class="titleh3">Enlem Boylam</h3>
                <span id="latlngspan" class="coordinatetxt">0,0</span>

            </div>
            
            <div class="pure-u-1 pure-u-md-1-3">

                <h3 class="titleh3">GPS KOORDİNATLARI</h3>
                <span id="dms-lat" class="coordinatetxt">0</span> 
                <span id="dms-lng" class="coordinatetxt">0</span>

            </div>

            <div class="pure-u-1 pure-u-md-1-3">

                <h3 class="titleh3">Fare ile Yer Belirt</h3>
                <span id="mlat" class="coordinatetxt">,</span>

            </div>
        </div>
    </div>
</div>

<div class="footer">

 
</div>
<div class="gotop" id="scrollUp">
<a href="#top" title="Go to Top" class="largetxt">&#8593;</a>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="/js/jquery.slimmenu.min.js"></script>
<script>

$(document).ready(function() {

$('#navigation').slimmenu(
{
    resizeWidth: '800',
    collapserTitle: 'Latitude Longitude',
    animSpeed: 'medium',
    easingEffect: null,
    indentChildren: false,
    childrenIndenter: '&nbsp;'
});
  
  
  var form = $('#frmcomment');
  var submit = $('#sendcomment');

  form.on('submit', function(e) {
        e.preventDefault();
    $.ajax({
      url: '/_addcomment.php',
      type: 'POST',
      cache: false,
      data: form.serialize(), 
      beforeSend: function(){
        submit.val('Sending...').attr('disabled', 'disabled');
      },
      success: function(data){
       
        form.trigger('reset');
        submit.val('Gönder').removeAttr('disabled');
        
        $('#tagmessage').removeClass('success').removeClass('warning').addClass('success').html('Your comment saved successfully and will publish after approval.').slideDown('slow').delay(5000).slideUp();
           
      },
      error: function(e){
        $('#tagmessage').removeClass('success').removeClass('warning').addClass('warning').html('There was an error, try again later.').slideDown('slow').delay(5000).slideUp();
        
      }
    });
  });
  
    });

$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top 
          }, 1000);
          return false;
        }
      }
    });
  });
</script>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.async = true;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script> if (window.top !== window.self) { window.top.location.replace(window.self.location.href); }</script>
<script type="text/javascript">
$(document).ready(function() {
    
    $(document).on('submit','#latlongform',function(){
        codeAddress();
        
        return false;
    });

});
</script>
<script type="text/javascript">

    var map;
    var geocoder;
    var marker;
    var infowindow;

    function initialize() {
        var latlng = new google.maps.LatLng(39.10, 35.10);
        var myOptions = {
            zoom: 5,
            center: latlng,
            panControl: true,
            scrollwheel: false,
            scaleControl: true,
            overviewMapControl: true,
            overviewMapControlOptions: { opened: true },
            mapTypeId: google.maps.MapTypeId.HYBRID
        };
        map = new google.maps.Map(document.getElementById("latlongmap"),
                myOptions);
        geocoder = new google.maps.Geocoder();
        marker = new google.maps.Marker({
            position: latlng,
            map: map
        });

        map.streetViewControl = false;
        infowindow = new google.maps.InfoWindow({
            content: "(39.10, 35.10)"
        });

        google.maps.event.addListener(map, 'click', function(event) {
            marker.setPosition(event.latLng);

            var yeri = event.latLng;

            var latlongi = "(" + yeri.lat().toFixed(6) + ", " +yeri.lng().toFixed(6) + ")";

            infowindow.setContent(latlongi);

            document.getElementById('lat').value = yeri.lat().toFixed(6);
            document.getElementById('lng').value = yeri.lng().toFixed(6);
            document.getElementById('latlngspan').innerHTML =  latlongi;
            
            document.getElementById('coordinatesurl').value = 'http://www.latlong.net/c/?lat='
                    + yeri.lat().toFixed(6) + '&long='
                    + yeri.lng().toFixed(6);
            document.getElementById('coordinateslink').innerHTML = '&lt;a href="http://www.latlong.net/c/?lat='
                        + yeri.lat().toFixed(6) + '&amp;long='
                        + yeri.lng().toFixed(6) + '" target="_blank"'+ '&gt;(' 
                        + yeri.lat().toFixed(6) + ', '
                        + yeri.lng().toFixed(6) + ')&lt;/a&gt;';
            dec2dms();
        });

        google.maps.event.addListener(map, 'mousemove', function(event) {
            var yeri = event.latLng;
            document.getElementById("mlat").innerHTML = "(" + yeri.lat().toFixed(6) + ", " +yeri.lng().toFixed(6)+ ")";
        });
    }

    function codeAddress() {
        var address = document.getElementById("gadres").value;
        if (address == '') {
            alert("Address can not be empty!");
            return;
        }
        geocoder.geocode({'address': address}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                document.getElementById('lat').value = results[0].geometry.location.lat().toFixed(6);
                document.getElementById('lng').value = results[0].geometry.location.lng().toFixed(6);
                var latlong = "(" + results[0].geometry.location.lat().toFixed(6) + ", " +
                        +results[0].geometry.location.lng().toFixed(6)+ ")";

                document.getElementById('latlngspan').innerHTML =  latlong;
                document.getElementById('coordinatesurl').value = 'http://www.latlong.net/c/?lat='
                        + results[0].geometry.location.lat().toFixed(6) + '&long='
                        + results[0].geometry.location.lng().toFixed(6);
                document.getElementById('coordinateslink').innerHTML = '&lt;a href="http://www.latlong.net/c/?lat='
                        + results[0].geometry.location.lat().toFixed(6) + '&amp;long='
                        + results[0].geometry.location.lng().toFixed(6) + '" target="_blank"'+ '&gt;(' 
                        + results[0].geometry.location.lat().toFixed(6) + ', '
                        + results[0].geometry.location.lng().toFixed(6) + ')&lt;/a&gt;';

                marker.setPosition(results[0].geometry.location);
                map.setZoom(16);
                infowindow.setContent(latlong);

                if (infowindow) {
                    infowindow.close();
                }

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });

                infowindow.open(map, marker);

                dec2dms();
            } else {
                alert("Lat and long cannot be found.");
            }
        });
    }

    function dec2dms( )
    {
        var mylat = document.getElementById("lat").value;
        var mylng = document.getElementById("lng").value;
        var scriptUr1 = "dec2dms.php?lat=" + mylat;
        var scriptUr2 = "dec2dms.php?long=" + mylng;
        $.ajax({
            url: scriptUr1,
            type: 'get',
            dataType: 'html',
            async: true,
            success: function(data) {
                result = data;
                $('#dms-lat').html(result);
            }
        });
        $.ajax({
            url: scriptUr2,
            type: 'get',
            dataType: 'html',
            async: true,
            success: function(data) {
                result = data;
                $('#dms-lng').html(result);
            }
        });

    }

    function loadScript() {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?sensor=false&' +
                'callback=initialize';
        document.body.appendChild(script);
    }

    window.onload = loadScript;

</script>

</body>
</html>