<?php
function get_tinified_url($file_path,$TinyPNG_API_KEY){
    $tiny_curl = curl_init();
    $Opts = array(CURLOPT_RETURNTRANSFER => 1,CURLOPT_URL => 'https://api.tinify.com/shrink',CURLOPT_POST => 1,CURLOPT_USERPWD => 'api:' . $TinyPNG_API_KEY,CURLOPT_BINARYTRANSFER => 1,CURLOPT_POSTFIELDS => file_get_contents($file_path));
    curl_setopt_array($tiny_curl, $Opts);
    $result = json_decode(curl_exec($tiny_curl),true);
    return($result['output']['url']);
}