$(document).ready(function () {
  $(".slider").slick({
    fade: true,
    cssEase: "linear",
    autoplay: true,
    adaptiveHeight: true,
    infinite: true,
  });

  $(".reviews-slider").slick({
    autoplay: true,
  });

  let menuButton = $(".menu-button");
  menuButton.on("click", function () {
    $(".navbar-bottom").toggleClass("navbar-bottom_visible");
  });

  let modalButton = $('[data-toggle="modal"]');
  let closeModalButton = $(".modal__close");
  modalButton.on("click", openModal);
  closeModalButton.on("click", closeModal);

  function openModal() {
    let modalOverlay = $(".modal__overlay");
    let modalDialog = $(".modal__dialog");
    let bodyLock = $("body");
    modalOverlay.addClass("modal__overlay_visible");
    modalDialog.addClass("modal__dialog_visible");
    bodyLock.addClass("body__lock");
  }

  function closeModal(event) {
    event.preventDefault();
    let modalOverlay = $(".modal__overlay");
    let modalDialog = $(".modal__dialog");
    let bodyLock = $("body");
    modalOverlay.removeClass("modal__overlay_visible");
    modalDialog.removeClass("modal__dialog_visible");
    bodyLock.removeClass("body__lock");
  }

  document.onkeydown = function closeModalOnKey(e) {
    if (e.keyCode == "27") {
      let modalOverlay = $(".modal__overlay");
      let modalDialog = $(".modal__dialog");
      let bodyLock = $("body");
      modalOverlay.removeClass("modal__overlay_visible");
      modalDialog.removeClass("modal__dialog_visible");
      bodyLock.removeClass("body__lock");
    }
  };
  $(".form").each(function () {
    $(this).validate({
      errorClass: "invalid",
      messages: {
        name: {
          required: "Tne name is required",
        },
        email: {
          required: "The email address is required",
        },
        phone: {
          required: "The phone number is required",
        },
      },
    });
  });
});
