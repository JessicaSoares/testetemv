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
            $valor1 = $_POST['tag1'];
            $valor2 = $_POST['tag2'];

            header('Content-Type: text/html; charset=UTF-8');

            $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6Ijg2ODU2ZjNlLTU1YWYtNGJkNC05NjE3LTAwZjFkYTZmMmI5ZCIsImlhdCI6MTU5MzcwMTYwMSwic3ViIjoiZGV2ZWxvcGVyLzlhNWI2ZWFhLWJkNGYtMGFjMC0yYmM4LThhYjYyMzMxZWNmMiIsInNjb3BlcyI6WyJyb3lhbGUiXSwibGltaXRzIjpbeyJ0aWVyIjoiZGV2ZWxvcGVyL3NpbHZlciIsInR5cGUiOiJ0aHJvdHRsaW5nIn0seyJjaWRycyI6WyIxODkuOTQuMTI2LjE2Il0sInR5cGUiOiJjbGllbnQifV19.0JFPmUWd3pXwOBA64D_XaNkFpqWwMv0PxV7Qke-vtvypt3DSWShJB5C5HXyj4Uqvp65JdKe8seYEZ9-RxEAORA";

            $url1 = "https://api.clashroyale.com/v1/players/%23$valor1/battlelog";
            $url21 = "https://api.clashroyale.com/v1/players/%23$valor1";

            $url2 = "https://api.clashroyale.com/v1/players/%23$valor2/battlelog";
            $url22 = "https://api.clashroyale.com/v1/players/%23$valor2";



            $ch = curl_init($url1);
            $ch1 = curl_init($url21);

            $ch2 = curl_init($url2);
            $ch22 = curl_init($url22);


            $headr = array();
            $headr[] = "Accept: application/json";
            $headr[] = "Authorization: Bearer " . $token;

            curl_setopt($ch1, CURLOPT_HTTPHEADER, $headr);
            curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);

            curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            curl_setopt($ch2, CURLOPT_HTTPHEADER, $headr);
            curl_setopt($ch2, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);

            curl_setopt($ch22, CURLOPT_HTTPHEADER, $headr);
            curl_setopt($ch22, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch22, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch22, CURLOPT_RETURNTRANSFER, 1);



            $res = curl_exec($ch);
            $res1 = curl_exec($ch1);

            $res2 = curl_exec($ch2);
            $res22 = curl_exec($ch22);




            $data = json_decode($res, true);
            $data1 = json_decode($res1, true);

            $data2 = json_decode($res2, true);
            $data22 = json_decode($res22, true);



            curl_close($ch);
            curl_close($ch1);
            curl_close($ch2);
            curl_close($ch22);

            function test_input($form_var)
            {
                $data = trim($form_var);
                $data = stripslashes($form_var);
                $data = htmlspecialchars($form_var);
                return $form_var;
            }
            function test_input1($form_var1)
            {
                $data1 = trim($form_var1);
                $data1 = stripslashes($form_var1);
                $data1 = htmlspecialchars($form_var1);
                return $form_var1;
            }


            function test_input2($form_var2)
            {
                $data2 = trim($form_var2);
                $data2 = stripslashes($form_var2);
                $data2 = htmlspecialchars($form_var2);
                return $form_var2;
            }


            function test_input22($form_var22)
            {
                $data22 = trim($form_var22);
                $data22 = stripslashes($form_var22);
                $data22 = htmlspecialchars($form_var22);
                return $form_var22;
            }


            if (isset($data["reason"])) {
                echo "<p>", "Failed: ", $data["reason"], " : ", isset($data["message"]) ? $data["message"] : "", "</p></body></html>";
                exit;
            }

            if (isset($data1["reason"])) {
                echo "<p>", "Failed: ", $data1["reason"], " : ", isset($data1["message"]) ? $data1["message"] : "", "</p></body></html>";
                exit;
            }

            highlight_string("<?php\n " . var_export($data1, true) . "?>");



            if (isset($data["reason"])) {
                echo "<p>", "Failed: ", $data1["reason"], " : ", isset($data1["message"]) ? $data1["message"] : "", "</p></body></html>";
                exit;
            }

            highlight_string("<?php\n " . var_export($data, true) . "?>");


            if (isset($data["reason"])) {
                echo "<p>", "Failed: ", $data["reason"], " : ", isset($data["message"]) ? $data["message"] : "", "</p></body></html>";
                exit;
            }

            if (isset($data1["reason"])) {
                echo "<p>", "Failed: ", $data1["reason"], " : ", isset($data1["message"]) ? $data1["message"] : "", "</p></body></html>";
                exit;
            }

            highlight_string("<?php\n " . var_export($data22, true) . "?>");


            if (isset($data2["reason"])) {
                echo "<p>", "Failed: ", $data2["reason"], " : ", isset($data2["message"]) ? $data2["message"] : "", "</p></body></html>";
                exit;
            }

            highlight_string("<?php\n " . var_export($data2, true) . "?>");


            if (isset($data2["reason"])) {
                echo "<p>", "Failed: ", $data2["reason"], " : ", isset($data2["message"]) ? $data2["message"] : "", "</p></body></html>";
                exit;
            }

            highlight_string("<?php\n " . var_export($data2, true) . "?>");



            echo "tag do jogador 1:";
            print_r($data1['tag']);
            echo "<br>";

            echo "nome do jogador 1:";
            print_r($data1['name']);
            echo "<br>";


            echo "tag do jogador 2:";
            print_r($data22['tag']);
            echo "<br>";

            echo "nome do jogador 2:";
            print_r($data22['name']);
            echo "<br>";


            if ($data2[0]['opponent'][0]['crowns'] > $data2[0]['team'][0]['crowns']) {

                echo "você ganhou: &nbsp;";
                echo "<br>";
                print_r($data2[0]['opponent'][0]['name']);
                echo "<br>";
                print_r($data2[0]['opponent'][0]['tag']);
                echo "<br>";
            } elseif ($data2[0]['opponent'][0]['crowns'] == $data2[0]['team'][0]['crowns']) {
                echo "Empate";
                echo "<br>";
            } else {
                echo "você perdeu: &nbsp;";
                echo "<br>";
                print_r($data2[0]['opponent'][0]['name']);
                echo "<br>";
                print_r($data2[0]['opponent'][0]['tag']);
                echo "<br>";
            }



            if ($data2[0]['opponent'][0]['crowns'] < $data2[0]['team'][0]['crowns']) {

                echo "você ganhou: &nbsp;";
                echo "<br>";
                print_r($data2[0]['team'][0]['name']);
                echo "<br>";
                print_r($data2[0]['team'][0]['tag']);
                echo "<br>";
            } elseif ($data2[0]['opponent'][0]['crowns'] == $data2[0]['team'][0]['crowns']) {
                echo "Empate";
                echo "<br>";
            } else {
                echo "você perdeu: &nbsp;";
                echo "<br>";
                print_r($data2[0]['team'][0]['name']);
                echo "<br>";
                print_r($data2[0]['team'][0]['tag']);
                echo "<br>";
            }



            if ($data2[0]['opponent'][0]['crowns'] > $data2[0]['team'][0]['crowns']) {

                echo "você ganhou: &nbsp;";
                echo "<br>";
                print_r($data2[0]['opponent'][0]['name']);
                echo "<br>";
                print_r($data2[0]['opponent'][0]['tag']);
                echo "<br>";
            } elseif ($data2[0]['opponent'][0]['crowns'] == $data2[0]['team'][0]['crowns']) {
                echo "Empate";
                echo "<br>";
            } else {
                echo "você perdeu: &nbsp;";
                echo "<br>";
                print_r($data2[0]['opponent'][0]['name']);
                echo "<br>";
                print_r($data2[0]['opponent'][0]['tag']);
                echo "<br>";
            }



            if ($data2[0]['opponent'][0]['crowns'] < $data2[0]['team'][0]['crowns']) {

                echo "você ganhou: &nbsp;";
                echo "<br>";
                print_r($data2[0]['team'][0]['name']);
                echo "<br>";
                print_r($data2[0]['team'][0]['tag']);
                echo "<br>";
            } elseif ($data2[0]['opponent'][0]['crowns'] == $data2[0]['team'][0]['crowns']) {
                echo "Empate";
                echo "<br>";
            } else {
                echo "você perdeu: &nbsp;";
                echo "<br>";
                print_r($data2[0]['team'][0]['name']);
                echo "<br>";
                print_r($data2[0]['team'][0]['tag']);
                echo "<br>";
            }


            echo "<br>";


            $d1 = $data1['tag'];
            $d2= $data2[0]['opponent'][0]['tag'];
            $d22 = $data22['tag'];
            $d = $data[0]['opponent'][0]['tag'];
         
            if ($d1 == $d2 && $d22 == $d ) {

                echo "Jogo válido entre os jogadores pertencentes as tags inseridas";
                echo "<br>";
                
         
            } else {
                echo "Jogo inválido entre os jogadores pertencentes as tags inseridas";
              
            }
   

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
