<x-head /> 
<x-navbar />
<body class="bg-slate-100 flex flex-col min-h-screen">
    <main class="flex-grow container mx-auto mt-6 px-4">
        <h1 class="text-2xl font-bold mb-4">Daftar Posts</h1>
        <a href="{{ route('about.create') }}" class="inline-block bg-green-500 text-white py-2 px-4 rounded mb-4">Tambah Post</a>
        <div class="overflow-x-auto">
            <table class="table-auto w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="px-4 py-2 text-left border">No</th>
                        <th class="px-4 py-2 text-left border">Judul</th>
                        <th class="px-4 py-2 text-left border">Deskripsi</th>
                        <th class="px-4 py-2 text-left border">Created At</th>
                        <th class="px-4 py-2 text-left border w-1/12">Actions</th> <!-- Menentukan lebar kolom actions -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2 border">{{ $post->id }}</td>
                            <td class="px-4 py-2 border">{{ $post->title }}</td>
                            <td class="px-4 py-2 border">{{ $post->content }}</td>
                            <td class="px-4 py-2 border">{{ $post->created_at }}</td>
                            <td class="px-4 py-2 border">
                                <!-- Tombol Delete -->
                                <form action="{{ route('about.delete', $post) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded text-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>
