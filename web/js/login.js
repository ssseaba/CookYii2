document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.getElementById('menuButton');
    const dropdown = document.getElementById('dropdown');
    const signupLink = document.getElementById('signupLink');
    const loginLink = document.getElementById('loginLink');
    const signupPopup = document.getElementById('signupPopup');
    const loginPopup = document.getElementById('loginPopup');
    const closeSignup = document.getElementById('closeSignup');
    const closeLogin = document.getElementById('closeLogin');

    menuButton.addEventListener('click', () => {
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    });

    signupLink.addEventListener('click', () => {
        signupPopup.style.display = 'block';
        dropdown.style.display = 'none';
    });

    loginLink.addEventListener('click', () => {
        loginPopup.style.display = 'block';
        dropdown.style.display = 'none';
    });

    closeSignup.addEventListener('click', () => {
        signupPopup.style.display = 'none';
    });

    closeLogin.addEventListener('click', () => {
        loginPopup.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target === signupPopup) {
            signupPopup.style.display = 'none';
        } else if (event.target === loginPopup) {
            loginPopup.style.display = 'none';
        }
    });
});
