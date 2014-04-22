<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the class=site-inner div and all content after
 *
 * @package Omega
 */
?>
		<?php do_action( 'omega_after_main' ); ?>

	</div><!-- .site-inner -->

	<?php 
	do_action( 'omega_before_footer' ); 
	do_action( 'omega_footer' ); 
	do_action( 'omega_after_footer' ); 
	?>

</div><!-- .site-container -->

<?php do_action( 'omega_after' ); ?>

<?php wp_footer(); ?>


<script>

//  $("<img>").prependTo("#archives-2").attr({
//    src: '/omega-child/images/dropdown_arrow.png',
//    alt: '',
  $('.widget-title').prepend("<span>&nbsp;&nbsp;</span>");

// });
// $('#archives-2').hide();
$(function () {
  // $( "#archives-2 h4" ).replaceWith( "<h4><span class="caret">></span> Archives</h4>" );
  // $('#archives-2 > ul').toggleClass('no-js js');

  $('#archives-2 ul li').hide();
  $('#archives-2').hover(function(e) {
    $('#archives-2 ul li').slideToggle(200);
    $('.widget-title').toggleClass('active');
    e.stopPropagation();
  });
  
});

// $(function () {
//   // $( "#archives-2 h4" ).replaceWith( "<h4><span class="caret">></span> Archives</h4>" );
//   // $('#archives-2 > ul').toggleClass('no-js js');
//   $('#categories-2 ul li').hide();
//   $('#categories-2').hover(function(e) {
//     $('#categories-2 ul li').slideToggle(200);
//     $('.widget-title').toggleClass('active');
//     e.stopPropagation();
//   });
  
// });




// $( "#archives-2 h4" ).replaceWith( "<h4>> Archives</h4>" );

// $(function() {  
//   $("#archives-2 h4").hover(function(e) {
//   // $( "#archives-2 h4" ).replaceWith( "<h4> Archives</h4>" );

// });
// });
// $( "#archives-2" ).append( "<span>></span>" );
// $( "#archives-2 h4" ).replaceWith( "<h4><span class="caret">></span> Archives</h4>" );
// $(document).click(function() {
  //   if ($('#archives-2 > ul').is(':visible')) {
  //     $('#archives-2 > ul', this).slideUp();
  //     $('.widget-title').removeClass('active');
  //   }
  // });


// $( "#archives-2" ).hover(
//   function() {
//     $( this ).append( $( "<span> ***</span>" ) );
//   }, function() {
//     $( this ).find( "span:last" ).remove();
//   }
// );
 
// $( "li.fade" ).hover(function() {
//   $( this ).fadeOut( 100 );
//   $( this ).fadeIn( 500 );
// });







	// $('#archives-2').click().hide();


// > ul
// $(function () {
// 	 $('#archives-2').toggleClass('ul');
// 	  $('#archives-2 > div >ul').hide();
// 	  $('#archives-2').hover(function(e) {
// 	    $('#archives-2 > div > ul').slideToggle(200);
// 	    $('#archives-2').toggleClass('active');
// 	    e.stopPropagation();
// 	  });
// 	  $(document).click(function() {
// 	    if ($('#archives-2 >div > ul').is(':visible')) {
// 	      $('#archives-2 > div > ul', this).slideUp();
// 	      $('#archives-2').removeClass('active');
// 	    }
// 	  });
// 	});
</script>

</html>