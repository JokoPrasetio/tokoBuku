<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ $title }}</title>

    {{-- Website icon --}}
    <link rel="icon" type="image/x-icon" href="/assets/img/LOGO_MEDIALYS_ICON.png" style="height: 7rem" />

    {{-- Important styles --}}
    <link rel="stylesheet" href="/css/datatables.css" />
    <link rel="stylesheet" href="/css/styles.css" />
    <link rel="stylesheet" href="/css/dropdowns.css" />

    {{-- Important scripts --}}
    <script src="/js/scripts.js"></script>

    {{-- Styles & Scripts --}}
        {{-- Development --}}
        {{-- Styles --}}
        <link rel="stylesheet" href="/main/bootstrap-table@1.21.1/bootstrap-table.min.css">
        <link rel="stylesheet" href="/main/jquery-treegrid@0.3.0/jquery.treegrid.css">
        <link rel="stylesheet" href="/main/bootstrap-table@1.21.1/bootstrap-table-group-by.min.css">
        <link rel="stylesheet" href="/main/bootstrap-select@1.14.0-beta2/bootstrap-select.min.css">
        <link rel="stylesheet" href="/main/daterangepicker/daterangepicker.css" />
        <link rel="stylesheet" href="/main/selectize.js@0.15.2/selectize.bootstrap5.min.css" />
        <link rel="stylesheet" href="/main/spin.js/spin.css">
        

        {{-- Icon Scrips --}}
        <script src="/main/feather-icons@4.29.0/feather.min.js"></script>
        <script src="/main/font-awesome@6.3.0/all.min.js"></script>

        {{-- Preloaded scripts --}}
        <script src="/main/jquery/jquery-3.6.0.min.js"></script>
        <script src="/main/bootstrap@5.1.3/bootstrap.bundle.min.js"></script>
        <script src="/main/moment@2.29.4/moment.js"></script>
        <script src="/main/bootstrap-table@1.21.1/bootstrap-table.min.js"></script>
        <script src="/main/bootstrap-table@1.21.1/bootstrap-table-treegrid.min.js"></script>
        <script src="/main/bootstrap-table@1.21.1/bootstrap-table-cookie.min.js"></script>
        <script src="/main/bootstrap-table@1.21.1/bootstrap-table-group-by.min.js"></script>
        <script src="/main/jquery-treegrid@0.3.0/jquery.treegrid.min.js"></script>
        <script src="/main/bootstrap-select@1.14.0-beta2/bootstrap-select.min.js"></script>
        <script src="/main/currency.js@2.0.4/currency.min.js"></script>
        <script src="/main/jsprintmanager@5.0.2/JSPrintManager.js"></script>
        <script src="/main/daterangepicker/daterangepicker.js"></script>
        <script src="/main/moment-timezone@0.5.34/moment-timezone.min.js"></script>
        <script src="/main/selectize.js@0.15.2/selectize.min.js"></script>
        <script src="/main/spin.js/spin.umd.js"></script>

</head>

{{-- Important Scripts --}}
<script src="/js/datepicker.js"></script>

{{-- Custom styles --}}
<link rel="stylesheet" href="/css/custom_styles.css" />
<link rel="stylesheet" href="/css/custom_selectize.css" />

<body class="nav-fixed">
    @yield('body')
</body>


<script>
    const _APP_URL = {!! '"' . env('APP_URL') . '"' !!}
</script>

</html>
