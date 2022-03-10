# WordPressのオリジナルブランクテーマ

## 概要
`WP-SCSS`での開発を前提にしたブランクテーマの雛形  
<br><br>


## 環境構築方法
### ローカル開発環境構築
[別リポジトリ](https://github.com/n-tsukiya/wordpress-template)を参考に環境構築  
<br>


### テーマのアップロード
このリポジトリをそのまま`html/wp-content/themes/`配下で展開し、gitの管理を外す  
```
cd [プロジェクトのディレクトリ]/html/wp-content/themes/
git clone git@github.com:n-tsukiya/wordpress-blanktheme.git
mv wordpress-blanktheme [テーマ名]
cd [テーマ名]
rm -rf .git
```

`style.css`の修正（プロジェクト直下の方のstyle.css）
```
/*!
Theme Name: [テーマ名]
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
### WP-SCSSの設定
管理画面 > 設定 > WP-SCSS を開く  
| 設定項目 | 設定値 |
|:----------:|:------------:|
| Base Location | Current Theme |
| Scss Location | /scss/ |
| Css Location | /css/ |
| Compiling Mode | Compressed |
| Source Map Mode | None |
| Error Display | Show to Logged in Users |
| Enqueue Stylesheets | チェック無し |
| Always Recompile | チェック有り |

上記設定で、ブラウザリロードで自動コンパイルが行われる  
（エントリーポイントは`/scss/style.scss`なので、ここで`@import`文を書くことを忘れないこと）  
<br>
<br>


### 固定ページ用ファイルの作成方法
TOPページは`front-page.php`, 下層ページは`page-**.php`としてコーディングを行う（スラッグを`**`と同じ文字にすることに注意）  
<br><br>


## その他
### リポジトリの作成
基本的な準備が完了したら、このテーマではなく、WordPressのリポジトリ自体でリポジトリを作成する  
その際に`scc/style.css`は.gitignoreに記述しておく
<br><br>

### contact form 7 のテンプレート
現在準備中
<br>

