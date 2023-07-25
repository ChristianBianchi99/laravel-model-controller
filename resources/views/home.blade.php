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
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-6 col-md-4 col-lg-3 my-4">
                    <a href="{{Route('comic', $comic->id)}}">
                        <div class="card h-100">
                            <div class="poster w-100">
                                <img class="w-100" src="{{$comic->thumb}}" alt="{{$comic->title}}">
                            </div>
                            <div class="details">
                                <h5>
                                    {{$comic->title}}
                                </h5>
                                <ul>
                                    <li>
                                        <strong>
                                            Series:
                                        </strong>
                                        {{$comic->series}}
                                    </li>
                                    <li>
                                        <strong>
                                            Price:
                                        </strong>
                                        {{$comic->price}}
                                    </li>
                                    <li>
                                        <strong>
                                            Release Date:
                                        </strong>
                                        {{$comic->sale_date}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>