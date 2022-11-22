@push('styles')
<!--Datatables-->
<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css" rel="stylesheet">

<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endpush

<div class="flex flex-col">
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <div class="w-full m-3 text-center">
            <div class="max-w-md p-1 pr-0 flex items-center">
                <a href="{{ route('shops.export') }}" class="group w-auto flex items-center justify-center px-5 py-2 border-2 border-green-400 text-base font-medium rounded-md bg-white hover:bg-green-400">
                    <svg class="text-blue-600 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    &nbsp;Export
                </a>

                <div class="relative text-blue-600 focus-within:text-gray-400 ml-4">
                    <span class="absolute inset-y-0 left-2 flex items-center pl-2">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </span>
                    <input id="cc-search" type="text" name="q" class="appearance-none py-2 text-md text-gray-700 bg-white rounded-md pl-10 border-2 border-green-400 shadow p-3 focus:outline-none" placeholder="Search..." autocomplete="off">
                </div>

                <div class="relative text-blue-600 focus-within:text-gray-400 ml-4">
                    <select id="cc-platform" name="platform" class="py-2 text-md text-gray-700 bg-white rounded-md border-2 border-green-400 shadow p-3 focus:outline-none">
                        <option value="">All Platform</option>
                        <option value="WooCommerce">WooCommerce</option>
                        <option value="Magento">Magento</option>
                    </select>
                </div>
            </div>
        </div>

        <table id="cc-shop-table" class="min-w-full divide-y divide-green-200" width="100%">
            <thead class="bg-green-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Store
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Country
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        State
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Platform
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Version
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Last Impression
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Orders
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Last Offset
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Offsets
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Mode
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Action
                    </th>
                </tr>
            </thead>

            @if(count($shops))
            <tbody class="bg-white divide-y divide-green-200">
                @foreach($shops as $shop)
                <tr>
                    {{-- Store --}}
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <a href="{{ $shop->domain }}" target="_blank">{{ $shop->domain }}</a>
                    </td>

                    {{-- Country Code --}}
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $shop->country_code }}
                    </td>

                    {{-- State --}}
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <span class="items-center justify-center" style="display: inline-flex;">
                            <svg viewBox="0 0 12 12" class="text-{{ $shop->statusClass() }}-500 w-3 h-3 mr-6 overflow-visible">
                                <circle cx="6" cy="6" r="6" fill="currentColor"></circle>
                                <circle cx="6" cy="6" r="11" fill="none" stroke="currentColor" stroke-width="2"></circle>
                            </svg>
                        </span>
                    </td>

                    {{-- Status --}}
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $shop->status() }}
                    </td>

                    {{-- Platform --}}
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $shop->formattedType() }}
                    </td>

                    {{-- Version --}}
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $shop->version }}
                    </td>

                    {{-- Last Impression --}}
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ ($shop->last_impression) ? $shop->last_impression->format('d M y, g:i A') : 'N/A' }}
                    </td>

                    {{-- Order --}}
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $shop->orders_count }}
                    </td>

                    {{-- Last Offset --}}
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ ($shop->purchases->whereNull('cancelled_at')->count()) ? $shop->purchases->whereNull('cancelled_at')->last()->created_at->format('d M y, g:i A') : 'N/A'}}
                    </td>

                    {{-- Offsets --}}
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $shop->purchases->whereNull('cancelled_at')->sum('quantity') }}
                    </td>

                    {{-- Mode --}}
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ \Str::title($shop->mode) }}
                    </td>

                    {{-- Action --}}
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                        @if(is_null($shop->blocked_at))
                        <a href="javascript:void(0);" data-id="{{ $shop->id  }}" class="cc-toggle-block-btn group items-center justify-center" style="display: inline-flex;" title="Block">
                            <svg class="text-yellow-400 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                            </svg>
                        </a>
                        @else
                        <a href="javascript:void(0);" data-id="{{ $shop->id  }}" class="cc-toggle-block-btn group items-center justify-center" style="display: inline-flex;" title="Unblock">
                            <svg class="text-green-400 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                        @endif

                        <a href="javascript:void(0);" data-id="{{ $shop->id  }}" class="cc-archive-btn group items-center justify-center" style="display: inline-flex;" title="Archive">
                            <svg class="text-red-400 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                            </svg>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            @endif
        </table>
    </div>
</div>

@push('scripts')
<!-- jQuery -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>

<!--SweetAlert2 -->
<script src="{{ asset('js/sweetalert2.js') }}"></script>

<!--Datatables-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>

<script>
    var ccTable;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function archive(el, id) {
        $.ajax({
            url: "shops/" + id,
            type: 'DELETE',
            dataType: "JSON",
            success: function() {
                ccTable.row(el).remove().draw();
            }
        });
    }

    function toggleBlock(el, id, type) {
        $.ajax({
            url: "shops/toggle-block/" + id,
            type: 'POST',
            dataType: "JSON",
            success: function() {
                if (type === 'Block') {
                    el.removeClass('cc-block-btn').addClass('cc-unblock-btn').attr('title', 'Unblock');
                    el.find('svg').removeClass('text-yellow-400').addClass('text-green-400');
                    el.find('path').attr('d', 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z');
                } else {
                    el.removeClass('cc-unblock-btn').addClass('cc-block-btn').attr('title', 'Block');
                    el.find('svg').removeClass('text-green-400').addClass('text-yellow-400');
                    el.find('path').attr('d', 'M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636');
                }
            }
        });
    }

    $(document).ready(function() {
        ccTable = $('#cc-shop-table').DataTable({
            responsive: true,
            dom: 'rtip',
            pageLength: 100,
            columnDefs: [{
                    targets: 0,
                    responsivePriority: 1
                }, // Shop
                {
                    targets: 1,
                    responsivePriority: 5
                }, // Country
                {
                    targets: 2,
                    responsivePriority: 3,
                    orderable: false
                }, // State
                {
                    targets: 3,
                    responsivePriority: 4
                }, // Status
                {
                    targets: 4,
                    responsivePriority: 16
                }, // Platform
                {
                    targets: 5,
                    responsivePriority: 19
                }, // Version
                {
                    targets: 6,
                    responsivePriority: 12
                }, // Last Impression
                {
                    targets: 7,
                    responsivePriority: 6
                }, // Orders
                {
                    targets: 8,
                    responsivePriority: 13
                }, // Last Offset
                {
                    targets: 9,
                    responsivePriority: 7
                }, // Offsets
                {
                    targets: 17,
                    responsivePriority: 18
                }, // Mode
                {
                    targets: 18,
                    responsivePriority: 2,
                    orderable: false
                } // Action
            ]
        });

        $('#cc-search').keyup(function() {
            ccTable.search($(this).val()).draw();
        });

        $('#cc-platform').on('change', function() {
            ccTable.columns(4).search(this.value).draw();
        });

        $('.cc-archive-btn').on('click', function() {
            let el = $(this).closest('tr');
            let id = $(this).data('id');

            Swal.fire({
                title: 'Are you sure?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, archive it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    archive(el, id);
                }
            });
        });

        $('.cc-toggle-block-btn').on('click', function() {
            let el = $(this);
            let id = $(this).data('id');
            let type = $(this).attr('title');

            Swal.fire({
                title: 'Are you sure?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: `Yes, ${type} it!`
            }).then((result) => {
                if (result.isConfirmed) {
                    toggleBlock(el, id, type);
                }
            });
        });
    });
</script>
@endpush