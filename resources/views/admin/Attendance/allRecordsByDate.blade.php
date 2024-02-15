@extends('layouts.admin_master')

@section('admin_main_content')

   <section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('atteandance.records.query') }}" method="POST">
                    @csrf

                    <div class="row mb-4">
                        <div class="col-lg-5">
                            <label for="batch_id">Select Batch No</label>
                            <select required name="batch_id" id="batch_id" class="form-control">
                                <option  value="" selected disabled>Select a batch</option>
                                    @foreach ($batchData as $batch)
                                        <option value="{{ $batch->id }}">{{ $batch->batch_no }}</option>
                                    @endforeach
                                </select>
                            @error('batch_id')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
    
    
    
                        <div class="col-lg-5">
                            <label for="subject_id">Select a Batch No</label>
                            <select required name="subject_id" id="subject_id" class="form-control">
                                <option  value="" selected disabled>Select Subject</option>
                                @foreach ($subjectId as $subjectData)
                                    <option value="{{ $subjectData->id }}">{{ $subjectData->subject_name }}</option>
                                @endforeach
                            </select>
                            @error('subject_id')
                                <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>


                        <div class="col-lg-2">
                            <button class="btn btn-primary mt-4 w-100" type="submit">Check</button>
                        </div>
                    </div>




                </form>
            </div>
        </div>
    </div>
   </section>




@if (count($students) >0)
    


    <section id="dateRecord">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Records</h4>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table  table-hover table-striped">
                                <tr >
                                    <th>Sn.</th>
                                    <th>Student Name</th>
                                    <th>Student ID</th>
                                    @foreach ($attendanceProvide as $key=>$attendence)
                                        
                                    <th align="center">
                                        {{ $key }}
                                    </th>
                                    @endforeach
                                </tr>
                                @foreach ($students as $key=>$student)
                                    
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $student->std_name }}</td>
                                    <td>{{ $student->std_id }}</td>
                                    
                                    @foreach ($attendanceProvide as $index=>$att)
                                        
                                    <td>
                                        {{ in_array($student->id, $att->first()->attendanceStore->pluck('admit_student_id')->toArray()) ? "✔" : "❌" }}
                                    </td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @else
        <h4 class="text-center text-danger">No Data Found!</h4>
    @endif

@endsection



@push('additional_css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $('#subject_id').select2();
            $('#batch_id').select2();
        });
    </script>
@endpush