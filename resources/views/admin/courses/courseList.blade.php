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
                                <td>{{ $data->subject_name }}</td>
                                <td style="width: 35%">
                                    @foreach ($data->courseResources as $subKey => $sub)
                                     <a target="_blank" class="badge  {{ $subKey %2 == 0 ? 'bg-primary' : 'bg-dark'}}" href="{{ $sub->video_url }}">Lecture -{{ ++$subKey }}</a>
                                    @endforeach
                                </td>

                                <td style="width: 35%">
                                    @foreach ($data->courseResources as $subKey => $sub)
                                        @if ($sub->documents)
                                            <a target="_blank" class="badge  {{ $subKey %2 == 0 ? 'bg-primary' : 'bg-dark'}}" href="{{ $sub->documents }}">
                                                {{ $sub->documents != null ? $sub->documents : '' }} </a>
                                        @endif
                                    @endforeach
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


