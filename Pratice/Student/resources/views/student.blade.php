@extends('layout.app');
@section('content')
{{--   Dinh nghia noi dung cua trang--}}
    <div class="panel-body">
        @include('errors.503')
        <form action="{{url('student')}}" method="post" class="form-horizontal">
            {{csrf_field()}}
            <div class="form-group">
                <label for="student" class="col-sm-3 control-label">Student</label>
                <p>Add new student</p>
                <div class="col-sm-6">
                    <p>Student Name</p>
                    <input type="text" name="name" id="student-name" class="form-control">
                </div>
                <div class="col-sm-6">
                    <p>Age</p>
                    <input type="text" name="Age" id="student-age" class="form-control">
                </div>
                <div class="col-sm-6">
                    <p>Address</p>
                    <input type="text" name="address" id="student-address" class="form-control">
                </div>
                <div class="col-sm-6">
                    <p>Telephone</p>
                    <input type="text" name="telephone" id="phone" class="form-control">
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-plus"></i> Add student
                        </button>
                    </div>
                </div>

            </div>
        </form>
{{--        Hien thi noi dung trong database--}}
        @if(count($student)>0)
            <div class="panel panel-default">
                <div class="panel-heading">
                   <div class="panel-body">
                       <table class="table table-striped task-table">
                           <thead>
                               <td>name</td>
                               <td>Age</td>
                               <td>Address</td>
                               <td>telephone</td>
                           </thead>
                           <tbody>
                           @foreach($student as $tk)
                               <tr>
                                   <td class="table-next">
                                       <div>{{$tk->name}}</div>
                                   </td>
                                   <td class="table-next">
                                       <div>{{$tk->Age}}</div>
                                   </td>
                                   <td class="table-next">
                                       <div>{{$tk->address}}</div>
                                   </td>
                                   <td class="table-next">
                                       <div>{{$tk->telephone}}</div>
                                   </td>
                               </tr>
                           @endforeach
                           </tbody>
                       </table>
                   </div>
                </div>
            </div>
        @endif
    </div>
@endsection
