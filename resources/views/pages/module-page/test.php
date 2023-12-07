<div class="col-md-4 col-sm-12 mb-30">
    <div class="card-box pd-30 height-100-p btn-change">
        @if(in_array($title, $modules->pluck('title')->toArray()))
            <button type="button" class="btn btn-block" disabled>{{ $title }} - Already Enrolled</button>
        @else
            <button type="submit" class="btn btn-block" name="title" onclick="return confirm('Are you sure that you want to add {{ $title }}')" value="{{ $title }}">{{ $title }}</button>
        @endif
    </div>
</div>


@if(in_array($title, $modules->pluck('title')->toArray()))
<button type="button" class="btn btn-block" disabled>
<div class="col-md-4 col-sm-12 mb-30">
    <div class="card-box pd-30 height-100-p btn-change">
            {{ $title }} - Already Enrolled
        </div>
    </div>
</button>
@else
<button type="submit" class="btn btn-block" name="title" onclick="return confirm('Are you sure that you want to add {{ $title }}')" value="{{ $title }}">
<div class="col-md-4 col-sm-12 mb-30">
    <div class="card-box pd-30 height-100-p btn-change">
            {{ $title }}
        </div>
    </div>
</button>
@endif

<div class="col-md-4 col-sm-12 mb-30">
    <div class="card-box pd-30 height-100-p btn-change">
        @if(in_array($title, $modules->pluck('title')->toArray()))
            <button type="button" class="btn btn-block" disabled>{{ $title }} - Already Enrolled</button>
        @else
            <button type="submit" class="btn btn-block" name="title" onclick="return confirm('Are you sure that you want to add {{ $title }}')" value="{{ $title }}">{{ $title }}</button>
        @endif
    </div>
</div>