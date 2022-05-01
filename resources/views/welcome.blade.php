<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('app_name') }}</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arial">
        <style>
            body {
                font-family: "Arial", sans-serif;
            }

            .center {
                margin-top: 20%;
                text-align: center;
            }
            .bg-gradiant {
                background: -webkit-gradient(linear, left top, right top, color-stop(0%,#87e0fd), color-stop(40%,#53cbf1), color-stop(100%,#05abe0));
            }

        .btn_individual {
                text-decoration: none;
                color: white;
                padding: 10px;
                border-radius: 50px;
                background: linear-gradient(to bottom right, #4294E3, #8F12FD);
            }
            .btn_organization {
                text-decoration: none;
                color: white;
                padding: 10px;
                border-radius: 50px;
                background: linear-gradient(to bottom right, #c23aef, #8F12FD);
            }
        </style>
    </head>
    <body class="bg-gradiant">
        <div class="center">
            <a href="{{route('individual')}}" class="btn_individual">Individual</a> OR <a href="{{route('organization')}}" class="btn_organization">Organization</a>
        </div>
    </body>
</html>
