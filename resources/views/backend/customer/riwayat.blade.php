<x-app-layout class="flex flex-col">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('History') }}
        </h2>
    </x-slot>

    <div class="p-6">
        <div class="flex flex-col gap-5">
            asas
        </div>
    </div>
    </div>
</x-app-layout>

<script>
    let numb = document.getElementById('income').value;
    let format = numb.split('').reverse().join('');
    let convert = format.match(/\d{1,3}/g);
    let rupiah = "Rp." + convert.join('.').split('').reverse().join('')

    document.getElementById('incomeShow').innerHTML = rupiah;
</script>
