@if($posts->hasPages())
<div class="navigation">
    <div class="wrapper">
        <a href="{{$posts->previousPageUrl()}}">&larr;Previous Page</a>
        <a href="{{$posts->nextPageUrl()}}">Next Page&rarr;</a>
    </div>
</div>
@endif