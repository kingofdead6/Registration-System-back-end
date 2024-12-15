<!DOCTYPE html>
<html>
<head>
    <title>GDG Acceptance Email</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ebe1e9;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            background-color: #ebe1e1;
            color: #000;
            padding: 30px 20px;
            border-radius: 10px 10px 0 0;
        }
        .header h1 {
            margin: 0;
            font-size: 30px;
            font-weight: bold;
        }
        .content {
            padding: 20px;
            color: #333333;
        }
        .content h2 {
            font-size: 22px;
            color: #2c3e50;
            margin-bottom: 10px;
        }
        .content p {
            margin: 15px 0;
            font-size: 16px;
            color: #555555;
        }
        .content .highlight {
            font-size: 18px;
            color: #4285f4;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding: 15px 10px;
            background-color: #f1f3f4;
            border-radius: 0 0 10px 10px;
            font-size: 14px;
            color: #666666;
        }
        .footer a {
            color: #4285f4;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Welcome to GDG!</h1>
    </div>
    <div class="content">
        <h2>Dear {{ $name }},</h2>
        <p class="highlight">Congratulations on being selected as a <strong>[Role: Member/Leader]</strong> for our GDG (Google Developer Group) events!</p>
        <p>We are thrilled to have you as part of our team. Your enthusiasm and expertise will make a great impact on our initiatives and projects. Together, we aim to create an inspiring environment for innovation and collaboration.</p>
        <p>Further details about your role and the upcoming activities will be shared shortly. Stay tuned for updates!</p>
        <p>If you have any questions, feel free to reach out to us at <a href="mailto:gdg@example.com">gdg@example.com</a>.</p>
    </div>
    <div class="footer">
        <p>Looking forward to seeing you at the events!</p>
        <p>&copy; 2024 GDG Events | <a href="http://gdg-events.com">Visit Our Website</a></p>
    </div>
</div>
</body>
</html>
