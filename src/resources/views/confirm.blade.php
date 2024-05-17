@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<header class="header">
    <div class="header__inner">
      <h1>FashionablyLate</h1>
    </div>
</header>
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
            <input type="hidden" name="last_name" value="{{ $contact['last_name']}}" readonly>
            <input type="hidden" name="first_name" value="{{ $contact['first_name']}}" readonly>
            <?php
            echo ($contact['last_name'] . '　' . $contact['first_name']);
            ?>
          </td>
        </tr>
        <tr class="confrim-table__row">
          <th class="confirm-table__header">
            性別
          </th>
          <td class="confirm-table__text">
            <input type="hidden" name="gender" value="{{ $contact['gender'] }}" readonly>
            <?php
              if ($contact['gender'] == '1') {
                echo '男性';
              } else if ($contact['gender'] == '2') {
                echo '女性';
              } else if($contact['gender'] == '3') {
                echo 'その他';
              }
            ?>
          </td>
        </tr>
        <tr class="confrim-table__row">
          <th class="confirm-table__header">
            メールアドレス
          </th>
          <td class="confirm-table__text">
            <input class="confirm-table__input" type="text" name="email" value="{{ $contact['email'] }}" readonly>
          </td>
        </tr>
        <tr class="confrim-table__row">
          <th class="confirm-table__header">
            電話番号
          </th>
          <td class="confirm-table__text">
            <input class="confirm-table__input" type="text" name="tel" value="{{ $contact['tel'] }}" readonly>
            <input type="hidden" name="tel1" value="{{ $contact['tel1'] }}" readonly>
            <input type="hidden" name="tel2" value="{{ $contact['tel2'] }}" readonly>
            <input type="hidden" name="tel3" value="{{ $contact['tel3'] }}" readonly>
          </td>
        </tr>
        <tr class="confrim-table__row">
          <th class="confirm-table__header">
            住所
          </th>
          <td class="confirm-table__text">
            <input class="confirm-table__input" type="text" name="address" value="{{ $contact['address'] }}" readonly>
          </td>
        </tr>
        <tr class="confrim-table__row">
          <th class="confirm-table__header">
            建物名
          </th>
          <td class="confirm-table__text">
            <input class="confirm-table__input" type="text" name="building" value="{{ $contact['building'] }}" readonly>
          </td>
        </tr>
        <tr class="confrim-table__row">
          <th class="confirm-table__header">
            お問い合わせの種類
          </th>
          <td class="confirm-table__text">
            <input type="hidden" name="content" value="{{ $contact['content'] }}" readonly>
            <?php
            // 数字を入れたらなぜかできた
              if ($contact['content'] == '1') {
                echo '商品のお届けについて';
              } else if ($contact['content'] == '2') {
                echo '商品の交換について';
              } else if($contact['content'] == '3') {
                echo '商品トラブル';
              }else if($contact['content'] == '4') {
                echo 'ショップへのお問い合わせ';
              }else if($contact['content'] == '5') {
                echo 'その他';
              }
            ?>
          </td>
        </tr>
        <tr class="confrim-table__row">
          <th class="confirm-table__header">
            お問い合わせ内容
          </th>
          <td class="confirm-table__text">
            <input class="confirm-table__input" type="text" name="detail" value="{{ $contact['detail'] }}" readonly>
          </td>
        </tr>
      </table>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">
        送信
      </button>
        <button class="modify__link" type="submit" name="back" value="back"><span class="modify__link--inner">修正</span></button>
    </div>
  </form>
</div>
@endsection