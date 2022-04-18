
<!DOCTYPE html>
<html lang="bn">
    <head>
        {{-- Styles --}}
        <x-front.styles/>
        {{-- Styles --}}
    </head>
    <body>

        <!-- header end -->
        <x-front.header/>
        <!-- header end-->

        <div class="wapper">
            {{ $slot }}
        </div>

        <!-- Start Footer Section -->
        <x-front.footer/>
        <!-- End Footer Section -->


        {{-- Scripts --}}
        <x-front.scripts/>
        {{-- Scripts --}}
        <x-toster-session />
    </body>
</html>
