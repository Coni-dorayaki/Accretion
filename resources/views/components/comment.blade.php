<div class="media">
    <div class="media-body comment-body">
        <div class="row">
            <span class="comment-body-user">{{$item->name}}</span>
            <span class="comment-body-info">{{$item->companyName}}</span>
            <span class="comment-body-info">{{$item->useMachine}}</span>
            <span class="comment-body-time">{{$item->created_at}}</span>
        </div>
        <span class="comment-body-content">{!! nl2br(e($item->comment)) !!}</span>
    </div>
</div>>