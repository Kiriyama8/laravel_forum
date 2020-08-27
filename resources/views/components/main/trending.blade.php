<div>
    <h5 class="font-weight-bold">
        <img class="mr-2" src="{{ asset('assets/images/chat.svg') }}" width="35" alt="trending topics"> Tendências
    </h5>
    @foreach($getTrendingTopics as $trendingTopic)
        <div class="media text-muted pt-3">
            <div class="media-body pb-3 mb-0 small border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h6 class="text-gray-dark">
                        <a href="#">
                            {{ $trendingTopic->name }}
                        </a>
                    </h6>
                    <h5>{{ $getTotalPosts($trendingTopic->id) }}</h5>
                </div>
                <div class="d-flex justify-content-between align-items-center w-100">
                    <span class="d-block">
                        Criado por: {{ $trendingTopic->user->name }} | Data: {{ $getDataFormatada($trendingTopic->created_at) }}
                    </span>
                    <span class="d-block">Posts</span>
                </div>
            </div>
        </div>
    @endforeach
</div>
