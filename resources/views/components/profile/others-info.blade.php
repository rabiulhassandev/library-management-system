@if (Laravel\Fortify\Features::canUpdateProfileInformation())
<div>
    <h3>Profile Information</h3>
    <p>Update your account's profile information and email address.</p>
    <hr>
</div>
<div class="content">
    <form
        action="{{ route('admin.user.setting-other-info-update', $user->id) }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group pt-1 pb-1">
                    <label for="phone" class="font-black">phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone"
                        value="{{old('phone')??$user->phone }}">
                    @error('phone')
                    <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pt-1 pb-1">
                    <label for="nid_or_birth_no" class="font-black">NID/Birth C. No.</label>
                    <input type="text" class="form-control" name="nid_or_birth_no" id="nid_or_birth_no" placeholder="Enter NID/Birth C. No."
                        value="{{$user->nid_or_birth_no}}">
                    @error('nid_or_birth_no')
                    <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pt-1 pb-1">
                    <label for="profession" class="font-black">profession</label>
                    <input type="text" class="form-control" name="profession" id="profession" placeholder="Enter profession No"
                        value="{{$user->profession}}">
                    @error('profession')
                    <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pt-1 pb-1">
                    <label for="institute_workplace" class="font-black">Institute/Workplace</label>
                    <input type="text" class="form-control" name="institute_workplace" id="institute_workplace" placeholder="Enter Institute Workplace Name"
                        value="{{$user->institute_workplace}}">
                    @error('institute_workplace')
                    <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group pt-1 pb-1">
                    <label for="bio" class="font-black">Bio</label>
                    <input type="text" class="form-control" name="bio" id="bio" placeholder="Enter Bio"
                        value="{{$user->bio}}">
                    @error('bio')
                    <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group pt-1 pb-1">
                    <label for="address" class="font-black">Address</label>
                    <textarea name="address" id="address" class="form-control" style="min-height: 100px;"  placeholder="Enter Address">{{$user->address}}</textarea>
                    @error('address')
                    <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            {{-- Social Information --}}


            <div class="col-12 pb-3">
                <h5 class="my-3 border-bottom">Social Information</h5>
            </div>


            <div class="col-md-6">
                <div class="form-group pt-1 pb-1">
                    <label for="website" class="font-black">Website</label>
                    <input type="url" class="form-control" name="website" id="website" placeholder="https://website.com"
                        value="{{ $user->website }}">
                    @error('website')
                    <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pt-1 pb-1">
                    <label for="facebook" class="font-black">Facebook</label>
                    <input type="url" class="form-control" name="facebook" id="facebook" placeholder="https://facebook.com/username"
                        value="{{$user->facebook}}">
                    @error('facebook')
                    <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pt-1 pb-1">
                    <label for="twitter" class="font-black">Twitter</label>
                    <input type="url" class="form-control" name="twitter" id="twitter" placeholder="https://twitter.com/username"
                        value="{{$user->twitter}}">
                    @error('twitter')
                    <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pt-1 pb-1">
                    <label for="instagram" class="font-black">instagram</label>
                    <input type="url" class="form-control" name="instagram" id="instagram" placeholder="https://instagram.com/username"
                        value="{{$user->instagram}}">
                    @error('instagram')
                    <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pt-1 pb-1">
                    <label for="linkedin" class="font-black">LinkedIn</label>
                    <input type="url" class="form-control" name="linkedin" id="linkedin" placeholder="https://linkedin.com/in/username"
                        value="{{$user->linkedin}}">
                    @error('linkedin')
                    <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pt-1 pb-1">
                    <label for="skype" class="font-black">Skype</label>
                    <input type="text" class="form-control" name="skype" id="skype" placeholder="Skype ID"
                        value="{{$user->skype}}">
                    @error('website')
                    <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group pt-1 pb-1">
                    <label for="github" class="font-black">GitHub</label>
                    <input type="url" class="form-control" name="github" id="github" placeholder="https://github.com/username"
                        value="{{$user->github}}">
                    @error('website')
                    <p class="text-danger pt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 ">
                <div class="form-group pt-1 pb-1">
                    <button type="submit" class="btn btn-primary btn-round btn-lg">Submit</button>
                </div>
            </div>
        </div>

    </form>
</div>

@endif
@push('extra-scripts')
<script src="{{ admin_asset('js/img-src.min.js') }}"></script>
@endpush
