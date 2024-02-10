@extends('frontend.layout')
@section('frontend_layout')
    <section class="my-5">
        <div class="container">
            <div class="row gy-5">
                @forelse ($imageData as $data)
                    <div class="col-lg-2">
                        <div class="shadow">
                            <img class="img-fluid" src="{{ $data->galary_img }}" alt="">
                        </div>
                    </div>
                @empty
                    <h4>No Image Data Found !🤔</h4>
                @endforelse
            </div>
            
        </div>
    </section>
@endsection