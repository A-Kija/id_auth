const button = document.querySelector('#login-button');


button.addEventListener('click', () => {
    axios.post('http://localhost/id_auth/server/auth.php', {})
        .then(function(response) {
            button.style.display = 'none';
            const options = {
                sessionToken: response.data.session_token,
                callback: function() {
                    // alert('User authenticated successfully');
                    window.location.href = "http://localhost/id_auth/server/";
                }
            }
            new DokobitIdentity(options).init();
        })
        .catch(function(error) {
            console.log(error);
        });

});



// var dokobitIdentity = new DokobitIdentity(options).init();