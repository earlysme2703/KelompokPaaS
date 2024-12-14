<x-head /> 

<x-navbar />

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
