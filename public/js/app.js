$(document).ready(function () {
    //event handler for submit button
    $("#btnSubmit").click(function () {
        //collect userName and password entered by users
        var userName = $("#username").val();
        var password = $("#password").val();

        //call the authenticate function
        authenticate(userName, password);
    });
});

//authenticate function to make ajax call
function authenticate(userName, password) {
    $.ajax
    ({
        type: "POST",
        //the url where you want to sent the userName and password to
        url: "http://localsguide.local/ajax",
        dataType: 'json',
        async: false,
        //json object to sent to the authentication url
        data: {
            userName: userName,
            password: password 
        },
        beforeSend: function(request) {
            return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
        },
        success: function (data, textStatus) {
            //do any process for successful authentication here
            console.log('ajax is back');
            console.log(data);
            console.log(textStatus);
        },
        statusCode: {
            404: function() {
                console.log('Page was not found');
            }
        }
    })
}