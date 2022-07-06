$(document).ready(function(){
    $.ajax({
        url: 'config.php',
        type: 'post',
        data: {print: 1},
        datatype: 'json',
        success: function(result)
        {
            var arr = JSON.parse(result);

            var users = Object.keys(arr);
            var password = Object.values(arr);
            var tr = $('<tr></tr>');
            for(i in users)
            {
                tr.append('<td>'+users[i]+'</td>')
            }
            $('#result').append(tr);

            var tr1 = $('<tr></tr>');
            for(i in password)
            {
                tr1.append('<td>'+password[i]+'</td>')
            }
            $('#result').append(tr1);
        }
    });
    
    $('#login').on('click', function(){
        var email = $('#email').val();
        var pass = $('#password').val();

        $.ajax({
            url: 'server.php',
            type: 'post',
            data: {loginCreds: {email, pass}},
            datatype: 'json',
            success: function(result)
            {
                if(result == 1)
                {
                    location.href = 'Dashboard.php';
                }
                else
                {
                    alert('Invalid login credentials');
                    return;
                }
            }
        })
    });

    $('#')


})