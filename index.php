<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#ffe6f2;
        }

        .container{
            width:400px;
            margin:100px auto;
            background:white;
            padding:25px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.2);
        }

        h2{
            text-align:center;
            color:#ff69b4;
        }

        input{
            width:100%;
            padding:10px;
            margin-top:5px;
            margin-bottom:15px;
            border:1px solid #ffc0cb;
            border-radius:5px;
            box-sizing:border-box;
        }

        button{
            width:100%;
            padding:10px;
            background:#ff69b4;
            color:white;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#ff4fa3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Pendaftaran</h2>

    <form action="kirim_email.php" method="post">

        <label>Nama</label>
        <input type="text" name="nama" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <button type="submit">Daftar</button>

    </form>
</div>

</body>
</html>