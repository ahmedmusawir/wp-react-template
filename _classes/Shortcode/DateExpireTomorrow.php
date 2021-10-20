<?php

 /**
  * Class Social Shorcode
  */
 namespace CPF\Shortcode;

 class DateExpireTomorrow
 {

  public function __construct()
  {
   add_shortcode('offer-expires', array($this, 'displayOfferExpireBlock'));
  }

  public function displayOfferExpireBlock($atts, $content)
  {
   $atts = shortcode_atts(
    array(
     'content' => !empty($content) ? $content : 'Default Title'

    ), $atts);

   extract($atts);

   ob_start(); // OUTPUT BUFFERING

  ?>

<!--======================================
=            HTML BLOCK START            =
=======================================-->
<style>
#CPF-EXPIRE-DATE-BLOCK {
  text-align: center;
  /* padding: 1rem; */
  /* border: 1rem solid red; */
}
</style>
<main id="CPF-EXPIRE-DATE-BLOCK">

  <div class="" style="padding-top: 2rem;">

    <h2 class=""><?php echo $content; ?></h2>
    <h2 class=""><?php echo $this->getTomorrowsDate(); ?></h2>


  </div>

</main>

<!--====================================
=            HTML BLOCK END            =
=====================================-->

<?php

   $module_contents = ob_get_contents();

   ob_end_clean();

   return $module_contents;
  }

  // END displayOfferExpireBlock FUNCTION

  private function getTomorrowsDate()
  {
   $today    = date('m-d-y');
   $date1    = str_replace('-', '/', $date);
   $tomorrow = date('F d, Y', strtotime($date1 . "+1 days"));

   return $tomorrow;
  }

} // END OF THE CLASS