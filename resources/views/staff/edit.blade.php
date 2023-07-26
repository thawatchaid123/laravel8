<x-bootstrap title="Edit staff">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="py-4">
                <a class="btn btn-primary" href="{{ route('staff.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('staff.update', $staff->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="row g-4">
            <div class="col-md-12">
                <strong>title: <span class="text-danger">*</span> </strong>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="row g-4">
            <div class="col-md-12">
                <strong>birthdate: <span class="text-danger">*</span> </strong>
                <input type="date" name="birthdate" class="form-control">
            </div>
            <div class="col-md-12">
                <strong>salary: <span class="text-danger">*</span> </strong>
                <input type="text" name="salary" class="form-control" required>
            </div>
            <div class="col-md-12">
                <strong>phone: <span class="text-danger">*</span> </strong>
                <input type="text" name="phone" class="form-control" required>
            </div>
            <div class="col-md-12">
                <strong>Photo: <span class="text-danger">*</span> </strong>
                <input type="file" name="photo" class="form-control" required>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>


    </form>
</x-bootstrap>