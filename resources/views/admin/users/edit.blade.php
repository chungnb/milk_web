<x-app-layout>
    <section class="content">
        <div class="container mx-auto p-4 1">
            <h1 class="text-2xl font-bold mb-6">Cập nhật thông tin người dùng</h1>

            <form action="{{ route('admin.users.update', $user->id) }}" method="POST"
                class="bg-white p-6 rounded-lg shadow-md">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" id="name" name="name" value="{{$user->name}}"
                        class="w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="{{$user->email}}"
                        class="w-full p-2 border border-gray-300 rounded-lg" required>
                </div>

                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg">
                    Lưu
                </button>
            </form>
        </div>
    </section>
</x-app-layout>