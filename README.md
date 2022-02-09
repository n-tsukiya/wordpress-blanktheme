# WordPressのオリジナルブランクテーマ

## 概要
`WP-SCSS`での開発を前提にしたブランクテーマの雛形  
<br><br>


## 環境構築方法
### ローカル開発環境構築
[別リポジトリ](https://github.com/n-tsukiya/wordpress-template)を参考に環境構築  
<br>


### テーマのアップロード
```
cd [環境]/html/wp-content/themes/
git clone [このリポジトリ]
mv [このリポジトリ] [プロジェクト名]
rm -rf .git
```
このリポジトリをそのまま`html/wp-content/themes/`配下で展開し、gitの管理を外す  

`style.css`の修正
```
/*!
Theme Name: [プロジェクト名]
Author: 株式会社TOKOS
Version: 1.0.0
*/
```
<br>


### プラグインのインストール
**削除するもの**
- dolly
- akismet

**必ず入れておくもの**
- WP-SCSS
- Show Current Template
- WP Multibyte Patch

**要件次第だがほとんどの場合入れておくもの**
- All-in-One WP Migration
- contact form 7

<br><br>


## 開発の流れ
TOPページは`front-page.php`, 下層ページは`page-**.php`としてコーディングを行う
<br><br>


## その他
### contact form 7 のテンプレート
現在準備中
<br>

