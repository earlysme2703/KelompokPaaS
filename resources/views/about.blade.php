<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Platform As A Service</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-slate-100 flex flex-col min-h-screen">

    <nav class="bg-[#002633] border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://ucarecdn.com/fdc656a3-fce4-442b-8fe2-560beb9c6246/1732279541536.png" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Platform as a Service</span>
            </a>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-black rounded-lg bg-black md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-[#002633]">
                    <li>
                        <a href="{{ route('dashboard') }}" class="block py-2 px-3 rounded md:bg-transparent md:border-0 md:hover:text-yellow-200 md:p-0 text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('about.index') }}" class="block py-2 px-3 rounded md:bg-transparent md:border-0 md:hover:text-yellow-200 md:p-0 text-white">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="{{ route('/') }}" class="block py-2 px-3 rounded md:bg-transparent md:border-0 md:hover:text-yellow-200 md:p-0 text-white">Layanan</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}" class="block py-2 px-3 rounded {{ request()->routeIs('login') ? 'text-blue-600' : 'text-gray-900' }}  md:hover:bg-transparent md:border-0 md:hover:text-yellow-200 md:p-0 text-white">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>

      <main class="flex-grow container mx-auto mt-6 px-4">
        <h1 class="text-2xl font-bold mb-4">Daftar Posts</h1>
        
        <!-- Tombol untuk menambah post -->
        <a href="{{ route('about.create') }}" class="inline-block bg-green-500 text-white py-2 px-4 rounded mb-4">Tambah Post</a>

        <div class="overflow-x-auto">
            <table class="table-auto w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="px-4 py-2 text-left border">ID</th>
                        <th class="px-4 py-2 text-left border">Title</th>
                        <th class="px-4 py-2 text-left border">Content</th>
                        <th class="px-4 py-2 text-left border">Created At</th>
                        <th class="px-4 py-2 text-left border">Actions</th>
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
                                    <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    
</body>