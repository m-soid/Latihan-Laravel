<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Laravel</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>  
  <link rel="stylesheet" href="{{ asset('css/home.css') }}"> 
 </head>
 <body>


  <header>
  <div class="headd">
   <div class="narapidana">
   <nav>
    <a href="web">
     Home
    </a>
    <a href="about">
     About
    </a>
    <a href="contact">
     Contact
    </a>
   </nav>
   </div>
  </div>
</header>
    <h1>ini halaman kontak</h1>
    <h2>Hubungi : {{ $nomor }}</h2>
</body>
</html>