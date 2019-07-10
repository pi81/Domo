(
    function(){
        var token = localStorage.getItem('jwt-token');
        fetch('/wp-json/jwt-auth/v1/token/validate',{
            method: "post",
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': 'Bearer ' + token
            },
        }).then(response => {
            if(!response.ok){
                window.location = data.logout_url
            }
        })
            .catch(e => {
            console.error(e);
        });
    }
)();
