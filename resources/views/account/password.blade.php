<form action="{{ route('password.change') }}" method="post">
    {{ csrf_field() }}
    {{ method_field("PATCH") }}
    <div class="form-group">
        <label for="old_password" class="control-label">Old Password</label>
        <input type="password" name="old_password" id="old_password" class="form-control" required />
    </div>
    <div class="form-group">
        <label class="col-form-label text-lg-right">Password</label>
        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        @if ($errors->has('password'))
            <div class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
            </div>
        @endif
    </div>
    <div class="form-group">
        <label class="col-form-label text-lg-right">Confirm Password</label>
        <input type="password" class="form-control" name="password_confirmation" required>
    </div>
    <button type="submit" class="btn btn-primary">Change password</button>
</form>