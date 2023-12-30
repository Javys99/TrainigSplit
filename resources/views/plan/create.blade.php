<x-layouts.master-layout title="Creación de planes">
    <form method="post" action="{{ url('/plan') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="mb-3">
                <label for="user_id" class="form-label">Usuario</label>
                <select class="form-select" id="user_id" name="user_id" aria-label="Default select example">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}"> {{ $user->nombre }} </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="exampleFormControlTextarea1" class="form-label">Plan:</label>
                <textarea id="myeditorinstance" name="plan" id="plan" class="form-control" rows="3"></textarea>
            </div>
        </div>

        <div class="card-footer">
            <div class="col-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Crear</button>
        </div>
        </div>
    </form>
    <script src="https://cdn.tiny.cloud/1/{{ config('app.tinymcekey') }}/tinymce/6/tinymce.min.js" referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            selector: 'textarea#myeditorinstance', 
            plugins: ' lists codesample',
            toolbar: 'undo redo | code | codesample | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist ',
            codesample_languages: [{
                    text: 'HTML/XML',
                    value: 'markup'
                },
                {
                    text: 'JavaScript',
                    value: 'javascript'
                },
            ]
        });
    </script>
</x-layouts.master-layout>
