document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");
    const passwordInput = document.querySelector("input[name='password']");
    const emailInput = document.querySelector("input[name='email']");

    form.addEventListener("submit", (event) => {
        const password = passwordInput.value;
        const email = emailInput.value;

        // Validación de email
        if (!validateEmail(email)) {
            alert("Por favor, ingresa un correo válido.");
            event.preventDefault();
            return;
        }

        // Validación de contraseña
        if (!validatePassword(password)) {
            alert(
                "La contraseña debe tener al menos 6 caracteres, incluyendo letras y números."
            );
            event.preventDefault();
            return;
        }
    });

    // Función para validar email
    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Función para validar contraseña
    function validatePassword(password) {
        const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;
        return passwordRegex.test(password);
    }
});
