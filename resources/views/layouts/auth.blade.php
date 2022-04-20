<!doctype html>
<html lang="en">

<head>
    {{-- meta manager --}}
    <x-meta-manager />
    {{-- favicon --}}
    <x-favicon />
    {{-- style --}}
    <x-admin.styles />
</head>


<body class="authentication-bg" style="background: url('{{ front_asset('images/bg.jpg') }}'); background-size: cover;">
    <!-- vue page -->

    <div id="loading" style="display: none;">
        <div id="loading-center">
        </div>
    </div>

    <section class="sign-in-page">
        <div class="container p-0">
            <div class="row no-gutters height-self-center">
                <div class="col-sm-12 align-self-center page-content rounded">
                    <div class="row m-0">
                        <div class="col-sm-12 sign-in-page-data">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
{{-- scripts --}}
<x-admin.scripts />

<x-fb-live-chat />
<x-toster-session />
<x-delete />
<x-google-translate />
</body>

</html>
