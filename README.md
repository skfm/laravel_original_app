## JPT(Joke Paychology Test)について
「JPT」は相性診断テスト風ジョークアプリです。  
使用したい相手に URL を送り質問に答えてもらうと  
予め登録しているメッセージと画像が診断結果に表示されます。
メッセージに自分のアピール、画像に自分の写真を登録することで  
異性に驚きとちょっとしたユーモアを提供します。

### JPTのターゲット
婚活や恋活で「初対面の異性との話のネタに困っている」  
「面白いことを言えずに会話が盛り上がらない」と  
悩んでいる20代男性を想定。

### JPTの効果
- 使用した相手に驚きとユーモアを与える。
- ジョークだと分かっても相性が良いと結果亜が無意識に意識してしまうので恋愛の成功確率をあげる
- 表示させるメッセージに自分の長所を書くことで第3者視点に見せかけて長所をアピールできる

### 開発環境
- windows10
- Docker for Windows
- Laradock
- Nginx
- MYSQL 5.7
- Laravel 7.15.0
- PHP Version 7.3
- phpMyAdmin

### データベースの設計
#### usersテーブル
- id int 主キー
- name varchar(255)
- email varchar(255),unique
- email_verified_at timestamp,nullable
- password varchar(255)
- content text
- image_path varchar(255)
- remember_token varchar(100)
- created_at timestamp
- updated_at timestamp
