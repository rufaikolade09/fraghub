@extends('layouts.admin')

@section('content')
@section('title', 'All Items')


<div class="col-md-12">
  
  <div class="col-md-12"> <h3 style="margin-bottom: 0px"> Items </h3></div>
  
  <div class=" col-md-3 ">
    <div class="box">
      <h1> {{ $all_item_count }} </h1>
      <h5> Total Items </h5>
    </div>
    </div>

    <div class="col-md-12">
      <div class="box">

          <div class="col-md-6 pull-right no-padding-right search">
            
            {!! Form::open(['method'=>'GET','url'=>'search','role'=>'search'])  !!}

            <input type="hidden" name="role" value="items">

          <div class="col-md-4 no-padding-right">
                    <select class="form-control" required name="filter">
                        <option selected="true" disabled="disabled" > Filter Search </option>
                        <option value="item_name"> Items Name </option>
                        <option value="ref_id"> Items Reference ID </option>
                    </select>
                  </div>

                  <div class="col-md-8 no-padding-right">
                    <div class="col-md-10 no-padding">
                       <input type="text" name="search" class="form-control" required placeholder="Search Items">
                    </div>
                    <div class="col-md-2 no-padding">
                        <button class="btn btn-sm btn-primary btn-search"> <i class="fa fa-search"></i> </button>
                    </div>
                  </div>

                  {!! Form::close() !!}

          </div>

          <div class="clearfix"></div>

          <br>
          
          @if( count($items) > 0 )
          
          <table>
                                        
              <thead>
                <tr>
                  <th scope="col"> S/N </th>
                  <th scope="col"> Item Reference ID </th>
                  <th scope="col"> Item Name </th>
                  <th scope="col"> Item Availability </th>
                  <th scope="col"> Created Date </th>
                </tr>
              </thead>

               <tbody>
              
                @foreach($items as $item)

                <tr>
                    <td data-label="S/N"> {{ $loop->iteration }} </td>
                    
                    <td data-label="Item Reference ID"> 
                        {{ $item->ref_id }}
                    </td>

                    <td data-label="Item Name"> 
                        {{ $item->name }}
                    </td>

                    <td data-label="Item Availability"> 
                       @if( $item->availability == '0' )
                        No
                       @else
                        Yes
                       @endif
                    </td>

                    <td data-label="Join Date"> {{ Carbon\Carbon::parse($item->created_at)->format('d, M, Y') }} </td>
                    
                    
                </tr>

                @endforeach
                  
              </tbody>

          </table>

          <div class="links">
                {{ $items->links() }}
          </div>

          @else
             
            <h4>No record found</h4>

          @endif 

          

      </div>
    </div>


</div>



@endsection