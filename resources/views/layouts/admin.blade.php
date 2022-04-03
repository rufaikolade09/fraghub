<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/radio.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/ui.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/table.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">

     <link href="{{ asset('css/tab.css') }}" rel="stylesheet">

     <link href="{{ asset('css/admin.css') }}" rel="stylesheet"> 

     <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">   

</head>


<body>
    
    <div id="app">

    <nav class="navbar navbar-expand-md navbar-light">

      <div class="">
        <div class="navbar-header">

    <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" onclick="openNav()" >
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

              <a  href="/admin">          
                <h4> Fraghub </h4>
              </a>

            </div>

             <div class="collapse navbar-collapse" >

               <div class="navbar-right">
                 <h4> Admin </h4>
               </div>

            </div>

        </div>            
            
        </nav>
     
        <div class="menu-left" id="mySidenav" >
            
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            
            <div class="admin_menu">

              <ul>

                <li class="single_link">
                  <a href="/admin" >Home</a>
                </li>

                <li class="single_link">
                  <a href="/admin/users" >Users</a>
                </li>

                <li class="dropdown">
                  <input type="checkbox" />
                  <a href="#" data-toggle="dropdown">Items</a>
                  <ul class="admin-dropdown-menu">
                    <li><a href="/admin/items">All items </a></li>
                    <li><a href="/admin/items/new">Add new item </a></li>
                    
                  </ul>
                </li>

                <li class="single_link">
                  <a href="/admin/bookings" >Bookings</a>
                </li>

                <li class="single_link">
                  
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                    Log out
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     {{ csrf_field() }}
                  </form>

                </li>

              </ul>

            </div>


        </div>

      <div class="body">
        @yield('content')
      </div>

    </div>

  


     <script src="{{ asset('js/jquery.min.js') }}"></script>
     <script src="{{ asset('js/toastr.min.js') }}"></script>
     @toastr_render
     <!-- @toastr_js -->

     <!-- <script>
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script> -->

    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "100%";
      document.getElementById("mySidenav").style.display = "block";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("mySidenav").style.display = "none";
    }
    </script>

    <script>
          var d = new Date();
          var n = d.toDateString();
          document.getElementById("date").innerHTML = n;
    </script>
    
    <script src="{{ asset('js/multislider.js') }}"></script>

    <script>
    $('#slider').multislider({
        interval: 0,
        slideAll: true,
        duration: 1500
    });

    $('.slider_two').multislider({
        interval: 0,
        slideAll: true,
        duration: 1500
    });

    </script>

    <script src="{{ asset('js/picker.js') }}"></script>
    <script src="{{ asset('js/picker.date.js') }}"></script>
     <script src="{{ asset('js/picker.time.js') }}"></script>

    <script>

          $(document).on('click', '.get_message', function(e){
                
                var url = $(this).data('url');
                $('.view_message').html(''); 
                $('.modal-loader').show();     
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'html'
                })
                .done(function(data){
                   // console.log(data);  
                    $('.view_message').html('');    
                    $('.view_message').html(data); // load response 
                    $('.modal-loader').hide();        // hide ajax loader   
                })
                .fail(function(){
                    $('.view_message').html('Something went wrong, Please try again...');
                    $('.modal-loader').hide();
                });
            });

        </script>


    
</body>
</html>
