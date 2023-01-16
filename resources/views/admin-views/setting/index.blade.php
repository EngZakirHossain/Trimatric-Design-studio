@extends('layouts.back-end.app')
@section('css')

@endsection
@section('title')
    Site Setting
@endsection

@section('breadcrumb')
    Setting
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-4">
                    <form action="{{route('admin.setting.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                    <div class="mb-3">
                                        @php($name=\App\Model\Setting::where('key','name')->first()->value)
                                        <label for="example-email-input" class="form-label">Company Name</label>
                                        <input class="form-control" type="text" name="name" value="{{$name}}">
                                    </div>
                                    <div class="mb-3">
                                        @php($address=\App\Model\Setting::where('key','address')->first()->value)
                                        <label for="example-url-input" class="form-label">Company Address</label>
                                        <input class="form-control" type="text" name="address" value="{{$address}}">
                                    </div>
                                    <div class="mb-3">
                                        @php($email=\App\Model\Setting::where('key','email')->first()->value)
                                        <label for="example-url-input" class="form-label">Company Email</label>
                                        <input class="form-control" type="text" name="email" value="{{$email}}">
                                    </div>
                                    <div class="mb-3">
                                        @php($phone=\App\Model\Setting::where('key','phone')->first()->value)
                                        <label for="example-url-input" class="form-label">Company Phone</label>
                                        <input class="form-control" type="text" name="phone" value="{{$phone}}">
                                    </div>
                                    <div class="mb-3">
                                        @php($logo=\App\Model\Setting::where('key','logo')->first()->value)
                                        <img id="addImg" style="height: 100px;width: 200px" class="img-vertical-150" src="{{asset('storage/company')}}/{{$logo}}" onerror="this.src='{{asset('backend/assets/images/placeholder.jpg')}}'">

                                        <input type="file" name="logo" class="form-control" placeholder="logo" onchange="readURL(this);">
                                        <label for="addImg">Company logo(Recommended: 100*200 px)<span class="text-danger">*</span></label>
                                        @error ('logo')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    @php($fb_link=\App\Model\Setting::where('key','fb_link')->first()->value)
                                    <label for="example-url-input" class="form-label">Facebook link</label>
                                    <input class="form-control" type="text" name="fb_link" value="{{$fb_link}}">
                                </div>
                                <div class="mb-3">
                                    @php($youtube_link=\App\Model\Setting::where('key','youtube_link')->first()->value)
                                    <label for="example-url-input" class="form-label">Youtube link</label>
                                    <input class="form-control" type="text" name="youtube_link" value="{{$youtube_link}}">
                                </div>
                                <div class="mb-3">
                                    @php($instagram_link=\App\Model\Setting::where('key','instagram_link')->first()->value)
                                    <label for="example-url-input" class="form-label">Instagram link</label>
                                    <input class="form-control" type="text" name="instagram_link" value="{{$instagram_link}}">
                                </div>
                                <div class="mb-3">
                                    @php($behance_link=\App\Model\Setting::where('key','behance_link')->first()->value)
                                    <label for="example-url-input" class="form-label">Behance link</label>
                                    <input class="form-control" type="text" name="behance_link" value="{{$behance_link}}">
                                </div>
                                <div class="mb-3">
                                    @php($pinterest_link=\App\Model\Setting::where('key','pinterest_link')->first()->value)
                                    <label for="example-url-input" class="form-label">Pinterest link</label>
                                    <input class="form-control" type="text" name="pinterest_link" value="{{$pinterest_link}}">
                                </div>
                                <div class="mb-3">
                                    @php($linkedin_link=\App\Model\Setting::where('key','linkedin_link')->first()->value)
                                    <label for="example-url-input" class="form-label">Linkedin link</label>
                                    <input class="form-control" type="text" name="linkedin_link" value="{{$linkedin_link}}">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit </button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
@section('js')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#addImg')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
