<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action=" {{ url('/plan/form') }} " method="post" enctype="multipart/form-data">
        @csrf
        <textarea name="plan" value="{{ isset($plan->plan) ? $plan->plan : old('plan') }}" id="plan" cols="30"
            rows="10"></textarea>
        <br>

        <input type="submit" value="Guardar" id="guardar">
    </form>
</body>

</html>
