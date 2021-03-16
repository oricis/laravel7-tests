<div class="none" aria-hidden="true">
    <form action="" method="POST" id="form-delete">
        @csrf
        @method('DELETE')
    </form>
    <form action="" method="GET" id="form-edit"></form>
    <form action="" method="GET" id="form-show"></form>
    <form action="" method="POST" id="form-status">
        @csrf
        @method('PUT')
    </form>
</div>
