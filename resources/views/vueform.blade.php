<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta id="token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="col-md-4 col-lg-offset-4">
                <h1>Test Form</h1>
            </div>

            <div class="competition-form">
                <div class="col-md-12">
                    <div class="row">
                        <sample-form></sample-form>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src=" {{ mix('js/app.js') }}"></script>
</body>
</html>
