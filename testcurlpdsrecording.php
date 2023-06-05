<?php
/*
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://demo-1.c-icare.cc/outbound/report/api/result?startdate%20=2021-01-01&enddate=2023-12-30&page=1',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_SSL_VERIFYHOST => false,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Bearer 1b3231655cebb7a1f783eddf27d254ca.7826b958b79c70626801b880405eb5111557dadceb2fee2b1ed69a18eed0c6dc',
    'Cookie: ci_session=l5u1b70rfinmkjf8jvvlitper598id7g'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;*/


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
  CURLOPT_POSTFIELDS =>'{
    "campaign_name": "Predictive UIDESK",
    "data_campaign": [
      {
        "form_uniqueid": "'.date("Ymd").uniqid().'",
        "form_debtors_full_name": "Restu",
        "form_oldest_dpd": "123",
        "form_loan_balance": "123",
        "form_overdue_amount": "123",
        "form_customer_id": "08119970461",
        "form_phone_number": "08119970461",
        "form_phone_ec": "08119970461",
        "form_phone_other": "08119970461",
        "form_phone_other_description": "EFS Description",
        "form_application_url": "https://uidesk.id/"
      }
    ]
  }',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Bearer dc5d357038a069b0c970b7954c82b61F43146a9dccd77a58762e5B1968009e7D',
    'Cookie: ci_session=l1sg3btemhvrnnsvvhl9q6l67b3rt5m6'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>