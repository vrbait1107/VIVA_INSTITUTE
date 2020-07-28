$(document).ready(function () {
  $("#contactForm").on("submit", function (e) {
    e.preventDefault();

    let name = $("#name").val();
    let email = $("#email").val();
    let subject = $("#subject").val();
    let message = $("#message").val();
    let submit = "submit";

    if (!isNaN(name) || name === "") {
      Swal.fire({
        icon: "warning",
        title: "Warning",
        text: "Only Characters are allowed or Name cannot be empty",
      });
      return false;
    }

    if (!isNaN(email) || email === "") {
      Swal.fire({
        icon: "warning",
        title: "Warning",
        text: "Only Characters are allowed or Email cannot be empty",
      });
      return false;
    }

    if (!isNaN(subject) || subject === "") {
      Swal.fire({
        icon: "warning",
        title: "Warning",
        text: "Only Characters are allowed or Subject cannot be empty",
      });
      return false;
    }

    if (!isNaN(message) || message === "") {
      Swal.fire({
        icon: "warning",
        title: "Warning",
        text: "Only Characters are allowed or Message cannot be empty",
      });
      return false;
    }

    $.ajax({
      url: "ajaxHandlerPHP/ajaxContactUs.php",
      type: "post",
      data: {
        submit: submit,
        name: name,
        email: email,
        subject: subject,
        message: message,
        captcha: grecaptcha.getResponse(),
      },
      beforeSend() {
        $("#responseMessage").html(
          "<h5 class='text-center text-danger my-3'>Sending Email....</h5>"
        );
      },
      success(data) {
        $("#responseMessage").html(data);
        $("#contactForm").trigger("reset");
        grecaptcha.reset();
      },
      error(err) {
        $("#responseMessage").html("Something Went Wrong");
      },
    });
  });
});
