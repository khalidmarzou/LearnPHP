const deleteForms = document.querySelectorAll("tr > form:nth-of-type(2)");

Array.from(deleteForms).forEach(function (form) {
  form.onsubmit = function (event) {
    let confirmation = confirm("Are you Sure ?");
    if (!confirmation) {
      return event.preventDefault();
    }
  };
});
