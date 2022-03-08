<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- displays site properly based on user's device -->

    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>Calculator - Angular JS</title>

    <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
    <style>
        .attribution {
            font-size: 11px;
            text-align: center;
        }

        .attribution a {
            color: hsl(228, 45%, 44%);
        }
    </style>
</head>
<body>

    @yield('content')

    <div class="attribution" style="margin-top: 2rem;">
        Interview Question Designed by <a href="https://outliant.com" target="_blank">Outliant</a>.
        Coded by <a href="#">Your Name Here</a>.
    </div>
</body>
</html>
