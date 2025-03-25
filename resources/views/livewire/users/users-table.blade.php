<div class="py-4 bg-white border border-gray-300 rounded-xl dark:border-gray-700 dark:bg-zinc-800">
  <div class="flex items-center justify-between p-4 gap-x-4">
    <div class="flex items-center flex-none">
      <label for="perpage" class="hidden mr-2 text-sm font-medium text-zinc-800 md:block dark:text-white">Per
        Page</label>
      <flux:select id="perpage" wire:model.live="perpage" class="w-16 md:w-20">
        <flux:select.option value="10">10</flux:select.option>
        <flux:select.option value="20">20</flux:select.option>
        <flux:select.option value="50">50</flux:select.option>
        <flux:select.option value="100">100</flux:select.option>
      </flux:select>
    </div>
    <flux:field>
      <flux:input wire:model.live.debounce.500ms="search" class="max-w-46" placeholder="Search..." />
    </flux:field>
  </div>
  <div class="overflow-x-auto min-h-60">
    <table class="w-full text-sm text-left text-gray-700 rtl:text-right dark:text-gray-400">
      <thead class="text-xs font-bold text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="w-8 px-4 py-3 md:px-6">
            {{ __('Aksi') }}
          </th>
          <th scope="col" class="px-4 py-3 md:px-6">
            Name
          </th>
          <th scope="col" class="px-4 py-3 md:px-6">
            Email
          </th>
          <th scope="col" class="px-4 py-3 md:px-6">
            Phone
          </th>
          <x-table-th name="balance" order="{{ $order }}" sort="{{ $sort }}">
            Balance
          </x-table-th>
          <x-table-th name="created_at" order="{{ $order }}" sort="{{ $sort }}">
            Registered
          </x-table-th>
        </tr>
      </thead>
      <tbody>
        @forelse ($users as $user)
        <tr wire:key="{{ $user->id }}"
          class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
          <x-table-td-menu>
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
              {{-- <li>
                <a @click="$wire.deposit('{{ $user->id }}'); show = false"
                  class="flex items-center gap-2 px-4 py-2 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                  <flux:icon.banknotes class="w-4 h-4" /> Deposit Saldo
                </a>
              </li> --}}
              <li>
                <a @click="$wire.edit('{{ $user->id }}'); show = false"
                  class="flex items-center gap-2 px-4 py-2 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                  <flux:icon.pencil-square class="w-4 h-4" /> Edit User
                </a>
              </li>
              <li>
                <a @click="$wire.delete('{{ $user->id }}'); show = false"
                  class="flex items-center gap-2 px-4 py-2 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                  <flux:icon.trash class="w-4 h-4" /> Delete User
                </a>
              </li>
            </ul>
          </x-table-td-menu>
          <td class="px-2 py-4 md:px-6">
            {{ $user->name }}
            <x-copy-label text="{{ $user->id }}" class="text-xs text-zinc-400 dark:text-zinc-500" />
          </td>
          <td class="px-2 py-4 md:px-6">
            {{ $user->email }}
          </td>
          <td class="px-2 py-4 md:px-6">
            {{ $user->phone }}
          </td>
          <td class="px-2 py-4 md:px-6">
            Rp {{ number_format($user->balance, 0, ',', '.') }}
          </td>
          <td class="px-2 py-4 md:px-6">
            {{ $user->created_at }}
          </td>
        </tr>
        @empty
        <tr class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
          <td class="px-6 py-4 text-center" colspan="100%">
            {{ __('Tidak Ada Data') }}
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
    <div class="mx-4 my-2">
      {{ $users->links() }}
    </div>
  </div>
  <flux:modal name="edit-profile" class="md:w-xl">
    <div class="space-y-6">
      <div>
        <flux:heading size="lg">Update profile</flux:heading>
      </div>
      <flux:input wire:model="name" label="Name" placeholder="Name" />
      <div class="grid grid-cols-2 gap-4">
        <flux:input wire:model="email" label="Email" placeholder="Email" />
        <flux:input wire:model="phone" label="Phone" placeholder="Phone" />
      </div>
      <div class="flex">
        <flux:spacer />
        <flux:button wire:click="update" variant="primary">Save changes</flux:button>
      </div>
    </div>
  </flux:modal>
  <flux:modal name="delete-user" class="md:w-xl">
    <div class="space-y-6">
      <div>
        <flux:heading size="lg">Delete User</flux:heading>

        <flux:text class="my-2">
          <p>Yakin ingin menghapus user {{ $name }} ({{ $email }})</p>
        </flux:text>
        <flux:input wire:model="password" type="password" placeholder="Type password"
          description="Untuk menghapus silahkan masukan password" />
      </div>

      <div class="flex gap-2">
        <flux:spacer />

        <flux:modal.close>
          <flux:button variant="ghost">Cancel</flux:button>
        </flux:modal.close>

        <flux:button wire:click="destroy" variant="danger">Delete user</flux:button>
      </div>
    </div>
  </flux:modal>
  <x-toast-success message="{{ $message }}" />

</div>