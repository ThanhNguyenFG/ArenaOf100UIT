@extends('layouts.app')
@section('title','Danh sách câu hỏi')
@section('style')
@stop
@section('content')


    <a href="{{ route('questions.create') }}" class="btn btn-primary">Add new</a>
    <table class="table table-bordered table-hover table-condensed" style="margin-top: 15px; background: white;">
      <thead>
<div class="dropdown mb-4">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Quản trị viên
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="{{ route('questions.create') }}">Thêm câu hỏi</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="/users" > Quản lí sinh viên </a>
  <a class="dropdown-item" href="/contest" > Vào đấu trường </a>
  
</div>
</div>

    
  <div id="row">
    <div class="col-14">
    <table class="table table-striped table-light">
      <thead class="thead-light">
        <tr>
         <th width="4%" height="4%">STT</th>
         <th width="40%" height="40%">Nội dung câu hỏi</th>
          <th width="10%" height="10%">Mã câu hỏi</th>
          <th width="30%" colspan="2">Thao tác</th>
        </tr>
      </thead>
      <tbody>
        @foreach($question as $question)
          <tr>
          <td>{!! $question->id !!}</td>
          <td>{!! $question->content !!}</td>
          <td>{!! $question->contest_id !!}</td>
          <td>
            <a href="{{ route('questions.show', $question->id) }}" class = "btn btn-info">Hiển thị nội dung</a>
            <a href="{{ route('questions.edit', $question->id) }}" class = "btn btn-success">Chỉnh sửa</a>
          </td>
          <td>
              {!! Form::open(['method'=>'delete', 'route'=>['questions.destroy', $question->id]]) !!}
              {!! Form::submit('Xóa', ['class'=>'btn btn-danger', 'onclick'=>'return confirm("Bạn muốn xóa câu hỏi này?")']) !!}
              {!! Form::close() !!}
          </td>
          </tr>
        @endforeach
      </tbody>
    </table> 
  </div> </div>

  <script src="{{ asset('js/app.js') }}"></script>
@stop