<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->

        
        <link href="{{asset(mix('css/app.css'))}}" rel="stylesheet" type="text/css">
        

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
                <div class="top-right links">
                    
                       
                </div>
            

            <div class="content">
                <div class="test">
                    Laratest
                </div>
            <h1 class="titre">Un titre</h1>
              
            </div>
        </div>
    </body>
    <script src="{{ asset(mix('js/app.js')) }}" ></script>
</html>
