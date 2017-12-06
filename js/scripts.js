$( document ).ready(function() {
    $('[data-toggle="tab"]').tooltip();
	$(".cont2").hide();
	$(".loadingbtn").hide();
	
	$(".nav-link").click(function(){
		$(".cont1").hide();
		$(".tooltip").hide();
		$(".cont2").show();
		$( ".cont2" ).removeClass( "divoff" );
	});
	
	$(".botback").click(function(){
		$(".cont1").show();
		$(".cont2").hide();
		$(".tooltip").show();
		$( "#buyer-tab" ).removeClass( "active" );
		$( "#owner-tab" ).removeClass( "active" );
		$( "#both-tab" ).removeClass( "active" );
	});
	
	$(".botnext1").click(function(){
		$(".botnext1").hide();
		$(".botback").hide();
		$(".loadingbtn").show();
		$( "#buyer-tab" ).removeClass( "active" );
		
		setTimeout(testing, 1000);
	});
	
	
	$(".botnext2").click(function(){
		$(".botnext2").hide();
		$(".loadingbtn").show();
		$( "#buyer-tab" ).removeClass( "active" );
		
		setTimeout(testing2, 1000);
	});
	
	function testing(){
		//alert("testing");
		//script envia y en success lo siguiente:
		$(".cont3").show();
		$(".cont2").hide();
		$(".loadingbtn").hide();
		$( ".cont3" ).removeClass( "divoff" );
	}
	
	
	function testing2(){
		//alert("testing");
		//script envia y en success lo siguiente:
		$(".cont4").show();
		$(".cont3").hide();
		$(".loadingbtn").hide();
		$( ".cont4" ).removeClass( "divoff" );
	}
	
	
});