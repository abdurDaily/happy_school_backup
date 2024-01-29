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
                                    <label for="subject_name">Subject Name</label>
                                    <select class="form-control" name="subject_name" id="subject_name">
                                        <option value="" disabled selected>Select Subject</option>
                                    </select>
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


