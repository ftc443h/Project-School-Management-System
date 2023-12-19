<div class="tab-pane fade profile-edit pt-3" id="profile-edit">

    <form method="POST" action="#" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <label for="photo" class="col-md-4 col-lg-3">Photo</label>
            <div class="col-md-8 col-lg-9">
                <input name="photo" type="file" class="form-control @error ('photo') is-invalid @else is-valid @enderror" id="photo">
                @error('photo')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="name" class="col-md-4 col-lg-3">Full Name</label>
            <div class="col-md-8 col-lg-9">
                <input name="name" type="text" value="{{Auth::user()->name}}" class="form-control @error ('name') is-invalid @else is-valid @enderror" id="name">
                @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-lg-3">E-Mail</label>
            <div class="col-md-8 col-lg-9">
                <input name="email" type="text" value="{{Auth::user()->email}}" class="form-control @error ('email') is-invalid @else is-valid @enderror" id="email">
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="phone_users" class="col-md-4 col-lg-3">Phone</label>
            <div class="col-md-8 col-lg-9">
                <input name="phone_users" type="text" value="{{Auth::user()->phone_users}}" class="form-control @error ('phone_users') is-invalid @else is-valid @enderror" id="phone_users">
                @error('phone_users')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="address_users" class="col-md-4 col-lg-3 col-form-label AbLS">Address</label>
            <div class="col-md-8 col-lg-9">
                <textarea name="address_users" class="form-control" id="address_users" style="height: 100px">{{Auth::user()->address_users}}</textarea>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" name="proses" value="simpan" id="simpan" class="btn btn-primary btp">Edit</button>
        </div>
    </form>
</div>