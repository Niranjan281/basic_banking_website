<?php
require_once 'header.php';
 ?>
 <div class="m1">
 <div class="container main">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">PUNE</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">020 293884942</div>
          <div class="text-two">020 278881933</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">banks@gmail.com</div>
          <div class="text-two">info.banks@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p style="color:#fff;">If you have any type of queries, you can send us message from here. It's our pleasure to help you.</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
            <input type="text" placeholder="Enter your message">
        </div>
        <div class="button">
        <a href="index.php"><input type="button"  value="Send Now" ></a>
        </div>
      </form>
    </div>
    </div>
  </div>
</div>
 <?php
 require_once 'footer.php';
  ?>