<x-app-layout>
    <section class="content">
        <div class="container mx-auto p-6">
            <h2 class="text-2xl font-bold mb-4">Sửa Sản Phẩm</h2>
            <form action="{{ route('admin.banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data"
                class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Tiêu đề</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $banner->title) }}"
                        class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Hình ảnh</label>
                    <input type="file" name="image" id="image" value="{{ old('image', $banner->image) }}"
                        class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                </div>

                <div>
                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Cập nhật
                        ảnh</button>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>