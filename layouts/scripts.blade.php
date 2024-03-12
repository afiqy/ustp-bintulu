<script src="{{ mix('js/vendor.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/js/select2.full.min.js"></script>
@yield('page-scripts')
<script type="text/javascript">
    $(".select2").select2({
        allowClear: false,
        width: "100%",
    });
</script>
