document.addEventListener('DOMContentLoaded', function() {
    const loginIcon = document.querySelector('.login-icon');
    const popup = document.querySelector('.popup');
    const closeBtn = document.querySelector('.close');

    loginIcon.addEventListener('click', function() {
      popup.style.display = 'block';
    });

    closeBtn.addEventListener('click', function() {
      popup.style.display = 'none';
    });
  });

  