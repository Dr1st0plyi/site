document.getElementById('registration-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const username = document.getElementById('reg-username').value;
    const email = document.getElementById('reg-email').value;
    const password = document.getElementById('reg-password').value;

    document.getElementById('registration-message').innerText = `Вы зарегистрированы как ${username}!`;
});

document.getElementById('login-form').addEventListener('submit', function (event) {
    event.preventDefault()

    const loginUsername = document.getElementById('login-username').value;
    const loginPassword = document.getElementById('login-password').value;

});

document.getElementById('show-login').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('registration-section').style.display = 'none';
    document.getElementById('login-section').style.display = 'block';
});

document.getElementById('show-registration').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('login-section').style.display = 'none';
    document.getElementById('registration-section').style.display = 'block';
});