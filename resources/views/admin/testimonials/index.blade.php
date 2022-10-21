<x-admin-layout>
    <x-slot name="title">
        <x-title :title="$title"></x-title>
    </x-slot>
    <x-slot name="header">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ trans('lang.categories') }}</h1>
                    </div>

                </div>
            </div>
        </section>
    </x-slot>

    <section class="content">
        <div class="container-fluid">
        </div>
    </section>
</x-admin-layout>
