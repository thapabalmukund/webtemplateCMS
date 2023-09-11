     @extends('Frontend.Layouts.main')
     @section('main-container')
         <!-- project section start -->
         <div class="project_section layout_padding">
             <div class="container">
                 <h1 class="partner_text">
                     {{ $data4->title }}

                 </h1>
                 <p class="lorem_ipsum_text">
                     {{ $data4->description }}
                 </p>
                 <div class="choice_main">
                     <div class="choose_bt"><a href="#">Choose your home</a></div>
                 </div>
             </div>
         </div>
         <!-- project section end -->
     @endsection
