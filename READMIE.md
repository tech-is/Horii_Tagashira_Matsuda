# K-G-Ban

## K-G-Banとは
オープンソースの掲示板システムです。

## ダウンロード方法
GitHubからダウンロードするか、```git clone```してください。

ダウンロード先
https://github.com/tech-is/Horii_Tagashira_Matsuda

git cloneする場合
```
git clone https://github.com/tech-is/Horii_Tagashira_Matsuda.git
```
## 主な機能
```
・掲示板チャンネル作成（誰でも作成可）
・作成した掲示板への投稿機能
・自分の投稿に対して削除機能(削除パス設定)
・管理者画面
    ->管理者ログイン機能
    ->掲示板削除機能
    ->投稿削除機能
```

## 環境構築
```
・apache  
・PHP 7.3.12  
・MYSQL 10.4.10-MariaDB   
・Codeigniter 3.1.11  
```

## データベースの設定
/application/config/database.phpの以下の部分を修正してください。

| パラメータ名 | 指定値 | 例 |
| :---: | :---: | :---: |
| hostname | データベースサーバのホスト名 | localhostなど |
| username | データベースに接続するために使用するユーザ名 | rootなど |
| password | データベースに接続するために使用するパスワード | ****** |
| database | 接続したいデータベース名 | boardなど |


## フォルダ構成
```
・application/  
    ・config/ デフォルトコントローラーの設定やデータベースの設定ファイルを置いています  
    ・controler/ コントローラーのフォルダ  
    ・model/ データベース周りの関数をまとめたクラスを置いているフォルダ  
    ・views/ フロントエンドファイルをまとめたフォルダ  
・system/ ライブラリやヘルパーを置いているフォルダ  
・assets/ 静的ファイルをおいているフォルダ  
・index.php 最初にこのファイルを読み込んでください  
```