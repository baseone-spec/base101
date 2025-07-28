const passwordInput1 = document.getElementById('password1');
const passwordToggle1 = document.getElementById('password-toggle1');
const passwordIcon1 = document.getElementById('password-icon1');

passwordToggle1.addEventListener('click', () => {
  if (passwordInput1.type === 'password') {
    passwordInput1.type = 'text';
    passwordIcon1.classList.remove('fa-eye');
    passwordIcon1.classList.add('fa-eye-slash');
  } else {
    passwordInput1.type = 'password';
    passwordIcon1.classList.remove('fa-eye-slash');
    passwordIcon1.classList.add('fa-eye');
  }
});

const passwordInput2 = document.getElementById('password2');
const passwordToggle2 = document.getElementById('password-toggle2');
const passwordIcon2 = document.getElementById('password-icon2');

passwordToggle2.addEventListener('click', () => {
  if (passwordInput2.type === 'password') {
    passwordInput2.type = 'text';
    passwordIcon2.classList.remove('fa-eye');
    passwordIcon2.classList.add('fa-eye-slash');
  } else {
    passwordInput2.type = 'password';
    passwordIcon2.classList.remove('fa-eye-slash');
    passwordIcon2.classList.add('fa-eye');
  }
});