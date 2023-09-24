
<div class="container">
    <div class="alert alert-danger" role="alert">
        <h2>Delete Lecturer</h2>
        <p>Are you sure you want to delete this lecturer?</p>
        <hr>
        <div class="text-center">
            <form method="POST" action="/lecturers/{{ $lecturer->id }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Yes</button>
            </form>
            <a href="/lecturers" class="btn btn-secondary"><button>No</button></a>
        </div>
    </div>
</div>

