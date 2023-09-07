<x-app-layout>
    <form action="/join_game" method="POST">
        @csrf
        <span class="opacity-75 text-xs leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
            tristique ligula turpis, id tincidunt diam feugiat et.</span>
        <div class="mt-4 w-full bg-white rounded-lg p-4 mt-10">
            <div class="text-left w-full">
            <label class="text-black text-sm opacity-40" for="room_pin"> Game pin </label>
            </div>
            <input type="text" id="pin" name="room_pin" class="text-black font-bold w-full text-3xl focus:outline-none" />
        </div>
        <div class="mt-4 w-full bg-white rounded-lg p-4">
            <div class="text-left w-full">
            <label class="text-black text-sm opacity-40" for="name"> Spelersnaam </label>
            </div>
            <input type="text" id="name" name="name" class="text-black font-bold w-full text-3xl focus:outline-none" />
        </div>

        <div class="mt-8 w-full">
            <input id="submit" type="submit" value="Mee doen" disabled="true" class="uppercase font-bold bg-[#FFBA2F] disabled:bg-[#FFBA2F]/40
            p-4 w-full rounded-lg">
        </div>
    </form>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            $("input").on("keyup", function() {
                $("#submit").prop("disabled", $("#pin").val() == "" || $("#name").val() == "");
            });
        });
    </script>
</x-app-layout>