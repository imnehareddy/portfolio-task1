// 1. Variables
let name = "Neha";

// 2. Function
function greet() {
  alert("Hello " + name + "!");
}

// 3. DOM example
function changeText() {
  document.getElementById("demo").innerHTML = "You clicked the button!";
}

// 4. Form validation
function validateForm() {
  let email = document.getElementById("email").value;

  if (!email.includes("@")) {
    alert("Invalid email!");
    return false; // stop form submit
  }

  alert("Form submitted successfully!");
  return true;
}