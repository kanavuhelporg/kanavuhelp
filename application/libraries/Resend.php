<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resend
{
    private $api_key = ''; 
    private $from = 'Support <support@help.kanavu.org>';
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->config->load('email');
        $this->api_key = $this->CI->config->item('smtp_pass'); // Read API key from email config
    }

    public function send($to, $subject, $html)
    {
        $payload = [
            "from" => $this->from,
            "to" => [$to],
            "subject" => $subject,
            "html" => $html
        ];

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.resend.com/emails",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($payload),
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer " . $this->api_key,
                "Content-Type: application/json"
            ],
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => false // Added to fix XAMPP Localhost issue
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        if ($error) {
            return [
                'status' => false,
                'message' => $error
            ];
        }

        return [
            'status' => ($httpCode == 200 || $httpCode == 202),
            'http_code' => $httpCode,
            'response' => json_decode($response, true)
        ];
    }
}
