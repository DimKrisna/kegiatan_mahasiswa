<?php

namespace App\View\Components;

use App\Models\MnKategori;
use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Layout extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;

    public function __construct($title = null)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $menus = [];

        if (Auth::check()) {
            $menu = User::where('username', auth()->user()->username)
                ->whereIn('id_role', [1, 2, 3, 4, 5, 6])
                ->select('id_role')
                ->get()
                ->map(fn($row) => $row->id_role)
                ->toArray();

            if (in_array(1, $menu)) { // Ormawa
                $menus[] = MnKategori::with(['list' => function ($query) {
                    $query->where('status', 'Aktif');
                }, 'list.sub'])->find(5);
            }
            if (in_array(2, $menu)) { // Kemahasiswaan
                $menus[] = MnKategori::with(['list' => function ($query) {
                    $query->where('status', 'Aktif');
                }, 'list.sub'])->find(1);
            }
            if (in_array(3, $menu)) { // Wakil Rektor 3
                $menus[] = MnKategori::with(['list' => function ($query) {
                    $query->where('status', 'Aktif');
                }, 'list.sub'])->find(4);
            }
            if (in_array(4, $menu)) { // Fakultas Bishum
                $menus[] = MnKategori::with(['list' => function ($query) {
                    $query->where('status', 'Aktif');
                }, 'list.sub'])->find(3);
            }
            if (in_array(5, $menu)) { // Prodi
                $menus[] = MnKategori::with(['list' => function ($query) {
                    $query->where('status', 'Aktif');
                }, 'list.sub'])->find(2);
            }
            if (in_array(6, $menu)) { // Fakultas Saintek
                $menus[] = MnKategori::with(['list' => function ($query) {
                    $query->where('status', 'Aktif');
                }, 'list.sub'])->find(3);
            }
            if (in_array(7, $menu)) { // Fakultas Sekretaris Rektor
                $menus[] = MnKategori::with(['list' => function ($query) {
                    $query->where('status', 'Aktif');
                }, 'list.sub'])->find(6);
            }
        }
        return view('layout', compact('menus'));
    }
}
