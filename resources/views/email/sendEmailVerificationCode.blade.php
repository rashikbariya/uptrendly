<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Mail</title>
</head>
<body style="text-align: center">

<img src="http://127.0.0.1:8000/img/logo/full.png" style="width: 100px;text-align: center">
<h4>Hello {{$username}}</h4>
<p>Thank you for joining <b>uptrendly</b> as an {{$user=='influencer'?'Influencer':'Brand'}}! We really appreciate it. Please click the button below to verify your account:</p>
<a href="{{url('user/email-verification/'.$user_id .'/' . $token)}}" style="margin-bottom: 10px;padding: 10px; text-decoration: none; background: #65cadb; color: white;border-radius: 8px">verify account</a>
<p>This link will only be valid for 24 hours. If it expires, you can resend it from your profile:</p>
<p>If you have any problems, please contact us: <a href=" mailto:corporate@uptrendly.com">corporate@uptrendly.com</a></p>
<p>Uptrendly Group</p>

<p>Follow us on:</p>
<ul style="
    list-style:  none;
    padding: 0;
">
    <li style="
    display:  inline-block;
"><a href="https://www.facebook.com/Uptrendly/" target="_blank"><img style="width: 40px; border-radius: 50%" src="http://127.0.0.1:8000/frontend/img/fb.jpg"></a></li>
    <li style="
    display:  inline-block;
"><a href="https://www.instagram.com/up.trendly/" target="_blank"><img style="width: 40px; border-radius: 50%" src="http://127.0.0.1:8000/frontend/img/instagram.png"></a></li>
    <li style="
    display:  inline-block;
"><a href="https://www.youtube.com/channel/UCCTIflUlM9NWs7QNJbBrYJA" target="_blank"><img style="width: 40px; border-radius: 50%" src="http://127.0.0.1:8000/frontend/img/youtube.png"></a></li>
</ul>

</body>
</html>
