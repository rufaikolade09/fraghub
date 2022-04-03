@extends('layouts.admin')

@section('content')
@section('title', 'Admin Dashboard')

@push('scripts')

@endpush


<div class=" col-md-3 ">
  <div class="box">
    <h1> {{ $all_user_count }} </h1>
    <h5> Total User</h5>
  </div>
  </div>

  <div class=" col-md-3 ">
  <div class="box">
    <h1> 
        {{ $all_item_count }}
    </h1>
    <h5> 
      Total Items  
    </h5>
  </div>
  </div>

  <div class=" col-md-3 ">
  <div class="box">
    <h1> {{ $all_booking_count }} </h1>
    <h5> Total Bookings </h5>
  </div>
  </div>

  <div class=" col-md-3 ">
  <div class="box">
    <h1> 
       {{ $all_booking_count }} 
    </h1>
    <h5> Total Revenue </h5>
  </div>
  </div>

      

<div class="col-md-12" style="display:none">
      
  <div class="box">
    <canvas id="canvas"></canvas>
  </div>

</div>

<div class="col-md-12">
      <div class="box">
        
      <h4> Users  <span style="font-size: small; margin-left: 5px; float: right"> <a href="/admin/users"> view all</a></span> </h4>

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

      </div>
</div>


<div class="col-md-12">
      
      <div class="box">
      
      <h4> Items  <span style="font-size: small; margin-left: 5px; float: right"> <a href="/admin/items"> view all</a></span> </h4>
      
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

      </div>

</div>


<div class="col-md-12">
      
      <div class="box">
      
      <h4> Bookings  <span style="font-size: small; margin-left: 5px; float: right"> <a href="/admin/bookings"> view all</a></span> </h4>
      
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

      </div>

</div>

@endsection