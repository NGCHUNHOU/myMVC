<?php
  Route::set('about-us', function() {
      AboutUs::Createheader('header');
      AboutUs::CreateView('AboutUs');
      AboutUs::Createfooter('footer');
  } );

  Route::set('contact-us', function() {
     ContactUs::CreateView('ContactUs');
} );
?>