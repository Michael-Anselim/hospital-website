@extends('layout.app')

@section('title','Home')

@section('content')
 <!--START SCROLL TOP BUTTON -->
 <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->
<x-services/>
<x-about-us/>
<x-statistics/>
<x-our-features/>
<x-employees/>

@endsection