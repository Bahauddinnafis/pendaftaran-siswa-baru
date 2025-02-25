<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register Calon Siswa</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/sb-admin-2.min.css') !!}">

</head>

<body class="bg-gradient-primary">

    <div class="container">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                    </div>
                                    <form action="{{ route('register-user') }}" method="post" class="user">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="nama_lengkap" class="form-control form-control-user"
                                                id="exampleInputNama" placeholder="Masukkan Nama Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" placeholder="Masukkan Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="no_telp" class="form-control form-control-user"
                                                id="exampleInputno_telp" placeholder="Masukkan Nomor Telepom">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="status_akun" class="form-control form-control-user"
                                                id="exampleInputstatus_akun" value="0" placeholder="Status Akun" hidden>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Total Pembayaran:</label>
                                            <input type="number" name="total_price" id="exampleInputtotal_price" value="200.000" readonly>
                                        </div>
                                        <div class="form-group">
                                            <input type="status" name="status" class="form-control form-control-user"
                                                id="status" value="1" placeholder="Status" hidden>
                                        </div>
                                        <input type="submit" value="Register" class="btn btn-primary btn-user btn-block">
                                        <hr>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{!! asset('assets/vendor/jquery/jquery.min.js') !!}"></script>
    <script src="{!! asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{!! asset('assets/vendor/jquery-easing/jquery.easing.min.js') !!}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{!! asset('assets/js/sb-admin-2.min.js') !!}"></script>

</body>

</html>