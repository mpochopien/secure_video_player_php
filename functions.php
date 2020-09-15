<?php
    require_once "vendor/autoload.php";

    use \Firebase\JWT\JWT;

    define("app_id", "some_random_string_here");
    define("app_public", 
    <<<EOD
    -----BEGIN PUBLIC KEY-----
    public_key_here
    -----END PUBLIC KEY-----
    EOD);

    function check_token() {
        $t = $_GET['t'];
        if (!empty($t)) {
            try {
                $decoded = JWT::decode($t, app_public, array('RS256'));
                $decoded = json_decode(json_encode($decoded), true);

                if($decoded['app_id'] == app_id)
                    return $decoded['vid'];
                else
                    http_response_code(403);
            } catch(Exception $e){
                http_response_code(403);
            }
        } else
            http_response_code(403);
    }