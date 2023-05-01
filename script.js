const loginModal = document.getElementById("login-modal");
const loginButton = document.getElementById("login-button");

loginButton.addEventListener("click", function() {
  // Add the blur effect to the page content
  document.body.classList.add("blur");
  // Show the login modal
  loginModal.style.display = "flex";
});

loginModal.addEventListener("click", function(event) {
  // If the user clicks outside the modal, hide it
  if (event.target === loginModal) {
    document.body.classList.remove("blur");
    loginModal.style.display = "none";
  }
});

document.querySelector("form").addEventListener("submit", function(event) {
  event.preventDefault();
  // Handle the form submission here
});
