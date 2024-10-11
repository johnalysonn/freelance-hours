<x-layouts.app>
    <div class="grid grid-cols-3 gap-6">
        <div class="col-span-2">
            <livewire:projects.show :$project/>
        </div>

        <div>
            <livewire:projects.proposals :$project/>
        </div>
    </div>
</x-layouts.app>
