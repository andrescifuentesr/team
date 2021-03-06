//========================
//  Tooltip
//========================
jQuery(document).ready(function( $ ) {
	// madrid
	jQuery('#tooltip-madrid').tooltipster({
		theme: 'tooltipster-blue',
		position: 'top-left',
		interactive: true,
		content: $('<button id="bt_modal" data-modal="134"><p class="tool-university">Carlos III University of Madrid</p><span class="tool-city">GETAFE (MADRID)</span> - <span class="tool-country">Spain</span><p class="see-more see-more-bleu">See more</p></button>')
	});

	// paris
	jQuery('#tooltip-paris').tooltipster({
		theme: 'tooltipster-blue',
		position: 'top-left',
		interactive: true,
		content: $('<button id="bt_modal" data-modal="142"><p class="tool-university">Université Pierre et Marie Curie</p><span class="tool-city">PARIS</span> - <span class="tool-country">France</span><p class="see-more see-more-bleu">See more</p></button>')
	});

	// berlin
	jQuery('#tooltip-berlin').tooltipster({
		theme: 'tooltipster-blue',
		position: 'top-left',
		interactive: true,
		content: $('<button id="bt_modal" data-modal="131"><p class="tool-university">Technische Universität Berlin</p><span class="tool-city">BERLIN</span> - <span class="tool-country">Germany</span><p class="see-more see-more-bleu">See more</p></button>')
	});

	// eotvos
	jQuery('#tooltip-eotvos').tooltipster({
		theme: 'tooltipster-blue',
		position: 'top-left',
		interactive: true,
		content: $('<button id="bt_modal" data-modal="113"><p class="tool-university">Eötvös Loránd University</p><span class="tool-city">BUDAPEST</span> - <span class="tool-country">Hungary</span><p class="see-more see-more-bleu">See more</p></button></button>')
	});

	// Aalto
	jQuery('#tooltip-aalto').tooltipster({
		theme: 'tooltipster-blue',
		position: 'top-left',
		interactive: true,
		content: $('<button id="bt_modal" data-modal="104"><p class="tool-university">Aalto University</p><span class="tool-city">ESPOO</span> - <span class="tool-country">Finland</span><p class="see-more see-more-bleu">See more</p></button>')
	});

	// trento
	jQuery('#tooltip-trento').tooltipster({
		theme: 'tooltipster-blue',
		position: 'top-left',
		interactive: true,
		content: $('<button id="bt_modal" data-modal="138"><p class="tool-university">University of Trento</p><span class="tool-city">TRENTO</span> - <span class="tool-country">Italy</span><p class="see-more see-more-bleu">See more</p></button>')
	});

	// Nara Institute of Science and Technology NARA - Japan
	jQuery('#tooltip-nara').tooltipster({
		theme: 'tooltipster-red',
		position: 'top-right',
		interactive: true,
		content: $('<button id="bt_modal" data-modal="127"><p class="tool-university">Nara Institute of Science and Technology</p><span class="tool-city">NARA</span> - <span class="tool-country">Japan</span><p class="see-more see-more-red">See more</p></button>')
	});	

	// Keio University TOKYO - Japan
	jQuery('#tooltip-tokyo').tooltipster({
		theme: 'tooltipster-red',
		position: 'top-right',
		multiple: true,
		interactive: true,
		content: $('<button id="bt_modal" data-modal="123"><p class="tool-university">Keio University</p><span class="tool-city">TOKYO</span> - <span class="tool-country">Japan</span><p class="see-more see-more-red">See more</p></button>')
	});

	// The University of Tokyo TOKYO - Japan
	jQuery('#tooltip-tokyo').tooltipster({
		theme: 'tooltipster-red-bottom',
		position: 'bottom-right',
		multiple: true,
		interactive: true,
		content: $('<button id="bt_modal" data-modal="145"><p class="tool-university">The University of Tokyo</p><span class="tool-city">TOKYO</span> - <span class="tool-country">Japan</span><p class="see-more see-more-red">See more</p></button>')
	});

	// GIST (Gwangju Institute of Science & Technology) GWANGJU - KOREA
	jQuery('#tooltip-gwangju').tooltipster({
		theme: 'tooltipster-red',
		position: 'top-right',
		interactive: true,
		content: $('<button id="bt_modal" data-modal="117"><p class="tool-university">Gwangju Institute of Science & Technology</p><span class="tool-city">GWANGJU</span> - <span class="tool-country">KOREA</span><p class="see-more see-more-red">See more</p></button>')
	});		

	// Chungnam National University DAEJEON - South KOREA
	jQuery('#tooltip-daejeon').tooltipster({
		theme: 'tooltipster-red',
		position: 'top-right',
		multiple: true,
		interactive: true,
		content: $('<button id="bt_modal" data-modal="110"><p class="tool-university">Chungnam National University</p><span class="tool-city">DAEJEON</span> - <span class="tool-country">KOREA</span><p class="see-more see-more-red">See more</p></button>')
	});	

	// KAIST DAEJEON - Republic of Korea
	jQuery('#tooltip-daejeon').tooltipster({
		theme: 'tooltipster-red-bottom',
		position: 'bottom-right',
		multiple: true,
		interactive: true,
		content: $('<button id="bt_modal" data-modal="120"><p class="tool-university">Korea Advanced Institute of Science and Technology</p><span class="tool-city">DAEJEON</span> - <span class="tool-country">KOREA</span><p class="see-more see-more-red">See more</p></button>')
	});

	//=================
	//Tooltip
	//=================
	//we open the window on click tooltip
	$('body').on('click', '#bt_modal', function (){
		var modal = $(this).attr("data-modal");
		$('#block__central-'+modal).removeClass('block__central--inactive');
	});

	//we close the window on click
	$('.bt_modal-close').on('click', function (){
		var modal_close = $(this).attr("data-modal-close");
		$('#block__central-'+modal_close).addClass('block__central--inactive');
	});

	//modal home for mobile
	$('.bt-home--mobile').on('click', function (){
		var modal = $(this).attr("data-modal");
		$('.block__central').addClass('block__central--inactive');
		$('#block__central-'+modal).removeClass('block__central--inactive');
	});

	//=================
	//Pop-up
	//=================
	//we open the modal when we load the first page
	$('.bt_modal__home-close, .md-overlay').on('click', function (){
		$('.block__central-modal').removeClass('md-show');
	});

	//=================
	//Search
	//=================
	//we call our unity search box
	new UISearch( document.getElementById( 'sb-search' ) );
});