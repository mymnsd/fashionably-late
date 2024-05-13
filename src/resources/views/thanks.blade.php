@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css.thanks.css">
@endsection

@section('content')
<div class="thanks__content">
  <div class="thanks__ttl">
    <h2>お問い合わせありがとうございました</h2>
  </div>
  <div class="thanks__button">
    <a class="thanks-link" href="/">HOME</a>
  </div>
</div>
@endsection
