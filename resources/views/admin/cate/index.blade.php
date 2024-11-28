<x-app-layout>
    <section class="content">
        <div class="container mx-auto p-8">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-2xl font-bold">Danh mục</h1>
                <a href="{{ route('admin.cate.create') }}"
                    class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-lg">
                    Tạo mới
                </a>
            </div>

            @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
            @endif

            <!-- Table -->
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                    <tr class="w-full bg-gray-800 text-white">
                        <th class="py-2 px-4 text-left">ID</th>
                        <th class="py-2 px-4 text-left">Name</th>
                        <th class="py-2 px-4 text-left">Img</th>
                        <th class="py-2 px-4 text-left">Ngày tạo</th>
                        <th class="py-2 px-4 text-left">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cates as $cate)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="py-2 px-4">{{ $cate->id }}</td>
                        <td class="py-2 px-4">{{ $cate->name }}</td>
                        <td class="py-2 px-4">@if($cate->image)
                            <img src="{{ asset('storage/' . $cate->image) }}" alt="{{ $cate->name }}" width="100">
                            @else
                            No Image
                            @endif
                        </td>
                        <td class="py-2 px-4">{{ $cate->created_at->format('Y-m-d') }}</td>
                        <td class="py-2 px-4">
                            <a href="{{route('admin.cate.edit', $cate->id)}}"
                                class="ml-2 text-yellow-500 hover:underline"><i
                                    class="material-icons text-yellow-500 hover:text-yellow-500"
                                    title="Sửa">edit</i></a>
                            <form action="{{ route('admin.cate.destroy', $cate->id) }}" method="POST"
                                class="inline ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline"><i
                                        class="material-icons text-red-500 hover:text-red-500"
                                        title="xóa">delete</i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination (Optional) -->
            <div class="mt-4">

            </div>
    </section>
</x-app-layout>