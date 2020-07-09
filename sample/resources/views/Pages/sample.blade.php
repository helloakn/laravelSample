@extends('Layout.MainLayout')


@section('BodyContainer')

<div id='container'>
    @include('Components.test',['testName'=>'hello this is test'])
    @include('Components.test',['testName'=>'hasdfasdf'])
</div>
<div id='container'>
    @for ($i = 0; $i < 10; $i++)
        @include('Components.test',['testName'=>$i])
    @endfor
</div>
<style>
    #container{
        display: flex;
  justify-content: space-between;
    }
</style>

@endsection