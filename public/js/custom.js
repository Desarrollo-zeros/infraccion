let post = (url = "",data = {},method = "",csrf_token = '') =>{
    return fetch(url, {
        method: method, // or 'PUT'
        headers:{
            "Content-Type": "application/json; charset=utf-8",
            'X-CSRF-TOKEN' : csrf_token
        },
        redirect: "follow", // manual, *follow, error
        referrer: "no-referrer", // no-referrer, *client
        body: JSON.stringify(data), // body data type must match "Content-Type" header
    }).then(resp => {
        if(resp.status == 500){
            return false;
        }else{
            return resp.json();
        }
    });
};
