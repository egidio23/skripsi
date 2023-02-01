<div class="mt-6 mx-6">
	<x-jet-form-section submit="update">
		<x-slot name="title">
			Ubah Peserta
			
			<x-slot name="description">
				Ubah detail data Peserta Musyawarah.
			</x-slot>
			
			<x-slot name="form">
				{{-- input kode --}}
				<div class="col-span-6 sm:col-span-4">
					<x-jet-label for="kode" value="Kode Alternatif" />
					<x-jet-input id="kode" wire:model="alternatif.kode" type="text" class="mt-1 block w-full" autofocus />
					<x-jet-input-error for="kode" class="mt-2" />
				</div>
				{{-- input nama alternatif --}}
				<div class="col-span-6 sm:col-span-4">
					<x-jet-label for="name" value="Nama Peserta" />
					<x-jet-input id="name" wire:model="alternatif.name" type="text" class="mt-1 block w-full" />
					<x-jet-input-error for="name" class="mt-2" />
				</div>
				{{-- input lainnya dst --}}
				<div class="col-span-6 sm:col-span-4">
					<x-jet-label for="utusan" value="Utusan" />
					<x-jet-input id="utusan" wire:model="alternatif.utusan" type="text" class="mt-1 block w-full" />
					<x-jet-input-error for="utusan" class="mt-2" />
				</div>
				
			</x-slot>
			
			<x-slot name="actions">
				<x-jet-action-message class="mr-3" on="saved">
					Tersimpan.
				</x-jet-action-message>
				
				<x-jet-button>
					Simpan
				</x-jet-button>
			</x-slot>
		</x-jet-form-section>
	</div>
	