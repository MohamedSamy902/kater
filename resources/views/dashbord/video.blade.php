<div class="col-md-6 mb-3">
    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
        data-bs-target=".vide-model">Select Video</button>
    <div class="modal fade vide-model" tabindex="-1" role="dialog"
        aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="videoModalLabel">Select Video</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        @foreach ($videos as $video)
                            <div class="col-3 gallary{{ $video->id }}">
                                <div class="card">
                                    <div class="product-box">
                                        <div class="">

                                            <video width="100%" id="ImagePreview"
                                                class="ImagePreview"  controls
                                                src="{{ url('media/' . $video->id . '/' . $video->file_name) }}">
                                                <source src="{{ url('media/' . $video->id . '/' . $video->file_name) }}" type="video/mp4">
                                                <source src="{{ url('media/' . $video->id . '/' . $video->file_name) }}" type="video/ogg">
                                            </video>
                                            <div class="product-hover">
                                                <ul>
                                                    <li class="addImage"
                                                        data-id="{{ $video->id }}">
                                                        <a><i class="fa fa-plus"></i></a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
