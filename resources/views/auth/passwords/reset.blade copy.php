<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Preschool - Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Style CSS Template -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicon.png') }}">
    <link href="../../../../css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/view.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/c3-chart/c3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/datetimepicker/css/tempusdominus-bootstrap-4.min.css') }}">

</head>

<body>
    <div class="main-wrapper">
        <div class="account-page">
            <div class="container">
            <h3 class="account-title text-white">Forgot Password</h3>
                <div class="account-box">
                    <div class="account-wrapper">
                        <div class="account-logo">
                            <a href="index.html"><img src="assets/img/logo.png" alt="school-admin"></a>
                        </div>
                        <form>
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group text-center custom-mt-form-group">
                                <button class="btn btn-primary btn-block account-btn" type="submit">Reset Password</button>
                            </div>
                            <div class="text-center">
                                <a href="login.html">Back to Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript External Template -->
    <script src="{{ asset('admin/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('admin/assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.fullcalendar.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/apexcharts.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart-data.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/datetimepicker/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>

    <!-- JavaScript Database External Template -->
    <script src="{{ asset('admin/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dataTables.bootstrap4.min.js') }}"></script>

</body>
</html>