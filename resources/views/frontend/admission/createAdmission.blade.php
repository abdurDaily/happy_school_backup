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
                                        <input value="{{ old('std_name') }}" type="text" name="std_name" id="std_name" class="form-control mb-2" placeholder="enter your name">
                                        @error('std_name')
                                            <span class="text-danger">{{$message}}</span><br/>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="std_id">Student ID <span class="text-danger">*</span></label>
                                        <input type="text" name="std_id" id="std_id" class="form-control mb-2" placeholder="student id">
                                        @error('std_id')
                                            <span class="text-danger">{{$message}}</span><br/>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="father_name">Student Father Name <span class="text-danger">*</span></label>
                                        <input type="text" name="father_name" id="father_name" class="form-control mb-2" placeholder="enter your father name">  
                                        @error('father_name')
                                            <span class="text-danger">{{$message}}</span><br/>
                                        @enderror                                    
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="mother_name">Student mother Name <span class="text-danger">*</span></label>
                                        <input type="text" name="mother_name" id="mother_name" class="form-control mb-2" placeholder="enter your mother name">   
                                        @error('mother_name')
                                            <span class="text-danger">{{$message}}</span><br/>
                                        @enderror     
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="contact_no">Phone Number <span class="text-danger">*</span></label>
                                        <input type="number" name="contact_no" id="contact_no" class="form-control mb-2" placeholder="enter a phone number ">    
                                        @error('contact_no')
                                            <span class="text-danger">{{$message}}</span><br/>
                                        @enderror    
                                    </div>

                                   

                                    <div class="col-lg-6">
                                        <label for="email">enter your email <span class="text-danger">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control mb-2" placeholder="enter an email">
                                        @error('email')
                                            <span class="text-danger">{{$message}}</span><br/>
                                        @enderror
                                        
                                    </div>

                                    


                                    
                                    <div class="row">
                                        <div class="col-lg-4 mx-auto py-2 px-5">
                                            <label for="std_img" style="cursor:pointer;">
                                                <span>Select Image</span>
                                                <img class="display_img" style="width:100%;" src="{{ asset('custom_img/student-image.jpg') }}" alt="">
                                            </label>

                                            <input  class="input_img" type="file" name="std_img" accept=".jpg,.png,.jpeg" id="std_img" style="display: none;">  
                                        </div>
                                        @error('std_img')
                                            <span class="text-danger">{{$message}}</span><br/>
                                        @enderror      

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