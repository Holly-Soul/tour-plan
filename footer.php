<footer class="footer">
      <div class="container">
        <div class="footer-wrapper">
          <img
            src="img/footer-logo.svg"
            alt="Best Tour Plan"
            class="logo footer__logo"
          />
          <div class="footer__list footer__categories">
            <h2 class="footer__title">ALL CATEGORIES</h2>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">All Deals</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Hotels</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Activities</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Spa Packages</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Hotel Day Packages</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Restaurants</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Fitness</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Rodrigues</a>
              </li>
            </ul>
          </div>
          <div class="footer__list footer__additional">
            <h2 class="footer__title">ADDITIONAL INFORMATION</h2>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">About Us </a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Contact Us </a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">How does it work? </a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Frequently Asked Questions</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Deals.mu loyalty program </a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link"
                  >Promote your Business on BTP</a
                >
              </li>
            </ul>
          </div>
          <div class="footer__social-network">
            <h3 class="footer__title footer__title_inline">Social Network</h3>
            <div class="footer__social-links">
              <a href="#" class="footer__link"
                ><img
                  src="img/facebook.svg"
                  alt="facebook"
                  class="footer__icon"
              /></a>
              <a href="#" class="footer__link"
                ><img src="img/youtube.svg" alt="youtube" class="footer__icon"
              /></a>
              <a href="#" class="footer__link"
                ><img
                  src="img/instagram.svg"
                  alt="instagram"
                  class="footer__icon"
              /></a>
            </div>
          </div>
          <div class="footer__list footer__legal">
            <h2 class="footer__title">LEGAL INFORMATION</h2>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">
                  Terms & Conditions
                </a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Disclaimer </a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Cancellation policy </a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Privacy</a>
              </li>
            </ul>
          </div>
          <div class="footer__contact-details">
            <h2 class="footer__title footer__title_mb-3">Contact Details</h2>
            <p class="footer__text">
              Feel free to contact us by phone, email or by our contact form
            </p>
            <ul class="footer__ul">
              <li class="footer__item footer__item_mb-2">
                <div class="footer__icon-wrapper">
                  <img src="img/footer-map.svg" alt="map marker" />
                </div>
                9748 Blossom Hill Rd undefined Lansing, Idaho 68545 United
                States
              </li>
              <li class="footer__item footer__item_mb-2">
                <div class="footer__icon-wrapper">
                  <img src="img/footer-phone.svg" alt="phone" />
                </div>
                Tel (business hours) : 269 1500 <br />
                Tel (hotline) Monday - Saturday: 52-56-61-38 (08:00 am – 20:00
                pm) <br />
                Tel (hotline) Sunday: 52-56-61-38 (08:00 am – 14:00 pm)
              </li>
              <li class="footer__item footer__item_mb-2">
                <div class="footer__icon-wrapper">
                  <img src="img/footer-mail.svg" alt="mail" />
                </div>

                cherly.lawson@example.com
              </li>
            </ul>
          </div>
          <div class="footer__contact-form">
            <h2 class="footer__title footer__title_mb-3">Send us a message</h2>
            <form action="send.php" method="POST" class="footer__form form">
              <div class="footer__input-group">
                <input
                  type="text"
                  class="input footer__input"
                  placeholder="Your Full Name*"
                  name="name"
                  required
                />
              </div>
              <div class="footer__input-group">
                <input
                  type="tel"
                  class="input footer__input"
                  placeholder="Phone Number*"
                  name="phone"
                  required
                />
              </div>

              <textarea
                class="message footer__message"
                cols="30"
                rows="10"
                placeholder="Message"
                name="message"
              ></textarea>
              <button class="button footer__button">Send</button>
              <span class="footer__info">* Required Fields</span>
            </form>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="footer__bottom_info bottom-info">
            <span class="bottom-info__text">Disclaimer</span>
            <span class="bottom-info__text">Conditions of use</span>
            <span class="bottom-info__text">Cancellation policy</span>
          </div>
          <img src="img/bottom-pay.png" alt="pay" class="footer__bottom_img" />
        </div>
      </div>
    </footer>
    <div class="modal">
      <div class="modal__overlay"></div>
      <div class="modal__dialog">
        <a href="#" class="modal__close"
          ><img src="img/close.svg" alt="close" />
        </a>
        <h2 class="modal__title modal__title_mb-3">Booking</h2>
        <form action="send.php" method="POST" class="modal__form form">
          <input
            type="text"
            class="input modal__input"
            placeholder="Your Full Name*"
            name="name"
            required
          />
          <input
            type="tel"
            class="input modal__input"
            placeholder="Phone Number*"
            name="phone"
            required
          />
          <input
            type="email"
            class="input modal__input"
            placeholder="Email*"
            name="email"
            required
          />
          <textarea
            class="message modal__message"
            cols="30"
            rows="10"
            placeholder="Message"
            name="message"
          ></textarea>
          <div class="modal__bottom">
            <button class="button modal__button">Send</button>
            <span class="modal__info">* Required Fields</span>
          </div>
        </form>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script src="scripts/jquery.validate.min.js"></script>
    <script src="scripts/slick.min.js"></script>
    <script src="scripts/aos.js"></script>
    <script src="scripts/script.js"></script>
  </body>
</html>