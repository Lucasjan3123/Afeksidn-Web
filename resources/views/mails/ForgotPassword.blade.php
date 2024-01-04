<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .card {
            margin: auto;
            align-items: center;
            justify-items: center;
            width: 500px;
            height: 250px;
            background-color: whitesmoke;
            padding: 30px
        }

        a {
            text-decoration: none;
            font-weight: bolder;
            color: white
        }
        .button {
            width: 200px;
            height: 30px;
            background-color: teal;
            padding-top: 15px;
             padding-bottom: 7px
        }
        .d-flex {
            display: flex;
        }


        
    </style>
</head>
<body>
    <div class="card">
        <img alt="logo_afeksi" src="https://images.glints.com/unsafe/360x0/glints-dashboard.s3.amazonaws.com/company-logo/d6b56b99be696c0b121cb7c858367b58.jpeg" style="width: 90px; height:90px;margin-left:-15px; margin-top:-15px" />
        <h2 style="margin-top:-5px;">Hello, {{ $email }}</h2>
        <h3 style="padding-top: 3px;">Your Reset Link, Please confirm to click this Button</h3>
        <center style="margin-top: 20px;">
            <a type="button" href="{{ $token }}" target="_blank">
            <div class="button">Click To Continue</div></a>
        </center>
        <hr style="margin-top: 20px"/>
        <div class="d-flex">
            <p style="font-size: 12px;margin-top:-2px;"><span style="font-weight: bolder">AFEKSI.IDN</span> 2023-COPYRIGHT</p>
            {{-- <p style="font-size: 12px;justify-content:right">Contact: +6282142625552</p> --}}
        </div>
    </div>
</body>
</html>