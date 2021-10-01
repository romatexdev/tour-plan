<div class="modal" id="booking-modal">
  <div class="modal__overlay"></div>
  <!-- /.modal__overlay -->
  <div class="modal__dialog">
    <a href="#" class="modal__close">
      <img src="img/close.svg" alt="icon: close">
    </a>
    <h3 class="modal__title">booking</h3>
            <form class="modal__flex" action="send.php" method="POST">
              <input name="name" type="text" class="input modal__input" placeholder="Your Full Name*">
              <input name="phone" type="text" class="input modal__input" placeholder="Phone Number*">
              <input name="email" type="email" class="input modal__input" placeholder="EMail*">
              <textarea name="message" id="message" class="message modal__message" placeholder="Message"></textarea>
              <button class="button modal__button">Send</button>
              <span class="reqfields modal__reqfields">* Required Fields</span>
            </form>
            <!-- /.modal__inputs -->
  </div>
  <!-- /.modal__dialog -->
</div>
<!-- /.modal -->

<div class="modal" id="rating-modal">
  <div class="modal__overlay"></div>
  <!-- /.modal__overlay -->
  <div class="modal__dialog">
    <a href="#" class="modal__close">
      <img src="img/close.svg" alt="icon: close">
    </a>
    <h3 class="modal__title">Send your feedback</h3>
            <form class="modal__flex" action="send.php" method="POST">
              <input name="name" type="text" class="input modal__input" placeholder="Your Full Name*">
              <input name="phone" type="text" class="input modal__input" placeholder="Phone Number*">
              <input name="email" type="email" class="input modal__input" placeholder="EMail*">
              <textarea name="message" id="message" class="message modal__message" placeholder="Message"></textarea>
              <button class="button modal__button">Send</button>
              <span class="reqfields modal__reqfields">* Required Fields</span>
            </form>
            <!-- /.modal__inputs -->
  </div>
  <!-- /.modal__dialog -->
</div>
<!-- /.modal -->