


    <div class="navbar bg-primary text-primary-content">
        <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
      </div>
      <button class="btn-outline btn-primary">Button</button>

    <div class="form-control">

    </div>
    <div class="dot_template flex-auto items-center ">
        @foreach ($photos as $photo)
            <p> {{ $photo->title }} <p>
        @endforeach
    </div>
    <button class="btn btn-primary">DaisyUI Button</button>
    <div class="rating">
        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400">
        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked>
        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400">
        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400">
        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400">
      </div>
