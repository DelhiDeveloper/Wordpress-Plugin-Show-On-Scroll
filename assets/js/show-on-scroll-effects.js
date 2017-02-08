






$j = jQuery.noConflict();



/******************************************************************************************************
													Initialising the Scrollreveal & WOW Reveal Library
******************************************************************************************************/

$j(function(){
  
    // Changing the defaults
    window.sr = ScrollReveal();

    // Simple Reveal Classes
    sr.reveal('.scroll_reveal_top', {
        origin: 'top',
        reset: true,
        duration: 1500,
    });
    sr.reveal('.scroll_reveal_bottom', {
        origin: 'bottom',
        reset: true,
        duration: 1500,
    });
	sr.reveal('.scroll_reveal_left', {
        origin: 'left',
        reset: true,
        duration: 1500,
    });
    sr.reveal('.scroll_reveal_right', {
        origin: 'right',
        reset: true,
        duration: 1500,
    });
  
    // Simple Reveal Sequence Classes
    sr.reveal(
      '.scroll_reveal_sequence', 
      {
        origin: 'right',
        reset: true,
        duration: 700,
      },
      500
    );
    sr.reveal(
      '.scroll_reveal_sequence_1', 
      {
        origin: 'right',
        reset: true,
        duration: 700,
      },
      500
    );
    sr.reveal(
      '.scroll_reveal_sequence_2', 
      {
        origin: 'right',
        reset: true,
        duration: 700,
      },
      500
    );
    sr.reveal(
      '.scroll_reveal_sequence_3', 
      {
        origin: 'right',
        reset: true,
        duration: 700,
      },
      500
    );
    sr.reveal(
      '.scroll_reveal_sequence_4', 
      {
        origin: 'right',
        reset: true,
        duration: 700,
      },
      500
    );
    sr.reveal(
      '.scroll_reveal_sequence_5', 
      {
        origin: 'right',
        reset: true,
        duration: 700,
      },
      500
    );
  
    // Simple Reveal Flip Sequence Classes
    sr.reveal(
      '.scroll_reveal_flip_sequence', 
      {
        origin: 'left',
        reset: true,
        rotate: {y: 360},
        duration: 700,
      },
      500
    );
    sr.reveal(
      '.scroll_reveal_flip_sequence_1', 
      {
        origin: 'left',
        reset: true,
        rotate: {y: 360},
        duration: 700,
      },
      500
    );
    sr.reveal(
      '.scroll_reveal_flip_sequence_2', 
      {
        origin: 'left',
        reset: true,
        rotate: {y: 360},
        duration: 700,
      },
      500
    );
    sr.reveal(
      '.scroll_reveal_flip_sequence_3', 
      {
        origin: 'left',
        reset: true,
        rotate: {y: 360},
        duration: 700,
      },
      500
    );
    sr.reveal(
      '.scroll_reveal_flip_sequence_4', 
      {
        origin: 'left',
        reset: true,
        rotate: {y: 360},
        duration: 700,
      },
      500
    );
    sr.reveal(
      '.scroll_reveal_flip_sequence_5', 
      {
        origin: 'left',
        reset: true,
        rotate: {y: 360},
        duration: 700,
      },
      500
    );

});






