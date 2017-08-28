$(document).ready(function(){
	

	$('#rates').hide();
	$('#view-rates').on('click',function(){
		$('#rates').toggle('slideDown');	
	});

	$('#close').on('click',function(){
		$('.status').hide();
	});


	$('form#new_reg').on('submit',function(event){
		var folio = $('input#folio').val();
		var name = $('input#name').val();
		var address = $('input#address').val();
		var nationality = $('input#nationality').val();
		var birthdate = $('input#birthdate').val();
		var company = $('input#company').val();
		var profession = $('input#profession').val();
		var credentials = $('input#credentials').val();
		var num_person = $('input#num_person').val();
		var arrival = $('input#arrival').val();
		var depart = $('input#depart').val();
		var room = $('input#room').val();
		var destination = $('input#destination').val();
		var or_num = $('input#or').val();
		var charge_to = $('input#charge_to').val();
		var registrar = $('inpit#registrar').val();

		if(folio.length < 1) {
			$('input#folio').attr('style','border: 1px solid red !important');
			event.preventDefault();
		}
		if(!isNumeric($('input#folio').val())) {
			$('input#folio').attr('style','border: 1px solid red !important');
			event.preventDefault();
		}
		if(name.length < 1) {
			$('input#name').attr('style','border: 1px solid red !important');
			event.preventDefault();
		}
		if(address.length < 1) {
			$('input#address').attr('style','border: 1px solid red !important');
			event.preventDefault();
		}
		if(nationality.length < 1) {
			$('input#nationality').attr('style','border: 1px solid red !important');
			event.preventDefault();
		}
		if(birthdate.length < 1) {
			$('input#birthdate').attr('style','border: 1px solid red !important');
			event.preventDefault();
		}
		if(comapny.length < 1) {
			$('input#company').attr('style','border: 1px solid red !important');
			event.preventDefault();
		}
		if(profession.length < 1) {	
			$('input#profession').attr('style','border: 1px solid red !important');
			event.preventDefault();
		}
		if(credentials.length < 1) {
			$('input#credentials').attr('style','border: 1px solid red !important');
			event.preventDefault();
		}
		if(num_person.length < 1) {
			$('input#num_person').attr('style','border: 1px solid red !important');
			event.preventDefault();
		}
		if(arrival.length < 1) {
			$('input#arrival').attr('style','border: 1px solid red !important');
			event.preventDefault();
		}
		if(depart.length < 1) {
			$('input#depart').attr('style','border: 1px solid red !important');
			event.preventDefault();
		} 
		if(room.length < 1) {
			$('input#room').attr('style','border: 1px solid red !important');
			event.preventDefault();
		}
		if(destination.length < 1) {
			$('input#destination').attr('style','border: 1px solid red !important');
			event.preventDefault();
		}
		if(or_num.length < 1) {
			$('input#or').attr('style','border: 1px solid red !important');
			event.preventDefault();
		}
		if(charge_to.length < 1) {
			$('input#charge_to').attr('style','border: 1px solid red !important');
			event.preventDefault();
		}
		if(registrar.length < 1) {
			$('input#registrar').attr('style','border: 1px solid red !important');
			event.preventDefault();
		}

	});

	$('.all').on('scroll',function(){
		$('.all').attr('style','border-top: 1px solid #34495E !important');
	});
 

}); //end