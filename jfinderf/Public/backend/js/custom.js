
$('#loginButton').click(function(){

/*
    axios.post('http://portal.localhost/session/login', {
        users_email: $('#email').val(),
        users_password: $('#password').val()
    }).then(function (response) {
        console.log(response);
    }).catch(function (error) {
        console.log(error);
    });*/

   /* var email = $('#email').val();
    var password = $('#password').val();

    console.log(email + ' ' + password);

    fetch('http://portal.localhost/session/login', {
        method: 'POST',
        data: {
            users_email: email,
            users_password: password
        }
    }).then(response=> console.log(response.json())).catch(error=>console.log(error));*/

    $.ajax({
        url: "http://portal.localhost/session/login",
        type: "POST",
        data: {
            users_email: $('#email').val(),
            users_password: $('#password').val()
        },
        dataType: "json",
        success: function (response) {
            let data = response.data['session_information'];
            if (data) {
                console.log(JSON.stringify(data))
                sessionStorage.setItem('email', data);
            }
        },

    })

});