@extends('layouts.admin_master')
@section('admin_main_content')
   
  <section id="lecture">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Course  List</h4>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover table-striped">
                            <tr>
                                <td>Sn</td>
                                <td>semester</td>
                                <td>video URL</td>
                                <td>documents</td>
                                <td>Action</td>
                            </tr>

                            @forelse ($resource as $key => $data)
                            <tr>
                                <td>{{ $resource->firstItem() + $key }}</td>
                                <td>{{ $data->Semester->semester }}</td>
                                <td>{{ $data->video_url }}</td>
                                <td>{{ $data->documents }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.edit.class', $data->id) }}"
                                            class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="{{ route('admin.delete.class', $data->id) }}"
                                            class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                                
                            @endforelse
                        </table>
                        {{ $resource->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection


