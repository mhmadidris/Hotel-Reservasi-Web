<div x-data="{ open: false }">
    <!-- Button (blue), duh! -->
    <button class="py-1 px-2 bg-red-600 text-white rounded text shadow-xl" @click="open = true">
        <i class="fas fa-trash-alt"></i>
    </button>
    <!-- Dialog (full screen) -->
    <div class="fixed top-0 asas left-0 flex items-center justify-center w-full h-screen" x-show="open">
        <!-- A basic modal dialog with title, body and one button to close -->
        <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0"
            @click.away="open = false">
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg font-medium leading-6 text-gray-900">
                    asdasd
                </h3>
                <div class="mt-2">
                    <div>
                        <input type="hidden" wire:model="selected_id">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Enter Name</label>
                            <input type="text" wire:model="name" class="form-control input-sm"
                                value="{{ $value->name }}">
                        </div>
                        <div class="form-group">
                            <label>Enter Email</label>
                            <input type="email" class="form-control input-sm" placeholder="Enter email"
                                wire:model="email">
                        </div>
                        <button wire:click="update()" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
            <!-- One big close button.  --->
            <div class="mt-5 sm:mt-6">
                <span class="flex w-full rounded-md shadow-sm">
                    <button @click="open = false"
                        class="inline-flex justify-center w-full px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">
                        Close this modal!
                    </button>
                </span>
            </div>
        </div>
    </div>
</div>
