<div class="bg-gray-800 rounded-xl p-6 shadow col-span-3">
    <h3 class="text-lg font-semibold mb-4">Daftar Member</h3>
    <table class="w-full text-left">
        <thead>
            <tr>
                <th class="py-2">#</th>
                <th class="py-2">Nama</th>
                <th class="py-2">Email</th>
                <th class="py-2">Bergabung</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $member)
            <tr class="border-t border-gray-700">
                <td class="py-2">{{ $loop->iteration }}</td>
                <td class="py-2">{{ $member->name }}</td>
                <td class="py-2">{{ $member->email }}</td>
                <td class="py-2">{{ $member->created_at->format('d M Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
