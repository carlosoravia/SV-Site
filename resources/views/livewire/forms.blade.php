<div class="d-none d-md-block container-fluid mt-5">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container p-5 bg-dark text-light rounded shadow-lg mb-3">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">Contattami !</h1>
                <p class="col-lg-10 fs-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate mollitia corrupti at modi perferendis, necessitatibus quibusdam dicta quasi qui iure, officia ducimus? Tempora consequatur itaque, rerum numquam rem aspernatur consectetur.</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5 text-dark">
                <form wire:submit.prevent="submit" class="p-4 p-md-5 border rounded-3 bg-light">
                    <p class="text-danger">* campi obbligatori</p>
                    <div class="d-flex mb-3">
                        <input wire:model="name" type="text" class="form-control w-50 m-1" placeholder="Nome*">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        <input wire:model="surname" type="text" class="form-control w-50 m-1" placeholder="Cognome*">
                        @error('surname') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <input wire:model="email" type="text" class="form-control" placeholder="indirizzo mail*">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    <textarea wire:model="text" class="form-control my-4" name="" placeholder="inserisci il tuo messaggio...*"cols="37" rows="10"></textarea>
                    @error('text') <span class="text-danger">{{ $message }}</span> @enderror
                    <button class="btn btn-outline-primary" type="submit">Invia messaggio</button>
                </form>
            </div>
        </div>
    </div>
</div>
