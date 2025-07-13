<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="  flex items-center justify-center h-screen bg-gray-900 text-white ">
<main>
<form action="./includes/submit.php" method="post" class="flex bg-gray-800 flex-col flex-center items-center justify-center gap-4 border border-2 py-10 px-20 rounded border-gray-700 shadow-xl">
<div class="flex flex-col w-full"> 
  <label for="name" class="font-semibold text-indigo-400  text-lg ">name :</label>
  <input required type="text" name="name" id="name" placeholder="name..." class="bg-gray-700 p-4  outline-none" >
</div>
  <div class="flex flex-col">
  <label for="email" class="font-semibold text-indigo-400 text-lg ">email :</label>
  <input required type="text" name="email" id="email" placeholder="email..." class="bg-gray-700 p-4 border-white outline-none w-full" >
</div>
<div class="flex flex-col">
  <label for="message" class="font-semibold text-indigo-400 text-lg ">message:</label>
  <input required type="message" name="message" id="message" placeholder="message..." class="bg-gray-700 p-4  outline-none"> 
</div>
<button type="submit" class="bg-indigo-600 px-6 py-4 rounded-2xl hover:opacity-[80%] hover:rounded-2xl transition-all duration-[200px] my-4">Submit</button>

</form>
</main>
</body>
</html>
