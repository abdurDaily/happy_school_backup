@extends('layouts.admin_master')
@section('admin_main_content')
   
  <section id="lecture">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow ">
                    <div class="card-header">
                        <h4>Edit Course  Lectures</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.update.course.lecture',$editCourseData->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-lg-6 mx-auto">
                                   <div class="row">
                                        <div class="col-lg-12">
                                            <label for="subject_name">Subject Name</label>
                                            <select class="form-control" name="subject_name" id="subject_name">
                                                <option value="" disabled selected>Select Subject</option>
                                                @foreach ($allSubject as $data)
                                                    <option {{ $data->id == $editCourseData->id ? 'selected' : ''  }} value="{{ $data->id }}">{{ $data->subject_name }}</option>
                                                @endforeach
                                            </select>
        
                                            @error('subject_name')
                                                <span class="text-danger">{{ $message }}</span> <br>
                                            @enderror
                                        </div>


                                        <div class="col-lg-12 mt-3">
                                            <label for="video_title">Video Title</label>
                                            <input value="{{ $editCourseData->video_title }}" type="text" name="video_title" class="form-control py-3" id="video_title" placeholder="Video Title..">
                                            @error('video_title')
                                                <span class="text-danger">{{ $messge }}</span> <br>
                                            @enderror
                                        </div>
                                        

                                        <div class="col-lg-12 mt-3">
                                            <label for="video_link">Video URL</label>
                                            <input value="{{ $editCourseData->video_url }}" type="text" name="video_link" id="video_link" placeholder="enter video link" class="form-control py-3">
        
                                            @error('video_link')
                                            <span class="text-danger">{{ $message }}</span> <br>
                                            @enderror
                                        </div>
                                   </div>


                                   <div class="submit-btn d-flex justify-content-end mt-4">
                                      <button class="btn btn-primary w-100 py-3">Submit</button>
                                    </div>
                                </div>
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


