<div>
    @foreach($getAllCategories as $category)
    <div class="my-3 p-3 text-dark">
        <h6 class="text-uppercase font-weight-bold pb-2 mb-0">{{ $category->name }}</h6>
        <div class="border-bottom border-dark"></div>
        @foreach($category->topics as $topic)
        <div class="media pt-3">
            <img class="mr-2 rounded" src="{{ asset('assets/images/folder.png') }}" width="30" alt="folder">
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-dark">
                <span class="d-block font-weight-bold">{{ $topic->name }}</span>
                <span class="font-weight-bold">Posts:</span> {{ random_int(0, 1000) }} |
                <span class="font-weight-bold">Recente:</span> {{ $randomString(10) }}, {{ date('d/m/Y H:i:s') }}
            </div>
        </div>
        @endforeach
    </div>
    @endforeach


{{--    @foreach($getAllCategories as $category)--}}
{{--        <div class="my-3 p-3 text-white">--}}
{{--            <h6 class="font-weight-bolder text-uppercase text-monospace pb-2 mb-0">--}}
{{--                {{ $category->name }}--}}
{{--                <small>{{ $category->description }}</small>--}}
{{--            </h6>--}}
{{--            <div class="border-bottom border-gray"></div>--}}
{{--            @foreach($category->topics as $topic)--}}
{{--                <div class="media pt-3">--}}
{{--                    <img class="bd-placeholder-img mr-2 rounded" src="{{ asset('assets/images/folder.png') }}" width="50" alt="">--}}
{{--                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">--}}
{{--                        <strong class="d-block text-gray-dark">{{ $topic->name }}</strong>--}}
{{--                        @foreach($topic->posts as $post)--}}
{{--                            {{ $post->post }}--}}
{{--                        @endforeach--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--            <small class="d-block text-right mt-3">--}}
{{--                <a class="text-white" href="#">Visualizar Tudo</a>--}}
{{--            </small>--}}
{{--        </div>--}}
{{--    @endforeach--}}
</div>
