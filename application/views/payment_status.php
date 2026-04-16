<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Status</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f3ee;
            color: #1f2933;
        }
        .page {
            max-width: 860px;
            margin: 0 auto;
            padding: 40px 20px 56px;
        }
        .panel {
            background: #ffffff;
            border-radius: 24px;
            border: 1px solid #e6dccd;
            box-shadow: 0 16px 34px rgba(48, 35, 24, 0.08);
            padding: 28px;
        }
        .badge {
            display: inline-block;
            padding: 8px 14px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }
        .badge-success {
            background: #e7f7ee;
            color: #17663a;
        }
        .badge-pending {
            background: #fff4dd;
            color: #8a6310;
        }
        .badge-error {
            background: #fdecec;
            color: #a13030;
        }
        h1 {
            margin: 16px 0 10px;
            font-size: 34px;
            line-height: 1.15;
        }
        .message {
            color: #5b6571;
            font-size: 16px;
            line-height: 1.7;
            margin-bottom: 20px;
        }
        .detail {
            padding: 14px 16px;
            border-radius: 14px;
            background: #f8f5ef;
            border: 1px solid #ece2d3;
            color: #405063;
            margin-bottom: 24px;
            line-height: 1.6;
        }
        .summary {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
            margin-bottom: 24px;
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
            color: #89765f;
            margin-bottom: 6px;
            font-weight: 700;
        }
        .summary-value {
            font-size: 18px;
            font-weight: 700;
            color: #1f2933;
            word-break: break-word;
        }
        .actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }
        .button,
        .ghost-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 18px;
            border-radius: 999px;
            text-decoration: none;
            font-weight: 700;
            font-size: 15px;
        }
        .button {
            background: #bb2d1f;
            color: #ffffff;
        }
        .ghost-button {
            background: transparent;
            color: #17324d;
            border: 1px solid #cfd8e3;
        }
        @media (max-width: 760px) {
            .summary {
                grid-template-columns: 1fr;
            }
            h1 {
                font-size: 29px;
            }
        }
    </style>
</head>
<body>
    <?php
        $variant = $status_context['variant'] ?? 'pending';
        $badge_class = $variant === 'success' ? 'badge-success' : ($variant === 'error' ? 'badge-error' : 'badge-pending');
    ?>
    <div class="page">
        <div class="panel">
            <span class="badge <?= $badge_class; ?>"><?= htmlspecialchars(strtoupper($variant), ENT_QUOTES, 'UTF-8'); ?></span>
            <h1><?= htmlspecialchars($status_context['title'] ?? 'Payment Status', ENT_QUOTES, 'UTF-8'); ?></h1>
            <div class="message"><?= htmlspecialchars($status_context['message'] ?? 'The donation status has been updated.', ENT_QUOTES, 'UTF-8'); ?></div>

            <?php if (!empty($status_context['detail'])): ?>
                <div class="detail"><?= htmlspecialchars($status_context['detail'], ENT_QUOTES, 'UTF-8'); ?></div>
            <?php endif; ?>

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
                    <span class="summary-label">Current Status</span>
                    <span class="summary-value">
                        <?php
                            $status = (int) ($donation['status'] ?? 0);
                            echo $status === 1 ? 'Successful' : ($status === 2 ? 'Failed' : 'Pending');
                        ?>
                    </span>
                </div>
                <div class="summary-item">
                    <span class="summary-label">Reference ID</span>
                    <span class="summary-value"><?= htmlspecialchars($display_transaction_id !== '' ? $display_transaction_id : 'Will appear after payment confirmation', ENT_QUOTES, 'UTF-8'); ?></span>
                </div>
            </div>

            <div class="actions">
                <?php if (($status_context['variant'] ?? '') !== 'success'): ?>
                    <a class="button" href="<?= htmlspecialchars($checkout_url, ENT_QUOTES, 'UTF-8'); ?>">Try Payment Again</a>
                <?php endif; ?>
                <a class="ghost-button" href="<?= htmlspecialchars($donate_url, ENT_QUOTES, 'UTF-8'); ?>">Back to Donate</a>
            </div>
        </div>
    </div>
</body>
</html>
