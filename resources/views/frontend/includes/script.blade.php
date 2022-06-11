
    <!-- JS ============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('frontend') }}/assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- jQuery JS -->
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend') }}/assets/js/vendor/bootstrap.min.js"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <script src="{{ asset('frontend') }}/assets/js/plugins/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>

{{-- toastr --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- toastr --}}
    <script type="text/javascript">
    @if (Session::has('success'))
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
       toastr.info('{{Session::get('success')}}');
    @endif
    @if (Session::has('error'))
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
       toastr.error('{{Session::get('error')}}');
    @endif
    </script>




