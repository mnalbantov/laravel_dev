@extends('layouts.master')
    @section('title')
        {{$title}}
        @stop

 @section('content')
     <div class="container">
         <!-- Image Header -->
         <div class="row">
             <div class="col-lg-12">
                 <img class="img-responsive" src="images/services-1200x300.png" alt="">
             </div>
         </div>
         <!-- /.row -->

         <!-- Service Panels -->
         <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
         <div class="row">
             <div class="col-lg-12">
                 <h2 class="page-header">Защо да изберете нас?</h2>
             </div>
         @if($service)
              @foreach($service as $s)

                     <div class="col-md-3 col-sm-6">
                         <div class="panel panel-default text-center">
                             <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="{{$s->icon_name}} fa-stack-1x fa-inverse"></i>
                        </span>
                             </div>
                             <div class="panel-body">
                                 <h4>{{$s->title}}</h4>
                                 <p>{{$s->service_content}}</p>
                                 <a href="#" class="btn btn-primary">Научи повече</a>
                             </div>
                         </div>
                     </div>
              @endforeach
              @endif


         <!-- Service Tabs -->
         <div class="row">
             <div class="col-lg-12">
                 <h2 class="page-header">Service Tabs</h2>
             </div>
             <div class="col-lg-12">

                 <ul id="myTab" class="nav nav-tabs nav-justified">
                     <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-tree"></i></a>
                     </li>
                     <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-car"></i></a>
                     </li>
                     <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-support"></i> Service Three</a>
                     </li>
                     <li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-database"></i> Service Four</a>
                     </li>
                 </ul>

                 <div id="myTabContent" class="tab-content">
                     <div class="tab-pane fade active in" id="service-one">
                         <h4></h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
                     </div>

                 </div>

             </div>
         </div>

         <!-- Service List -->
         <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
         <div class="row">
             <div class="col-lg-12">
                 <h2 class="page-header">Service List</h2>
             </div>
             <div class="col-md-4">
                 <div class="media">
                     <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                        </span>
                     </div>
                     <div class="media-body">
                         <h4 class="media-heading">Service One</h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                     </div>
                 </div>
                 <div class="media">
                     <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-car fa-stack-1x fa-inverse"></i>
                        </span>
                     </div>
                     <div class="media-body">
                         <h4 class="media-heading">Service Two</h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                     </div>
                 </div>
                 <div class="media">
                     <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-support fa-stack-1x fa-inverse"></i>
                        </span>
                     </div>
                     <div class="media-body">
                         <h4 class="media-heading">Service Three</h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="media">
                     <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                        </span>
                     </div>
                     <div class="media-body">
                         <h4 class="media-heading">Service Four</h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                     </div>
                 </div>
                 <div class="media">
                     <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-bomb fa-stack-1x fa-inverse"></i>
                        </span>
                     </div>
                     <div class="media-body">
                         <h4 class="media-heading">Service Five</h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                     </div>
                 </div>
                 <div class="media">
                     <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-bank fa-stack-1x fa-inverse"></i>
                        </span>
                     </div>
                     <div class="media-body">
                         <h4 class="media-heading">Service Six</h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="media">
                     <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-paper-plane fa-stack-1x fa-inverse"></i>
                        </span>
                     </div>
                     <div class="media-body">
                         <h4 class="media-heading">Service Seven</h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                     </div>
                 </div>
                 <div class="media">
                     <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-space-shuttle fa-stack-1x fa-inverse"></i>
                        </span>
                     </div>
                     <div class="media-body">
                         <h4 class="media-heading">Service Eight</h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                     </div>
                 </div>
                 <div class="media">
                     <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-recycle fa-stack-1x fa-inverse"></i>
                        </span>
                     </div>
                     <div class="media-body">
                         <h4 class="media-heading">Service Nine</h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                     </div>
                 </div>
             </div>
         </div>
         <!-- /.row -->

         <hr>

     </div>
     @endsection