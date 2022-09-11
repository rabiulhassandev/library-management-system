<x-front-layout>

    <section id="library_page">
        <div class="container py-5">
            <div class="row">
                @isset($collection)
                @if(count($collection) > 0)
                    @foreach ($collection as $library)
                        <div class="col-md-4 mt-3">
                            <div class="card border-0 rounded shadow overflow-hidden">
                                <img src="{{ image_url($library->library_image) }}" onerror="this.src='{{ front_asset('images/library.jpg') }}'" class="w-100">
                                <h4 class="pt-2 text-center"><a href="{{ route('home.library-details', $library->id) }}" class="p-2 m-0" style="text-decoration: none;">{{ $library->library_name }}</a></h4>
                            </div>
                        </div>
                    @endforeach
                @else
                <div class="py-5 text-center">
                    <i class='bx bx-file-find text-secondary' style="font-size: 50px"></i>
                    <h3 class="text-primary m-0">কোনো লাইব্রেরি খুজেঁ পাওয়া যায় নি।</h3>
                </div>
                @endif
                @endisset
            </div>

        </div>
    </section>

</x-front-layout>
