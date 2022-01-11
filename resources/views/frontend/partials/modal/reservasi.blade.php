<div x-data="{ open: true }">
    <!-- Button (blue), duh! -->
    <button class="py-1 px-2 bg-gray-600 text-white rounded text shadow-xl" @click="open = true">
        <i class="fas fa-user-edit"></i>
    </button>
    <!-- Dialog (full screen) -->
    <div class="fixed bg-gray-800 bg-opacity-75 z-50 top-0 asas left-0 flex items-center justify-center w-full h-screen"
        x-show="open">
        <!-- A basic modal dialog with title, body and one button to close -->
        <div class="relative h-auto py-10 px-5 text-left bg-white rounded shadow-xl w-1/2 m-5"
            @click.away="open = false">
            <button class="absolute right-3 top-3" @click="open = false">
                <i class="fas fa-times fa-lg"></i>
            </button>
            <form action="reservasi/store" class="flex flex-col gap-3">
                <div class="flex flex-col gap-1">
                    <label for="name">Title</label>
                    <div class="flex flex-row gap-4">
                        <div class="flex flex-row place-content-center place-items-center gap-1">
                            <input type="radio" id="mr" name="title" value="Mr." class="form-checkbox" hidden checkbox>
                            <label for="mr">Mr.</label>
                        </div>
                        <div class="flex flex-row place-content-center place-items-center gap-1">
                            <input type="radio" id="ms" name="title" value="Ms." class="form-checkbox">
                            <label for="ms">Ms.</label>
                        </div>
                        <div class="flex flex-row place-content-center place-items-center gap-1">
                            <input type="radio" id="mrs" name="title" value="Mrs.">
                            <label for="mrs">Mrs.</label>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-between gap-5">
                    <div class="flex flex-col gap-1 w-1/2">
                        <label for="name">Firstname</label>
                        <input type="text" placeholder="Contoh : John" class="rounded">
                    </div>
                    <div class="flex flex-col gap-1 w-1/2">
                        <label for="name">Lastname</label>
                        <input type="text" placeholder="Contoh : Smith" class="rounded">
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" placeholder="Contoh : 08623232323" class="rounded">
                </div>
                <div class="flex flex-col gap-1">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Contoh : contoh@example.com" class="rounded">
                </div>
                <div class="flex flex-row justify-between place-items-center place-content-center gap-5">
                    <div class="flex flex-col gap-1 w-1/2">
                        <label for="name">Check-In</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <input datepicker name="date" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker"
                                placeholder="Select date">
                        </div>
                    </div>
                    <i class="fas fa-arrows-alt-h mt-5 opacity-50"></i>
                    <div class="flex flex-col gap-1 w-1/2">
                        <label for="name">Check-Out</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <input datepicker name="date" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker"
                                placeholder="Select date">
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <input
                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                        type="checkbox" value="" id="flexCheckDefault" required>
                    <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
                        I Agree Terms & Coditions
                    </label>
                </div>
                <button class="bg-blue-600 w-1/5 py-2 text-white text-xl rounded-md font-semibold mx-auto">Book
                    Now</button>
            </form>
        </div>
    </div>
</div>
