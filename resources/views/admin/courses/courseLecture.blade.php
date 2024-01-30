@extends('layouts.admin_master')
@section('admin_main_content')
   
  <section id="lecture">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow ">
                    <div class="card-header">
                        <h4>Course  Lectures</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.store.course') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="subject_name">Subject Name</label>
                                    <select class="form-control" name="subject_name" id="subject_name">
                                        <option value="" disabled selected>Select Subject</option>
                                        @foreach ($allSubject as $data)
                                            <option value="{{ $data->id }}">{{ $data->subject_name }}</option>
                                        @endforeach
                                    </select>

                                    @error('subject_name')
                                        <span class="text-danger">{{ $message }}</span> <br>
                                    @enderror
                                </div>

                                
                                <div class="col-lg-6">
                                    <label for="video_link">Video URL</label>
                                    <input type="text" name="video_link" id="video_link" placeholder="enter video link" class="form-control">

                                    @error('video_link')
                                    <span class="text-danger">{{ $message }}</span> <br>
                                @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4 mx-auto mt-4  ">
                                    <div class="document-file text-center mx-auto d-flex flex-column  justify-content-lg-around ">
                                        <label for="document">
                                            <img class="img-fluid" style="height:100px; border-radius: 0px; cursor:pointer;
                                            background: #fff;
                                            box-shadow:  10px 10px 50px #fff,
                                                            -10px -10px 50px #f885e982; padding:10px; " src="{{ asset('custom_img/file.png') }}" alt="">
                                        </label> <br>
                                        <input style="display: none" accept=".pdf,.doxc,.pptx" type="file" name="document" id="document" placeholder="enter video link" class="form-control">
                                    </div>
                                </div>
                                <P class="text-center">Slelect Documents [PDF,DOCX,PPTX]</P>
                            </div>
                    
                            {{-- submit btn --}}
                            <div class="submit-btn d-flex justify-content-end mt-3">
                                <button class="btn btn-primary w-100">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection






@push('additional_css')
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert/css/select2.min.css') }}" />
    <style>
        .select2-container {
            border: 1px solid #D3D8DE;
            border-radius: 6px;
        }
        .select2-container--default .select2-selection--single {
            border: none;
            height: 40px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .select2-search__field {
            border: 0;
            outline: 0;
        }

        .batch_no,
        .select2-selection__rendered {
            border: 0px solid transparent;
            outline: none;
        }
    </style>
@endpush
@push('additional_js')
    <script src="{{ asset('vendor/sweetalert/js/select2.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#subject_name').select2();
        });
    </script>
@endpush


