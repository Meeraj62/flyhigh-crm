<x-app-layout>
    <div class="space-y-6">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-900">Leads</h1>
            <a href="{{ route('leads.create') }}" class="rounded-md bg-primary-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-500">Add Lead</a>
        </div>

        @livewire('leads.leads-list')
    </div>
</x-app-layout>