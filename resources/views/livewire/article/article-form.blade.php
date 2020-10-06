<div>
  <form id="update-form" wire:submit.prevent="save">
    <div class="form-label-group">
      <input type="text" id="title" wire:model="title" class="form-control @error('title') is-invalid @enderror" placeholder="Article Title" autofocus>
      <label for="title">Article Title</label>
      @error('title') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="form-label-group">
      <input type="text" id="body" wire:model="body" class="form-control @error('body') is-invalid @enderror" placeholder="Article Body">
      <label for="body">Article Body</label>
      @error('body') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
  </form>
</div>
