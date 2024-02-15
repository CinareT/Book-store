<x-mail::message>
# Introduction

The body of your message.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <div class="datas">
    <div>salam </div>
    <div></div>
    <div></div>
    <div></div>
  </div>
    
</body>
</html>
<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
