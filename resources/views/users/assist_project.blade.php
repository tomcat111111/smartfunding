<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SmartFunding | 支援プロジェクト一覧</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="../css/app.css" rel="stylesheet" type="text/css">
        <link href="../css/common.css" rel="stylesheet" type="text/css">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="../js/header.js"></script>
        
    </head>
    <body>
           @include('common.header')
           @include('common.mypage_header')
           <div class="mypage_content vh60">
              <h2>支援プロジェクト一覧</h2>
              <p>支援したプロジェクトはありません。</p>                   
           </div>
           @include('common.footer')
    </body>
</html>
