
  document.addEventListener("DOMContentLoaded", () => {
    function togglePasswordVisibility(passwordInput, passwordToggle, passwordIcon) {
      passwordToggle.addEventListener('click', () => {
        const isPassword = passwordInput.type === 'password';
        passwordInput.type = isPassword ? 'text' : 'password';
        passwordIcon.classList.toggle('fa-eye', !isPassword);
        passwordIcon.classList.toggle('fa-eye-slash', isPassword);
      });
    }

    const passwordInput = document.getElementById('password');
    const passwordToggle = document.getElementById('password-toggle');
    const passwordIcon = document.getElementById('password-icon');

    const passwordInput1 = document.getElementById('password1');
    const passwordToggle1 = document.getElementById('password-toggle1');
    const passwordIcon1 = document.getElementById('password-icon1');

     const passwordInput2 = document.getElementById('password2');
    const passwordToggle2 = document.getElementById('password-toggle2');
    const passwordIcon2 = document.getElementById('password-icon2');

    if (passwordInput && passwordToggle && passwordIcon) {
      togglePasswordVisibility(passwordInput, passwordToggle, passwordIcon);
    }

    if (passwordInput1 && passwordToggle1 && passwordIcon1) {
      togglePasswordVisibility(passwordInput1, passwordToggle1, passwordIcon1);
    }

     if (passwordInput2 && passwordToggle2 && passwordIcon2) {
      togglePasswordVisibility(passwordInput2, passwordToggle2, passwordIcon2);
    }
  });

