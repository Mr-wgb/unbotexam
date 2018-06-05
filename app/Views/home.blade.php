<html lang="zh-cmn-Hans">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="/bbs/create" method="post">
        Name:<br />
        &nbsp;<input type="text" name="name" id="name" /> <br />
        Comment:<br />
        &nbsp;<textarea name="comment" id="comment" rows=3 cols=40></textarea> <br />
        <input type="submit" value="提交" />
    </form>
    @foreach ($bbses as $bbs)
        <hr />
        <b>{{ $bbs->name }}</b>&nbsp;&nbsp;{{ $bbs['created_at'] }}<br />
        {!! nl2br($bbs["comment"]) !!}
    @endforeach
</body>
</html>
