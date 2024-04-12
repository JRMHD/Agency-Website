<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logbook Transfer - LAURENCE AGENCY SERVICES</title>
    <link rel="icon" type="image/png" href="images/logofavicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333;
        }

        header {
            background-color: #1c4966;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .service-section {
            padding: 20px;
            text-align: left;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .service-section h2 {
            margin-bottom: 10px;
            color: #1c4966;
        }

        .service-section p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 10px;
            color: #666;
        }

        .service-section ul {
            list-style-type: disc;
            padding-left: 20px;
            color: #666;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #1c4966;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #153247;
        }

        footer {
            background-color: #1c4966;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }

        /* Responsive Styles */
        @media (max-width: 767px) {
            .container {
                padding: 10px;
            }

            header h1 {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <header>
        <div>
            <a href="/" class="button">Go Home</a>
        </div>
        <div class="container">
            <h1>Logbook Transfer</h1>
        </div>
    </header>

    <section class="service-section">
        <div class="container">
            <h2>About Logbook Transfer</h2>
            <p>Our Logbook Transfer service provides efficient and hassle-free solutions tailored to your needs. Whether
                you're buying or selling a vehicle, transferring ownership, or updating vehicle details, we're here to
                help you navigate the process smoothly. Located in Kisii, Kenya, our team at LAURENCE AGENCY SERVICES
                ensures that your logbook transfer is completed accurately and on time.</p>

            <p>Requirements: original logbook, KRA pin of the previous and current owner, sale agreement.</p>

            <h2>Key Features</h2>
            <ul>
                <li>Comprehensive assistance with all paperwork and documentation</li>
                <li>Expedited processing for quick turnaround times</li>
                <li>Expert guidance through every step of the transfer process</li>
                <li>Personalized service to meet your specific requirements</li>
            </ul>

            @auth
                <h2>Upload Logbook</h2>
                <p>To get started with the logbook transfer process, please upload a copy of your logbook in PDF format
                    using the form below. Our team will review the document and guide you through the next steps.</p>
                <form action="{{ route('logbook.upload.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="logbook-file">Logbook PDF:</label>
                    <input type="file" id="logbook-file" name="logbook_file" accept=".pdf" required>
                    <button type="submit" class="button">Upload</button>
                </form>
            @else
                <p>Please <a href="{{ route('login') }}">log in</a> or <a href="{{ route('register') }}">Create an
                        Account</a> to upload your logbook.</p>
            @endauth
            @if (session('success'))
                <div
                    style="color: green; font-weight: bold; padding: 10px; background-color: lightgreen; border: 1px solid darkgreen; border-radius: 5px; margin-top: 10px;">
                    {{ session('success') }}
                </div>
            @endif

        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 LAURENCE AGENCY SERVICES. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
