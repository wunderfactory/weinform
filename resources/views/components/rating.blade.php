<?php
$stars = $user->stars();
$count = $user->ratings()->count();
?>
<span class="text-muted">
    @if($count)
        @if($stars >= 1)
            <i class="fa fa-star"></i>
        @elseif($stars > 0)
            <i class="fa fa-star-half-empty"></i>
        @else
            <i class="fa fa-star-o"></i>
        @endif
        @if($stars >= 2)
            <i class="fa fa-star"></i>
        @elseif($stars > 1)
            <i class="fa fa-star-half-empty"></i>
        @else
            <i class="fa fa-star-o"></i>
        @endif
        @if($stars >= 3)
            <i class="fa fa-star"></i>
        @elseif($stars > 2)
            <i class="fa fa-star-half-empty"></i>
        @else
            <i class="fa fa-star-o"></i>
        @endif
        @if($stars >= 4)
            <i class="fa fa-star"></i>
        @elseif($stars > 3)
            <i class="fa fa-star-half-empty"></i>
        @else
            <i class="fa fa-star-o"></i>
        @endif
        @if($stars >= 5)
            <i class="fa fa-star"></i>
        @elseif($stars > 4)
            <i class="fa fa-star-half-empty"></i>
        @else
            <i class="fa fa-star-o"></i>
        @endif
        {{ $stars }} ({!! link_to_route('user.rating.index', $count, [$user]) !!})
    @else
        No ratings
    @endif
</span>