<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title><?= $data['title'] ?></title>
</head>

<body>
  <header class="w-full bg-blue-300">
    <nav class="flex justify-between max-w-screen-xl mx-auto px-5 py-3 item-center">
      <h1 class="text-3xl font-bold">Mvc app</h1>
      <ul class="flex gap-5">
        <li class="cursor-pointer"><a href=<?= BASE_URL ?>>home </a></li>
        <li class="cursor-pointer"><a href=<?= BASE_URL .'about' ?>>about</a></li>
        
        <li class="cursor-pointer"><a href=<?= BASE_URL .'product' ?>>Products</a></li>
      </ul>
    </nav>
  </header>
  <main class="justify-between max-w-screen-xl mx-auto px-5 mt-10 h-[75vh]">