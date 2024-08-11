<x-app-layout>
    <main class="p-6">

        <!-- Table -->
        <div class="mt-8 bg-white shadow-lg rounded-lg p-6">
            <h3 class="text-xl font-bold mb-4">Selamat Datang di Nasari Digital</h3>
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Joined</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($users as $usr)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $usr->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $usr->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $usr->email_verified_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-5">
            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-bold mb-4">Total Users</h3>
                <p class="text-3xl font-semibold">1,234</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-bold mb-4">Active Sessions</h3>
                <p class="text-3xl font-semibold">456</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-bold mb-4">New Orders</h3>
                <p class="text-3xl font-semibold">789</p>
            </div>
        </div>
    </main>
</x-app-layout>
