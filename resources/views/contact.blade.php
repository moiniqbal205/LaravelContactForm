<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito';
            }

            i {
                vertical-align: middle;
            }

            ul {
                margin: 0;
                padding: 0;
            }

            li {
                list-style: none;
                font-size: 10px;
            }
        </style>

        <!-- Material Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
        <div id="contact" class="container bg-grey">
            <h2 class="text-center p-4">CONTACT</h2>
            <div class="row">
                <div class="col-sm-5">
                    <p>We'll get back to you within 24 hours.</p>
                    <p><i class="material-icons">place</i> Melbourne, AU</p>
                    <p><i class="material-icons">local_phone</i> +61 404040404</p>
                    <p><i class="material-icons">email</i> myemail@dev.com</p>
                </div>
                <div class="col-sm-7 slideanim">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                    <form action="submit" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                            </div>
                            <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email">
                            </div>
                        </div>
                        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                            <button class="btn btn-primary pull-right col-sm-12" type="submit">Submit enquiry</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>