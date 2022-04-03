@extends('layouts.admin')

@section('content')
@section('title', 'Search Result')


<div class="col-md-12" style="margin-top:30px">

    <div class="col-md-12">
      <div class="box">

          <div class="col-md-6">
              <h4> Search Result for : {{ $search }} </h4>
          </div>

          <div class="col-md-6 pull-right no-padding-right search">
            
            {!! Form::open(['method'=>'GET','url'=>'search'])  !!}

            <input type="hidden" name="role" value="bookings">

          <div class="col-md-4 no-padding-right">
                    <select class="form-control" required name="filter">
                        <option selected="true" disabled="disabled" > Filter Search </option>
                        <option value="item_name"> Items Name </option>
                        <option value="user_name"> User Name </option>
                        <option value="ref_id"> Booking Reference ID </option>
                    </select>
                  </div>

                  <div class="col-md-8 no-padding-right">
                    <div class="col-md-10 no-padding">
                       <input type="text" name="search" class="form-control" required placeholder="Search Bookings">
                    </div>
                    <div class="col-md-2 no-padding">
                        <button class="btn btn-sm btn-primary btn-search"> <i class="fa fa-search"></i> </button>
                    </div>
                  </div>

                  {!! Form::close() !!}

          </div>

          <div class="clearfix"></div>

          <br>
        
          @if( count($bookings) > 0 )

        <table>
                                        
              <thead>
                <tr>
                  <th scope="col"> S/N </th>
                  <th scope="col"> User Name </th>
                  <th scope="col"> Item Name </th>
                  <th scope="col"> Booking Date </th>
                  <th scope="col"> Return Date </th>
                  <th scope="col"> Status </th>
                </tr>
              </thead>

               <tbody>
              

                @foreach($bookings as $booking)

                <tr>
                    <td data-label="S/N"> {{ $loop->iteration }} </td>
                    
                    <td data-label="User name"> 
                        {{ $booking->user_name }}
                    </td>

                    <td data-label="Item Name"> 
                        {{ $booking->item_name }}
                    </td>

                    <td data-label="Booking Date"> {{ Carbon\Carbon::parse($booking->booking_date)->format('d, M, Y') }} </td>

                    <td data-label="Return Date"> {{ Carbon\Carbon::parse($booking->return_date)->format('d, M, Y') }} </td>

                     <td data-label="Status"> 

                        @if( $booking->status == '0' )
                          Pending
                         @else
                          Complete
                         @endif

                      </td>
                    
                    
                </tr>

                @endforeach

                  
              </tbody>

        </table>

        <div class="links">
                    {{ $bookings->links() }}
          </div>

            @else
             <h4>No record found</h4>

        @endif
          

      </div>
    </div>


</div>



@endsection