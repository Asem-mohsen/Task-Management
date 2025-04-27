<script>var hostUrl = "assets/";</script>

<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

<!-- Toastr Notification -->
<script src="{{asset('assets/js/toastr.min.js')}}"></script>

@include('layout.sections.scripts.toastr')

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

@yield('page-scripts')
