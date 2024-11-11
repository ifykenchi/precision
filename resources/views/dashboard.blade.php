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
        <aside id="sidebar">
            <div class="d-flex">
                <button id="toggle-btn" type="button">
                    <i class="bi bi-printer-fill"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">PRINTx</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-graph-up"></i>
                        <span>Reports</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-people-fill"></i>
                        <span>Staff</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-box-seam"></i>
                        <span>Products</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-bounding-box"></i>
                        <span>Services</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-journal-text"></i>
                        <span>Transactions</span>
                    </a>
                </li>
            </ul>

            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Signout</span>
                </a>
            </div>
        </aside>

        <div class="main p-3">
            <div class="header m-3 d-flex justify-content-between">
                <div class="text-center">
                    <h1>Welcome!</h1>
                </div>
                <div class="d-flex justify-content-between w-50 gap-3">
                    <div class="box">
                        <i class="bi bi-search"></i>
                        <input type="text" placeholder="Search">
                    </div>
                    <span>
                        <i class="bi bi-gear fs-3 header-icon"></i>
                    </span>
                    <span>
                        <i class="bi bi-bell fs-3 header-icon"></i>
                    </span>
                    <div class="header-profile d-flex gap-2">
                        <div class="blank-circle">
                        </div>
                        <h3>
                            John doe
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row mt-5 mx-2">
                <div class="col-sm-4">
                    <div class="card shadow-sm card-small">
                        <div class="card-body">
                            <h5 class="card-title text-center fw-semibold">Lorem</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card shadow-sm card-small">
                        <div class="card-body">
                            <h5 class="card-title text-center fw-semibold">Lorem</h5>
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
    </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
