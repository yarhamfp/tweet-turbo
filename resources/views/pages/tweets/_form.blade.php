<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-1">
                <img src="https://www.gravatar.com/avatar/" class="rounded-circle" width="40" alt="">
            </div>
            <div class="col-11">
                <form action="{{ route('tweets.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <textarea name="content" id="content"
                            class="form-control @error('content')border-danger @enderror" cols="30"
                            placeholder="What's happening?">
                        </textarea>
                        @error('content')
                            <span class="text-danger text-xs">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Tweet</button>
                </form>
            </div>
        </div>
    </div>
</div>
