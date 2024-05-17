@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<header class="header">
    <div class="header__inner">
      <h1>FashionablyLate</h1>
    </div>
</header>
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
        <div class="form__input--text name">
          <input class="form__input--name bg" type="text" name="last_name" placeholder="例：山田" value="{{ old('last_name') }}">
          <input class="form__input--name bg" type="text" name="first_name" placeholder="例：太郎" value="{{ old('first_name') }}">
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
    </div>
    <div class="form__group">
      <div class="form__group-ttl">
        <span class="form__label--item">性別</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <input class="form__group-radio" id="male" type="radio" name="gender" value="1" {{ old('gender') == 1 ? 'checked' : '' }} checked>
        <label class="form__group-label" for="male">男性</label>

        <input class="form__group-radio" id="female" type="radio" name="gender" value="2" {{ old('gender') == 2 ? 'checked' : '' }}>
        <label class="form__group-label" for="female">女性</label>

        <input class="form__group-radio" id="other" type="radio" name="gender" value="3" {{ old('gender') == 3 ? 'checked' : '' }}>
        <label class="form__group-label" for="other">その他</label>
        <div class="form__error">
            @error('gender')
            {{ $message }}
            @enderror          
        </div>
      </div>
    </div>
    
    <div class="form__group">
      <div class="form__group-ttl">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input class="form__input--email bg" type="text" name="email" placeholder="例：test@example.com" value="{{ old('email') }}">
        </div>
        <div class="form__error">
            @error('email')
            {{ $message }}
            @enderror           
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-ttl">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text tel">
          <input class="form__input--tel bg" type="text" name="tel1" placeholder="080" value="{{ old('tel1') }}">
          <span class="hyphen">-</span>
          <input class="form__input--tel bg" type="text" name="tel2" placeholder="1234" value="{{ old('tel2') }}">
          <span class="hyphen">-</span>
          <input class="form__input--tel bg" type="text" name="tel3" placeholder="5678" value="{{ old('tel3') }}">
        </div>
        <div class="form__error">
            @error('tel1')
            {{ $message }}
            @enderror           
            @error('tel2')
            {{ $message }}
            @enderror           
            @error('tel3')
            {{ $message }}
            @enderror           
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-ttl">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input class="form__input--address bg" type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" >
        </div>
        <div class="form__error">
            @error('address')
            {{ $message }}
            @enderror           
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-ttl">
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input class="form__input--building bg" type="text" name="building" placeholder="例：千駄ヶ谷マンション101" value="{{ old('building') }}">
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
        <select class="form__group-content--select bg" name="content">
          <option value="">選択してください</option>
          @foreach($categories as $category)
            <option value="{{ $category['id'] }}" @if(old('content') == $category->id) selected @endif>
              {{ $category['content'] }}
            </option>>
          @endforeach
        </select>
        <div class="form__error">
            @error('content')
            {{ $message }}
            @enderror           
        </div>
      </div>
    </div>
    <div class="form__group content-desc">
      <div class="form__group-ttl">
        <span class="form__label--item">お問い合わせ内容</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <textarea class="form__input--textarea bg" name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
        </div>
        <div class="form__error">
            @error('detail')
            {{ $message }}
            @enderror           
        </div>
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