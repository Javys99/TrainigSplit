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
<textarea name="plan" value="{{ isset($plan->plan)?$plan->plan:old('plan') }}" id="plan" cols="30" rows="10"></textarea>
<br>
<div class="dropdown open">
    <button
        class="btn btn-secondary dropdown-toggle"
        type="button"
        id="triggerId"
        data-bs-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
    >
        Dropdown Button
    </button>
    <div class="dropdown-menu" aria-labelledby="triggerId">
        <button class="dropdown-item" href="#">Action</button>
        <button class="dropdown-item disabled" href="#">
            Disabled action
        </button>
    </div>
</div>

<input type="submit" value="Guardar" id="guardar">
</form>
</body>
</html>