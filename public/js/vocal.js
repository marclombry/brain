	// systeme vocal//
	responsiveVoice.OnVoiceReady = function() {
	 //console.log("speech time?");
		responsiveVoice.speak($('.welcomeCerebro').text(),"French Female");

	};
	$('document').ready(function(){

		$('.a').on('mouseenter', function(){
			var p = $(this);
            responsiveVoice.speak($(p).text(),"French Female");
        }); 
      
	});