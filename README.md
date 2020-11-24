![JTP](https://user-images.githubusercontent.com/44170627/99199424-5c537e80-27e2-11eb-9db5-60667a846914.png)

# JPT(Joke Paychology Test)
「JPT」は相性診断テスト風ジョークアプリです。
使用したい相手に URL を送り質問に答えてもらうと
予め登録しているメッセージと画像が診断結果に表示されます。
メッセージに自分のアピール、画像に自分の写真を登録することで
異性に驚きとちょっとしたユーモアを提供します。

## 本番環境　テストユーザー
- ログインページ： [https://www.jpt-app.com/](https://www.jpt-app.com/)
- 質問ページ： [https://www.jpt-app.com/question?id=41](https://www.jpt-app.com/question?id=41)
- メールアドレス：test100@test.com
- パスワード：12345678

## JPTのターゲット
婚活や恋活で「初対面の異性との話のネタに困っている」
「面白いことを言えずに会話が盛り上がらない」と
悩んでいる20代男性を想定。

## JPTの効果
- 使用した相手に驚きとユーモアを与える。
- ジョークだと分かっても相性が良いと結果亜が無意識に意識してしまうので恋愛の成功確率をあげる
- 表示させるメッセージに自分の長所を書くことで第3者視点に見せかけて長所をアピールできる

## 使用技術
- HTML
- CSS(scss,bootstrap)
- JavaScript(jQuery)
- PHP7.3(Laravel7.15.0)
- Apache
- MYSQL 5.7
- AWS S3
- heroku
- Docker(Laradock)
- phpMyAdmin

## ER図

![Untitled-Diagram-drawio-diagrams-net](https://user-images.githubusercontent.com/44170627/99200118-c9691300-27e6-11eb-806f-fff30c9777f8.png)

## 使い方
以下にJPTの使い方を説明します。

### 表示させたいメッセージと画像の登録

![JPT-詳細1](https://user-images.githubusercontent.com/44170627/99199407-3d54ec80-27e2-11eb-8a32-002223ee98ca.png)

ユーザー管理ページのサイドメニューから、診断結果ページに登録したい
テキストと画像を登録する（1、2）

### 表示させたいメッセージと画像の登録

![JPT-詳細1](https://user-images.githubusercontent.com/44170627/99199407-3d54ec80-27e2-11eb-8a32-002223ee98ca.png)

ユーザー管理ページの真ん中にあるURLをコピーし、使用したい相手にURLを共有する（3）

### 質問ページと結果ページの説明

![理想のお相手診断テスト](https://user-images.githubusercontent.com/44170627/99199416-5067bc80-27e2-11eb-876a-7ced4de1cc74.png)

共有したURLを開くと相性診断テストがはじまる
全部で10問答えると診断結果ページが表示される

![理想のお相手診断テスト｜結果](https://user-images.githubusercontent.com/44170627/99199419-58276100-27e2-11eb-8ec3-2712771fcd41.png)

ユーザー管理ページで登録した画像と文章が表示される



