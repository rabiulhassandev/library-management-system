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
                            <th>Subject</th>
                            <th>Date</th>
                            <th class="noExport">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($collection as $key=>$item)
                        <td>
                            {{ ++$key }}
                        </td>
                        <td>
                            {{$item->subject}}
                        </td>
                        <td>
                            {{$item->created}}
                        </td>
                        <td>
                            <x-btn.action :view="[route(config('theme.cdata.route-name-prefix').'.show',$item->id)]"
                                :delete="[route(config('theme.cdata.route-name-prefix').'.delete',$item->id)]" />
                        </td>
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
