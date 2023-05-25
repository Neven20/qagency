<?php


class APIClientService {
    private $api_url;
    
    public function __construct($api_url) {
        $this->api_url = $api_url;
    }
    
    public function post_data_to_api($data) {
        $headers = array(
            'Content-Type' => 'application/json',
        );
        
        $args = array(
            'headers' => $headers,
            'body'    => wp_json_encode($data),
            'method'  => 'POST',
        );
        
        $response = wp_remote_post($this->api_url, $args);
        
        if (is_wp_error($response)) {
            // Handle error condition
            return false;
        }
        
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);
        
        return $data;
    }
}


?>