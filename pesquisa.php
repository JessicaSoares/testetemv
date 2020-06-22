<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ionic Basics</title>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js">
    </script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />
    <script src="app.js" defer> </script>
</head>

<body>
<ion-app>
<ion-content overflow-scroll="true">
  
<ion-header>
            <ion-toolbar color="primary">
                <ion-title>
                TEMV Clash Royale API teste 1.0
                </ion-title>
            </ion-toolbar>
        </ion-header>


<?php

$valor = $_POST['tag'];
header('Content-Type: text/html; charset=UTF-8');

$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6ImJhZGUwMGJmLTA2NzQtNDcyMC05NTg4LTE4YWNlNGFmMGEzNCIsImlhdCI6MTU5MTE1MDMyOSwic3ViIjoiZGV2ZWxvcGVyLzlhNWI2ZWFhLWJkNGYtMGFjMC0yYmM4LThhYjYyMzMxZWNmMiIsInNjb3BlcyI6WyJyb3lhbGUiXSwibGltaXRzIjpbeyJ0aWVyIjoiZGV2ZWxvcGVyL3NpbHZlciIsInR5cGUiOiJ0aHJvdHRsaW5nIn0seyJjaWRycyI6WyIxNzAuMjM4Ljc1LjE1NCJdLCJ0eXBlIjoiY2xpZW50In1dfQ.MjaYFJU7CS6CyDORsBvZcL5V07jc8ZfWccr1_pDgY71R5DaxvF7MDdCvYs1EONty8xMIqGdk1AG1YJRyp1EcKQ";

$url = "https://api.clashroyale.com/v1/players/%23$valor/battlelog";
$url1 = "https://api.clashroyale.com/v1/players/%23$valor";


$ch = curl_init($url);
$ch1 = curl_init($url1);

$headr = array();
$headr[] = "Accept: application/json";
$headr[] = "Authorization: Bearer ".$token;

curl_setopt($ch1, CURLOPT_HTTPHEADER, $headr);
curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$res = curl_exec($ch);
$res1 = curl_exec($ch1);

$data = json_decode($res, true);
$data1 = json_decode($res1, true);

curl_close($ch);
curl_close($ch1);

function test_input($form_var) {
$data = trim($form_var);
$data = stripslashes($form_var);
$data = htmlspecialchars($form_var);
return $form_var;
}


function test_input1($form_var1) {
    $data1 = trim($form_var1);
    $data1 = stripslashes($form_var1);
    $data1 = htmlspecialchars($form_var1);
    return $form_var1;
    }


if (isset($data["reason"])) {
echo "<p>", "Failed: ", $data["reason"], " : ", isset($data["message"]) ? $data["message"] : "", "</p></body></html>";
exit;
}


if (isset($data1["reason"])) {
    echo "<p>", "Failed: ", $data1["reason"], " : ", isset($data1["message"]) ? $data1["message"] : "", "</p></body></html>";
    exit;
    }
  
     highlight_string("<?php\n " . var_export($data, true) . "?>");


    print_r(array($data[0]['type']));
    print_r($array[0].team[0][name]);
   ?>
        



<title>
Cards
</title>
</head>



<pre>

</pre>
   
</ion-content>
</ion-app>
</body>
</html>


