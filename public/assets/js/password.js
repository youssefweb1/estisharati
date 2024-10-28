document.addEventListener('DOMContentLoaded', () => {
    const togglePasswordButtons = [];

    const password1 = document.getElementById('password');
    const togglePassword1 = document.getElementById('togglePassword1');
    const eyeIcon1 = document.getElementById('eyeIcon1');

    if (password1 && togglePassword1 && eyeIcon1) {
        togglePasswordButtons.push({
            button: togglePassword1,
            field: password1,
            icon: eyeIcon1
        });
    }

    const password2 = document.getElementById('password2');
    const togglePassword2 = document.getElementById('togglePassword2');
    const eyeIcon2 = document.getElementById('eyeIcon2');

    if (password2 && togglePassword2 && eyeIcon2) {
        togglePasswordButtons.push({
            button: togglePassword2,
            field: password2,
            icon: eyeIcon2
        });
    }

    togglePasswordButtons.forEach(({ button, field, icon }) => {
        button.addEventListener('click', () => {
            const isPasswordHidden = field.getAttribute('type') === 'password';
            field.setAttribute('type', isPasswordHidden ? 'text' : 'password');
            icon.classList.toggle('bi-eye-slash', isPasswordHidden);
            icon.classList.toggle('bi-eye', !isPasswordHidden);
        });
    });
});
