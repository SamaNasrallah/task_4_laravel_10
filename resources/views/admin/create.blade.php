@extends('layouts.main')
@section('MainContent')

@php
use App\Models\Category;
$categorys = Category::all();

@endphp
<div class="row form-container">
    <div class="col-md-3" >
        <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="course_title">Course Title</label>
                <input type="text" name="course_title" id="course_title" class="form-control" style="width:300px; height: 40px;">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category_id" id="category" class="form-control" style="width:300px;">
                    <option value="">Select Category</option>
                    @foreach ($categorys as $category)
                        <option value="{{ $category->id }}" >{{ $category->name }}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="date" name="start_date" id="start_date" class="form-control" style="width: 300px; height: 40px;">
            </div>
            <div class="form-group">
                <label for="teacher">Teacher</label>
                <select name="teacher" id="" class="custom-select mb-3" style="width: 300px;">
                    <option>Amna</option>
                    <option>Nada</option>
                    <option>Alaa</option>
                    <option>Deema</option>
                </select>
            </div>
            <div class="form-group">
                <label for="hours">Hours</label>
                <input type="number" name="hours" id="hours" class="form-control"style="width: 300px;" >
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="details">Details</label>
                <textarea name="details" id="editor"class="form-control" style="width:400px; height: 60px;"></textarea>
            </div>
         
            <button type="submit" class="btn btn-primary" id="btn-primary">Save</button>
        </form>
    </div>
<script>
    $(document).ready(function() {
        $("#btn-primary").click(function() {
            alert("Added Course successfully");
        });
    });
</script>
</div>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
 tinymce.init({
  selector: 'textarea#editor'
});
</script>

@stop
