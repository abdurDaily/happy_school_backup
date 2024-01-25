@extends('layouts.admin_master')
@section('admin_main_content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto card shadow">

                <div class="card-header">
                    <h5 style="margin: 0; padding:0;">Edit bath name</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('update.batch',$updateData->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <label for="batch_no" class="mb-0">Batch name</label>
                            <input id="batch_no" value="{{ $updateData->batch_no }}" name="batch_no" type="text" class="form-control"
                                placeholder="Bath name with section">
                            @error('batch_no')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        <button class="btn btn-primary w-100 mt-3">Update</button>
                    </form>
                </div>
            </div>


            <div class="col-lg-8 table-responsive mt-5 mt-lg-0">
                <div class="card shadow ">
                    <table class="table table-striped table-hover text-center text-capitalize ">
                        <tr>
                            <td>Sn.</td>
                            <td>Batch Name</td>
                            <td>Action</td>
                        </tr>

                        @forelse ($batchNumber as $key=>$data)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $data->batch_no }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('edit.batchname', $data->id) }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
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