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
    <button class="thanks__button-submit">
      HOME
    </button>
  </div>
</div>
@endsection
