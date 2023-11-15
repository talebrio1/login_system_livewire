<div class="my-5 mx-5">
<form wire:submit.prevent="save">
    @if (session('error'))
    <div class="text-red-500">
        {{ session('error') }}</div>
@endif
    <div class="mb-6">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> email</label>
      <input wire:model="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com">
    </div>
    <div class="text-red-500">
        @error('email') {{ $message }} @enderror
    </div>
    <div class="mb-6">
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> password</label>
      <input wire:model="password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="text-red-500">
        @error('password') {{ $message }} @enderror
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
</div> 
