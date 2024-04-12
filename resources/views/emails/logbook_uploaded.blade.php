<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Logbook Uploaded</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f8f8;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 150px;
        }

        h1 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #1c4966;
        }

        p {
            line-height: 1.6;
            margin-bottom: 15px;
        }

        a {
            color: #1c4966;
            text-decoration: none;
            font-weight: 600;
        }

        footer {
            background-color: #1c4966;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: 40px;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="images/WEBLOGO.png" alt="LAURENCE AGENCY SERVICES">
        </div>
        <h1>New Logbook Uploaded</h1>
        <p>Hi,</p>
        <p>A new logbook has been uploaded to the LAURENCE AGENCY SERVICES website. Here are the details:</p>
        <p>User Name: {{ $userName }}</p>
        <p>User Email: {{ $userEmail }}</p>
        <p>Filename: {{ $fileName }}</p>
        <p>Download logbook <a href="{{ route('logbook.download', $fileName) }}">here</a>.</p>
        <p>Please review the logbook and assign it to the appropriate team member for processing. Ensure that all
            necessary checks and verifications are carried out before initiating the transfer process.</p>
        <p>If you have any questions or need further assistance, feel free to reach out to the support team.</p>
        <p>Regards,<br>LAURENCE AGENCY SERVICES</p>
    </div>
    <footer>
        <p>&copy; {{ date('Y') }} LAURENCE AGENCY SERVICES. All rights reserved.</p>
    </footer>
</body>

</html>
