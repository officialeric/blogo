<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" ></script>
    <style>
        .bgimage{
            background-image: url('https://t3.ftcdn.net/jpg/04/37/68/92/240_F_437689271_MNn0FNnk69uUydet38GZ79tTPGoRQFkc.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 50%;
        }
        ::-webkit-scrollbar {
           display: none;
        }
    </style>
</head>
<body class="flex justify-center items-center bgimage">
    {{ $slot }}
</body>
</html>