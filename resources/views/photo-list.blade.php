



    <div class="dot_template flex-auto items-center" id="objectID">
        {{-- <div class="my-masonry-grid"> --}}
            <div class="grid grid-cols-5 gap-5">
            @foreach ($photos as $photo)
            <div class="m-7 my-masonry-grid-item" style="height: 270px;">
                <div>
                    {{-- image view --}}
                </div>
                <div>
                    {{-- image imfo --}}
                </div>
                <p> {{ $photo->title }} <p>
                <p> {{ $photo->image }} <p>
                <p> {{ $photo->user_id }}</p>
           </div>
           @endforeach
        </div>
        <div class="btn-group">
        {{ $photos->links() }}
        </div>
    </div>
<script>

$(function(){

  $('.my-masonry-grid').masonryGrid({

    'columns': 7,

    'breakpoint': 467

  });

});
</script>
