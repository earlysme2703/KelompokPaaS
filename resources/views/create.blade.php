<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Create Post - Platform As A Service</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="bg-[#002633] border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('about.index') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://ucarecdn.com/fdc656a3-fce4-442b-8fe2-560beb9c6246/1732279541536.png" class="h-8" alt="Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Platform as a Service</span>
            </a>
        </div>
    </nav>

    <!-- Content -->
    <main class="flex-grow container mx-auto mt-6 px-4">
        <h1 class="text-2xl font-bold mb-4">Tambah Post</h1>
        <form action="{{ route('about.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700">Content</label>
                <textarea name="content" id="content" class="w-full p-2 border border-gray-300 rounded" required></textarea>
            </div>
            <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded">Simpan</button>
        </form>
    </main>

</body>
</html>
