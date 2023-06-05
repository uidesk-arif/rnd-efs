<?php

if (empty($_GET['startdate']) || empty($_GET['enddate'])) die("Data is'nt found");

$get_datas = curl_get("https://demo-1.c-icare.cc/outbound/report/api/result", ["startdate" => $_GET['startdate'], "enddate" => $_GET['enddate']], ["Authorization: Bearer 1b3231655cebb7a1f783eddf27d254ca.7826b958b79c70626801b880405eb5111557dadceb2fee2b1ed69a18eed0c6dc"], true);

$arr_datas = json_decode($get_datas['response'], true);
if (!$arr_datas['status']) die("Status: false");

?>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/greghub/green-audio-player/dist/css/green-audio-player.min.css">
    <script src="https://cdn.jsdelivr.net/gh/greghub/green-audio-player/dist/js/green-audio-player.min.js"></script><script>
        function playAudio(url) {
            
            
            document.getElementById("audio-player").pause();
            document.getElementById("audio-player").setAttribute('src', url);
            document.getElementById("audio-player").load();
            document.getElementById("audio-player").play();
            // $(".ready-player-1 audio source").attr("src", url).detach().appendTo(".ready-player-1 audio");
            // new GreenAudioPlayer('.ready-player-1', { showTooltips: true, showDownloadButton: false, enableKeystrokes: true });
            // $("#jquery_jplayer").jPlayer({
            //     ready: function() {
            //         $(this).jPlayer("setMedia", {
            //             wav: url // Defines the m4v url
            //         }).jPlayer("play"); // Attempts to Auto-Play the media
            //     },
            //     supplied: "m4v",
            //     swfPath: "jPlayer/js"
            // });
        }
    </script>
</head>

<body>

    <div class="ready-player-1">
        <audio crossorigin preload="none" id="audio-player">
            <source src="audio/example-1.mp3" type="audio/wav">
        </audio>
    </div>
    <div id="jquery_jplayer" style="display: none;"></div>
    <div class="card card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Unique Id</th>
                    <th>Fullname</th>
                    <th>Phonenumber</th>
                    <th>Description</th>
                    <th>Status Call</th>
                    <th>Duration</th>
                    <th>Call Date</th>
                    <th>Extention Agent</th>
                    <th>Recording Url</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($arr_datas['data'] as $key => $value) {
                    // echo json_encode($value);
                    echo '<tr>
                                <td>' . ($value['form_uniqueid'] ?? "") . '</td>
                                <td>' . $value['form_debtors_full_name'] . '</td>
                                <td>' . $value['form_customer_id'] . '</td>
                                <td>' . $value['form_phone_other_description'] . '</td>
                                <td>' . $value['status_call'] . '</td>
                                <td>' . $value['duration_call'] . '</td>
                                <td>' . $value['call_date'] . '</td>
                                <td>' . $value['extension_agent'] . '</td>
                                <td><button type="button" class="btn btn-primary" onclick="playAudio(\'https://demo-1.c-icare.cc/outbound/report/api/playrecording?recordingfile=' . $value['recordingfile'] . '\')">' . $value['recordingfile'] . '</button></td>
                            </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php die(); ?>