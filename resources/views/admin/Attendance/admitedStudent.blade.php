@extends('layouts.admin_master')
@section('admin_main_content')
    <section id="allStudent">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Admited Student's</h4>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table  table-hover table-striped">
                                <tr>
                                    <td>Sn.</td>
                                    <td>Name</td>
                                    <td>ID</td>
                                    <td>Batch No</td>
                                    <td>Action</td>
                                </tr>

                                @forelse ($allAdmitedStudent as $key => $data)
                                    <tr>
                                        <td>{{ $allAdmitedStudent->firstItem() + $key }}</td>
                                        <td>{{ $data->std_name }}</td>
                                        <td>{{ $data->std_id }}</td>
                                        <td>{{ $data->bathNo->batch_no }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('edit.admited.student', $data->id) }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="{{ route('delete.student', $data->id) }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    
                                @endforelse
                            </table>

                            {{ $allAdmitedStudent->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('additional_css')
    <style>
        .pagination{
            margin-top: 10px;
            /* background-color: red; */
            display: flex;
            justify-content: center;
        }
        .page-link {
            background-color: #085da3;
            color: #fff;
            margin: 0 10px;
            width: 100px;
        }
        .page-link:hover {
            background-color: #5F61E6;
            color: #fff;
        }
        .page-item.disabled .page-link {
            background-color: #5F61E6;
            color: #fff;
        }
      
    </style>
@endpush
