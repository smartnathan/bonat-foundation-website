<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coming Soon — The Deborah Bonat Foundation</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --blue: #0C2461;
            --blue-light: #1E40AF;
            --blue-dark: #070F2B;
            --gold: #D4AF37;
            --gold-light: #F0D060;
            --cream: #F0F4FF;
        }

        body {
            font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
            background-color: var(--blue-dark);
            color: white;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem 1.5rem;
            position: relative;
            overflow: hidden;
        }

        /* Subtle gold geometric pattern */
        body::before {
            content: '';
            position: absolute;
            inset: 0;
            opacity: 0.03;
            background-image: repeating-linear-gradient(
                45deg,
                #D4AF37 0, #D4AF37 1px,
                transparent 0, transparent 50%
            );
            background-size: 28px 28px;
            pointer-events: none;
        }

        /* Radial glow */
        body::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 700px;
            height: 700px;
            background: radial-gradient(circle, rgba(12, 36, 97, 0.6) 0%, transparent 70%);
            pointer-events: none;
        }

        .card {
            position: relative;
            z-index: 10;
            max-width: 600px;
            width: 100%;
            text-align: center;
        }

        .divider {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 2.5rem;
        }

        .divider-line {
            height: 1px;
            width: 60px;
            background: rgba(212, 175, 55, 0.4);
        }

        .divider-text {
            color: rgba(212, 175, 55, 0.7);
            font-size: 0.65rem;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            font-weight: 500;
        }

        .foundation-name {
            font-size: clamp(1.5rem, 5vw, 2.25rem);
            font-weight: 700;
            color: var(--gold);
            line-height: 1.2;
            letter-spacing: -0.01em;
        }

        .tagline {
            margin-top: 0.4rem;
            font-size: 0.7rem;
            letter-spacing: 0.35em;
            text-transform: uppercase;
            color: rgba(255,255,255,0.35);
            font-weight: 500;
        }

        .coming-soon {
            margin-top: 3rem;
            font-size: clamp(2.5rem, 10vw, 4rem);
            font-weight: 700;
            color: white;
            line-height: 1;
            letter-spacing: -0.02em;
        }

        .coming-soon span {
            color: var(--gold);
        }

        .message {
            margin-top: 1.5rem;
            font-size: 1rem;
            color: rgba(255,255,255,0.6);
            line-height: 1.7;
            max-width: 440px;
            margin-left: auto;
            margin-right: auto;
        }

        .quote-block {
            margin-top: 3rem;
            padding: 1.5rem 2rem;
            border-left: 3px solid var(--gold);
            background: rgba(255,255,255,0.04);
            border-radius: 0 1rem 1rem 0;
            text-align: left;
        }

        .quote-text {
            font-style: italic;
            color: rgba(255,255,255,0.75);
            font-size: 0.95rem;
            line-height: 1.7;
        }

        .quote-attribution {
            margin-top: 0.75rem;
            font-size: 0.75rem;
            color: rgba(212, 175, 55, 0.7);
            font-weight: 600;
        }

        .notify-section {
            margin-top: 3rem;
        }

        .notify-label {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            color: rgba(255,255,255,0.4);
            margin-bottom: 1rem;
        }

        .contact-link {
            display: inline-block;
            padding: 0.75rem 2rem;
            background: var(--gold);
            color: var(--blue);
            border-radius: 0.75rem;
            font-weight: 700;
            font-size: 0.875rem;
            text-decoration: none;
            transition: background 0.2s;
        }

        .contact-link:hover {
            background: var(--gold-light);
        }

        .footer-note {
            margin-top: 4rem;
            font-size: 0.7rem;
            color: rgba(255,255,255,0.2);
            letter-spacing: 0.05em;
        }
    </style>
</head>
<body>
    <div class="card">

        <div class="divider">
            <div class="divider-line"></div>
            <span class="divider-text">In Memory of Mama Deborah Iya Bonat</span>
            <div class="divider-line"></div>
        </div>

        <p class="foundation-name">The Deborah Bonat Foundation</p>
        <p class="tagline">Turning Persecution into Resilience</p>

        <h1 class="coming-soon">Coming <span>Soon</span></h1>

        <p class="message">
            We are building something meaningful in her honour.
            The foundation's full website will be live shortly.
            Thank you for your patience and your prayers.
        </p>

        <div class="quote-block">
            <p class="quote-text">
                "Turning every story of persecution into a story of resilience."
            </p>
            <p class="quote-attribution">— The Deborah Bonat Foundation</p>
        </div>

        <div class="notify-section">
            <p class="notify-label">For enquiries in the meantime</p>
            <a href="mailto:contact@deborahbonatfoundation.org" class="contact-link">
                Get in Touch
            </a>
            <div style="margin-top: 1.25rem; display: flex; flex-direction: column; gap: 0.35rem;">
                <a href="tel:+2349065477834" style="color: rgba(212,175,55,0.75); font-size: 0.85rem; text-decoration: none; letter-spacing: 0.03em;">+234 906 547 7834</a>
                <a href="tel:+2348066968052" style="color: rgba(212,175,55,0.75); font-size: 0.85rem; text-decoration: none; letter-spacing: 0.03em;">+234 806 696 8052</a>
                <a href="tel:+2348148852777" style="color: rgba(212,175,55,0.75); font-size: 0.85rem; text-decoration: none; letter-spacing: 0.03em;">+234 814 885 2777</a>
            </div>
        </div>

        <p class="footer-note">&copy; {{ date('Y') }} The Deborah Bonat Foundation. All rights reserved.</p>
    </div>
</body>
</html>
