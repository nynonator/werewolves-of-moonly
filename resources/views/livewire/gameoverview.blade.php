<div>
    <span class="opacity-75 text-xs leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
        tristique ligula turpis, id tincidunt diam feugiat et.</span>
    <div class="mt-12 flex flex-wrap justify-center">
        <span class="bg-indigo-500 p-4 rounded-full px-8 m-2" wire:click="save('1')">Mark</span>
        <span class="bg-indigo-500 p-4 rounded-full px-8 m-2">dominique</span>
        <span class="bg-indigo-500 p-4 rounded-full px-8 m-2">Jantje</span>
        <span class="bg-indigo-500 p-4 rounded-full px-8 m-2">Chantal</span>
        <span class="bg-indigo-500 p-4 rounded-full px-8 m-2">Eric</span>
    </div>
    <div class="mt-8 w-full">

        <button class="uppercase font-bold @if ($selection == '') bg-[#FFBA2F]/40
        @else bg-[#FFBA2F] @endif
           p-4 w-full rounded-lg" @if ($selection == '') disabled @endif>
            bevestig keuze
        </button>
    </div>
</div>
