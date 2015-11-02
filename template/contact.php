<html lang="en">
<head>
    <?php include 'content/header.html';?>
</head>
<body>
    <?php include_once("analyticstracking.php") ?>
    <!-- Header start -->
    <?php include 'content/bodyHeader.html';?>
    <div id="inner-header">
        <img src="images/banner/banner1.jpg" alt ="" />
    </div>
    <?php $name = basename(__FILE__); ?>
    <?php include 'content/breadcrumb.php';?>
    <div class="gap-40"></div>
    <?php include 'content/sectionContact.html';?>
    <div class="gap-40"></div>
    
    <?php include 'content/sectionFooter.html';?>
    <?php include 'content/footer.html';?>
    
    <!-- Google Map API Key Source -->
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<!-- For Google Map -->
	<script type="text/javascript" src="js/gmap3.js"></script>
	<!-- Doc http://www.mkyong.com/google-maps/google-maps-api-hello-world-example/ -->

	<script type="text/javascript">
      $(function() {
        $("#map").gmap3({
          map:{
            options:{
              zoom: 14,
            }
          },
          getlatlng:{
            address:  "Ezzahra Tunisie",
            callback: function(results) {
              if ( !results ) return;
              $(this).gmap3('get').setCenter(new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()));
              $(this).gmap3({
                marker:{
                  latLng:results[0].geometry.location,
                  options:{
                	  	icon: new google.maps.MarkerImage(
						"http://gmap3.net/skin/gmap/magicshow.png",
						new google.maps.Size(32, 37, "px", "px")
						)
              		}
                }
              });
            }
          }

        });

        });
    </script>
    
</body>
</html>