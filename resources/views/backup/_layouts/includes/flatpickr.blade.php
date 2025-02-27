@push('styles_vendor')
    <link rel="stylesheet" href="{{ asset(config('common.path_template') . 'assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset(config('common.path_template') . 'assets/libs/@simonwep/pickr/themes/nano.min.css') }}">
@endpush

@push('scripts_vendor')
    <script src="{{ asset(config('common.path_template') . 'assets/libs/flatpickr/flatpickr.min.js') }}"></script>
@endpush

@push('scripts')
    <script>
        // flatpickr(".flatpickr", {
        //     default_date_format: "{{ $setting_system['default_date_format'] }}",
        //     defaultDate: 'null',
        //     // static: true,
        //     // weekNumbers: true,
        // });
        $(".flatpickr").flatpickr({
            dateFormat: "{{ $setting_system['default_date_format'] }}",
            defaultDate: 'null',
            // enableTime: true,
            // weekNumbers: true,
            // altInput: true,
            // altFormat: "F j, Y - h:i",
            // time_24hr: true
        });
    </script>
@endpush
