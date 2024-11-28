<x-app-layout>
    <section class="content">
        <div class="container mx-auto p-8">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-2xl font-bold">Ảnh Slide</h1>
                <a href="{{ route('admin.slide_img.create') }}"
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
                        <th class="py-2 px-4 text-left">Title</th>
                        <th class="py-2 px-4 text-left">Img</th>
                        <th class="py-2 px-4 text-left">Ngày tạo</th>
                        <th class="py-2 px-4 text-left">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($slides as $slide)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="py-2 px-4">{{ $slide->id }}</td>
                        <td class="py-2 px-4">{{ $slide->title }}</td>
                        <td class="py-2 px-4">@if($slide->image)
                            <img src="{{ asset('storage/' . $slide->image) }}" alt="{{ $slide->title }}" width="100">
                            @else
                            No Image
                            @endif
                        </td>
                        <td class="py-2 px-4">{{ $slide->created_at->format('Y-m-d') }}</td>
                        <td class="py-2 px-4">
                            <a href="{{ route('admin.slide_img.edit', $slide->id) }}"
                                class="ml-2 text-yellow-500 hover:underline"><i
                                    class="material-icons text-yellow-500 hover:text-yellow-500"
                                    title="Sửa">edit</i></a>
                            <form action="{{ route('admin.slide_img.destroy', $slide->id) }}" method="POST"
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
                {{ $slides->links() }}
            </div>
    </section>
</x-app-layout>