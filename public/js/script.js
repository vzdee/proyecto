document.addEventListener("DOMContentLoaded", function() {
    const loginBtn = document.getElementById("loginBtn");
    const registerBtn = document.getElementById("registerBtn");

    const loginForm = document.querySelector(".form-login");
    const registerForm = document.querySelector(".form-register");

    if (loginBtn && registerBtn && loginForm && registerForm) {
        // Mostrar formulario de login y ocultar el de registro
        loginBtn.addEventListener("click", function() {
            loginForm.style.display = "block";
            registerForm.style.display = "none";
        });

        // Mostrar formulario de registro y ocultar el de login
        registerBtn.addEventListener("click", function() {
            loginForm.style.display = "none";
            registerForm.style.display = "block";
        });
    }
});
