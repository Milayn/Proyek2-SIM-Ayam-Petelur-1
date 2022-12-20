<div class="modal fade" id="delete{{ $ankKdg->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"> {{ $ankKdg->nama_anak_kandang }} </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="delete-data" action="{{ route('anakKandang.destroy', $ankKdg->id) }}" method="POST" class="d-none">
                @method('Delete')
                @csrf
                <label for="anakKandang" class="text-center">Apakah Anda yakin untuk menghapus data ini?</label>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" value="Delete" class="btn btn-danger">Ya Hapus</button>
        </div>
    </form>
      </div>
    </div>
  </div>