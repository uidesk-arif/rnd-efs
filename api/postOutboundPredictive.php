<?php
if (!isset($_GET['jidON'])) {
    $result['status'] = false;
    $result['msg'] = "Result postOutboundPredictive";
} else {
    $query_outboundlistefs = $koneksi->query("SELECT * FROM OutboundListEFS");
    if ($query_outboundlistefs->num_rows == 0) {
        $result['status'] = false;
        $result['msg'] = "empty postOutboundPredictive";
    } else {

        $body['campaign_name'] = "Predictive UIDESK";
        $body['data_campaign'] = [];

        while ($fetch_outboundlistefs = $query_outboundlistefs->fetch_assoc()) {

            $data_campaign = [
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
        }

        $curl2Api = curl_post("https://demo-1.c-icare.cc/outbound/console/api/data/PUSH", $body, ["Authorization: Bearer dc5d357038a069b0c970b7954c82b61F43146a9dccd77a58762e5B1968009e7D"], true);


        $result['status'] = true;
        $result['msg'] = "Result postOutboundPredictive";
        $result['datas'] = $curl2Api;
    }
}
