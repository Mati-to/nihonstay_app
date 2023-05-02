<?php
require '../includes/functions.php';
addTemplate('header', $main = true);
?>

<main class='container section'>
  <h1>Why choose NihonStay?</h1>

  <div class='icons-aboutus'>
    <div class='icon'>
      <img src='../src/img/icon1.svg' alt='Security icon' loading='lazy'>
      <h3>Security</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vero nesciunt beatae odio veritatis harum eius
        veniam consequatur?</p>
    </div>
    <div class='icon'>
      <img src='../src/img/icon2.svg' alt='Prize icon' loading='lazy'>
      <h3>Prize</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vero nesciunt beatae odio veritatis harum eius
        veniam consequatur?</p>
    </div>
    <div class='icon'>
      <img src='../src/img/icon3.svg' alt='Location icon' loading='lazy'>
      <h3>Location</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vero nesciunt beatae odio veritatis harum eius
        veniam consequatur?</p>
    </div>
  </div>
</main>

<section class='section container'>
  <h1>Some of our Houses</h1>

  <div class='rent-container'>
    <div class='rent'>
      <img src='../src/img/rent1.jpg' alt='House Rent 1'>
      <div class='rent-container'>
        <h4>House in Tokyo</h4>
        <p>House with a big and beautiful garden to relax and rest</p>
        <p> <span class='prize'>$300</span> /per night</p>
        <ul class='icons-rent'>
          <li>
            <img src='../src/img/icon_wc.svg' alt='wc icon' loading='lazy'>
            <p>2</p>
          </li>
          <li>
            <img src='../src/img/icon_parkinglot.svg' alt='parking lot icon' loading='lazy'>
            <p>2</p>
          </li>
          <li>
            <img src='../src/img/icon_bedroom.svg' alt='bedroom icon' loading='lazy'>
            <p>4</p>
          </li>
        </ul>

        <a href='rentals.html' class='button brown-button'>More info</a>
      </div>
    </div> <!-- House 1 -->

    <div class='rent'>
      <img src='../src/img/rent2.jpg' alt='House Rent 1'>
      <div class='rent-container'>
        <h4>House in Tokyo </h4>
        <p>House with a big and beautiful garden to relax and rest</p>
        <p> <span class='prize'>$120</span> /per night</p>
        <ul class='icons-rent'>
          <li>
            <img src='../src/img/icon_wc.svg' alt='wc icon' loading='lazy'>
            <p>1</p>
          </li>
          <li>
            <img src='../src/img/icon_parkinglot.svg' alt='parking lot icon' loading='lazy'>
            <p>1</p>
          </li>
          <li>
            <img src='../src/img/icon_bedroom.svg' alt='bedroom icon' loading='lazy'>
            <p>1</p>
          </li>
        </ul>

        <a href='rentals.html' class='button brown-button'>More info</a>
      </div>
    </div> <!-- House 2 -->

    <div class='rent'>
      <img src='../src/img/rent6.jpg' alt='House Rent 1'>
      <div class='rent-container'>
        <h4>House in Kyoto </h4>
        <p>House with a big and beautiful garden to relax and rest</p>
        <p> <span class='prize'>$200</span> /per night</p>
        <ul class='icons-rent'>
          <li>
            <img src='../src/img/icon_wc.svg' alt='wc icon' loading='lazy'>
            <p>1</p>
          </li>
          <li>
            <img src='../src/img/icon_parkinglot.svg' alt='parking lot icon' loading='lazy'>
            <p>1</p>
          </li>
          <li>
            <img src='../src/img/icon_bedroom.svg' alt='bedroom icon' loading='lazy'>
            <p>3</p>
          </li>
        </ul>

        <a href='rentals.html' class='button brown-button'>More info</a>
      </div>
    </div> <!-- House 3 -->
  </div>

  <div class='align-right'>
    <a class='button green-button' href='rentals.html'>View all</a>
  </div>
</section>

<section class='contact-mainpage'>
  <h3>Experience the authentic beauty of Japan, in the comfort of your own private retreat.</h3>
  <a class='button brown-button' href='contact.html'>Contact Us!</a>
</section>

<div class='container section blog-mainpage'>
  <section class='blog'>
    <h3>Blog - Places of interest</h3>

    <div class='blog-entry'>
      <div class='blog-img'>
        <img src='../src/img/blog1_bamboo-grove.jpg' alt='Bamboo grove'>
      </div>
      <div class='blog-text'>
        <a href='blog.html'>
          <h4>Arashiyama's Bamboo Grove</h4>
          <p>Location: <span>Arashiyama, Kyoto</span> </p>
          <p>The Arashiyama Bamboo Grove is a popular destination for nature lovers and photographers.</p>
        </a>
      </div>
    </div> <!-- Article 1 end -->

    <div class='blog-entry'>
      <div class='blog-img'>
        <img src='../src/img/blog2_nezu-shrine.jpg' alt='Fushimi inari taisha temple'>
      </div>
      <div class='blog-text'>
        <a href='blog.html'>
          <h4>Fushimi Inari Taisha</h4>
          <p>Location: <span>Bunkyo, Tokyo</span></p>
          <p>Nezu Shrine is a Shinto shrine located in the Bunkyo ward of Tokyo. great place to
            experience Japanese culture and history</p>
        </a>
      </div>
    </div> <!-- Article 2 end -->
  </section>

  <section class='container blog-weather'>
    <h3>Tokyo's weather</h3>

    <div class='container weather-box'>
      <img src='' alt=''>
      <p class='temperature'></p>
      <p class='description'></p>
    </div>

    <div class='weather-description'>
      <div class='humidity-box'>
        <p>Humidity</p>
        <img src='../src/img/humidity-icon.png' alt='' loading='lazy'>
        <span></span>
      </div>
      <div class='wind-box'>
        <p>Wind</p>
        <img src='../src/img/wind-icon.svg' alt='' loading='lazy'>
        <span></span>
      </div>

    </div>

    <div class='weather-notFound'>
      <img src='../src/img/maintenance.svg' alt='maintenance section' loading='lazy'>
      <p>This section is under maintenance</p>
    </div>
  </section>
</div>

<?php
addTemplate('footer');
?>