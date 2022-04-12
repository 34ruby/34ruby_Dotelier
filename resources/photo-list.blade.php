<div>

    나의 이름은 {{ $name }} 입니다

    @foreach ($photos as $photo)

    <div class="my-2">

        <p> {{ $photo->user_id }} <p>
        <p> {{ $photo->title }} <p>


    </div>

    @endforeach

    <div>
