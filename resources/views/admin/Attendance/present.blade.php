@extends('layouts.admin_master')
@section('admin_main_content')
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto shadow card">
                <div class="card">

                    <div class="card-header m-0 p-0">
                        <h5 class="bg-primary p-2 mt-3" style="color:#fff; font-weight:lighter; border-radius:5px; font-size:14px;">Provide Attendance</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-7 mx-auto p-3 mb-3">
                                <form action="{{ route('check.present') }}" method="GET">
                                    @csrf

                                    <div class="row input-group mx-auto btn-group">
                                        <div class="btn-group shadow mx-auto p-0">
                                            <select required name="batch_id" id="batch_id" class="form-control">
                                                @foreach ($result as $data)
                                                    <option value="{{ $data->id }}">{{ $data->batch_no }}</option>
                                                @endforeach
                                            </select>
                                            <button class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>



                        @if (isset(request()->batch_id))
                            <form action="{{ route('present.submit') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="date">Select Date</label>
                                        <input required name="date" id="date" type="date"
                                            class="form-control">
                                        @error('date')
                                            <div class="alert alert-danger"><strong>{{ $message }}</strong></div>
                                        @enderror
                                    </div>


                                    <div class="col-lg-6">
                                        <label for="subject_id">Select a Batch No</label>
                                        <select style="border: 1px solid red !importent;" required name="subject_id" id="subject_id" class="form-control">
                                            <option value="" selected disabled>Select a batch</option>
                                            @foreach ($subjectId as $subjectData)
                                                <option value="{{ $subjectData->id }}">{{ $subjectData->subject_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <input name="check_id" type="hidden"
                                            value="{{ isset(request()->batch_id) ? request()->batch_id : '' }}">
                                    </div>
                                </div>

                                <table class="table table-responsive table-striped table-hover mt-5">
                                    <tr>
                                        <th>SN</th>
                                        <th>Name</th>
                                        <th>Std id</th>
                                        <th>Status</th>
                                        {{-- <th>SN</th> --}}
                                    </tr>
                                    @forelse ($studentInfo as $detail)
                                        <tr>
                                            <td>{{ $detail->id }}</td>
                                            <td>{{ $detail->std_name }}</td>
                                            <td>
                                                {{ $detail->std_id }}
                                            </td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input name="isPresent[]" class="form-check-input"
                                                        value="{{ $detail->id }}" type="checkbox"
                                                        id="flexSwitchCheckDefault">
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </table>

                                <button class="btn btn-primary w-100 my-3">Submit</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection





@push('additional_css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .select2-container {
            border: 1px solid #D3D8DE;
            border-radius: 6px;
        }
        .select2-container--default .select2-selection--single {
            border: none;
            height: 40px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .select2-search__field {
            border: 0;
            outline: 0;
        }

        .batch_no,
        .select2-selection__rendered {
            border: 0px solid transparent;
            outline: none;
        }
    </style>
@endpush
@push('additional_js')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $('#batch_no').select2();
            $('#subject_id').select2();
            $('#batch_id').select2();
        });
    </script>
@endpush
