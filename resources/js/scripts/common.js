let show_password = false;
const config = {
    timeout: 3000,
}

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

$('.newsletter-form').on('submit', (e) => {
    ajaxPost(
        '/newsletter',
        {
            email:$('.newsletter-email').val(),
        },
        '.newsletter-success','.newsletter-error',
    )
});

$('.contact-form').on('submit', () => {
    ajaxPost('/contact-us',
    {},'.contact-success','.contact-error')
});

function ajaxPost(url,data,succssContainer,errorContainer) {
    $.ajax({
        url: url,
        method: 'POST',
        data:data,
        success: function(response) {
            $(succssContainer).text(response.data.message);
        },
        error:function(error){
            $(errorContainer).text(response.data.message);
            
            if(error.response.status === 422){
                let errors = error.response.data.errors;
                let errorsKeys = Object.keys(error.response.data.errors)
                errorsKeys.map((error,index) => { 
                    let html = "<ul>";
                    errors[error].map((e) => {
                        html += '<li>'+e+'</li>';
                    })
                    html += '</ul>';
                });
            }
        },
        complete:function(){
            setTimeout(() => {
                $(succssContainer).text('');
                $(errorContainer).text('');
                $('.errors').forEach((error) => {
                    error.removeClass('text-error');
                },config.timeout)
            })
            
        }
    })
}

