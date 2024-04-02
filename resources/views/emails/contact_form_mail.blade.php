<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        h2 {
            color: #333;
        }

        p {
            margin-bottom: 15px;
        }

        strong {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Contact Form Submission</h2>
        <p>Dear Website Owner,</p>
        <p>A new contact form submission has been received. Here are the details:</p>
        <p><strong>Name:</strong> {{ $formData['full_name'] }}</p>
        <p><strong>Email:</strong> {{ $formData['email'] }}</p>
        <p><strong>Message:</strong> {{ $formData['message'] }}</p>
        <p>Thank you for your attention.</p>
        <p>Sincerely,<br> LAURENCE AGENCY</p>
    </div>
</body>

</html>
