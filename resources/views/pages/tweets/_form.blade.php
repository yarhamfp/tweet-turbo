<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-1">
                <img src="https://www.gravatar.com/avatar/" class="rounded-circle" width="40" alt="">
            </div>
            <div class="col-11">
                <turbo-frame id="form">
                    <form action="{{ route('tweets.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <textarea name="content" id="content" cols="30" class="form-control"
                                placeholder="What's happening?"></textarea>
                            @error('content')
                                <span class="text-danger text-xs">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Tweet</button>
                    </form>
                </turbo-frame>
            </div>
        </div>
    </div>
</div>
