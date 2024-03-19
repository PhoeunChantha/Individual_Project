@extends('Compenens.Dashboard')

@section('content')


<div class="card">
    <div class="card-body">
        <h6 class="card-title">Customer list</h6>
        <p class="text-muted mb-3">Add class <code>.table-hover</code></p>
        <div class="table-responsive">
            <table class="table table-hover">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="#" class="btn btn-success me-md-2" > <i class="fas fa-eye"></i></a>
                  </div>
                <thead>
                    <tr>

                      <th>RoomType ID</th>
                      <th>Room Name</th>

                    </tr>
                </thead>
                <tbody>

                        <th>4</th>
                        <td>Larry</td>


                        <td>
                            <a href="view-page.html" class="btn btn-success">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="edit-page.html" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="delete-action.php" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>

                    </tr>
                    <tr>
                        <th>5</th>
                        <td>Larry</td>


                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
