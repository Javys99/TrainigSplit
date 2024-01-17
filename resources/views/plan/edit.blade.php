<x-layouts.master-layout title="Creación de planes">
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kintsugi Strenght Systems</title>
    </head>
    
    <body>
        <form action=" {{ route('plan.update', $plan->id) }} " method="post" enctype="multipart/form-data">
            @csrf
            <textarea name="plan" value="{{ $plan->plan }}" id="plan" cols="30"
                rows="10"></textarea>
            <br>
    
            <input type="submit" value="Guardar" id="guardar">
        </form>
    </body>
    
    </html>
    
</x-layouts.master-layout>
