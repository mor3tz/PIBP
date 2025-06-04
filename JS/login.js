function switchForm(form) {
  document.getElementById("loginForm").classList.remove("active");
  document.getElementById("registerForm").classList.remove("active");

  if (form === "login") {
    document.getElementById("loginForm").classList.add("active");
  } else {
    document.getElementById("registerForm").classList.add("active");
  }
}
