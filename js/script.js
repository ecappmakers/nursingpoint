function submitAppointmentForm() {
  $.ajax({
    url: "https://nursingpoint.net/includes/appointment_form_submit",
    type: "POST",
    data: {
      name: $("#name").val(),
      age: $("#age").val(),
      phone: $("#phone").val(),
      city: $("#city").val(),
      date: $("#date").val(),
      msg: $("#msg").val(),
    },
    success: function (result) {
      document.getElementById("appointment_form").reset();
      $("#success_msg").html(
        "Appointment received successfully, Our Staffs will contact you within a hour, For fast reply please call <a href='tel: +917397700334' class='text-decoration-none text-light'>+917397700334</a>"
      );
    },
  });
}

//////////////////////// ad slider js /////////////////////////////
//with this first line we're saying: "when the page loads (document is ready) run the following script"
$(document).ready(function () {
  //select the POPUP FRAME and show it
  $("#popup").hide().fadeIn(1000);
  $("#overlay").hide().fadeIn(1000);
  $("#body").css("overflowY", "hidden");
  //close the POPUP if the button with id="close" is clicked
  $("#close").on("click", function (e) {
    e.preventDefault();
    $("#popup").fadeOut(1000);
    $("#overlay").fadeOut(1000);
    $("#body").css("overflowY", "auto");
  });
});

// image slider
var indexValue = 0;

function slideShow() {
  setTimeout(slideShow, 2500);
  var x;
  const img = document.querySelectorAll(".slider-img");
  for (x = 0; x < img.length; x++) {
    img[x].style.display = "none";
  }
  indexValue++;
  if (indexValue > img.length) {
    indexValue = 1;
  }
  img[indexValue - 1].style.display = "block";
}
slideShow();
