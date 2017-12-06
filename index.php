<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Nokk</title>
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div class="map_canvas" style=" position: absolute; top: 0; bottom:110px; left:0; right:0; height: calc(100% - 60px)"></div>
<div class="thelogocont"><img src="images/nokk-logo-trans.png" class="thelogo"></div>
	
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-light topmenu">
	
	
	
    <div class="col text-left">
     About Us | Contact
    </div>
    <div class="col text-center">
      N O K K
    </div>
    <div class="col text-right">
      Competition Details
    </div>
	
	
</nav>
<div class="container-fluid fill">
	
	
	
	
  <div class="content">
	  
    <div class="middle" >
		
		
<div class="row">
  <div class="col-lg-6 offset-lg-3 text-center ">
	  <div class="transparent50 cont1 fade-in">
<p>COMING SOON</p>
    <h1>A new way to connect in real estate</h1>
     
	  <p><strong>Pre register for your chance to WIN a property makover package valued at $10,000.</strong></p>
		  
		  <hr />

     
    <legend class="legend">
                       Select one of the following options:
                    </legend>
   
<!-- Nav tabs -->
<ul class="nav nav-pills black mytab" id="myTab" role="tablist" style="display: block">
  <li class="text-center d-inline-block">
    <a class="nav-link" id="buyer-tab" data-toggle="tab" href="#buyer" role="tab" aria-controls="buyer" aria-selected="true" title="The content for the buyer button tooltip" data-placement="top">Buyer</a>
  </li>
  <li class="text-center d-inline-block">
    <a class="nav-link" id="owner-tab" data-toggle="tab" href="#owner" role="tab" aria-controls="owner" aria-selected="false" title="The content for the owner button tooltip" data-placement="top">Owner</a>
  </li>
  <li class="text-center d-inline-block">
    <a class="nav-link" id="both-tab" data-toggle="tab" href="#both" role="tab" aria-controls="both" aria-selected="false" title="The content for the buyer both tooltip" data-placement="top">Both</a>
  </li>
</ul>
	  

<!-- Tab panes -->


	  </div>
	  
	  
	<div class="transparent50 cont2 divoff">
	 <div class="tab-content">
  <div class="tab-pane" id="buyer" role="tabpanel" aria-labelledby="buyer-tab">
      
      <div class="col-sm theform">
		<h2>Buyer</h2>
   	 <form id="form101"  method="post" action="p.php">
		 
		 
		 <div class="formpart">
                    <legend>
                       Fill out the fields below
                    </legend>
                 
                    
                </div>
   

      <input id="name" name="name" class="reginput input50" type="text"  placeholder="Name"  value="" />

      <input id="lastname" name="lastname" class="reginput input50" type="text"  placeholder="Last Name"    value="" />

      <input id="email" name="email" class="reginput input50" type="text"  placeholder="Email"   value="" />
		 <input id="phone" name="phone" class="reginput input50" type="text"  placeholder="Phone"   value="" />
			  
			 <input id="phone" name="phone" class="reginput input100" type="text"  placeholder="Start typing your address and select..."   value="" /> 
		
		 <input name="formid" id="formid" type="hidden" value="101"> 
     <input name="step" id="step" type="hidden" value="3"> 
		 
		 <div class="botgroup">
			 <a class="btn-progress-back link-icon va-container va-container-v pull-left text-gray link--accessibility-outline botback" href="#"><span class="iconback hide-sm"></span><span class="va-middle textbotback"><h5 class="text-normal"><span>Back</span></h5></span></a>
			
			<!-- <button type="submit" form="form101" class="btn btn-dark btn-lg raised float-right nextbtn ">Next</button> -->
			 <button type="button" class="btn btn-dark btn-lg raised float-right nextbtn botnext1">Next</button>
			 <button type="button" class="btn btn-dark btn-lg raised float-right loadingbtn ">.</button>
		</div>  
		 
		 
    </form>
    </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
  </div>
  <div class="tab-pane" id="owner" role="tabpanel" aria-labelledby="owner-tab">

    <div class="col-sm theform">
		<h2>Owner</h2>
   	 <form id="form10-3"  method="post" action="p.php">
		 
		 
		 <div class="formpart">
                    <legend>
                       Fill out the fields below
                    </legend>
                 
                    
                </div>
   

      <input id="name" name="name" class="reginput input50" type="text"  placeholder="Name"  value="" />

      <input id="lastname" name="lastname" class="reginput input50" type="text"  placeholder="Last Name"    value="" />

      <input id="email" name="email" class="reginput input50" type="text"  placeholder="Email"   value="" />
		 <input id="phone" name="phone" class="reginput input50" type="text"  placeholder="Phone"   value="" />
			 <input id="geocomplete" name="geocomplete" class="reginput input100" type="text" autocomplete="off" placeholder="Start typing your address and select..." value="" /> 
		
		 <input name="formid" id="formid" type="hidden" value="101"> 
     <input name="step" id="step" type="hidden" value="3"> 
		 
		 
		  <div style="display:none">
       <label>Apt, Suite, Bldg. (optional)</label>
        <input type="text" name="apt" autocomplete="off"  placeholder="e.g. Apt #7" value="">

        <label>City</label>
        <input name="locality" type="text" value="">
        
        <label>State</label><div></div>
        <input name="administrative_area_level_1" type="text" value="">
        
         <label>Zip Code</label>
        <input name="postal_code" type="text" value="">
        
        
        
        
       

        <label>Name</label>
        <input name="name" type="text" value="">

        <label>Latitude</label>
        <input name="lat" type="text" value="">

        <label>Longitude</label>
        <input name="lng" type="text" value="">

        <label>Location</label>
        <input name="location" type="text" value="">

        <label>Formatted Address</label>
        <input name="formatted_address" type="text" value="">

        <label>Viewport</label>
        <input name="viewport" type="text" value="">

        <label>Route</label>
        <input name="route" type="text" value="">

        <label>Street Number</label>
        <input name="street_number" type="text" value="">
        
        <label>Sub Locality</label>
        <input name="sublocality" type="text" value="">

        <label>Country</label>
        <input name="country" type="text" value="">

        <label>Country Code</label>
        <input name="country_short" type="text" value="">

        <label>Place ID</label>
        <input name="place_id" type="text" value="">

        <label>ID</label>
        <input name="id" type="text" value="">

        <label>Reference</label>
        <input name="reference" type="text" value="">

        <label>URL</label>
        <input name="url" type="text" value="">
        </div>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <div class="botgroup">
			 <a class="btn-progress-back link-icon va-container va-container-v pull-left text-gray link--accessibility-outline botback" href="#"><span class="iconback hide-sm"></span><span class="va-middle textbotback"><h5 class="text-normal"><span>Back</span></h5></span></a>
			
			<!-- <button type="submit" form="form101" class="btn btn-dark btn-lg raised float-right nextbtn ">Next</button> -->
			 <button type="button" class="btn btn-dark btn-lg raised float-right nextbtn botnext1">Next</button>
			 <button type="button" class="btn btn-dark btn-lg raised float-right loadingbtn ">.</button>
		</div>  
    </form>
    </div>


  </div>
  <div class="tab-pane" id="both" role="tabpanel" aria-labelledby="both-tab">
      
    <div class="col-sm theform">
		<h2>Both</h2>
   	 <form id="form10-3"  method="post" action="p.php">
		 
		 
		 <div class="formpart">
                    <legend>
                       Fill out the fields below
                    </legend>
                 
                    
                </div>
   

      <input id="name" name="name" class="reginput input50" type="text"  placeholder="Name"  value="" />

      <input id="lastname" name="lastname" class="reginput input50" type="text"  placeholder="Last Name"    value="" />

      <input id="email" name="email" class="reginput input50" type="text"  placeholder="Email"   value="" />
		 <input id="phone" name="phone" class="reginput input50" type="text"  placeholder="Phone"   value="" />
			  
			 <input id="phone" name="phone" class="reginput input100" type="text"  placeholder="Start typing your address and select..."   value="" /> 
		
		 <input name="formid" id="formid" type="hidden" value="101"> 
     <input name="step" id="step" type="hidden" value="3"> 
		 
		 <div class="botgroup">
			 <a class="btn-progress-back link-icon va-container va-container-v pull-left text-gray link--accessibility-outline botback" href="#"><span class="iconback hide-sm"></span><span class="va-middle textbotback"><h5 class="text-normal"><span>Back</span></h5></span></a>
			
			<!-- <button type="submit" form="form101" class="btn btn-dark btn-lg raised float-right nextbtn ">Next</button> -->
			 <button type="button" class="btn btn-dark btn-lg raised float-right nextbtn botnext1">Next</button>
			 <button type="button" class="btn btn-dark btn-lg raised float-right loadingbtn ">.</button>
		</div>  
    </form>
    </div>

  </div>
</div>
		  
	</div>
	  
	  
	  
	  
	  <div class="transparent50 cont3 divoff">
<div class="col-sm theform">
		<h2>What is your goal?</h2>
   	 <form id="form10-3"  method="post" action="p.php">
		 
		 
		 <div class="formpart">
                    <legend>
                       Please share in 25 words or less what is your goal.
                    </legend>
                 
                    
                </div>
   

      <input id="name" name="name" class="reginput input50" type="text"  placeholder="Name"  value="" />

      <input id="lastname" name="lastname" class="reginput input50" type="text"  placeholder="Last Name"    value="" />

     
		
		 <input name="formid" id="formid" type="hidden" value="101"> 
     <input name="step" id="step" type="hidden" value="3"> 
		 
		 <div class="botgroup">

			 <button type="button" class="btn btn-dark btn-lg raised float-right nextbtn botnext2">Next</button>
			 <button type="button" class="btn btn-dark btn-lg raised float-right loadingbtn ">.</button>
		</div>  
    </form>
    </div>
	  </div>
	  
	  
	  
<div class="transparent50 cont4 divoff">
<div class="col-sm theform">
		<h2>Thanks</h2>

		 <div class="formpart">
                    <legend>
                       Fill out the fields below
                    </legend>
                 
                    
                </div>
   

    </div>
	  </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	</div>
</div>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="container-fluid"> 
	
 <div class="row">
    <div class="col-sm-6 text-left">
      © NOKK 2017
    </div>
    <div class="col-sm-6 text-right">
      Privacy Policy | Terms and Conditions
    </div>
 </div>
</div>
</footer>

	<script src="js/jquery-3.2.1.min.js"></script>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBccMwsltxA-99aTkEoQzttDTWmuR-tbQg&libraries=places"></script>
	
    <script src="js/jquery.geocomplete.js"></script>

    <script>
      $(function(){
		 var center = new google.maps.LatLng(10, 0);
        var themap = $("#geocomplete").geocomplete({
          map: ".map_canvas",
		  mapOptions: {
			  backgroundColor:  "url(bg.jpg)",
			   
			  //styles: [{"featureType":"all","elementType":"geometry.fill","stylers":[{"weight":"2.00"}]},{"featureType":"all","elementType":"geometry.stroke","stylers":[{"color":"#9c9c9c"}]},{"featureType":"all","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#eeeeee"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#7b7b7b"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#c8d7d4"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#070707"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]}]
			  styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
		  },
          details: "form",
          types: ["geocode"],
        }).bind("geocode:result", function(event, result){
			
			var map = $("#geocomplete").geocomplete("map");
			var center = new google.maps.LatLng(10,0);
			 
			var lat1 = result.geometry.location.lat()-0.0025;
			var lng1 = result.geometry.location.lng()+0.012;
			var latlng1 = new google.maps.LatLng(lat1, lng1);
			
			map.setCenter(latlng1);
			//map.setZoom(5);
			
			//alert(themap);
			
			//result.setZoom(3);
			
			
			//this.setCenter(latlng1);
			//alert(latlng1);
			
			//alert(result.geometry.location);
 //setCenter(result.geometry.location);
		//console.log(result);
		//alert(result["name"]);
		$("#geocomplete").val(result["name"]);
		//$(".map_canvas div:first-child").css("display", "block");
		//$(".map_canvas div:first-child").show();
		$(".map_canvas").css("backgroundImage", "none");
			$(".map_canvas").css("paddingRight", "200px");
	  });
		  

		  
	  
	});
	$(".map_canvas div:first-child").hide();
  

    </script>
 

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/scripts.js"></script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>