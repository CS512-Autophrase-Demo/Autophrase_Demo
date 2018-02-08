<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Qianyang Peng">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <link href="{{asset('css/sticky-footer-navbar.css')}}" rel="stylesheet">
    <title>AutoPhrase</title>
</head>

<body>
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Autophrase</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Text
                        <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/upload">Upload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="/">About</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main role="main" class="container">
        <div class="row">
            <form class="form-horizontal" action="/text" method="POST">
                <fieldset>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div id="legend" class="">
                        <legend class="">Input your text here</legend>
                    </div>


                    <div class="control-group">

                        <!-- Select Basic -->
                        <label class="control-label">Language</label>
                        <div class="controls">
                            <select class="input-xlarge" name="lang">
                                <option>Auto Detect</option>
                                <option>English</option>
                                <option>Chinese</option>
                                <option>Japanese</option>
                            </select>
                        </div>

                    </div>
                    <div class="control-group">

                        <!-- Textarea -->
                        <label class="control-label">Text</label>
                        <div class="controls">
                            <div class="textarea">
                                <textarea type="" class="" rows="10" cols="100" name="input"> </textarea>
                            </div>
                        </div>
                    </div>



                    <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
        @if( ! empty($data))
        <div class="row">
            <p>Your Chosen Language: {{$data['lang']}}</p><br>
            <p>Your Input: {{$data['input']}}</p>
        </div>
        @endif
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Autophrae Demo v0.0</span>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>