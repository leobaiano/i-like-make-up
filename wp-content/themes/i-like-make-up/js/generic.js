(function($) {
	$(document).ready(function() {
		$( '.close-newsletter' ).on( 'click', function() {
			$( '.sombra' ).fadeOut( 300 );
			$( '.pupup-newsletter' ).fadeOut( 300 );
		});

		var posicaoInicial = $( '.page-content' ).position().top;

		$( '.ampliar-imagem' ).on( 'click', function() {
			var largura = $( window ).width();
			var altura = $( window ).height();
			$( '.box-imagem' ).css( 'width', largura );
			$( '.box-imagem' ).css( 'height', altura );
			var imagem = $( this ).data( 'ampliada' );
			$( '.imagem-ampliada' ).attr( 'src', imagem );
			$( '.sombra-2' ).fadeIn( 300 );
			$( '.box-imagem' ).fadeIn( 300 );
			$('html, body').animate({scrollTop:0}, 'slow');
		} );
		$( '.close-newsletter-2' ).on( 'click', function() {
			$( '.imagem-ampliada' ).attr( 'src', '' );
			$( '.box-imagem' ).fadeOut( 300 );
			$( '.sombra-2' ).fadeOut( 300 );
			$('html, body').animate({scrollTop:posicaoInicial}, 'slow');
		});
		$( '.sombra-2' ).on( 'click', function() {
			$('html, body').animate({scrollTop:posicaoInicial}, 'slow');
			$( '.imagem-ampliada' ).attr( 'src', '' );
			$( '.box-imagem' ).fadeOut( 300 );
			$( '.sombra-2' ).fadeOut( 300 );
		});
	});
})(jQuery);
