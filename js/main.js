//========================
//  Tooltip
//========================
jQuery(document).ready(function( $ ) {
	// madrid
	jQuery('#tooltip-madrid').tooltipster({
		theme: 'tooltipster-blue',
		position: 'top-left',
		content: $('<p class="tool-university">Carlos III University of Madrid</p><span class="tool-city">GETAFE (MADRID)</span> - <span class="tool-country">Spain</span>'),
	});

	// paris
	jQuery('#tooltip-paris').tooltipster({
		theme: 'tooltipster-blue',
		position: 'top-left',
		content: $('<p class="tool-university">University of Trento</p><span class="tool-city">PARIS</span> - <span class="tool-country">France</span>'),
	});

	// berlin
	jQuery('#tooltip-berlin').tooltipster({
		theme: 'tooltipster-blue',
		position: 'top-left',
		content: $('<p class="tool-university">Technische Universität Berlin</p><span class="tool-city">BERLIN</span> - <span class="tool-country">Germany</span>'),
	});

	// eotvos
	jQuery('#tooltip-eotvos').tooltipster({
		theme: 'tooltipster-blue',
		position: 'top-left',
		content: $('<p class="tool-university">Eötvös Loránd University Faculty of Informatics</p><span class="tool-city">BUDAPEST</span> - <span class="tool-country">Hungary</span>'),
	});

	// Aalto
	jQuery('#tooltip-aalto').tooltipster({
		theme: 'tooltipster-blue',
		position: 'top-left',
		content: $('<p class="tool-university">Aalto University</p><span class="tool-city">ESPOO</span> - <span class="tool-country">Finland</span>'),
	});

	// trento
	jQuery('#tooltip-trento').tooltipster({
		theme: 'tooltipster-blue',
		position: 'top-left',
		content: $('<p class="tool-university">University of Trento</p><span class="tool-city">TRENTO</span> - <span class="tool-country">Italy</span>'),
	});

	// Keio University KANAGAWA - Japan
	jQuery('#tooltip-keio').tooltipster({
		theme: 'tooltipster-red',
		position: 'top-right',
		content: $('<p class="tool-university">Keio University</p><span class="tool-city">KANAGAWA</span> - <span class="tool-country">Japan</span>'),
	});

	// The University of Tokyo TOKYO - Japan
	jQuery('#tooltip-tokyo').tooltipster({
		theme: 'tooltipster-red',
		position: 'top-right',
		content: $('<p class="tool-university">The University of Tokyo</p><span class="tool-city">TOKYO</span> - <span class="tool-country">Japan</span>'),
	});

	// Nara Institute of Science and Technology NARA - Japan
	jQuery('#tooltip-nara').tooltipster({
		theme: 'tooltipster-red',
		position: 'top-right',
		content: $('<p class="tool-university">Nara Institute of Science and Technology</p><span class="tool-city">NARA</span> - <span class="tool-country">Japan</span>'),
	});	

	// GIST (Gwangju Institute of Science & Technology) GWANGJU - KOREA
	jQuery('#tooltip-gwangju').tooltipster({
		theme: 'tooltipster-red',
		position: 'top-right',
		content: $('<p class="tool-university">GIST (Gwangju Institute of Science & Technology)</p><span class="tool-city">GWANGJU</span> - <span class="tool-country">KOREA</span>'),
	});		

	// Chungnam National University DAEJEON - South KOREA
	jQuery('#tooltip-daejeon').tooltipster({
		theme: 'tooltipster-red',
		position: 'top-right',
		multiple: true,
		content: $('<p class="tool-university">Chungnam National University</p><span class="tool-city">DAEJEON</span> - <span class="tool-country">KOREA</span>'),
	});	

	// KAIST DAEJEON - Republic of Korea
	jQuery('#tooltip-daejeon').tooltipster({
		theme: 'tooltipster-red',
		position: 'bottom-right',
		multiple: true,
		content: $('<p class="tool-university">KAIST (Korea Advanced Institute of Science and Technology)</p><span class="tool-city">DAEJEON</span> - <span class="tool-country">KOREA</span>'),
	});	


});