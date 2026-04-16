<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Omniware
{
    protected $CI;
    protected $merchant_id;
    protected $api_key;
    protected $salt;
    protected $url;
    protected $mode;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->config->load('omni');

        $this->merchant_id = $this->CI->config->item('omni_merchant_id');
        $this->api_key = $this->CI->config->item('omni_api_key');
        $this->salt = $this->CI->config->item('omni_salt');
        $this->url = $this->CI->config->item('omni_url');
        $this->mode = $this->CI->config->item('omni_mode');
    }

    public function getGatewayUrl()
    {
        return $this->url;
    }

    public function generateRequestHash($params)
    {
        $hash_columns = array(
            'address_line_1',
            'address_line_2',
            'amount',
            'api_key',
            'city',
            'country',
            'currency',
            'description',
            'email',
            'mode',
            'name',
            'order_id',
            'payment_options',
            'payment_page_display_text',
            'phone',
            'return_url',
            'return_url_failure',
            'return_url_cancel',
            'state',
            'udf1',
            'udf2',
            'udf3',
            'udf4',
            'udf5',
            'zip_code'
        );

        $hash_data = $this->salt;
        foreach ($hash_columns as $column) {
            if (isset($params[$column]) && strlen(trim((string) $params[$column])) > 0) {
                $hash_data .= '|' . trim((string) $params[$column]);
            }
        }

        return strtoupper(hash('sha512', $hash_data));
    }

    public function generateResponseHash($params)
    {
        if (isset($params['hash'])) {
            unset($params['hash']);
        }

        ksort($params);

        $hash_data = $this->salt;
        foreach ($params as $value) {
            if (strlen(trim((string) $value)) > 0) {
                $hash_data .= '|' . trim((string) $value);
            }
        }

        return strtoupper(hash('sha512', $hash_data));
    }

    public function submitForm($params)
    {
        $defaults = array(
            'address_line_1' => 'Not Provided',
            'address_line_2' => '',
            'amount' => '0.00',
            'api_key' => $this->api_key,
            'city' => 'Chennai',
            'country' => 'IND',
            'currency' => 'INR',
            'description' => 'Donation',
            'email' => '',
            'mode' => $this->mode,
            'name' => '',
            'order_id' => '',
            'phone' => '',
            'return_url' => '',
            'return_url_failure' => '',
            'return_url_cancel' => '',
            'state' => 'Tamil Nadu',
            'udf1' => '',
            'udf2' => '',
            'udf3' => '',
            'udf4' => '',
            'udf5' => '',
            'zip_code' => '600001'
        );

        $params = array_merge($defaults, $params);
        $params['api_key'] = $this->api_key;
        $params['mode'] = $this->mode;
        $params['hash'] = $this->generateRequestHash($params);

        $html = '<!DOCTYPE html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">';
        $html .= '<title>Redirecting To Payment</title>';
        $html .= '<style>body{display:flex;justify-content:center;align-items:center;min-height:100vh;margin:0;background:#f5f5f5;font-family:Arial,sans-serif;color:#1f2933}.loader{text-align:center}.spinner{width:42px;height:42px;border:4px solid #ececec;border-top-color:#dc3545;border-radius:50%;margin:0 auto 18px;animation:spin 1s linear infinite}@keyframes spin{to{transform:rotate(360deg)}}</style>';
        $html .= '</head><body><div class="loader"><div class="spinner"></div><p>Redirecting to the secure payment gateway...</p><p style="font-size:12px;color:#777">Please do not close this window.</p></div>';
        $html .= '<form action="' . htmlspecialchars($this->url, ENT_QUOTES, 'UTF-8') . '" method="POST" id="omni_form" style="display:none">';
        foreach ($params as $key => $value) {
            $html .= '<input type="hidden" name="' . htmlspecialchars($key, ENT_QUOTES, 'UTF-8') . '" value="' . htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8') . '">';
        }
        $html .= '</form><script>document.getElementById("omni_form").submit();</script></body></html>';

        return $html;
    }

    public function auto_submit_form($params)
    {
        echo $this->submitForm($params);
    }

    public function verify_response($response)
    {
        if (empty($response) || !isset($response['hash'])) {
            log_message('error', 'Omniware verify_response: Missing hash in gateway response.');
            return false;
        }

        $received_hash = (string) $response['hash'];
        $calculated_hash = $this->generateResponseHash($response);

        if ($received_hash !== $calculated_hash) {
            log_message('error', 'Omniware verify_response: Hash mismatch for order ' . ($response['order_id'] ?? 'unknown'));
            return false;
        }

        return true;
    }
}
