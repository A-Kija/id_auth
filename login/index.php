<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://id-sandbox.dokobit.com/js/dokobit-integration.min.js"></script>
    <script src="http://localhost/id_auth/app.js" defer></script>
    <style>
        div.doc {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        img {
            display: block;
            max-width: 200px;
            margin-bottom: 20px;
        }
        #codeSmartid {
            color: #fff!important;
        }

    </style>
</head>

<body>

    <div id="Dokobit-identity-container" class="doc"></div>

    <div id="login-button" class="doc">
        <a href="#">
            <img src="http://localhost/id_auth/login.svg" alt="button">
        </a>
        <b>Click to Login</b>
    </div>



</body>

</html>