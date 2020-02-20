<?php
// Sávia não precisa mudar nada quando tu fores executar no teu computador, entretanto
// caso não estiver funcionando, tente mudar as credenciais da linha 26. 


$connection = mysqli_connect('localhost', '83840', 'alexandria1', '83840');
if (!$connection) {

    $url = "http://www.useragentstring.com/?uas=%s&getJSON=all";
    $url = sprintf($url, urlencode($_SERVER["HTTP_USER_AGENT"]));

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $output = curl_exec($ch);

    curl_close($ch);

    $data = json_decode($output);

    $so = $data->os_type;
    if(strcmp(strtolower($so),"windows") == 0){
        $connection = mysqli_connect('localhost:3308', 'root', '', 'alexandria');
    } else {
        
        $connection = mysqli_connect('localhost', 'admin', 'admin', 'alexandria');
    }
}
$connection->set_charset("utf8");