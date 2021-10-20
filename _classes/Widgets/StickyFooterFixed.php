<?php

 /**
  * Class Social Shorcode
  */
 namespace CPF\Widgets;

 class StickyFooterFixed
 {

  public function __construct()
  {
   add_action('wp_footer', array($this, 'displayFixedFooter'));
  }

  public function displayFixedFooter()
  {

  ?>
<style>
.CPF-FIXED-FOOTER {

  height: 24px;
  /* Replace with the height your footer should be */
  width: 100%;
  /* Don't change */
  background-image: none;
  background-repeat: repeat;
  background-attachment: scroll;
  background-position: 0% 0%;
  position: fixed;
  bottom: 0pt;
  left: 0pt;

  padding: 3rem;
  width: 100%;
  background: black;

}

@media only screen and (max-width: 1056px) {
  .CPF-FIXED-FOOTER {
    display: none;
  }
}



.CPF-FIXED-FOOTER_contents {

  /* height: 24px; */
  /* Replace with the height your footer should be */
  width: 1200px;
  /* Visible width of footer */
  margin-top: -3rem;
  margin-left: auto;
  margin-right: auto;

  /* FLEXBOX CODE */
  display: flex;
  flex-wrap: wrap;

}

@media only screen and (max-width: 1270px) {
  .CPF-FIXED-FOOTER_contents {
    width: 1000px;
  }
}

.flex-item {
  width: 400px;
  /* border: 2px dotted white; */
}

@media only screen and (max-width: 1270px) {
  .flex-item {
    width: 330px;
  }
}

.flex-item .product-image {
  margin-top: -1.5rem;
}

.flex-item .middle-button {
  width: 80%;
  background: coral;
  margin-top: .8rem;
  padding-top: .2rem;
  padding-bottom: .2rem;
}

.flex-item .middle-button:hover {
  background: darkorange;
}

.flex-item .middle-button h4 {
  text-align: center;
}

.flex-item .middle-button h6 {
  text-align: center;
}

.flex-item .block-3 h5 {
  text-align: center;
  padding: .25rem;
  background: tomato;
  border-radius: 10px;
  margin-top: .5rem;
  font-size: .7rem;
  text-transform: uppercase;
}

.flex-item .block-3 p {
  text-align: center;
  font-size: .6rem;
  color: white;
}

.moose-center {
  display: block;
  margin: 0 auto;
  clear: both;
}
</style>
<div class="CPF-FIXED-FOOTER">
  <section class="CPF-FIXED-FOOTER_contents">

    <div class="flex-item">

      <img class="product-image moose-center" src="/wp-content/uploads/2021/09/AC-Bundle.png" alt="">

    </div>
    <div class="flex-item">

      <button class="middle-button moose-center">
        <h4 class="moose-center">DOWNLOAD NOW</h4>
        <h6 class="moose-center">Get Instant Access</h6>
      </button>

    </div>
    <div class="flex-item">

      <div class="block-3">
        <h5>Get Simplified Local Growth for $27</h5>
        <p>(Save $70 today) Download The eBook
          For $97 Just $27.00! Delivered instantly.
          Start reading in the next 2 minutes.</p>
      </div>

    </div>

  </section>
</div>

<?php
 }

}