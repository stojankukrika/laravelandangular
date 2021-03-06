@extends('layouts.master')

<!-- META -->
@section('meta')

    <meta name="keywords" content="Laravel 4.2, AngularJS, blog application">
    <meta name="description" content="Just a simple authenticated blog app made with Laravel and AngularJS. Fork on github and read the guide at http://justinvoelkel.me">

@stop

@section('content')
    <a href="https://github.com/justinvoelkel/laravelandangular"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://camo.githubusercontent.com/82b228a3648bf44fc1163ef44c62fcc60081495e/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_red_aa0000.png"></a>
    <h1>{{$post->title}}</h1>
    <div>
        <p>{{$post->content}}</p>
    </div>
    <hr/>
@stop