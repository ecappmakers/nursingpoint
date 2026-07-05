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
  // Fix navbar active states dynamically based on current path
  var currentPath = window.location.pathname;
  $('.navbar-nav .nav-link').removeClass('active');
  
  $('.navbar-nav .nav-link').each(function () {
    var href = $(this).attr('href');
    if (href === currentPath || (href !== '/' && currentPath.indexOf(href) === 0)) {
      $(this).addClass('active');
    }
  });
  
  // Root URL fallback
  if (currentPath === '/' || currentPath === '/index.php' || currentPath === '/index-chennai.php' || currentPath === '') {
    $('.navbar-nav .nav-link[href="/"]').addClass('active');
  }

  //select the POPUP FRAME and show it
  $("#popup").hide().fadeIn(1000);
  $("#overlay").hide().fadeIn(1000);
  //close the POPUP if the button with id="close" is clicked
  $("#close").on("click", function (e) {
    e.preventDefault();
    $("#popup").fadeOut(1000);
    $("#overlay").fadeOut(1000);
  });
});

// image slider
var indexValue = 0;

