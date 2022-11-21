$(".button, .close").on("click", function (e) {
    e.preventDefault();
    $(".detail, html, body").toggleClass("open");
  });
  
  var answer = confirm("Silahkan klik ok untuk melihat data")
  if (!answer)
      window.location = "http://www.continue.com"