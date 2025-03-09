@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>H O M E &emsp; </h1>
@stop

@section('content')
    <p class="title">✿ &emsp; アニマル占いへようこそ &emsp; ✿</p>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <style>
h1 {
  color: #B8860B(15, 13, 13, 0.88);/*文字色*/
  padding: 0.5em;/*文字周りの余白*/
  display: inline-block;/*おまじない*/
  line-height: 1.3;/*行高*/
  background-color: #ffffcc;
  background-image:
  radial-gradient(#7bded9 30%, transparent 30%);
  background-size: 20px 20px;
  vertical-align: middle;
  border-radius: 25px 0px 0px 25px;/*左側の角を丸く*/
}
h1:before {
  content: '●';
  color: white;
  margin-right: 150px;
} 
.title {color: #20B2AA; } /*文字色*/
.title {font-weight:strong;} /*文字の太さ*/
.title {font-size: 55px;} /*文字の大きさ*/
</style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
