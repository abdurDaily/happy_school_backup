@extends('frontend.layout')
@section('frontend_layout')
    <section class="my-5">
        <div class="container">
            <div class="row gx-5">
                @forelse ($videoData as $data)
                    <div class="col-lg-2">
                        <div class="shadow">
                            {{ dd($data->video_link) }}
                            {{-- <img class="img-fluid" src="{{  }}" alt=""> --}}
                        </div>
                    </div>
                @empty
                    <h4>No Documentary Found🤔</h4>
                @endforelse
            </div>
        </div>
    </section>
@endsection