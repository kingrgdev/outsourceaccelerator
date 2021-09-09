<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>Richard Guevara | Full Stack Developer </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500;600&display=swap" rel="stylesheet">

        {{--  Font Awesome  --}}
        <script src="https://kit.fontawesome.com/df84973569.js" crossorigin="anonymous"></script>

        {{--  Stylesheets  --}}
        {{--  <link rel="stylesheet" href="{{ url('public/css/custom.css') }}">  --}}
        <link rel="stylesheet" href="{{ url('css/app.css') }}">
        <link rel="stylesheet" href="{{ url('js/app.js') }}">
    </head>
    <body>
        @include('layouts.header')

        <div class="body-background">
            <div class="main-content">
                <div class="row">
                    <div class="column">
                        <label>Data to enrich your <br>
                            <span class="blue">offshore business</span></label>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                 standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                  and scrambled it to make a type specimen book. </p>

                            <div class="btn-content-section">
                                <button class="btn btn--primary">Get Started</button>
                                <button class="btn btn--default blue">View recent leads</button>
                            </div>

                            
                    </div>
                    <div class="column">
                        
                    </div>
                </div>
                
            </div>
        </div>
        
    </body>
</html>
