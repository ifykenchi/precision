<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Precision</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <x-sidebar></x-sidebar>

        <div class="main p-3">
            <x-header>
                <x-slot:heading>
                    Welcome!
                </x-slot:heading>
            </x-header>

            <div class="row mt-5 mx-2">
                <div class="col-sm-8">
                    <div class="d-flex justify-content-between gap-4 mb-5">
                        <div class="card w-100 shadow-sm card-small">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-semibold">Lorem</h5>
                            </div>
                        </div>
                        <div class="card w-100 shadow-sm card-small">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-semibold">Lorem</h5>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2>Dorem ipsum</h2>
                        <div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Ipsum</th>
                                        <th scope="col">Dorem</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Sales</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ipsum</td>
                                        <td>Dorem</td>
                                        <td>Stock</td>
                                        <td>Sales</td>
                                    </tr>
                                    <tr>
                                        <td>Ipsum</td>
                                        <td>Dorem</td>
                                        <td>Stock</td>
                                        <td>Sales</td>
                                    </tr>
                                    <tr>
                                        <td>Ipsum</td>
                                        <td>Dorem</td>
                                        <td>Stock</td>
                                        <td>Sales</td>
                                    </tr>
                                    <tr>
                                        <td>Ipsum</td>
                                        <td>Dorem</td>
                                        <td>Stock</td>
                                        <td>Sales</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card shadow-sm card-long">
                        <div class="card-body">
                            <h5 class="card-title text-center fw-semibold">Lorem</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
