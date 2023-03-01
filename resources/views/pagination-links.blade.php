@if ($paginator->hasPages())
    <ul class="flex justify-between">
        <li wire:click="previousPage" class="w-16 px-2 text-center rounded border shadow bg-white cursor-default">Prev</li>
        <li wire:click="nextPage" class="w-16 px-2 text-center rounded border shadow bg-white cursor-default">Next</li>
    </ul>
@endif
