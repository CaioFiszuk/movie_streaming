<div class="modal fade" id="window">
  <div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header">
            <h3 class="modal-title">Add a new movie</h3>
            <button class="btn btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
           <form action="{{route('create.movie')}}" method="post" enctype="multipart/form-data">
             @csrf

             <input type="text" name="name" class="form-control mb-2" placeholder="Movie name">

             <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="type" value="movie">
                <label class="form-check-label">
                  Movie
                </label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="type" value="serie">
                <label class="form-check-label">
                  Serie
                </label>
              </div>

             <input type="text" name="year" class="form-control mb-2" placeholder="Year">

             <textarea name="synopsis" cols="30" rows="10" class="mb-2">Synopsis</textarea>

              <select name="genre" class="form-select mb-2">
                <option selected>Genre</option>
                <option value="horror">Horror</option>
                <option value="noir">Noir</option>
                <option value="faith">Faith</option>
                <option value="thriller">Thriller</option>
                <option value="drama">Drama</option>
                <option value="adventure">Adventure</option>
                <option value="scifi">Sci-Fi</option>
                <option value="hero">Hero</option>
              </select>

              <input type="file" name="path" class="form-control mb-2">

              <select name="streaming_id" class="form-select mb-2">
                <option selected>Streaming</option>
                <option value="1">Blackcat</option>
                <option value="2">Data tv</option>
                <option value="3">Creepy tv</option>
              </select>

             <input type="submit" value="Add" class="btn btn-success">
           </form>
        </div>
    </div>
  </div>
</div>