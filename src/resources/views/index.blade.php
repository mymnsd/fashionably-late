@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css.index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
  <div class="contact__ttl">
    <h2>Contact</h2>
  </div>
  <form  class="form" action="/confirm" method="post">
    @csrf  
    <div class="form__group">
      <div class="form__group-ttl">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="last-name" placeholder="例：山田">
          <input type="text" name="first-name" placeholder="例：太郎">
        </div>
      </div>
      <div class="form__error">
              <!-- バリデーション設定 -->
      </div>
    </div>
    <div class="form__group">
      <div class="form-group-ttl">
        <span class="form__label--item">性別</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <input type="radio" name="gender" value="male" checked>男性<br>
        <input type="radio" name="gender" value="female">女性<br>
        <input type="radio" name="gender" value="other">その他<br>
      </div>
      <div class="form__error">
              <!-- バリデーション設定 -->
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-ttl">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form-group-content">
        <div class="form__input--text">
          <input type="text" name="email" placeholder="例：test@example.com">
        </div>
      </div>
      <div class="form__error">
              <!-- バリデーション設定 -->
      </div>
    </div>
    <div class="form__group">
      <div class="form__roup-ttl">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="tel" placeholder="080">
          <span class="hyphen">-</span>
          <input type="text" name="tel" placeholder="1234">
          <span class="hyphen">-</span>
          <input type="text" name="tel" placeholder="5678">
        </div>
      </div>
      <div class="form__error">
              <!-- バリデーション設定 -->
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-ttl">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="adress" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3">
        </div>
      </div>
      <div class="form__error">
              <!-- バリデーション設定 -->
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-ttl">
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form-group-content">
        <div class="form__input--text">
          <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101">
        </div>
      </div>
      <div class="form__error">
              <!-- バリデーション設定 -->
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-ttl">
        <span class="form__label--item">お問い合わせの種類</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <select name="contact-type">
          <option value="1">選択してください</option>
        </select>
      </div>
      <div class="form__error">
              <!-- バリデーション設定 -->
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-ttl">
        <span class="form__label--item">お問い合わせ内容</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="detail" placeholder="お問い合わせ内容をご記載ください"></textarea>
        </div>
      </div>
      <div class="form__error">
              <!-- バリデーション設定 -->
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">
        確認画面
      </button>
    </div>
  </form>
</div>
@endsection