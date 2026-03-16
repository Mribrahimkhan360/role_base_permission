<x-app-layout>
    <div class="max-w-xl">
        <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden">

            {{-- ── Card Header ── --}}
            <div class="px-7 py-5 border-b border-slate-100 bg-gradient-to-r from-brand-50 to-white">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-brand-600 flex items-center justify-center shadow-md shadow-brand-600/30">
                        <svg class="w-5 h-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold text-gray-500 text-sm">Add Sales Entries</p>
                        <p class="text-xs text-slate-500">Select a sale and enter serial numbers</p>
                    </div>
                </div>
            </div>

            <form action="" method="POST" class="px-7 py-6 space-y-6">

                <div class="bg-white rounded-xl shadow-sm border overflow-hidden">

                    <table class="w-full text-sm text-left">

                        <!-- Table Head -->
                        <thead class="bg-gray-50 border-b">
                        <tr>
                            <th class="px-6 py-3 font-semibold text-gray-600">Product Name</th>
                            <th class="px-6 py-3 font-semibold text-gray-600">Serial Number</th>
                        </tr>
                        </thead>

                        <!-- Table Body -->
                        <tbody class="divide-y">

                        @foreach($sales as $sale)
                            <tr class="hover:bg-gray-50 transition">

                                <!-- Product Name -->
                                <td class="px-6 py-4 font-medium text-gray-800">
                                    {{ $sale->name }}
                                    <input type="hidden" name="name[]" value="{{ $sale->name }}">
                                </td>

                                <!-- Serial Input -->
                                <td class="px-6 py-4">
                                    <input
                                        type="text"
                                        name="serial_number[]"
                                        placeholder="SN-00018"
                                        class="w-full px-4 py-2 rounded-lg border border-gray-300 text-sm text-gray-700 placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                                    >
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Actions -->
                <div class="flex items-center gap-3 pt-1">
                    <button
                        type="submit"
                        class="flex-1 inline-flex items-center justify-center gap-2 bg-brand-600
            hover:bg-brand-700 text-gray-600 font-semibold text-sm py-3 rounded-xl
            shadow-md shadow-brand-600/30 transition-all duration-200 hover:scale-[1.02]">

                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>

                        Save Sale Entries
                    </button>

                    <a href=""
                       class="px-5 py-3 text-sm font-semibold text-slate-600 hover:text-slate-800 bg-slate-100 hover:bg-slate-200 rounded-xl transition-colors duration-200">
                        Cancel
                    </a>

                </div>

            </form>
        </div>
    </div>
</x-app-layout>
