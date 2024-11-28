<x-app-layout>
    <section class="content">
        <div class="container mx-auto p-6">
            <h2 class="text-2xl font-bold mb-4">Sửa Sản Phẩm</h2>
            <form action="{{ route('admin.products.update', $product->id) }}" method="POST"
                enctype="multipart/form-data" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Tiêu đề</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $product->title) }}"
                        class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Mô tả</label>
                    <textarea name="description" id="description"
                        class="mt-1 p-2 border border-gray-300 rounded-md w-full"
                        required>{{ old('description', $product->description) }}</textarea>
                </div>

                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700">Nội dung</label>
                    <textarea name="content" id="content" class="mt-1 p-2 border border-gray-300 rounded-md w-full"
                        required>{{ old('content', $product->content) }}</textarea>
                </div>

                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700">Giá</label>
                    <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}"
                        class="mt-1 p-2 border border-gray-300 rounded-md w-full" step="0.01" required>
                </div>

                <div>
                    <label for="quantity" class="block text-sm font-medium text-gray-700">Số lượng</label>
                    <input type="number" name="quantity" id="quantity" value="{{ old('quantity', $product->quantity) }}"
                        class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Hình ảnh</label>
                    <input type="file" name="image" id="image" value="{{ old('image', $product->image) }}"
                        class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                </div>

                <div>
                    <label for="categorys_id" class="block text-sm font-medium text-gray-700">Danh mục</label>
                    <select name="categorys_id" id="categorys_id"
                        class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $category->id == $product->categorys_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Cập nhật
                        Sản Phẩm</button>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>