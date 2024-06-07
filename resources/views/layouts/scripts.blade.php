
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{ asset('vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{ asset('vendor/quill/quill.min.js')}}"></script>
  <!-- <script src="{{ asset('vendor/simple-datatables/simple-datatables.js')}}"></script> -->
  <script src="{{ asset('vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js')}}"></script>

 
  <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  
  

    
  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js')}}"></script>
  @livewireScripts
  <script>
    $(window).ready(function(){

      $.ajaxSetup({
    header: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  } );
    })
</script>
<script src="//cdn.jsdeLivr.net/npm/sweetalert2@11"></script> 
@yield('scripts')
<x-livewire-alert::scripts/>
<x-livewire-alert::flash/>



