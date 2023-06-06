<?php

if (empty($_GET['startdate']) || empty($_GET['enddate'])) die("Data is'nt found");

$get_datas = curl_get("https://demo-1.c-icare.cc/outbound/report/api/result", ["startdate" => $_GET['startdate'], "enddate" => $_GET['enddate'], 'page' => $_GET['page'] ?? 1], ["Authorization: Bearer 1b3231655cebb7a1f783eddf27d254ca.7826b958b79c70626801b880405eb5111557dadceb2fee2b1ed69a18eed0c6dc"], true);

$arr_datas = json_decode($get_datas['response'], true);
if ($arr_datas['status'] != "true") die("Status: false");

// echo "<pre>";
// print_r($arr_datas);
// echo "</pre>";
// die;


if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https://";
else
    $url = "http://";
// Append the host(domain name, ip) to the URL.   
$url .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL   
$url .= $_SERVER['REQUEST_URI'];
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
    <script src="https://cdn.jsdelivr.net/gh/greghub/green-audio-player/dist/js/green-audio-player.min.js"></script>
    <script>
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
        <form action="" method="get">
            <input type="hidden" name="cmd" value="pds-history">
            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="start">Start Date</label>
                    <input type="date" name="startdate" id="start" class="form-control" value="<?= $_GET['startdate'] ?? '' ?>">
                </div>
                <div class="col-md-6">
                    <label for="end">End Date</label>
                    <input type="date" name="enddate" id="end" class="form-control" value="<?= $_GET['enddate'] ?? '' ?>">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary w-100 mt-2">Filter</button>
                </div>
            </div>
        </form>
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
                                <td><button type="button" class="btn btn-primary" onclick="playAudio(\'https://demo-1.c-icare.cc/outbound/report/api/playrecording?recordingfile=' . $value['recordingfile'] . '\')">Play</button></td>
                            </tr>';
                }
                ?>
            </tbody>
        </table>

        <div class="row mt-2">
            <div class="col-md-6">
                Total of data <?= $arr_datas['total_data'] ?>
            </div>
            <div class="col-md-6">
                <nav aria-label="Page navigation example" class="float-end">
                    <ul class="pagination">
                        <?php
                            $page_number = (int) ($arr_datas['page'] ?? 1);

                            $_GET['page'] = ((($page_number - 1) <= 1) ? 2 : $page_number) - 1;
                        ?>
                        <li class="page-item"><a class="page-link" href="<?= $url . '?' . http_build_query($_GET) ?>">Previous</a></li>
                        <?php
                        for ($i = 1; $i < $arr_datas['total_page'] + 1; $i++) {
                            $_GET['page'] = $i;
                            echo '<li class="page-item ' . (($arr_datas['page'] == (($i == 0) ? 1 : $i)) ? 'active' : '') . '"><a class="page-link" href="' . $url . '?' . http_build_query($_GET) . '">' . $i . '</a></li>';
                        }
                        ?>
                        <?php
                            $_GET['page'] = (($page_number < 1) ? 1 : $page_number) + 1;
                        ?>
                        <li class="page-item"><a class="page-link" href="<?= $url . '?' . http_build_query($_GET) ?>">Next</a></li>
                        
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</body>

</html>
<?php die(); ?>