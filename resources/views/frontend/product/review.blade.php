@auth
    <div class="anime bg-white p-[2rem] flex flex-col justify-center items-center space-y-[.5rem]">
        <h1 class="font-bold drop-shadow-[0px_0px_.5px_#000000] text-[1rem] 2xs:text-[1.3rem] sm:text-[1.4rem]">Write a Review</h1>
        <a href="#review-form" class="px-[1rem] xs:px-[1.2rem] sm:px-[1.9rem] py-[.6rem] bg-[#efefef] hover:bg-[#f28c28] max-xs:text-center" onclick="reviewFormViewer()">
            <span class="">Review</span>
        </a>
    </div>
@endauth
@if($ratings)
    @foreach ($ratings as $rating)
        <div class="anime bg-white flex flex-col lg:flex-row max-lg:space-y-[1rem] p-[2rem]">
            <div class="flex flex-col xs:flex-row mr-[1.2rem]">
                <div class="h-[2.5rem] w-[2.5rem] xs:h-[3rem] xs:w-[3rem] mr-[.8rem]">
                    @if($rating->user->profile_photo_path)
                        <img src="images/backend/profile/{{$rating->user->profile_photo_path}}" alt="{{$rating->user->name}}" class="rounded-[50%] p-1 h-full w-full object-cover bg-[#ccc]">
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" viewBox="0 0 24 24">
                            <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                <path d="M16 9a4 4 0 1 1-8 0a4 4 0 0 1 8 0Zm-2 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0Z"/>
                                <path d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11s11-4.925 11-11S18.075 1 12 1ZM3 12c0 2.09.713 4.014 1.908 5.542A8.986 8.986 0 0 1 12.065 14a8.984 8.984 0 0 1 7.092 3.458A9 9 0 1 0 3 12Zm9 9a8.963 8.963 0 0 1-5.672-2.012A6.992 6.992 0 0 1 12.065 16a6.991 6.991 0 0 1 5.689 2.92A8.964 8.964 0 0 1 12 21Z"/>
                            </g>
                        </svg>
                    @endif
                </div>
                <div class="">
                    <h1 class="font-bold capitalize">{{$rating->user->name}}</h1>
                    <p class="text-[#888]">{{$rating->created_at->format('Y-m-d')}}</p>
                </div>
            </div>
            <hr class="bg-[#f3f4f6]">
            <div>
                <p class="text-[.9rem] text-[#333]">
                {{ preg_replace_callback('/(?:^|(?<=\. ))(\w)/', function($matches) {
                        return ucfirst($matches[0]);
                    }, $rating->description) }}
                </p>
            </div>
        </div>
    @endforeach
@endif
@auth
<div class="hidden anime bg-white" id="review-form-container">
    <button class="flex ml-auto px-[1rem] xs:px-[1.2rem] sm:px-[1.9rem] py-[.6rem] bg-[#f3f4f6] hover:bg-[#f28c28] max-xs:text-center" onclick="reviewFormViewer()">
        <span class="">X</span>
    </button>
    <form action="{{route('products.rating.create')}}" method="post" id="reviewFormSubmit" class="flex flex-col space-y-[1rem] p-[1rem]">
        @csrf
        <input type="hidden" id="user_id" name="user_id" value="{{auth()->user()->id}}">
        <input type="hidden" id="product_id" name="product_id" value="{{$product->id}}">
        <div class="flex flex-col">
            <label for="description">Description :</label>
            <textarea name="description" id="description" rows="3" class="bg-[#f3f4f6] w-full border-none" minlength="50"  maxlength='250'></textarea>
        </div>
        <button type="submit" class="w-max mx-auto px-[1rem] xs:px-[1.2rem] sm:px-[1.9rem] py-[.6rem] bg-[#efefef] hover:bg-[#f28c28] max-xs:text-center">
            <span class="">Send</span>
        </button>
    </form>
</div>

<script>
    var reviewFormContainer = document.getElementById('review-form-container');
    var reviewFormSubmit = document.getElementById('reviewFormSubmit');
    var description = document.getElementById('description');
    function reviewFormViewer(){
        reviewFormContainer.classList.toggle('hidden');
        reviewFormSubmit.reset();
        description.focus();
    }
    $('#reviewFormSubmit').on('submit',function(e){
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url:$(this).attr('action'),
            type: 'post',
            data: formData,
            success: function(response){
                ajax_response(response);
                reviewFormViewer();
            }
        });
    });
</script>
@endauth