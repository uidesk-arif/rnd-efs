function click2Call() {
    let queryString = window.location.search;
    let urlParams = new URLSearchParams(queryString);
    let phonenumber = urlParams.get('phonenumber')

    
    $.ajax({
        "url": "https://demo-1.c-icare.cc/c2c/api/index.php",
        "method": "POST",
        "timeout": 0,
        "headers": {
          "Content-Type": "application/json",
        },
        "data": JSON.stringify({
          "key": "688c9579e48d592aaf343tg54gg5",
          "dn": phonenumber,
          "ext": "102023",
          "callback": "https://show.uidesk.id/demo"
        }),
      }).done(function (response) {
        console.log(response);
    });
}

$.get("https://asterisk.uidesk.id/rnd/api.php?cmd=postOutboundPredictive", (result) => {
    console.log(result);
});