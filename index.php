<?php include('header.php')?>
<section class="hotel">
  <div class="container">
    <div class="hotel-info">
      <div class="hotel-info__text">
        <div class="hotel-wrapper">
          <div class="stars">
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
          </div>
          <h1 class="hotel-name hotel-info__name">grand hilton hotel</h1>
          <span class="offer hotel-info__offer">Flash Offer</span>
        </div>
        <p class="hotel-description hotel-info__description">
          Half-Board / All Inclusive + Complimentary Activities + Child Stays
          Free
        </p>
      </div>
      <div class="rating hotel-info__rating">
        <span class="rating__text">User Rattings</span>
        <span class="rating__counter"
          >4.5/ <span class="rating__counter__small">5</span>
        </span>
      </div>
    </div>
    <div class="hotel-grid">
      <div class="slider">
        <div class="slider-item">
          <img src="img/Slider-photo.jpg" alt="Slider-photo" />
        </div>
        <div class="slider-item">
          <img src="img/slider-photo-2.jpeg" alt="Slider-photo" />
        </div>
        <div class="slider-item">
          <img src="img/slider-photo-4.webp" alt="Slider-photo" />
        </div>
        <div class="slider-item">
          <img src="img/Slider-photo-5.jpg" alt="Slider-photo" />
        </div>
      </div>
      <div class="hotel-rightside">
        <div class="booking">
          <div class="booking__info">
            <div class="booking__price">
              <span class="booking__start">price starts as</span>
              <strong class="booking__pricetag">$ 8,500</strong>
              <span class="booking__per-room">per room / night</span>
            </div>
            <div class="booking__room">
              <div class="booking__room_text">
                <img
                  src="img/person-room-person.svg"
                  alt="person"
                  class="booking__icon"
                />
                <span class="booking__room_description">2 x Guests</span>
              </div>
              <div class="booking__room_text">
                <img
                  src="img/person-room-home.svg"
                  alt="home"
                  class="booking__icon"
                />
                <span class="booking__room_description">1 x Room</span>
              </div>
            </div>
          </div>
          <div class="booking__call-center">
            <span class="booking__call-center_text">Quick Booking</span>
            <a class="booking__call-center_number" href="tel:12100">
              <img src="img/phone-icon.svg" alt="phone-icon" />
              <span class="booking__call-center_num">12100</span></a
            >
          </div>
          <button data-toggle="modal" class="button booking__button">
            View Other Options
          </button>
        </div>
        <div class="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8116.25181686004!2d121.53277223780854!3d31.20779117627546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8aa23b49da68536f!2sDoubleTree%20by%20Hilton%20Hotel%20Shanghai%20-%20Pudong!5e0!3m2!1sru!2sru!4v1595238309353!5m2!1sru!2sru"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0"
            class="google-maps"
          ></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="other">
  <div class="container">
    <h2 class="other__title">Other Packages</h2>
    <div class="other-grid">
      <div
        data-aos="fade-right"
        data-aos-duration="600"
        class="other-grid__card grid-card"
      >
        <img
          src="img/grid-img-1.jpg"
          class="grid-card__image"
          alt="grid card image"
        />
        <span class="grid-card__flash-offer">Flash Offer</span>
        <div class="grid-card__about">
          <div class="grid-card__rating">
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
          </div>
          <div class="grid-card__title">Hotel Blue Haven</div>
          <div class="grid-card__text">
            Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur
            enim laborum magna llit. Ipsum est fugiat velit ea llamco do esse ut
            in veniam sun in onsequat. Aute quis duis epteur excepteur ipsum
            occaecat eiusmod nsectetur enim laborum magna mollit. Ipsum est
            fugiat velit ea ullamco do
          </div>
          <div class="grid-card__person-room">
            <span class="grid-card__person-room_address">
              <img src="img/map-pin.svg" alt="map-pin" />1749 Wheeler Ridge
              Delaware
            </span>
            <span class="grid-card__person-room_guests">
              <img src="img/person-room-person.svg" alt="" />2 x Guests
            </span>
            <span class="grid-card__person-room_room">
              <img src="img/person-room-home.svg" alt="" />1 x Room
            </span>
          </div>
          <div class="grid-card__bottom">
            <div class="grid-card__bottom_cost bottom-cost">
              <span class="bottom-cost_old">$ 10,500</span>
              <span class="bottom-cost_new">$ 8,500</span>
            </div>
            <button data-toggle="modal" class="bottom-cost_button">
              Book Now
            </button>
          </div>
        </div>
      </div>
      <div
        data-aos="fade-left"
        data-aos-duration="600"
        class="other-grid__card grid-card"
      >
        <img
          src="img/grid-img-2.jpg"
          class="grid-card__image"
          alt="grid card image"
        />
        <div class="grid-card__about">
          <span class="grid-card__flash-offer">Flash Offer</span>
          <div class="grid-card__title">LUX* Belle Mare</div>
          <div class="grid-card__person-room">
            <span class="grid-card__person-room_address">
              <img src="img/map-pin.svg" alt="map-pin" />1749 Wheeler Ridge
              Delaware
            </span>
            <span class="grid-card__person-room_guests">
              <img src="img/person-room-person.svg" alt="" />2 x Guests
            </span>
            <span class="grid-card__person-room_room">
              <img src="img/person-room-home.svg" alt="" />1 x Room
            </span>
          </div>
          <div class="grid-card__bottom">
            <div class="grid-card__bottom_cost bottom-cost">
              <span class="bottom-cost_old">$ 8,500</span>
              <span class="bottom-cost_new">$ 3,000</span>
            </div>
            <button data-toggle="modal" class="bottom-cost_button">
              Book Now
            </button>
          </div>
        </div>
      </div>
      <div
        data-aos="fade-right"
        data-aos-duration="600"
        class="other-grid__card grid-card"
      >
        <img
          src="img/grid-img-3.jpg"
          class="grid-card__image"
          alt="grid card image"
        />
        <div class="grid-card__about">
          <span class="grid-card__flash-offer">Flash Offer</span>
          <div class="grid-card__title">White Palace</div>
          <div class="grid-card__person-room">
            <span class="grid-card__person-room_address">
              <img src="img/map-pin.svg" alt="map-pin" />1749 Wheeler Ridge
              Delaware
            </span>
            <span class="grid-card__person-room_guests">
              <img src="img/person-room-person.svg" alt="" />2 x Guests
            </span>
            <span class="grid-card__person-room_room">
              <img src="img/person-room-home.svg" alt="" />1 x Room
            </span>
          </div>
          <div class="grid-card__bottom">
            <div class="grid-card__bottom_cost bottom-cost">
              <span class="bottom-cost_old">$ 10,500</span>
              <span class="bottom-cost_new">$ 9,500</span>
            </div>
            <button data-toggle="modal" class="bottom-cost_button">
              Book Now
            </button>
          </div>
        </div>
      </div>
      <div
        data-aos="fade-up"
        data-aos-duration="600"
        class="other-grid__card grid-card"
      >
        <img
          src="img/grid-img-4.jpg"
          class="grid-card__image"
          alt="grid card image"
        />
        <div class="grid-card__about">
          <span class="grid-card__flash-offer">Flash Offer</span>
          <div class="grid-card__title">Luxury Place</div>
          <div class="grid-card__person-room">
            <span class="grid-card__person-room_address">
              <img src="img/map-pin.svg" alt="map-pin" />1749 Wheeler Ridge
              Delaware
            </span>
            <span class="grid-card__person-room_guests">
              <img src="img/person-room-person.svg" alt="person room icon" />2 x
              Guests
            </span>
            <span class="grid-card__person-room_room">
              <img src="img/person-room-home.svg" alt="person room icon" />1 x
              Room
            </span>
          </div>
          <div class="grid-card__bottom">
            <div class="grid-card__bottom_cost bottom-cost">
              <span class="bottom-cost_old">$ 4,500</span>
              <span class="bottom-cost_new">$ 2,500</span>
            </div>
            <button data-toggle="modal" class="bottom-cost_button">
              Book Now
            </button>
          </div>
        </div>
      </div>
      <div
        data-aos="fade-left"
        data-aos-duration="600"
        class="other-grid__card grid-card"
      >
        <img
          src="img/grid-img-5.jpg"
          class="grid-card__image"
          alt="grid card image"
        />
        <div class="grid-card__about">
          <span class="grid-card__flash-offer">Flash Offer</span>
          <div class="grid-card__title">Hotel Five Star</div>
          <div class="grid-card__person-room">
            <span class="grid-card__person-room_address">
              <img src="img/map-pin.svg" alt="map-pin" />1749 Wheeler Ridge
              Delaware
            </span>
            <span class="grid-card__person-room_guests">
              <img src="img/person-room-person.svg" alt="" />2 x Guests
            </span>
            <span class="grid-card__person-room_room">
              <img src="img/person-room-home.svg" alt="" />1 x Room
            </span>
          </div>
          <div class="grid-card__bottom">
            <div class="grid-card__bottom_cost bottom-cost">
              <span class="bottom-cost_old">$ 6,500</span>
              <span class="bottom-cost_new">$ 3,500</span>
            </div>
            <button data-toggle="modal" class="bottom-cost_button">
              Book Now
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="newsletter">
  <div class="newsletter-wrapper">
    <h2 class="newsletter-title">
      subscribe to our
      <span class="newsletter-title__strong">Newsletter</span>
    </h2>
    <form
      action="send.php"
      method="POST"
      class="form subscribe newslatter-subscribe"
    >
      <input
        type="email"
        class="subscribe__input"
        placeholder="Your email address"
        name="email"
      />
      <button class="subscribe__button">
        Send
      </button>
    </form>
  </div>
</section>
<section class="reviews">
  <div class="container">
    <h2 class="reviews-title">What people thinks about us</h2>
    <div class="reviews-slider">
      <div class="reviews-slider__item">
        <div class="reviews-slider__item_user">
          <img
            src="img/reviews-profile-avatar.jpg"
            alt="profile avatar"
            class="reviews-slider__item_user__avatar"
          />
          <span class="reviews-slider__item_user__name">Megan Fox</span>
          <span class="reviews-slider__item_user__date"
            >Stayed 18 Nov, 2019</span
          >
          <div class="reviews-slider__item_user__rating">
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
          </div>
        </div>
        <div class="reviews-slider__item_text">
          It was very nice hotel with cleanliness. Staff behavior was good and
          polite. They welcome us very well. Issue was only that Lift was not in
          working and we were allotted to 3rd floor and amenities articles were
          in corner of gallery which were giving bad feeling. Breakfast was good
          and support of the staff was also very nice. Location is not good as
          per atmosphere, it is very nearby most of the popular places but self
          location in a narrow street is not good. Overall it was a good
          experience and could recommend.
        </div>
      </div>
      <div class="reviews-slider__item">
        <div class="reviews-slider__item_user">
          <img
            src="img/reviews-profile-avatar2.jpg"
            alt="profile avatar"
            class="reviews-slider__item_user__avatar"
          />
          <span class="reviews-slider__item_user__name">Jarry Smith</span>
          <span class="reviews-slider__item_user__date"
            >Stayed 24 Oct, 2020</span
          >
          <div class="reviews-slider__item_user__rating">
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
          </div>
        </div>
        <div class="reviews-slider__item_text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet possimus
          suscipit quasi nisi? Eaque consequatur maiores at dolores incidunt
          laboriosam inventore. Qui repellendus accusamus libero. Quos
          consequatur impedit repellat laborum. Lorem ipsum dolor sit amet,
          consectetur adipisicing elit. Quaerat eum fugiat voluptatum doloribus
          minus distinctio reiciendis ducimus ipsam sed cupiditate non harum,
          obcaecati accusantium, pariatur sint perspiciatis praesentium porro
          quisquam?
        </div>
      </div>
      <div class="reviews-slider__item">
        <div class="reviews-slider__item_user">
          <img
            src="img/reviews-profile-avatar3.jpg"
            alt="profile avatar"
            class="reviews-slider__item_user__avatar"
          />
          <span class="reviews-slider__item_user__name">David Sass</span>
          <span class="reviews-slider__item_user__date"
            >Stayed 01 Fen, 2019</span
          >
          <div class="reviews-slider__item_user__rating">
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
          </div>
        </div>
        <div class="reviews-slider__item_text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet possimus
          suscipit quasi nisi? Eaque consequatur maiores at dolores incidunt
          laboriosam inventore. Qui repellendus accusamus libero. Quos
          consequatur impedit repellat laborum. Lorem ipsum dolor sit amet,
          consectetur adipisicing elit. Quaerat eum fugiat voluptatum doloribus
          minus distinctio reiciendis ducimus ipsam sed cupiditate non harum,
          obcaecati accusantium, pariatur sint perspiciatis praesentium porro
          quisquam?
        </div>
      </div>
      <div class="reviews-slider__item">
        <div class="reviews-slider__item_user">
          <img
            src="img/reviews-profile-avatar4.jpg"
            alt="profile avatar"
            class="reviews-slider__item_user__avatar"
          />
          <span class="reviews-slider__item_user__name">Nary Neelson</span>
          <span class="reviews-slider__item_user__date"
            >Stayed 27 Dec, 2016</span
          >
          <div class="reviews-slider__item_user__rating">
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
            <img src="img/star.svg" alt="star" />
          </div>
        </div>
        <div class="reviews-slider__item_text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet possimus
          suscipit quasi nisi? Eaque consequatur maiores at dolores incidunt
          laboriosam inventore. Qui repellendus accusamus libero. Quos
          consequatur impedit repellat laborum. Lorem ipsum dolor sit amet,
          consectetur adipisicing elit. Quaerat eum fugiat voluptatum doloribus
          minus distinctio reiciendis ducimus ipsam sed cupiditate non harum,
          obcaecati accusantium, pariatur sint perspiciatis praesentium porro
          quisquam?
        </div>
      </div>
    </div>
  </div>
</section>
<section class="activities">
  <div class="container">
    <h2 class="activities__title">Other Activities</h2>
    <div class="activities-wrapper">
      <div class="card activities__card">
        <img
          src="img/act-card-1.jpg"
          alt="The curious corner of chamarel"
          class="card__image"
        />
        <h3 class="card__title">The curious corner of chamarel</h3>
        <button data-toggle="modal" class="card__button">Book Now</button>
      </div>
      <div class="card activities__card">
        <img
          src="img/act-card-2.jpg"
          alt="Gymkhana club golf course"
          class="card__image"
        />
        <h3 class="card__title">Gymkhana club golf course</h3>
        <button data-toggle="modal" class="card__button">Book Now</button>
      </div>
      <div class="card activities__card">
        <img
          src="img/act-card-3.jpg"
          alt="Tamarind falls hiking trip - full day"
          class="card__image"
        />
        <h3 class="card__title">Tamarind falls hiking trip - full day</h3>
        <button data-toggle="modal" class="card__button">Book Now</button>
      </div>
      <div class="card activities__card">
        <img
          src="img/act-card-4.jpg"
          alt="The blue marine discovery quest"
          class="card__image"
        />
        <h3 class="card__title">The blue marine discovery quest</h3>
        <button data-toggle="modal" class="card__button">Book Now</button>
      </div>
    </div>
  </div>
</section>
<?php include('footer.php')?>
