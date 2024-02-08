@extends('frontend.layout')
@section('frontend_layout')
<!DOCTYPE html>

    <section id="admission" class="my-5">
        <div class="container">
            <div class="row">
                <div class="card shadow p-5">
                    <div class="col-lg-12">
                        <div class="">
                            <div class="card-header" style="background-color: #4D5FE3; ">
                                <span style="color:#ffffff;">Registration Information</span>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('frontend.store.admission') }}" method="post" enctype="multipart/form-data">
                                @csrf
    

                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="std_name">Student Name <span class="text-danger">*</span></label>
                                        <input type="text" name="std_name" id="std_name" class="form-control mb-2" placeholder="enter your name">
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="father_name">Student Father Name <span class="text-danger">*</span></label>
                                        <input type="text" name="father_name" id="father_name" class="form-control mb-2" placeholder="enter your father name">                                      
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="mother_name">Student mother Name <span class="text-danger">*</span></label>
                                        <input type="text" name="mother_name" id="mother_name" class="form-control mb-2" placeholder="enter your mother name">        
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="contact_no">Phone Number <span class="text-danger">*</span></label>
                                        <input type="number" name="contact_no" id="contact_no" class="form-control mb-2" placeholder="enter a phone number ">        
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="alter_contact_no">Alternative Phone Number </label>
                                        <input type="number" name="alter_contact_no" id="alter_contact_no" class="form-control mb-2" placeholder="enter alternative phone number">
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="email">enter your email <span class="text-danger">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control mb-2" placeholder="enter an email">
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="birth_date">Birth Date<span class="text-danger">*</span></label>
                                        <input type="date" name="birth_date" id="birth_date" class="form-control mb-2" placeholder="enter an email">
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="division">division <span class="text-danger">*</span></label>
                                        <select name="division" id="division" class="form-control mb-2">
                                            <option value="" selected disabled>Select Division</option>
                                            <option value="1">Barisal</option>
                                            <option value="2">Chittagong</option>
                                            <option value="3">Dhaka</option>
                                            <option value="4">Khulna </option>
                                            <option value="5">Mymensingh</option>
                                            <option value="6">Rajshahi</option>
                                            <option value="7">Rangpur</option>
                                            <option value="8">Sylhet</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="district">District <span class="text-danger">*</span></label>
                                        <input type="text" name="district" id="district" class="form-control mb-2" placeholder="enter your district name">
                                    </div>


                                    <div class="col-lg-6">
                                        <label for="Upazila">Upazila <span class="text-danger">*</span></label>
                                        <input type="text" name="upazila" id="Upazila" class="form-control mb-2" placeholder="enter your Upazila name">
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="village">village <span class="text-danger">*</span></label>
                                        <input type="text" name="village" id="village" class="form-control mb-2" placeholder="enter your village name">
                                    </div>

                                    
                                    <div class="row">
                                        <div class="col-lg-4 mx-auto py-2 px-5">
                                            <label for="std_img" style="cursor:pointer;">
                                                <span>Select Image</span>
                                                <img class="display_img" style="width:100%;" src="{{ asset('custom_img/student-image.jpg') }}" alt="">
                                            </label>
                                            <input class="input_img" type="file" name="std_img" accept=".jpg,.png,.jpeg" id="std_img" style="display: none;">        
                                        </div>

                                        <div class="col-lg-8">
                                            <label for="present_address">Present Address<span class="text-danger">*</span></label>
                                            <textarea name="present_address" id="present_address" class="form-control mb-2" placeholder="your present address..." cols="30" rows="10"></textarea>
                                        </div>
                                    </div>



                                </div>
                                <button class="btn btn-primary w-100 py-2 mt-5">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('frontend_js')
{{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> --}}
    <script>


        let inputImage = $('.input_img');
        let displayImg = $('.display_img');

        inputImage.on('change', function(e){
            let url = URL.createObjectURL(e.target.files[0]);
            displayImg.attr('src', url)
        });
        

    </script>



@endpush