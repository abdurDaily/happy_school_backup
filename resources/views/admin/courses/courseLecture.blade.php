@extends('layouts.admin_master')
@section('admin_main_content')
   
  <section id="lecture">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Course  Lectures</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="subject_name">Subject Name</label>
                                    <select class="form-control" name="subject_name" id="subject_name">
                                        <option value="" disabled selected>Select Subject</option>
                                    </select>
                                </div>

                                
                                <div class="col-lg-6">
                                    <label for="video_link">Video URL</label>
                                    <input type="text" name="video_link" id="video_link" placeholder="enter video link" class="form-control">

                                      <div class="row">
                                            <div class="col-lg-12 mt-lg-3">
                                                <label for="document">Document's</label>
                                                <input accept=".pdf,.doxc,.pptx" type="file" name="document" id="document" placeholder="enter video link" class="form-control">
                                            </div>
                                      </div>
                                </div>
                            </div>
                            {{-- submit btn --}}
                            <div class="submit-btn d-flex justify-content-end mt-3">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection


