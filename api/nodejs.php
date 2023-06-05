<?php
// if (!isset($_GET['jidON'])) {
//     $result['status'] = false;
//     $result['msg'] = "Result postOutboundPredictive";
// } else {

    $query_outboundlistefs = $koneksi->query("SELECT * FROM OutboundListEFS WHERE StatusCall='new'");
    if ($query_outboundlistefs->num_rows == 0) {
        $result['status'] = false;
        $result['msg'] = "empty postOutboundPredictive";
    } else {

        $body['campaign_name'] = "Predictive UIDESK";
        $body['data_campaign'] = [];

        while ($fetch_outboundlistefs = $query_outboundlistefs->fetch_assoc()) {

            $data_campaign = [
                "form_uniqueid" => $fetch_outboundlistefs['JidON'],
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
            $updated_Jids[] = $fetch_outboundlistefs['JidON'];
        }

        // $curl2Api = curl_post("https://demo-1.c-icare.cc/outbound/console/api/data/PUSH", $body, ["Authorization: Bearer dc5d357038a069b0c970b7954c82b61F43146a9dccd77a58762e5B1968009e7D", "User"], true);
        
        
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
          CURLOPT_POSTFIELDS => $body,
        //   CURLOPT_POSTFIELDS =>'{
        //     "campaign_name": "Predictive UIDESK",
        //     "data_campaign": [
        //         {
        //             "form_unique" : "'.$fetch_outboundlistefs['JidON'].'",
        //             "form_debtors_full_name": "'.$fetch_outboundlistefs['CustName'].'",
        //             "form_oldest_dpd": "123",
        //             "form_loan_balance": "123",
        //             "form_overdue_amount": "123",
        //             "form_customer_id": "123",
        //             "form_phone_number": "088888888888",
        //             "form_phone_ec": "0888888888",
        //             "form_phone_other": "0888888888,",
        //             "form_phone_other_description": "TES",
        //             "form_application_url": "https://google.com"
        //         }
        //     ]
        // }',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer dc5d357038a069b0c970b7954c82b61F43146a9dccd77a58762e5B1968009e7D',
            'Cookie: ci_session=iliisnbo3crfqesrr34tpe3hdl67qj0t'
          ),
        ));
        
        $curl2Api = curl_exec($curl);
        
        curl_close($curl);
        
        
        $jid_s = implode(',', $updated_Jids);
        $koneksi->query("UPDATE OutboundListEFS SET StatusCall='proccess' WHERE JidON IN ($jid_s)");

        $result['status'] = true;
        $result['msg'] = "Result postOutboundPredictive";
        $result['body'] = $body;
        $result['datas'] = $curl2Api;
    }
    
// }
