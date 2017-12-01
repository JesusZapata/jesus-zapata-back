<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cube Summation Upload</title>

        <!-- Css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-6">
                    <div class="card" style="margin-top: 50px;">
                        <div class="card-header">
                            Cube Summation Upload
                        </div>
                        <div class="card-body">
                            <form action="upload" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <h4 class="alert-heading">Whoops!</h4>
                                        <p>There were some problems with your input.</p>
                                        <hr>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <div class="form-group row">
                                    <label for="inputFile" class="col-sm-2 col-form-label">File</label>
                                    <div class="col-sm-10">
                                        <input name="cube_summation" type="file" required accept="text/plain" class="form-control-file" id="inputFile">
                                        <small id="fileHelp" class="form-text text-muted">
                                            Upload the <span class="font-italic">.txt</span> file to process, the following <a href="{{ asset('files/cube_summation.txt') }}" target="_blank">file</a> serves as an example
                                        </small>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Script -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>
