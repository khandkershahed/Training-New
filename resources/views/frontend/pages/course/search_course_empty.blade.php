@extends('frontend.master')
@section('content')
    
    <section class="showcase">

        <img class="img-fluid" src="{{ asset('storage/common_banner/' . optional($common_banner)->course_banner) }}"
            alt="Picture" onerror="this.onerror=null; this.src='https://images.ctfassets.net/ihx0a8chifpc/GTlzd4xkx4LmWsG1Kw1BB/ad1834111245e6ee1da4372f1eb5876c/placeholder.com-1280x720.png?w=1920&q=60&fm=webp';"/>

    </section>

    
@endsection
