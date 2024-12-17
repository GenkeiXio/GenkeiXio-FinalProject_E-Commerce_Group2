const welcomeMessage = document.getElementById('welcome-message');
    const getStartedBtn = document.getElementById('get-started-btn');

    const urlParams = new URLSearchParams(window.location.search);
    const username = window.location.pathname.split('/')[2];

    welcomeMessage.textContent = `Welcome, ${username}`;

    getStartedBtn.addEventListener('click', () => {
    window.location.href = `/${username}`;