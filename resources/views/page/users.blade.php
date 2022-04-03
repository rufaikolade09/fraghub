@extends('layouts.admin')

@section('content')
@section('title', 'All users')


<div class="col-md-12">
  
  <div class="col-md-12"> <h3 style="margin-bottom: 0px"> Users </h3></div>
  
  <div class=" col-md-3 ">
    <div class="box">
      <h1> {{ $all_user_count }} </h1>
      <h5> Total User </h5>
    </div>
    </div>

    <div class="col-md-12">
      <div class="box">

          <div class="col-md-6 pull-right no-padding-right search">
            
            {!! Form::open(['method'=>'GET','url'=>'search'])  !!}

            <input type="hidden" name="role" value="users">

          <div class="col-md-4 no-padding-right">
                    <select class="form-control" required name="filter">
                        <option selected="true" disabled="disabled" > Filter Search </option>
                        <option value="name"> Name </option>
                        <option value="email"> Email </option>
                    </select>
                  </div>

                  <div class="col-md-8 no-padding-right">
                    <div class="col-md-10 no-padding">
                       <input type="text" name="search" class="form-control" required placeholder="Search User">
                    </div>
                    <div class="col-md-2 no-padding">
                        <button class="btn btn-sm btn-primary btn-search"> <i class="fa fa-search"></i> </button>
                    </div>
                  </div>

                  {!! Form::close() !!}

          </div>

          <div class="clearfix"></div>

          <br>
        
          @if( count($users) > 0 )
          
          <table>
                                        
              <thead>
                <tr>
                  <th scope="col"> S/N </th>
                  <th scope="col"> Name </th>
                  <th scope="col"> Email </th>
                  <th scope="col"> Join Date </th>
                </tr>
              </thead>

               <tbody>
                
                @foreach($users as $user)

                <tr>
                    <td data-label="S/N"> {{ $loop->iteration }} </td>
                    
                    <td data-label="Name"> 
                        {{ $user->name }}
                    </td>

                    <td data-label="Email"> 
                        {{ $user->email }}
                    </td>

                    <td data-label="Join Date"> {{ Carbon\Carbon::parse($user->created_at)->format('d, M, Y') }} </td>
                    
                    
                </tr>

                @endforeach                

                  
              </tbody>

          </table>

          <div class="links">
                    {{ $users->links() }}
          </div>

            @else
             <h4>No record found</h4>

          @endif
          

      </div>
    </div>


</div>



@endsection