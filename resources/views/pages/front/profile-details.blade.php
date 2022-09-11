<x-front-layout>
    <section id="profile_details_page">
        <div class="container py-5 mt-4">

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card border-0 overflow-hidden" style="border-radius: 10px;">
                        <div class="row">
                            <div class="col-md-5 px-0">
                                <img src="{{ image_url($item->image) }}" class="w-100">
                            </div>
                            <div class="col-md-7 d-flex" style="background: url({{ front_asset('images/card-bg.png') }}); background-size: cover; background-color: #e1e1e1;">
                                <div class="text-box py-5" style="margin: auto; max-width: 400px;">
                                    <div class="row rounded overflow-hidden" style="min-width: 320px;">
                                        <div class="col-3 py-3 text-center bg-primary text-white" style="background: #b7b7b7ab;">
                                            <i class='bx bx-user' style="font-size: 50px;"></i>
                                        </div>
                                        <div class="col-9 bg-dark text-white">
                                            <h4 class="mb-1 pt-3">{{ $item->name }}</h4>
                                            <small style="color: rgb(226, 223, 223);">{{ $item->designation }}</small>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="pt-5" style="font-size: 18px;">
                                            <p class="d-flex align-items-center">
                                                <b><i class="bx bx-envelope"></i> &nbsp; {{ $item->email }}</b>
                                            </p>
                                            <p class="d-flex align-items-center">
                                                <b><i class="bx bx-phone"></i> &nbsp; {{ $item->phone }}</b>
                                            </p>
                                            <p class="d-flex align-items-center">
                                                <b><i class='bx bx-location-plus' ></i> &nbsp; {{ $item->address }}</b>
                                            </p>
                                        </div>

                                        <div class="footer-social-icons">
                                            <a href="{{ $item->facebook }}" target="_blank" class="bg-primary text-white p-2 px-3 rounded" style="text-decoration: none; line-height: 40px;"><i class="bx bxl-facebook-circle"></i> Facebook</a>
                                            <a href="https://wa.me/{{ $item->whatsApp }}" target="_blank" class="bg-success text-white p-2 px-3 rounded" style="text-decoration: none; line-height: 40px;"><i class="bx bxl-whatsapp"></i> WhasApp</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-10 pt-5">
                        {!! $item->description !!}
                    </div>

                </div>
            </div>

        </div>
    </section>

    @push('extra-styles')
        <style>
            body{
                background-color: #f9f9f9 !important;
            }
        </style>
    @endpush
</x-front-layout>
