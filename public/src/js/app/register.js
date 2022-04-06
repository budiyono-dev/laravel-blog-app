const btnTogglePassword = document.querySelector('.toogle-password');
const formPassword = document.getElementById('password');

btnTogglePassword.addEventListener('click', function(e) {
    e.target.classList.toggle("bi-eye-slash");
    let eye = e.target.classList.toggle("bi-eye");
    if (eye) {
        formPassword.type = 'text';
    } else {
        formPassword.type = 'password';
    }
})

$(document).ready(function() {
    // $("#success-alert").hide();
    // $("#alert-message").fadeTo(2000, 500).slideUp(500, function() {
    //     $("#alert-message").slideUp(500);
    // });

    // $('#alert-message').on('close.bs.alert', function() {
    //     // do something...
    //     console.log("close");
    // })

});