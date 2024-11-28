<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-6">Tạo mới</h1>

        <form action="{{ route('admin.category.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Tên danh mục</label>
                <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-lg" required>
            </div>

            <div class="mb-4">
                <label for="slug" class="block text-gray-700">Slug</label>
                <input type="text" id="slug" name="slug" class="w-full p-2 border border-gray-300 rounded-lg" required>
            </div>

            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-lg">
                Lưu</button>
        </form>
    </div>
</x-app-layout>

<script>
document.getElementById('name').addEventListener('input', function() {
    let name = this.value;

    let slug = name
        .toLowerCase()
        .normalize('NFD')
        .replace(/[\u0300-\u036f]/g, '')
        .replace(/[^a-z0-9\s-]/g, '')
        .replace(/\s+/g, '-')
        .replace(/-+/g, '-')
        .replace(/^-+|-+$/g, '');

    document.getElementById('slug').value = slug;
});
</script>