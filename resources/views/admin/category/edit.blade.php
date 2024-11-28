<x-app-layout>
    <section class="content">
        <div class="container mx-auto p-4 1">
            <h1 class="text-2xl font-bold mb-6">Cập nhật thông tin danh mục</h1>

            <form action="{{ route('admin.category.update', $categorie->id) }}" method="POST"
                class="bg-white p-6 rounded-lg shadow-md">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Tên danh mục</label>
                    <input type="text" id="name" name="name" value="{{$categorie->name}}"
                        class="w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <div class="mb-4">
                    <label for="slug" class="block text-gray-700">Slug</label>
                    <input type="text" id="slug" name="slug" value="{{$categorie->slug}}"
                        class="w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg">
                    Lưu
                </button>
            </form>
        </div>
    </section>
</x-app-layout>