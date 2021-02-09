   <!DOCTYPE html>
    <html lang="en">
     <head>
       @include('layouts.parts.header')
       @yield('style')
     </head>
<body>            
       {{-- @include('layouts.parts.navbar')       --}}
   {{--   @include('layouts.parts.sidebar')                 
    
      <main role="main" class="col-md-9 ml-sm-auto col-lg-12 pt-3 px-1" style="background-color: #6495ED">
      @yield('content') 
      </main> 
      @include('layouts.parts.footer') --}}

          @include('layouts.parts.navbar') 

  <div class="wrapper d-flex align-items-stretch">      
        <nav id="sidebar">
          @include('layouts.parts.sidebar') 
        </nav>

        <div id="content" class="p-4 p-md-5 pt-5">  
         @yield('content')         
        </div> 

         @include('layouts.parts.footer')
  </div>

   @yield('scripts')
</body>
    </html>