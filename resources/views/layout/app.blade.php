<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
   

</head>
@include('layout.navbar')
<body>
   


{{----debut de contenu-----}}
@yield('contenu')
{{--fin fin fin du contenu---}}


    <FOOter>
        <p>
            emedia.io
        </p>
    </FOOter>
</body>

</html>