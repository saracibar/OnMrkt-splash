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
		$(".map_canvas").hide();
	}
	
	
	function testing2(){
		//alert("testing");
		//script envia y en success lo siguiente:
		$(".cont4").show();
		$(".cont3").hide();
		$(".loadingbtn").hide();
		$( ".cont4" ).removeClass( "divoff" );
	}
	
	$("#e1").select2({
	  maximumSelectionLength: 20,
		placeholder: "Post code(s) or suburbs of your interest"
	});
	
	$("#e2").select2({
	  maximumSelectionLength: 20,
		placeholder: "Post code(s) or suburbs of your interest"
	});
	
	
	$("#goal25").on('keyup', function() {
        var words = this.value.match(/\S+/g).length;
        if (words > 25) {
            // Split the string on first 200 words and rejoin on spaces
            var trimmed = $(this).val().split(/\s+/, 25).join(" ");
            // Add a space at the end to keep new typing making new words
            $(this).val(trimmed + " ");
        }
        else {
            $('#display_count').text(words);
            $('#word_left').text(25-words);
        }
    });
	
	$("#goal25").val("");
	
	
	
});