<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Phones List</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
            table, th, td {
            border: 1px solid black;
            }

        </style>
    </head>
    <body>
        <div class="container">
        <div class="row">
            <h1 style="margin-top: 50px">Phone List</h1>
        </div>
        <div class="row" style="margin-bottom : 10px">
        <form style="display: inherit;" action="customers" method="get">
            <div class="col-md-3">
                <select name="countryId">
                    @foreach($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-3">
                <select name="validPhone">
                    <option value="1">valid</option>
                    <option value="0">in-valid</option>
                </select>
            </div>

            <div class="col-md-3">
                <button class="btn btn-outline-dark">filter</button>
            </div>
        </form>


        </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <table style="width:100%">
                        <thead>
                            
                        </thead>
                        <tbody>
                            @foreach($customers as $customer)
                            <tr>
                                <td>{{$customer->country->name}}</td>
                                <td>{{$customer->isPhoneValid ? "OK" : "NOK"}}</td>
                                <td>{{$customer->country->code}}</td>
                                <td>{{$customer->phone}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>
    function filter(){}
</script>