<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="api-token" content="lkjhADsi7lhd8igFsuHhjlsh5dGskFas86asas">


        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{ asset('fonts/nunito/nunito.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .flex-column {
                flex-direction: column;
            }
            .position-ref {
                position: relative;
            }

            .top-10 {
                margin-top: 10%;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <script defer src="{{ asset('js/common.js') }}"></script>
        <script defer src="{{ asset('js/api-calls.js') }}"></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Laravel 7 / Fetch tests
                </div>

                <div class="flex-center flex-column">

                    <ul>
                        <li><a href="{{ route('tags.destroy', 0) }}">Delete</a></li>
                        <li><a href="{{ route('tags.index') }}">Get</a></li>
                        <li><a href="{{ route('tags.store') }}">Post</a></li>
                        <li><a href="{{ route('tags.update', 0) }}">Put</a></li>
                    </ul>
                </div>
            </div>
        </div>

        @include('crud-forms')
    </body>
</html>