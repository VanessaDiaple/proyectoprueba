<div>
{{$search}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <x-table>
@if($posts->count())
                        <table class="min-w-full leading-normal">
                            <thead>
                            <tr>
                                <th
                                    class="cursor-pointer w-24 px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                wire:click="order('id')">
                                    ID

                                    @if($sort == 'id')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif
                                </th>
                                <th
                                    class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                wire:click="order('title')">
                                    Title

                                    @if($sort == 'title')
                                      @if ($direction == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                        @else
                                        <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                     @endif

                                </th>
                                <th
                                    class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                wire:click="order('content')">
                                    Content

                                    @if($sort == 'content')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                        @endif
                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($posts as $post)

                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="text-gray-900 whitespace-no-wrap">{{$post->id}}</div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="text-gray-900 whitespace-no-wrap">
                                        {{$post->title}}
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="text-gray-900 whitespace-no-wrap">
                                        {{$post->content}}
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                   <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
    @else
    <div class="px-5 py-3">
    No existe ningun registro
    </div>
    @endif
        </x-table>
    </div>

</div>
