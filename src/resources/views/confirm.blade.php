@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css.confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
  <div class="confirm__ttl">
    <h2>Confirm</h2>
  </div>
  <form  class="form" action="/contacts" method="post">
    @csrf
    <div class="confirm-table">
      <table class="confirm-table__inner">
        <tr class="confrim-table__row">
          <th class="confirm-table__header">
            お名前
          </th>
          <td class="confirm-table__text">
            <input type="text" name="name" value="{{ $contact['name'] }}" readonly>
          </td>
        </tr>
        <tr class="confrim-table__row">
          <th class="confirm-table__header">
            性別
          </th>
          <td class="confirm-table__text">
            <input type="radio" name="gender" value="{{ $contact['gender'] }}" readonly>
          </td>
        </tr>
        <tr class="confrim-table__row">
          <th class="confirm-table__header">
            メールアドレス
          </th>
          <td class="confirm-table__text">
            <input type="text" name="email" value="{{ $contact['email'] }}" readonly>
          </td>
        </tr>
        <tr class="confrim-table__row">
          <th class="confirm-table__header">
            電話番号
          </th>
          <td class="confirm-table__text">
            <input type="text" name="tel" value="{{ $contact['tel'] }}" readonly>
          </td>
        </tr>
        <tr class="confrim-table__row">
          <th class="confirm-table__header">
            住所
          </th>
          <td class="confirm-table__text">
            <input type="text" name="adress" value="{{ $contact['adress'] }}" readonly>
          </td>
        </tr>
        <tr class="confrim-table__row">
          <th class="confirm-table__header">
            建物名
          </th>
          <td class="confirm-table__text">
            <input type="text" name="building" value="{{ $contact['building'] }}" readonly>
          </td>
        </tr>
        <tr class="confrim-table__row">
          <th class="confirm-table__header">
            お問い合わせの種類
          </th>
          <td class="confirm-table__text">
            <input type="text" name="inquiry-type" value="{{ $contact['contact-type'] }}" readonly>
          </td>
        </tr>
        <tr class="confrim-table__row">
          <th class="confirm-table__header">
            お問い合わせ内容
          </th>
          <td class="confirm-table__text">
            <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly>
          </td>
        </tr>
      </table>
    </div>
    <div class="form__button">
      <button class="form__button-submit">
        送信
      </button>
      <a class="modify__link" href="/confirm">修正</a>
    </div>
  </form>
</div>
@endsection