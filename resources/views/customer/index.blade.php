<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
                /* height: 100vh; */
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
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
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    DATA CUSTOMER
                    <div><a href="{{url('/')}}">back</a></div>
                </div>
                <table style="margin:auto;width:100%;padding:5rem;">
                    <thead>
                        <th>#</th>
                        <th>CsNumber</th>
                        <th>name</th>
                        <th>phone</th>
                        <th>address1</th>
                        <th>city</th>
                        <th>credit limit</th>
                        <th>aksi</th>
                    </thead>
                    <tbody>
                        @foreach($customer as $cs)
                        <tr>
                            <td>{{$loop -> iteration}}</td>
                            <td>{{$cs->customerNumber}}</td>
                            <td>{{$cs->customerName}}</td>
                            <td>{{$cs->phone}}</td>
                            <td>{{$cs->addressLine1}}</td>
                            <td>{{$cs->city}}</td>
                            <td>{{$cs->creditLimit}}</td>
                            <td>
                                <a href="#">edit</a>
                                <a href="#">delete</a>
                            </td>
                          @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
