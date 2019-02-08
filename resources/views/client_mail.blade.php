<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
       

        <title>Document</title>
   
    </head>
    <body>
    <h3>VIP OnTheGo Inquiry</h3>
        <p>Name:  {{ $client_name }}</p>
        <p>Email:  {{ $client_email }}</p>
        <p>Phone No:  {{ $phone }}</p>
        <p>Message:  {{ $client_message }}</p>
    </body>
</html>
