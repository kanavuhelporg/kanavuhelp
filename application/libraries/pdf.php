<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf {
    
    private $dompdf;
    
    public function __construct() {
        // Load DOMPDF from third_party directory
        require_once APPPATH . 'third_party/dompdf/autoload.inc.php';
        
        // Use the older namespace for v0.8.6
        $this->dompdf = new \Dompdf\Dompdf();
    }
    
    public function generateReceipt($donorName, $transactionId, $donationId, $amount) {
        $html = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Transaction Receipt</title>
            <style>
                body {
                    font-family: DejaVu Sans, sans-serif;
                    margin: 40px;
                }
                .header {
                    text-align: center;
                    margin-bottom: 30px;
                }
                .title {
                    color: #d32f2f;
                    font-size: 24px;
                    font-weight: bold;
                    margin-bottom: 10px;
                }
                .subtitle {
                    font-size: 18px;
                    color: #333;
                    margin-bottom: 30px;
                }
                .receipt-box {
                    border: 2px solid #d32f2f;
                    border-radius: 10px;
                    padding: 20px;
                    margin-bottom: 30px;
                }
                .detail-row {
                    margin: 10px 0;
                    padding: 5px 0;
                }
                .label {
                    font-weight: bold;
                    display: inline-block;
                    width: 150px;
                    color: #555;
                }
                .value {
                    color: #333;
                }
                .transaction-id {
                    background-color: #f8f9fa;
                    padding: 10px;
                    border-radius: 5px;
                    font-family: monospace;
                    margin: 15px 0;
                }
                .footer {
                    margin-top: 40px;
                    padding-top: 20px;
                    border-top: 1px solid #ddd;
                    font-size: 12px;
                    color: #666;
                    text-align: center;
                }
                .thank-you {
                    font-style: italic;
                    color: #d32f2f;
                    margin: 20px 0;
                }
                .amount-box {
                    background-color: #f1f8e9;
                    padding: 10px;
                    border-radius: 5px;
                    font-weight: bold;
                    font-size: 16px;
                    display: inline-block;
                }

            </style>
        </head>
        <body>
            <div class="header">
                <div class="title">The Kanavu Trust</div>
                <div class="subtitle">OFFICIAL TRANSACTION RECEIPT</div>
            </div>
            
            <div class="receipt-box">
                <div class="detail-row">
                    <span class="label">Receipt Number:</span>
                    <span class="value">KHV/' . date('Y/m/') . $donationId . '</span>
                </div>
                <div class="detail-row">
                    <span class="label">Issue Date:</span>
                    <span class="value">' . date('F d, Y') . '</span>
                </div>
                <div class="detail-row">
                    <span class="label">Donor Name:</span>
                    <span class="value">' . htmlspecialchars($donorName) . '</span>
                </div>
                <div class="detail-row">
                    <span class="label">Transaction ID:</span>
                    <span class="value transaction-id">' . htmlspecialchars($transactionId) . '</span>
                </div>
                <div class="detail-row">
                    <span class="label">Amount:</span>
                    <span class="value amount-box">₹ ' . number_format($amount, 2) . '</span>
                </div>

                <div class="detail-row">
                    <span class="label">Status:</span>
                    <span class="value" style="color: #28a745; font-weight: bold;">✓ VERIFIED</span>
                </div>
                <div class="detail-row">
                    <span class="label">Verified By:</span>
                    <span class="value">The Kanavu Trust</span>
                </div>
            </div>
            
            <div class="thank-you">
                Thank you for your generous contribution to our cause. Your donation will help create positive change in the community.
            </div>
            
            <div class="footer">
                <p>This is an official computer-generated receipt from The Kanavu Trust.</p>
                <p>For any queries, contact: support@kanavu.help</p>
                <p>Receipt ID: ' . uniqid('RCPT_') . ' | Generated on: ' . date('Y-m-d H:i:s') . '</p>
            </div>
        </body>
        </html>';
        
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'portrait');
        $this->dompdf->render();
        
        return $this->dompdf->output();
    }
}