@extends('layouts.admin_master')
@section('admin_main_content')
    <div class="container">
        <div class="row">


            <div class="col-lg-4">
                <div class="row">

                    {{-- add subject --}}
                    <div class="col-lg-12 card shadow">
                        <div class="card-header">
                            <h5 style="margin: 0; padding:0;">Edit Course</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.update.course' , $editCourseData->id) }}" method="POST">
                                @csrf
                                @method('put')

                                <label for="course_name" class="mb-0">course name</label>
                                <input value="{{ $editCourseData->subject_name }}" id="course_name" name="course_name" type="text" class="form-control"
                                    placeholder="course name..">
                                @error('course_name')
                                    <span class="text-danger">{{ $message }}</span> <br>
                                @enderror

                                <label for="semester_id" class="mt-2">Select Class</label>
                                <select name="semester_id" id="semester_id" class="form-control">
                                    <option value="" selected disabled>Slect a Class</option>

                            
                                    @foreach ($semesterData as $semester)
                                        <option {{ $editCourseData->semester_id == $semester->id ? 'selected' : '' }} value="{{ $semester->id }}">{{ $semester->semester }}</option>
                                    @endforeach
                                </select>
                                @error('semester_id')
                                    <span class="text-danger">{{ $message }}</span> <br>
                                @enderror


                                <button class="btn btn-primary w-100 mt-3">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-8 table-responsive mt-5 mt-lg-0">
                <div class="card shadow table-responsive">
                    <table class="table table-striped table-hover text-center text-capitalize ">
                        <tr>
                            <td>Sn.</td>
                            <td align="left">Subject Name</td>
                            <td align="center">Semester</td>
                            <td>Action</td>
                        </tr>


                        @forelse ($subjectData as $key=>$data)
                            <tr>
                                <td>{{ $subjectData->firstItem() + $key }}</td>
                                <td align="left">{{ Str::limit($data->subject_name, 20) }}</td>
                                <td>
                                    <span class="badge bg-primary text-white">{{ $data->semester->semester }}</span>

                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.edit.course', $data->id) }}"
                                            class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="{{ route('admin.delete.course', $data->id) }}"
                                            class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </table>

                    {{ $subjectData->links() }}
                </div>
            </div>


            


        </div>
    </div>
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
        @media (max-width: 575.98px) {
            table {
                width: 100%;
                margin-top: 20px !important;
            }
        }
    </style>
@endpush
