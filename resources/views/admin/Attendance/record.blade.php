@extends('layouts.admin_master')
@section('admin_main_content')
    <div class="container">

        <div class="row">
            <div class="col-12 mx-auto shadow card">
                <div class="card p-5">
                    <form action="{{ route('attendance.record.check') }}" method="GET">
                        @csrf

                        <div class="row">
                            <div class="col-md-4">
                                <label for="subject_id" class="mt-3">Select a Batch No</label>
                                <select required name="subject_id" id="subject_id" class="form-control">
                                    <option value="" selected disabled>Select a batch</option>
                                    @foreach ($subjectId as $subjectData)
                                        <option value="{{ $subjectData->id }}">{{ $subjectData->subject_name }}</option>
                                    @endforeach
                                </select>
                                @error('subject_id')
                                    <div class="text-danger"><strong>{{ $message }}</strong></div>
                                @enderror


                            </div>
                            <div class="col-4">
                                <label for="batch_id" class="mt-3">Select a Batch No</label>
                                <select required name="batch_id" id="batch_id" class="form-control">
                                    <option value="" selected disabled>Select a batch</option>
                                    @foreach ($batchId as $batchData)
                                        <option value="{{ $batchData->id }}">{{ $batchData->batch_no }}</option>
                                    @endforeach
                                </select>
                                @error('batch_id')
                                    <div class="text-danger"><strong>{{ $message }}</strong></div>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="date">Select Date</label>
                                <input required name="date" type="date" class="form-control">
                                @error('date')
                                    <div class="text-danger"><strong>{{ $message }}</strong></div>
                                @enderror
                            </div>
                        </div>

                        <button class="btn btn-primary w-100 mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>


        @isset($studentInfo)
        <div class="row card my-3 pb-5">
            <div class="col-12">
                <form action="{{ route('edit.attendance') }}" method="POST">
                    @csrf
                    @method('put')
                    <input  type="hidden" name="attendenceId" value="{{ $atteances->id }}">

                    <table class="table mt-5 table-responsive table-striped table-hover">
                        <tr>
                            <th>SN</th>
                            <th>Student Name</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>

                        @forelse ($students as $key => $student)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $student->std_name }}</td>
                                <td>{{ $student->std_id }}</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input"
                                            {{ in_array($student->id, $attendedStudetID) ? 'checked' : '' }} type="checkbox"
                                            role="switch" id="flexSwitchCheckDefault" name="present[]"
                                            value="{{ $student->id }}">
                                        <label class="form-check-label"
                                            for="flexSwitchCheckDefault">{{ in_array($student->id, $attendedStudetID) ? 'Present' : 'Absent' }}</label>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="4" align="center">no record found 🤦‍♂️</td>
                        </tr>
                        @endforelse
                    </table>


                    <button class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
        @endisset
  

    </div>
@endsection


@push('additional_css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
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
            $('#batch_id').select2();
            $('#subject_id').select2();
        });
    </script>
@endpush
