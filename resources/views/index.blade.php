<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('src/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('src/css/fontawesome.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('src/css/bootstrap-icon/bootstrap-icons.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('src/css/signin.css') }}"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"> --}}
    <title>{{ $title }}</title>
    <style>
        .floating-message {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 10;
        }

        #btn-login {
            display: none;
        }

    </style>
    @stack('style')
</head>

<body>
    @if ($title !== 'Dashboard')
        @include('navbar')
    @else
        @include('dashbar')
    @endif
    <div class="row justify-content-center mt-3 floating-message">
        <div class="col-6 m-auto">
            <div class="alert fade show" role="alert">
                <strong id="alert-message"></strong>
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @yield('container')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('src/js/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('src/js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('src/js/bootstrap/bootstrap.min.js') }}"></script>
    <script>
        const alertMessage = document.getElementById('alert-message');
        const noficication = @json(session()->has('notificationMessage') ? session('notificationMessage') : '');
        const btnLogin = document.getElementById('btn-login');
        // const btnTogglePassword = document.querySelector('.toogle-password');

        $(document).ready(function() {
            if (noficication != '') {
                showAllert(noficication, 'success');
            }

            if (alertMessage.style.display !== "none") {
                setTimeout(() => {
                    $('.floating-message').fadeOut('slow');
                }, 5000);
            }

            if (document.title !== 'Login') {
                btnLogin.style.display = 'inline-block';
            }


        });

        $(".alert button.close").click(function(e) {
            $(this).parent().fadeOut('slow');
        });

        function showAllert(message, type) {
            alertMessage.innerHTML = message;
            // $('.floating-message').show();
            if (type === 'success') {
                $('.alert').toggleClass('alert-success');
            }
            if (type === 'danger') {
                $('.alert').toggleClass('alert-danger');
            }
            $('.floating-message').fadeIn('slow');
            $('.alert').alert();
        }

        function tooglePassword(e, formPassword) {
            e.target.classList.toggle("bi-eye-slash");
            let eye = e.target.classList.toggle("bi-eye");
            if (eye) {
                formPassword.type = 'text';
            } else {
                formPassword.type = 'password';
            }
        }
    </script>
    @stack('scripts')
</body>

</html>
