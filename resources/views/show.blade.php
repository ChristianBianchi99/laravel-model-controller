<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <div class="row my-5 h-100">
            <div class="col-4 h-100">
                <div class="comic-poster">
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                </div>
            </div>
            <div class="col h-100">
                <div class="comic-details h-100">
                    <h3>
                        {{$comic->title}}
                    </h3>
                    <p>
                        {{$comic->description}}
                    </p>
                    <div class="autors">
                        <div class="artists">
                            <strong>
                                Artists:
                            </strong>
                            <p>
                                {{$comic->artists}}
                            </p>
                        </div>
                        <div class="writers">
                            <strong>
                                Writers:
                            </strong>
                            <p>
                                {{$comic->writers}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>