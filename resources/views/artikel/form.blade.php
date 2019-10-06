                  @csrf
                    <div class="form-group row">
                        <label for="judul" class="col-md-2 col-form-label text-md-right">{{ __('Judul') }}</label>

                        <div class="col-md-10">
                            <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required>

                            @error('judul')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="kategori_artikel_id" class="col-md-2 col-form-label text-md-right">{{ __('Kategor Artikel') }}</label>

                    <div class="col-md-10">
                            {!! Form::select('kategori_artikel_id',$kategori_artikel,null,['class'=>'form-control','required']); !!}
                    </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="isi" class="col-md-2 col-form-label text-md-right">{{ __('Isi') }}</label>

                    <div class="col-md-10">
                        {!! Form::textarea('isi',null,['class'=>'form-control']); !!}
                    </div>
                    </div>
                    
                    <input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required autocomplete="users_id" autofocus>
                    
                    <button type="submit" class="btn btn-primary offset-md-10">Tambah Data</button>
                </form>