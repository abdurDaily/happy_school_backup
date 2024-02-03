@extends('layouts.admin_master')
@section('admin_main_content')
   
  <section id="lecture">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between ">
                        <h4>Course  List</h4>

                        <div class="search">
                            <form action="{{ route('admin.search.lecture.lecture') }}" method="POST">
                                @csrf

                                <div class="btn-group">
                                    <input id="search_query" type="text" name="search_lecture" class="form-control" placeholder="search video title..">
                                    <button id="search_btn" disabled style="cursor: not-allowed;" class="btn btn-primary">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover table-striped">
                            <tr>
                                <td>Sn</td>
                                <td>Subject</td>
                                <td>Video Title</td>
                                <td>Video</td>
                                <td>Action</td>
                            </tr>

                            @forelse ($resource as $key => $data)
                            <tr>
                                <td>{{ $resource->firstItem() + $key }}</td>
                                <td width="25%">{{ $data->Subject->subject_name }}</td>
                             
                                <td width="25%">
                                    {{ $data->video_title }}
                                </td>
                                <td width="25%">
                                    <a target="_blank" class="badge bg-primary" href="{{ $data->video_url }}">Watch Video</a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.edit.course.lecture', $data->id) }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="{{ route('admin.delete.lecture', $data->id) }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></i></a>
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




@push('additional_js')
    <script>
        let searchQuery = document.querySelector('#search_query');
        let searchBtn = document.querySelector('#search_btn');

        searchQuery.addEventListener('keyup', function(e){
            let test = e.target.value.length;
            if(test > 0){
                searchBtn.disabled = false
                searchBtn.style.cursor = 'pointer'
            }else{
                searchBtn.disabled = true
            }   
        })

    </script>
@endpush