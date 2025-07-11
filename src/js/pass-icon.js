
  const passwordInput = document.getElementById('password');
  const passwordToggle = document.getElementById('password-toggle');
  const passwordIcon = document.getElementById('password-icon');

  passwordToggle.addEventListener('click', () => {
    const isPassword = passwordInput.type === 'password';
    passwordInput.type = isPassword ? 'text' : 'password';
    passwordIcon.classList.toggle('fa-eye', !isPassword);
    passwordIcon.classList.toggle('fa-eye-slash', isPassword);
  });
