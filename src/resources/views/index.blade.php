<!DOCTYPE html>
<html lang="ja">

@extends('layouts.default')


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
            @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前※</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="first_name" placeholder="山田" value="{{ old('first_name') }}" />
                            <input type="text" name="last_name" placeholder="太郎" value="{{ old('last_name') }}" />
                        </div>
                    </div>
                    <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別※</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--radio">
                            <input type="radio" name="gender" value="男性" value="{{ old('gender') }}" />男性
                            <input type="radio" name="gender" value="女性" value="{{ old('gender') }}" />女性
                            <input type="radio" name="gender" value="その他" value="{{ old('gender') }}" />その他
                        </div>
                    </div>
                    <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス※</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
                        </div>
                    </div>
                    <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号※</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="tel" name="first" placeholder="080" value="{{ old('tel') }}"/>-
                            <input type="tel" name="second" placeholder="1234" value="{{ old('tel') }}"/>-
                            <input type="tel" name="third" placeholder="5678" value="{{ old('tel') }}"/>
                        </div>
                        <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所※</span>
                    <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="address" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                        </div>
                        <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="building" name="building" placeholder="例：千駄ヶ谷マンション101" value="{{ old('building') }}" />
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせの種類※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--select">
                            <select name="detail" placeholder="選択してください" value="{{ old('detail') }}" >
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                        <textarea name="content" placeholder="お問い合わせ内容をご記入ください" value="{{ old('content') }}"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>