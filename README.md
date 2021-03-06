# Minimalist Form （ミニマリスト フォーム） with bootstrap 4

日本で必要とされるフォームの確認画面に対応した、とてもシンプルなフォームです。

フォームの入力画面、確認画面（自動作成）、完了画面（自動作成）、メール内容（自動作成）を、最低限のコードで構築することができます。

確認画面のために、面倒なコードを追加したくないというミニマリストのためのフォームです。

![スクリーンショット](https://user-images.githubusercontent.com/84831431/124436938-7d88cf80-ddb1-11eb-80ce-a388e1fd0f69.png)

# DEMO

https://demotestsystem.github.io/minimalist_form_bs/

※確認画面の表示まで。実際に送信することはできません。完了画面も表示されません。

# Requirement

* php

# Installation

* use cdn

# Usage

```
<input type="text" class="form-control" id="お名前" name="お名前" maxlength="60" required>
```

いつものようにフォームのタグを設定するだけで、確認画面と送信メールの内容が自動で作成されます。

基本的に send.php の送信先メールアドレスを変更するだけで、お問い合わせフォームが完成します。

```
// 送信先メールアドレス
$to = 'xxxxxxx@xxx.xx.xx';
```


# Note

* スパム利用される恐れがある自動返信の機能は省略しています。
* シンプルなお問い合わせの利用を想定しております。その為、ファイルの添付や連想配列には対応しておりません。ご希望があれば対応いたします。

# License

[MIT](https://choosealicense.com/licenses/mit/)
