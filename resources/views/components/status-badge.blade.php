php artisan make:component StatusBadg

@props(['status'])

@if ($status === 'Aktif')
    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm whitespace-nowrap">
        Aktif
    </span>
@else
    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm whitespace-nowrap">
        Tidak Aktif
    </span>

    <x-status-badge :status="$teacher['status']" />

    public string $status;
    public function __construct(string $status)
    {
        $this->status = $status;
    }
