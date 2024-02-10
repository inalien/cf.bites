document.getElementById('emailForm').addEventListener('submit', function(e) {
    e.preventDefault();
    var email = document.getElementById('email').value;
    // Here, you would typically send the email to your server or a third-party email service
    alert('Thank you for subscribing!');
});
