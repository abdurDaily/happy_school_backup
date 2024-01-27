@extends('layouts.admin_master')
@section('admin_main_content')
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto card shadow">
                <div class="card">
                    <div class="card-header m-0 p-0 mt-3 " style=" background-color: #D3D8DE;" >
                        <h4  style="margin: 0; padding:10px;  font-size:15px; ">Admit Student</h4>
                    </div>
                </div>


                <div class="card-body">
                    <form action="{{ route('admit.student.database') }}" method="POST">
                        @csrf 

                        <label for="std_name" class="">Insert Student Name</label>
                        <input id="std_name" name="std_name" type="text" class="form-control" placeholder="Student Name">
                        @error('std_name')
                           <strong class="text-danger">{{ $message }}</strong>
                        @enderror

                        <label for="std_id" class="mt-3">Insert Student Name</label>
                        <input id="std_id" name="std_id" type="text" class="form-control" placeholder="Student ID">
                        @error('std_id')
                           <strong class="text-danger">{{ $message }}</strong>
                        @enderror

                        <label for="batch_no" class="mt-3">Select a Batch </label>
                        <select name="batch_no" id="batch_no" class="form-control">
                            <option selected disabled>Select a batch</option>
                            @foreach ($batchNo as $data)
                                <option value="{{ $data->id }}">{{ Str::upper($data->batch_no ) }}</option>
                            @endforeach
                        </select>

                     

                        @error('batch_no')
                           <strong class="text-danger">{{ $message }}</strong>
                        @enderror

                        <button class="btn btn-primary w-100 mt-3">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    
    $(document).ready(function() {
    $('#batch_no').select2();
    $('#subject_id').select2();
});

</script>
@endpush