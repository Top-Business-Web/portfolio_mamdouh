<section class="projects pt-5 pb-5" id="Portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="text-light mb-5">
                    <h1 class="fw-bold">أعمالنا</h1>
                    <p>يمكنك متابعة أخر اعمالنا</p>
                </div>
            </div>
            <div class="col-md-6 col-12 d-flex justify-content-end">
                <div>
                    <a href="#contact" class="btn-start">
                        <span>تواصل معنا</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme" style="direction: ltr;">
            @foreach ($projects as $index => $project)
                <div class="project-card me-4">
                    <div class="image-project">
                        <img src="{{ asset('storage/' . json_decode($project->images)[0]) }}">
                    </div>
                    <div class="text-light project-title">
                        <button type="button" class="btn-project fs-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2" data-project-id="{{ $project->id }}"
                            data-project-title="{{ json_decode($project->title)->{app()->getLocale()} }}"
                            data-project-description="{{ json_decode($project->description)->{app()->getLocale()} }}"
                            data-project-images="{{ $project->images }}">
                            {{ json_decode($project->title)->{app()->getLocale()} }}
                        </button>
                        <p>{{ json_decode($project->classification)->{app()->getLocale()} }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <button type="button" class="btn-close m-2" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="main-slider projectModalImage" style="direction: ltr;">

                        </div>
                        <div class="small-slider projectModalSmallImage" style="direction: ltr;">
                            {{-- @foreach (json_decode($project->images) as $item)
                            <img class="img-fluid" src="storage/{{ $item }}" alt="no image" />
                            @endforeach --}}

                            <img class="img-fluid" src="{{ asset('assets/site/photo/bh3.jpg') }}" alt="no image" />
                            <img class="img-fluid" src="{{ asset('assets/site/photo/bh3.jpg') }}" alt="no image" />
                            <img class="img-fluid" src="{{ asset('assets/site/photo/bh3.jpg') }}" alt="no image" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div>
                            <h3 id="projectModalTitle" class="fw-bold mb-2 main-color title"></h3>
                            <p id="projectModalDescription" class="lh-lg"></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all buttons with the class 'btn-project'
        const projectButtons = document.querySelectorAll('.btn-project');

        // Add click event listener to each button
        projectButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Retrieve the projectId, title, description, and images from the button's attributes
                const projectId = this.getAttribute('data-project-id');
                const projectTitle = this.getAttribute('data-project-title');
                const projectDescription = this.getAttribute('data-project-description');
                const projectImages = this.getAttribute('data-project-images');
                let projectImagesArray = JSON.parse(projectImages);
                console.log(projectImagesArray[0])

                var divDataP = '<div class="school-img"><img class="img-fluid" src="storage/' + projectImagesArray[0] + '" alt="no image" /></div>';
                $('.projectModalImage').html(divDataP);
                var divDataS = ''; // Initialize an empty string to store small slider images
                for (let i = 0; i < projectImagesArray.length; i++) {
                    divDataS += '<img class="img-fluid" src="storage/' + projectImagesArray[i] +'" alt="no image" />';
                }

                $('.projectModalSmallImage').html(divDataS);

                // Update the modal content with the project details    
                document.getElementById('projectModalTitle').innerText = projectTitle;
                document.getElementById('projectModalDescription').innerText =
                    projectDescription;
                // document.getElementById('projectModalImage').src = projectImages;

                // If you're using a modal library, you can trigger the modal here
                // For example, if you're using Bootstrap:
                $('#exampleModal2').modal('show');
            });
        });
    });
</script>
