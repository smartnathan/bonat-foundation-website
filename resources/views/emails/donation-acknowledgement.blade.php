<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thank you for your gift — The Deborah Bonat Foundation</title>
    <style>
        body { font-family: 'Georgia', serif; background: #f5f5f5; margin: 0; padding: 0; }
        .wrapper { max-width: 600px; margin: 40px auto; background: #ffffff; border-radius: 12px; overflow: hidden; }
        .header { background: #0C2461; padding: 40px 32px; text-align: center; }
        .header-bar { display: flex; align-items: center; justify-content: center; gap: 16px; margin-bottom: 20px; }
        .line { height: 1px; width: 60px; background: rgba(212,175,55,0.4); display: inline-block; }
        .header-label { color: rgba(212,175,55,0.8); font-size: 11px; letter-spacing: 0.3em; text-transform: uppercase; }
        .header h1 { color: #D4AF37; font-size: 22px; font-weight: bold; margin: 0; }
        .header p { color: rgba(255,255,255,0.6); font-size: 13px; margin: 8px 0 0; }
        .body { padding: 40px 32px; }
        .greeting { font-size: 18px; color: #0C2461; font-weight: bold; margin-bottom: 20px; }
        .body p { color: #4a4a4a; font-size: 15px; line-height: 1.8; margin: 0 0 16px; }
        .receipt-box { background: #f9f6ee; border: 1px solid #e8dfc0; border-radius: 10px; padding: 24px; margin: 24px 0; }
        .receipt-box table { width: 100%; border-collapse: collapse; }
        .receipt-box td { padding: 8px 0; font-size: 14px; color: #4a4a4a; vertical-align: top; }
        .receipt-box td:first-child { color: #888; width: 45%; }
        .receipt-box td:last-child { font-weight: bold; color: #0C2461; }
        .receipt-box .divider { border: none; border-top: 1px solid #e8dfc0; margin: 4px 0; }
        .quote { border-left: 3px solid #D4AF37; padding: 12px 20px; background: #f9f6ee; margin: 24px 0; border-radius: 0 8px 8px 0; }
        .quote p { color: #555; font-style: italic; margin: 0; }
        .cta { text-align: center; margin: 32px 0; }
        .cta a { display: inline-block; background: #D4AF37; color: #0C2461; font-weight: bold; padding: 14px 32px; border-radius: 10px; text-decoration: none; font-size: 14px; }
        .footer { background: #070F2B; padding: 24px 32px; text-align: center; }
        .footer p { color: rgba(255,255,255,0.35); font-size: 12px; margin: 4px 0; }
        .footer a { color: rgba(212,175,55,0.7); text-decoration: none; }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <div class="header-bar">
            <span class="line"></span>
            <span class="header-label">Donation Confirmed</span>
            <span class="line"></span>
        </div>
        <h1>The Deborah Bonat Foundation</h1>
        <p>A Life Poured Out for the Gospel</p>
    </div>

    <div class="body">
        <p class="greeting">Dear {{ $donation->donor_name }},</p>

        <p>Thank you so much for your generous gift. Your donation has been received and confirmed, and it will go directly towards sustaining the work Mama Deborah gave her life to — caring for widows, orphans, the elderly, and new converts in Christ.</p>

        <div class="receipt-box">
            <table>
                <tr>
                    <td>Amount</td>
                    <td>₦{{ number_format((float) $donation->amount, 2) }}</td>
                </tr>
                <tr><td colspan="2"><hr class="divider"></td></tr>
                <tr>
                    <td>Giving Type</td>
                    <td>{{ $donation->give_type === 'legacy' ? 'Legacy Gift (Recurring)' : 'One-Time Gift' }}</td>
                </tr>
                @if($donation->frequency)
                <tr>
                    <td>Frequency</td>
                    <td>{{ ucfirst($donation->frequency) }}</td>
                </tr>
                @endif
                @if($donation->programme_type)
                <tr>
                    <td>Programme</td>
                    <td>{{ ucfirst(str_replace('-', ' ', $donation->programme_type)) }}</td>
                </tr>
                @endif
                <tr><td colspan="2"><hr class="divider"></td></tr>
                <tr>
                    <td>Reference</td>
                    <td style="font-family: monospace; font-size: 13px;">{{ $donation->payment_reference }}</td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td>{{ $donation->payment_date?->format('d M Y, g:i A') }}</td>
                </tr>
            </table>
        </div>

        <div class="quote">
            <p>"Mama Deborah's greatest desire was that the 'Outreach' would never end. Because of friends like you, her vision for the vulnerable, the widow, and the new convert remains alive."</p>
        </div>

        <p>Please keep this email as your receipt. If you have any questions about your donation, do not hesitate to reach out to us at <a href="mailto:contact@deborahbonatfoundation.org" style="color: #0C2461;">contact@deborahbonatfoundation.org</a> and quote your reference number.</p>

        <div class="cta">
            <a href="{{ config('app.url') }}">Visit the Foundation Website</a>
        </div>

        <p>With deep gratitude,<br>
        <strong>The Bonat Family &amp; The Deborah Bonat Foundation Team</strong></p>
    </div>

    <div class="footer">
        <p>The Deborah Bonat Foundation</p>
        <p>2 Mono Street, Kafanchan-Kaduna Road, Samaru Kataf, Kaduna State</p>
        <p><a href="mailto:contact@deborahbonatfoundation.org">contact@deborahbonatfoundation.org</a></p>
        <p style="margin-top:12px;">&copy; {{ date('Y') }} The Deborah Bonat Foundation. All rights reserved.</p>
    </div>
</div>
</body>
</html>
