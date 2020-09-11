<div>
  <form id="update-form" wire:submit.prevent="save">
    <div class="form-label-group">
      <input type="text" id="vin" wire:model="vin" class="form-control @error('vin') is-invalid @enderror" placeholder="Article VIN" autofocus>
      <label for="vin">Article VIN</label>
      @error('vin') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="form-label-group">
      <input type="text" id="year" wire:model="year" class="form-control @error('year') is-invalid @enderror" placeholder="Article Year">
      <label for="year">Article Year</label>
      @error('year') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="form-label-group">
      <select id="make" wire:model="make" class="form-control @error('make') is-invalid @enderror" data-chosen="{{ $make }}" onchange="this.dataset.chosen=this.value; ">
        <option value="">----</option>
        @foreach($make_options as $option)
          <option value="{{ $option->id }}">{{ $option->name }}</option>
        @endforeach
      </select>
      <label for="make">Article Make</label>
      @error('make') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
    <div class="form-label-group">
      <select id="model" wire:model="model" class="form-control @error('model') is-invalid @enderror" data-chosen="{{ $model }}" onchange="this.dataset.chosen=this.value; ">
        <option value="">----</option>
        @foreach($model_options as $option)
          <option value="{{ $option->id }}">{{ $option->name }}</option>
        @endforeach
      </select>
      <label for="model">Article Model</label>
      @error('model') <div class="invalid-feedback"><span>{{ $message }}</span></div> @enderror
    </div>
  </form>
</div>
