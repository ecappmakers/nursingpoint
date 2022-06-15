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
