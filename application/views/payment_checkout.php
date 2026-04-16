<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Secure Donation Checkout</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f7f4ef;
            color: #1f2933;
        }
        .page {
            max-width: 1080px;
            margin: 0 auto;
            padding: 32px 20px 48px;
        }
        .hero {
            background: linear-gradient(135deg, #fff8ef 0%, #ffffff 100%);
            border: 1px solid #eadfce;
            border-radius: 22px;
            padding: 24px;
            box-shadow: 0 16px 32px rgba(60, 47, 33, 0.08);
            margin-bottom: 24px;
        }
        .eyebrow {
            display: inline-block;
            font-size: 12px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: #8b5e34;
            margin-bottom: 10px;
            font-weight: 700;
        }
        h1 {
            margin: 0 0 10px;
            font-size: 32px;
            line-height: 1.15;
        }
        .hero p {
            margin: 0;
            color: #55606d;
            line-height: 1.6;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 24px;
            align-items: start;
        }
        .card {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid #eadfce;
            box-shadow: 0 14px 28px rgba(60, 47, 33, 0.06);
            padding: 24px;
        }
        .card h2 {
            margin: 0 0 10px;
            font-size: 24px;
        }
        .muted {
            color: #66717f;
            line-height: 1.6;
        }
        .summary {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
            margin-top: 18px;
        }
        .summary-item {
            background: #faf6f0;
            border-radius: 14px;
            padding: 14px;
        }
        .summary-label {
            display: block;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: #8a7760;
            margin-bottom: 6px;
            font-weight: 700;
        }
        .summary-value {
            font-size: 18px;
            font-weight: 700;
            color: #1f2933;
            word-break: break-word;
        }
        .action-list {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin-top: 18px;
        }
        .button,
        .secondary-button,
        .ghost-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            border-radius: 999px;
            padding: 14px 18px;
            font-weight: 700;
            border: none;
            cursor: pointer;
            font-size: 15px;
        }
        .button {
            background: #bb2d1f;
            color: #ffffff;
        }
        .secondary-button {
            background: #17324d;
            color: #ffffff;
        }
        .ghost-button {
            background: transparent;
            color: #17324d;
            border: 1px solid #cfd8e3;
        }
        .notice {
            margin-top: 16px;
            padding: 14px 16px;
            border-radius: 14px;
            background: #fff6df;
            border: 1px solid #ead38c;
            color: #6e5712;
            line-height: 1.6;
        }
        .status-banner {
            margin-bottom: 18px;
            padding: 14px 16px;
            border-radius: 14px;
            background: #fef2f2;
            border: 1px solid #efb3b3;
            color: #9d2f2f;
            line-height: 1.6;
        }
        .upi-box {
            background: #fff8ef;
            border: 1px solid #eadfce;
            border-radius: 16px;
            padding: 16px;
            margin-top: 18px;
        }
        .upi-id {
            font-size: 18px;
            font-weight: 700;
            color: #17324d;
            word-break: break-word;
        }
        .qr-wrap {
            margin-top: 16px;
            display: flex;
            gap: 18px;
            align-items: center;
            flex-wrap: wrap;
        }
        .qr-wrap img {
            width: 180px;
            max-width: 100%;
            border-radius: 16px;
            border: 1px solid #eadfce;
            background: #ffffff;
            padding: 8px;
        }
        .form-field {
            margin-top: 18px;
        }
        .form-field label {
            display: block;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .form-field input {
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ccd4dd;
            border-radius: 14px;
            padding: 14px 16px;
            font-size: 15px;
        }
        .inline-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 16px;
        }
        @media (max-width: 860px) {
            .grid,
            .summary {
                grid-template-columns: 1fr;
            }
            h1 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="hero">
            <span class="eyebrow">Donation Checkout</span>
            <h1>Continue with secure payment</h1>
            <p>
                Your donation request has been saved first, so the checkout can safely redirect to Omni and still come back
                with the correct donation record.
            </p>
        </div>

        <?php if ($this->session->flashdata('error')): ?>
            <div class="status-banner"><?= htmlspecialchars($this->session->flashdata('error'), ENT_QUOTES, 'UTF-8'); ?></div>
        <?php endif; ?>

        <div class="grid">
            <div class="card">
                <h2>Donation Summary</h2>
                <p class="muted">Please review the donation details before continuing.</p>

                <div class="summary">
                    <div class="summary-item">
                        <span class="summary-label">Order ID</span>
                        <span class="summary-value"><?= (int) $donation['donation_id']; ?></span>
                    </div>
                    <div class="summary-item">
                        <span class="summary-label">Amount</span>
                        <span class="summary-value">Rs. <?= number_format((float) $donation['amount'], 2); ?></span>
                    </div>
                    <div class="summary-item">
                        <span class="summary-label">Donor</span>
                        <span class="summary-value"><?= htmlspecialchars($donation['name'] ?: 'Donor', ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                    <div class="summary-item">
                        <span class="summary-label">Cause</span>
                        <span class="summary-value"><?= htmlspecialchars($donation['cause_heading'] ?: 'Kanavu Help Donation', ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                    <div class="summary-item">
                        <span class="summary-label">City</span>
                        <span class="summary-value"><?= htmlspecialchars($donation['donor_location'] ?: 'Not Provided', ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                    <div class="summary-item">
                        <span class="summary-label">Reference</span>
                        <span class="summary-value"><?= htmlspecialchars($display_transaction_id !== '' ? $display_transaction_id : 'Will be assigned by gateway', ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                </div>

                <div class="inline-actions">
                    <a class="ghost-button" href="<?= htmlspecialchars($status_url, ENT_QUOTES, 'UTF-8'); ?>">View Current Status</a>
                    <a class="ghost-button" href="<?= htmlspecialchars($donate_url, ENT_QUOTES, 'UTF-8'); ?>">Back to Donate</a>
                </div>
            </div>

            <div class="card">
                <h2>Secure Gateway</h2>
                <p class="muted">
                    Continue to Omni secure checkout to complete the donation using the payment methods available for your device.
                </p>
                <div class="action-list">
                    <a class="secondary-button" href="<?= htmlspecialchars($gateway_redirect_url, ENT_QUOTES, 'UTF-8'); ?>">Continue to Secure Gateway</a>
                </div>
                <div class="notice">
                    If your donor prefers not to use the gateway on this device, the manual UPI option below is still available.
                </div>
            </div>
        </div>

        <div class="card" id="manual" style="margin-top: 24px;">
            <h2>Manual UPI Fallback</h2>
            <p class="muted">
                This is optional. If you already want Omni checkout, you can ignore this section and continue above.
            </p>

            <div class="upi-box">
                <span class="summary-label">UPI ID</span>
                <div class="upi-id"><?= htmlspecialchars($upi_id, ENT_QUOTES, 'UTF-8'); ?></div>

                <div class="qr-wrap">
                    <img src="<?= htmlspecialchars($qr_image_url, ENT_QUOTES, 'UTF-8'); ?>" alt="Kanavu Help UPI QR">
                    <div class="muted">
                        Scan the QR from your banking or UPI app, complete the payment, and paste the transaction ID below.
                    </div>
                </div>
            </div>

            <form method="post" action="<?= htmlspecialchars($manual_submit_url, ENT_QUOTES, 'UTF-8'); ?>">
                <div class="form-field">
                    <label for="transactionid">UPI Transaction ID</label>
                    <input type="text" id="transactionid" name="transactionid" maxlength="30" required placeholder="Enter the transaction ID shown by your UPI app">
                </div>
                <div class="inline-actions">
                    <button class="button" type="submit">Submit Payment Proof</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
