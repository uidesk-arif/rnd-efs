<?php
// if (!isset($_GET['jidON'])) {
//     $result['status'] = false;
//     $result['msg'] = "Result postOutboundPredictive";
// } else {    
    file_exists("koneksi-lokal.php")? require_once "koneksi-lokal.php" : require_once "koneksi.php";

    $query_outboundlistefs = $koneksi->query("SELECT * FROM OutboundListEFS where StatusCall='new'");
    if ($query_outboundlistefs->num_rows == 0) {
        $result['status'] = false;
        $result['msg'] = "empty postOutboundPredictive";
    } else {

        $body['campaign_name'] = "Predictive UIDESK";
        $body['data_campaign'] = [];

        while ($fetch_outboundlistefs = $query_outboundlistefs->fetch_assoc()) {

            $data_campaign = [
                "form_uniqueid" => date("Ymd").uniqid().'"_"'.$fetch_outboundlistefs['JidON'],
                "form_debtors_full_name" => $fetch_outboundlistefs['CustName'],
                "form_oldest_dpd" => "123",
                "form_loan_balance" => "123",
                "form_overdue_amount" => "123",
                "form_customer_id" => $fetch_outboundlistefs['PhoneNumber'],
                "form_phone_number" => $fetch_outboundlistefs['PhoneNumber'],
                "form_phone_ec" => $fetch_outboundlistefs['PhoneNumber'],
                "form_phone_other" => $fetch_outboundlistefs['PhoneNumber'],
                "form_phone_other_description" => $fetch_outboundlistefs['Informasi'],
                "form_application_url" => "https://uidesk.id/"
            ];

            // if($fetch_outboundlistefs['PhoneType'] == "Mobile") $data_campaign['form_phone_number'] = $fetch_outboundlistefs['PhoneNumber'];
            // if($fetch_outboundlistefs['PhoneType'] == "Business") $data_campaign['form_phone_ec'] = $fetch_outboundlistefs['PhoneNumber'];
            // if($fetch_outboundlistefs['PhoneType'] == "Home") $data_campaign['form_phone_other'] = $fetch_outboundlistefs['PhoneNumber'];

            $body['data_campaign'][] = $data_campaign;
            $update[] = "'".$fetch_outboundlistefs['JidON']."'";
        }

                //echo json_encode($body);
                $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://demo-1.c-icare.cc/outbound/console/api/data/PUSH',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
           CURLOPT_SSL_VERIFYHOST => false,
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_POSTFIELDS =>json_encode($body),
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer dc5d357038a069b0c970b7954c82b61F43146a9dccd77a58762e5B1968009e7D',
            'Cookie: ci_session=l1sg3btemhvrnnsvvhl9q6l67b3rt5m6'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
         $updateIn = implode(",", $update);
        $koneksi->query("UPDATE OutboundListEFS SET StatusCall='proccess' WHERE JidON IN ($updateIn)");
        echo $response;
        
        /*$curl2Api = curl_post("https://demo-1.c-icare.cc/outbound/console/api/data/PUSH", $body, ["Authorization: Bearer dc5d357038a069b0c970b7954c82b61F43146a9dccd77a58762e5B1968009e7D"], true);

        $updateIn = implode(",", $update);
        $koneksi->query("UPDATE OutboundListEFS SET StatusCall='proccess' WHERE JidON IN ($updateIn)");

        $result['status'] = true;
        $result['msg'] = "Result postOutboundPredictive";
        $result['datas'] = $curl2Api;*/
        
        
        //echo print_r($body);
    }
    
// }
