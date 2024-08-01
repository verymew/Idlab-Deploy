<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry" data-aos-delay="200">
                        <a href="{{ route('showproject', $project->id) }}" class="block-20"
                            style="background-image: url('{{ asset('storage/' . $project->image_path) }}');">
                        </a>
                        <div class="text d-flex py-4">
                            <div class="meta mb-3">
                                <div><a>Publicado em:</a></div>
                                <div><a>{{ \Carbon\Carbon::parse($project->created_at)->format('d/m/Y') }}</a>
                                </div>
                            </div>
                            <div class="desc pl-3">
                                <h3 class="heading"><a href="{{ route('showproject', $project->id) }}">{{ $project->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
