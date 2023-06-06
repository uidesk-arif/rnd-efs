<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

    <script>
        var url = "https://demo-1.c-icare.cc/index.php?menu=campaign_monitoring&rawmode=yes&action=checkStatus&clientstatehash=5c06fb8faf3cfedfedd466c39de4e50a&serverevents=true"


        const evtSource = new EventSource(url);
        console.log(evtSource.withCredentials);
        console.log(evtSource.readyState);
        console.log(evtSource.url);

        evtSource.onopen = function() {
            console.log("Connection to server opened.");
        };

        evtSource.onmessage = function(e) {
            console.log(e);
            // const newElement = document.createElement("li");

            // newElement.textContent = "message: " + e.data;
            // eventList.appendChild(newElement);
        };

        evtSource.onerror = function() {
            console.log("EventSource failed.");
        };

        // button.onclick = function() {
        //     console.log('Connection closed');
        //     evtSource.close();
        // };
    </script>
</body>

</html>
<?php die(); ?>