<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
  use WithPagination;
  public string $order = 'created_at';
  public string $sort = 'asc';
  public string $search = '';
  public int $perpage = 10;

  public ?User $user;
  public string $name;
  public string $email;
  public string $password;
  public string $phone;
  public int $balance;
  public string $user_balance;
  public int $amount = 0;

  public string $message = '';


  public function updatedSearch($value)
  {
    // $this->search = preg_replace('/[^a-zA-Z0-9\s]/', '', $value);
    $this->setPage(1);
  }

  public function updatedPerpage()
  {
    if (!is_numeric($this->perpage)) {
      $this->perpage = 10;
    }
    $this->perpage = min(100, max(10, (int)$this->perpage));
    $this->setPage(1);
  }

  public function sortBy($order)
  {
    // if (!in_array($order, ['id', 'balance'])) {
    //   return;
    // }
    if ($this->order === $order) {
      $this->sort = $this->sort === 'asc' ? 'desc' : 'asc';
    } else {
      $this->order = $order;
    }
    $this->setPage(1);
  }

  public function updatedOrder()
  {
    if (!in_array($this->order, ['balance', 'created_at'])) {
      $this->order = 'id';
    }
  }

  public function updatedSort()
  {
    if (!in_array($this->sort, ['asc', 'desc'])) {
      $this->sort = 'asc';
    }
  }

  public function render()
  {
    $users = User::orderBy($this->order, $this->sort)
      ->where('id', '!=', Auth::user()->id)
      ->where(function ($query) {
        $keywords = explode(' ', $this->search);
        foreach ($keywords as $keyword) {
          $query->where('id', 'like', "%{$keyword}%")
            ->orWhere('name', 'like', "%{$keyword}%")
            ->orWhere('email', 'like', "%{$keyword}%")
            ->orWhere('phone', 'like', "%{$keyword}%");
        }
      })
      // ->where(function ($query) {
      //   $query->where('id', 'like', "%{$this->search}%")
      //     ->orWhere('name', 'like', "%{$this->search}%")
      //     ->orWhere('email', 'like', "%{$this->search}%")
      //     ->orWhere('phone', 'like', "%{$this->search}%");
      // })
      ->paginate($this->perpage);

    return view('livewire.users.users-table', [
      'users' => $users,
    ]);
  }

  public function edit($id)
  {
    $user = User::findOrFail($id);
    $this->user = $user;
    $this->name = $user->name;
    $this->email = $user->email;
    $this->phone = $user->phone;
    $this->modal('edit-profile')->show();
  }

  public function update()
  {
    $this->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|email|max:255|unique:users,email,' . $this->user->id,
      'phone' => 'nullable|string|max:255|unique:users,phone,' . $this->user->id,
    ]);

    $this->user->update([
      'name' => $this->name,
      'email' => $this->email,
      'phone' => $this->phone,
    ]);
    $this->modal('edit-profile')->close();
    $this->message = 'Profile updated successfully.';
    $this->dispatch('success');
  }

  public function delete($id): void
  {
    $user = User::findOrFail($id);
    $this->user = $user;
    $this->name = $user->name;
    $this->email = $user->email;
    $this->phone = $user->phone;
    $this->modal('delete-user')->show();
  }

  public function destroy(): void
  {
    $this->validate([
      'password' => ['required', 'string', 'current_password'],
    ]);

    $this->user->delete();
    $this->modal('delete-user')->close();
    $this->message = 'User delete successfully.';
    $this->dispatch('success');
  }
}
