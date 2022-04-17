<x-front-layout>
    <section id="book_request_page">
        <div class="container py-5">
            <div class="card shadow border-0" style="border-radius: 0px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 text-center pt-3">
                            <img src="https://s3-ap-southeast-1.amazonaws.com/rokomari110/ProductNew20190903/130X186/Podartho_Bichitra_Physics_1st_O_2nd_Part-Ajoy_Sarkar-910de-72178.png" style="max-width: 150px;">
                            <h4 class="text-primary pt-2"><b>সাহিত্য কলোনি</b></h4>
                            <button class="btn btn-success btn-sm">Available</button>
                        </div>
                        <div class="col-md-9">
                            <form action="#" method="post">
                                <div class="row">
                                    @csrf
                                    <div class="col-md-12 form-group pt-3">
                                        <label for="book_duration"><b>কত দিনের জন্য বইটি নিতে চান?</b></label>
                                        <input type="text" name="book_duration" id="book_duration" class="form-control" placeholder="কত দিনের জন্য বইটি নিতে চান..?" required>
                                    </div>
                                    <div class="col-md-6 form-group pt-3">
                                        <label for="book_address"><b>ঠিকানাঃ</b></label>
                                        <textarea name="book_address" id="book_address" class="form-control" style="min-height: 120px" placeholder="ঠিকানা লিখুন..." required></textarea>
                                    </div>
                                    <div class="col-md-6 form-group pt-3">
                                        <label for="book_delivery_address"><b>ডেলিভারি ঠিকানাঃ</b></label>
                                        <textarea name="book_delivery_address" id="book_delivery_address" class="form-control" style="min-height: 120px" placeholder="ডেলিভারি ঠিকানা লিখুন..." required></textarea>
                                    </div>
                                    <div class="col-12 pt-3">
                                        <button class="default-btn">সাবমিট <i class='bx bx-save' ></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-front-layout>
