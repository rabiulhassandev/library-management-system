<x-app-layout>

    <x-slot name="breadcrumb">
        <x-admin.breadcrumb>
            @foreach (config('theme.cdata.breadcrumb') as $i )
            <x-admin.bread-item href="{{ $i['link'] }}" class="{{ $i['link']?'':'active' }}">
                {{ $i['name'] }}
            </x-admin.bread-item>
            @endforeach
            <x-slot name="title">
                {{ config('theme.cdata.title') }}
            </x-slot>
        </x-admin.breadcrumb>
    </x-slot>

    <x-card>
        <x-slot name="title">
            <div class="d-sm-flex justify-content-between">
                <div>
                    <h4 class="text-capitalize">{{ config('theme.cdata.title') }}</h4>
                </div>
                <div class="text-capitalize">
                    @if (config('theme.cdata.back'))
                    <a href="{{ config('theme.cdata.back') }}"
                        class="btn btn-info btn-rounded waves-effect waves-light">
                        <i class="ri-arrow-left-fill"></i> Back
                    </a>
                    @endif
                </div>
            </div>
        </x-slot>

        <div class="row">
            <div class="table-responsive">
                <x-data-table>
                    <thead>
                        <tr class="bg-primary text-white text-center">
                            <th>SI</th>
                            <th>Book Name</th>
                            <th>Username</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th class="noExport">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($collection as $key=>$item)
                        <td>
                            {{ ++$key }}
                        </td>
                        <td>
                            @if ($item->book_id != null)
                                {{$item->book->book_name}}
                            @endif
                        </td>
                        <td>
                            @if ($item->user_id != null)
                                {{$item->user->name}}
                            @endif
                        </td>
                        <td>
                            {{$item->created}}
                        </td>
                        <td>
                            @if ($item->status == 'Rejected')
                                <button class="btn btn-danger">Rejected</button>
                            @elseif ($item->status == 'Approve')
                                <button class="btn btn-success">Pending</button>
                            @else
                                <button class="btn btn-secondary">Pending</button>
                            @endif
                        </td>

                        @can('view_all_book_transition')
                            <td>
                                <x-btn.action :view="[route(config('theme.cdata.route-name-prefix').'.show',$item->id)]"
                                    :delete="[route(config('theme.cdata.route-name-prefix').'.delete',$item->id)]" />
                            </td>
                        @else
                            <td>
                                <x-btn.action :view="[route(config('theme.cdata.route-name-prefix').'.show',$item->id)]" />
                            </td>
                        @endcan
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">
                                <p class="text-muted text-center">No Data Found...</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </x-data-table>
            </div>
        </div>
    </x-card>

    @push('extra-scripts')

    @endpush
</x-app-layout>
