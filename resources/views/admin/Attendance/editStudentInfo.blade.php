@extends('layouts.admin_master')
@section('admin_main_content')
    <section id="allStudent">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Student Info</h4>
                        </div>
                        <div class="card-body table-responsive">
                            <form action="{{ route('update.std.info') }}" method="post">
                                @csrf
                                @method('put')

                                <input name="hidden_id" hidden type="text" value="{{ $editStudent->id }}">

                                <label for="std_name">Student Name</label>
                                <input type="text" value="{{ $editStudent->std_name }}" name="std_name" id="std_name" class="form-control" placeholder="student name..">
                                @error('std_name')
                                    <span class="text-danger">{{ $message }}</span> <br>
                                @enderror

                                
                                <label for="std_id">Student ID</label>
                                <input type="text" value="{{ $editStudent->std_id }}" name="std_id" id="std_id" class="form-control" placeholder="student name..">
                                @error('std_id')
                                    <span class="text-danger">{{ $message }}</span> <br>
                                @enderror


                                <label for="class">Select Batch </label>
                                <select name="batch_number" id="" class="form-control mb-3">
                                    <option value="" selected disabled>Select a batch</option>
                                    @foreach ($allBatchs as $batch)
                                        <option value="{{ $batch->id }}" {{ $batch->id == $editStudent->batch_number ? 'selected' : ''  }} >{{ $batch->batch_no }}</option>
                                    @endforeach
                                </select>
                                @error('batch_number')
                                    <span class="text-danger">{{ $message }}</span> <br>
                                @enderror


                                <button class="btn btn-primary w-100 py-2">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


