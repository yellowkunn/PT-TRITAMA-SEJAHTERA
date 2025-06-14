<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.css">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
    <script src="{{ asset('asset_index/bootstrap/bootstrap.min.css') }}"></script>
    <script src="{{ asset('bootstrap-5.3.2-dist/js/bootstrap.js') }}"></script>
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8f9fa;
        color: #333;
    }

    .container {
        max-width: 800px;
        margin: auto;
        padding: 40px 20px;
        background: #fff;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        border-radius: 12px;
    }

    h3 {
        font-size: 1.75rem;
        margin-bottom: 25px;
        text-align: center;
    }

    .form-group, .input-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-weight: 600;
        font-size: 15px;
    }

    input[type="text"],
    input[type="number"],
    select,
    textarea {
        width: 100%;
        padding: 10px 14px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 14px;
        transition: border-color 0.3s ease;
    }

    input:focus,
    select:focus,
    textarea:focus {
        outline: none;
        border-color: #007bff;
    }

    textarea {
        resize: vertical;
    }

    .btn {
        display: inline-block;
        /* background-color: #007bff; */
        color: #fff;
        border: none;
        padding: 10px 16px;
        font-size: 14px;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-top: 10px;
    }

    .alert {
        padding: 10px 16px;
        border-radius: 8px;
        margin-bottom: 15px;
        font-size: 14px;
    }

    .alert-success {
        background-color: #d1e7dd;
        color: #0f5132;
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #842029;
    }

    #preview {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 15px;
    }

    .preview-box {
        position: relative;
        width: 120px;
        height: 120px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
    }

    .preview-box:hover {
        transform: scale(1.05);
    }

    .preview-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .remove-btn {
        position: absolute;
        top: 5px;
        right: 5px;
        background-color: rgba(255, 0, 0, 0.75);
        border: none;
        color: white;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        font-size: 16px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.2s ease;
    }

    .remove-btn:hover {
        background-color: rgba(255, 0, 0, 0.95);
    }
</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            {{-- @include('components.navbar') --}}
            <div id="content">

                <!-- Topbar -->
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid text-center"
                    style="margin: 0; padding: 0; background-color: rgba(255, 255, 255, 0.4); background-image: url('{{ asset('images/jejakkaki.png') }}'); background-size: cover;">
                    @yield('container')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Tritama 2025</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <strong>^</strong>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <!-- Bootstrap core JavaScript-->

    <script src="{{ asset('asset/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap-5.3.2-dist/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('asset/sb-admin-2.min.js') }}"></script>

</body>

</html>