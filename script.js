// Change reservation image based on selected hotel

const hotelSelect = document.getElementById("hotel");
const hotelImage = document.getElementById("hotelImage");

if (hotelSelect && hotelImage) {

  function updateHotelImage() {
    switch (hotelSelect.value) {

      case "Vermont":
        hotelImage.src = "images/vermont.jpg";
        hotelImage.alt = "Velmont Burlington";
        break;

      case "Pennsylvania":
        hotelImage.src = "images/philadelphia.jpg";
        hotelImage.alt = "Velmont Philadelphia";
        break;

      case "California":
        hotelImage.src = "images/california.avif";
        hotelImage.alt = "Velmont San Diego";
        break;

      default:
        hotelImage.src = "images/resort.jpeg";
        hotelImage.alt = "Velmont Resorts";
    }
  }

  hotelSelect.addEventListener("change", updateHotelImage);

  hotelSelect.form.addEventListener("reset", function () {
    setTimeout(updateHotelImage, 0);
  });

  updateHotelImage();
}