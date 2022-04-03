@extends('layouts.admin')

@section('content')
@section('title', 'New Items')


<div class="col-md-12">

    <div class="col-md-12"> <h3 style="margin-bottom: 0px"> Add New Items </h3></div>

    <div class="col-md-12">
      <div class="box clearfix box-form">

        <div class="col-md-6">

            {!! Form::open(['method'=>'POST','url'=>'post-item', 'enctype' => 'multipart/form-data' ])  !!}
        
            <label> Items Name </label>

            <input type="text" name="name" class="form-control" required>
        
            <label> Items Description </label>

            <textarea class="form-control" name="description" required></textarea>

            <label>  Availability </label>

            <select class="form-control" name="availability" required>
               <option> Select Option </option>
               <option value="1"> Yes </option>
               <option value="0"> No </option>
            </select>

            <label>  Item Image </label>

            <input type="file" name="file" class="form-control"  required>

            <label> Rent price </label>

            <input type="tel" name="rate" class="form-control" required>

            <button class="btn btn-primary"> Submit </button>

            {!! Form::close() !!}

        </div>

      </div>
    </div>


</div>



@endsection