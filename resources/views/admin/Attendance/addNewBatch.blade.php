@extends('layouts.admin_master')
@section('admin_main_content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto card shadow">

                <div class="card-header">
                    <h5 style="margin: 0; padding:0;">Add New Batch with Section</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('insert.new.batch') }}" method="POST">
                        @csrf
                        <label for="batch_no" class="mb-0">Insert a New Batch With Section</label>
                        <input id="batch_no" name="batch_no" type="text" class="form-control"
                            placeholder="Bath_Number_Section">
                        @error('batch_no')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror

                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        <button class="btn btn-primary w-100 mt-3">Upload</button>
                    </form>
                </div>


            </div>

            <div class="col-lg-8 table-responsive mt-5 mt-lg-0">
                <div class="card shadow ">
                    <table class="table table-striped table-hover text-center text-capitalize ">
                        <tr>
                            <td>#</td>
                            <td>Batch Name</td>
                            <td>Action</td>
                        </tr>

                        @forelse ($batchNumber as $key=>$data)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $data->batch_no }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.employee.edit', $data->id) }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="{{ route('delete.batch', $data->id) }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('additional_css')
    <style>
        @media (max-width: 575.98px) { 
            table{
                width: 100%;
                margin-top: 20px !important;
            }
        }
    </style>
@endpush