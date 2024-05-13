@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css.index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
  <div class="contact__ttl">
    <h2>Contact</h2>
  </div>
  <form  class="form" action="/contacts/confirm" method="post">
    @csrf  
    <div class="form__group">
      <div class="form__group-ttl">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="last_name" placeholder="例：山田" value="{{ old('last_name') }}">
          <input type="text" name="first_name" placeholder="例：太郎" value="{{ old('first_name') }}">
        </div>
      </div>
      <div class="form__error">
        @error('last_name')
        {{ $message }}
        @enderror     
        @error('first_name')
        {{ $message }}
        @enderror     
      </div>
    </div>
    <div class="form__group">
      <div class="form-group-ttl">
        <span class="form__label--item">性別</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <input type="radio" name="gender" value="男性" checked>男性<br>
        <input type="radio" name="gender" value="女性">女性<br>
        <input type="radio" name="gender" value="その他">その他<br>
      </div>
      <div class="form__error">
        @error('gender')
        {{ $message }}
        @enderror          
      </div>
    </div>
    
    <div class="form__group">
      <div class="form__group-ttl">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form-group-content">
        <div class="form__input--text">
          <input type="text" name="email" placeholder="例：test@example.com" value="{{ old('email') }}">
        </div>
      </div>
      <div class="form__error">
        @error('email')
        {{ $message }}
        @enderror           
      </div>
    </div>
    <div class="form__group">
      <div class="form__roup-ttl">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="tel" placeholder="080" value="{{ old('tel') }}">
          <span class="hyphen">-</span>
          <input type="text" name="tel" placeholder="1234" value="{{ old('tel') }}">
          <span class="hyphen">-</span>
          <input type="text" name="tel" placeholder="5678" value="{{ old('tel') }}">
        </div>
      </div>
      <div class="form__error">
        @error('tel')
        {{ $message }}
        @enderror           
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-ttl">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" >
        </div>
      </div>
      <div class="form__error">
        @error('address')
        {{ $message }}
        @enderror           
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-ttl">
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form-group-content">
        <div class="form__input--text">
          <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101" value="{{ old('building') }}">
        </div>
      </div>
      <div class="form__error">
              
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-ttl">
        <span class="form__label--item">お問い合わせの種類</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <select name="content">
          <option value="1">選択してください</option>
        </select>
      </div>
      <div class="form__error">
        @error('content')
        {{ $message }}
        @enderror           
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-ttl">
        <span class="form__label--item">お問い合わせ内容</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
        </div>
      </div>
      <div class="form__error">
        @error('detail')
        {{ $message }}
        @enderror           
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