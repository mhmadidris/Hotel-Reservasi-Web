<x-app-layout class="flex flex-col">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="p-6">
        <div class="flex flex-col gap-5">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <div class="w-full grid grid-flow-row grid-cols-4 place-items-center gap-3">
                    <div class="w-60 h-32 bg-red-500 flex flex-row place-items-center justify-center rounded-xl overflow-hidden"
                        data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <i class="fas fa-users fa-lg m-4 fa-3x" style="opacity: 75%; color: whitesmoke"></i>
                        <div class="bg-red-600 w-full h-full text-right flex flex-col place-content-center gap-5 p-5">
                            <h5 class="text-lg font-bold text-white"><span
                                    class="counter">{{ $totalTamu }}</span> Orang</h5>
                            <h1 class="uppercase text-base font-semibold text-gray-200">Total Tamu</h1>
                        </div>
                    </div>

                    <div class="w-60 h-32 bg-blue-500 flex flex-row place-items-center justify-center rounded-xl overflow-hidden"
                        data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <i class="fas fa-users-cog fa-lg m-4 fa-3x" style="opacity: 75%; color: whitesmoke"></i>
                        <div class="bg-blue-600 w-full h-full text-right flex flex-col place-content-center gap-5 p-5">
                            <h5 class="text-lg font-bold text-white"><span
                                    class="counter">{{ $admin }}</span> Orang</h5>
                            <h1 class="uppercase text-base font-semibold text-gray-200">Admin</h1>
                        </div>
                    </div>

                    <div class="w-60 h-32 bg-green-500 flex flex-row place-items-center justify-center rounded-xl overflow-hidden"
                        data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <i class="fas fa-wallet fa-lg m-4 fa-3x" style="opacity: 75%; color: whitesmoke"></i>
                        <div class="bg-green-600 w-full h-full text-right flex flex-col place-content-center gap-5 p-5">
                            <h5 class="text-lg font-bold text-white">Rp.<span class="counter"
                                    id="incomeShow">{{ $income }}</span></h5>
                            <h1 class="uppercase text-base font-semibold text-gray-200">Pemasukan</h1>

                            {{-- hidden --}}
                            <input type="text" id="income" class="hidden" value="{{ $income }}">
                        </div>
                    </div>

                    <div class="w-60 h-32 bg-yellow-500 flex flex-row place-items-center justify-center rounded-xl overflow-hidden"
                        data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <i class="fas fa-hotel fa-lg m-4 fa-3x" style="opacity: 75%; color: whitesmoke"></i>
                        <div
                            class="bg-yellow-600 w-full h-full text-right flex flex-col place-content-center gap-5 p-5">
                            <h5 class="text-lg font-bold text-white"><span
                                    class="counter">{{ $totalKamar }}</span> Kamar</h5>
                            <h1 class="uppercase text-base font-semibold text-gray-200">Total Kamar</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>


<script>
    jQuery(document).ready(function() {
        $('.counter').countUp({
            delay: 15,
            time: 1500,
        });
    });

    let numb = document.getElementById('income').value;
    let format = numb.split('').reverse().join('');
    let convert = format.match(/\d{1,3}/g);
    let rupiah = convert.join('.').split('').reverse().join('')


    setTimeout(() => {
        let as = document.getElementById('incomeShow').innerHTML = rupiah;
    }, 2000);
</script>
