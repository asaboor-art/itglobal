let show_password = false;

function showPassword(event) {


    var password = document.getElementById(event.target.getAttribute('data-password'));

    if (!show_password) {
        password.setAttribute('type', 'text');
        event.target.setAttribute('class', 'fa fa-eye-slash')
        show_password = true;
    } else {
        password.setAttribute('type', 'password');
        event.target.setAttribute('class', 'fa fa-eye')
        show_password = false;
        console.log(show_password);
    }

}
