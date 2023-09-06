<div>
    <div class="shadow[color: #fffff)] ">

        <button class="focus:pointer-events-auto bg-white/10 rounded-full p-5 w-full @if($selection=='verteller') border border-white @endif" wire:click="save('verteller')">
            <div class="flex justify-center flex-col">
                <span class="font-bold text-xl my-4"> Verteller </span>
                <span class="uppercase opacity-25">selecteer optie</span>
            </div>
        </button>
    </div>
    <div class="mt-4">
        <button class="bg-white/10 rounded-full p-5 w-full @if($selection=='speler') border border-white @endif" wire:click="save('speler')">
            <div class="flex justify-center flex-col">
                <span class="font-bold text-xl my-4"> Speler </span>
                <span class="uppercase opacity-25">selecteer optie</span>
            </div>
        </button>

    </div>

    <div class="mt-8">

        <button wire:click="nextStep('step-2')"
        class="uppercase font-bold bg-[#FFBA2F]/40 p-4 w-full rounded-lg"
        @if($selection == '') disabled @endif>
            bevestig keuze
        </button>
    </div>

</div>
