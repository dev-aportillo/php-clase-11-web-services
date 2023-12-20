<?php
    class Client{
        var $name;
        var $age;
        var $city;
        public function __construct(){}
    }

    #objeto a json
    $client = new Client();
    $client->name = "Maxi";
    $client->age= 18;
    $client->city = "Asuncion";

    $code_json = json_encode($client);

    echo $code_json;
?>