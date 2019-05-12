<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Binary Tree</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            * {
                box-sizing: border-box;
            }

            html, body {
                background-color: #fff;
                color: #000000;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                font-size: 10px;
                margin: 0;
            }

            .wrapper {
                min-width: 3500px;
            }

            .content {
                text-align: center;
            }

            .level {
                width: 50%;
                float: left;
                margin: 0;
                padding: 10px 0;
            }

            .level.child-right {
                float: right;
            }

            .node {
                position: relative;
                width: 90%;
                margin-left: 5%;
                border: 1px solid #227dc7;
                border-radius: 5px;
            }

            .node::before {
                content: '';
                display: block;
                position: absolute;
                height: 10px;
                width: 1px;
                background-color: #227dc7;
                left: 50%;
                top: -11px;
            }

            .level.child-right > .node {
                border-color: #2a9055;
            }

            .level.child-right > .node::before {
                background-color: #2a9055;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>
