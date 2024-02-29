<script src="{{ asset('assets/site/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/site/js/all.min.js') }}"></script>

{{-- <script src="{{ asset('assets/site/js/jquery-1.10.1.min.js') }}"></script> --}}
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>


<script src="{{ asset('assets/site/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('assets/site/js/slick.min.js') }}"></script>

<script src="{{ asset('assets/site/js/main.js') }}"></script>
<script src="{{ asset('assets/site/js/jquery-modal-video.js') }}"></script>
<script src="{{ asset('assets/site/js/modal-video.js') }}"></script>

<script>
    function getId(url) {
        const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
        const match = url.match(regExp);

        return (match && match[2].length === 11) ?
            match[2] :
            null;
    }

    $(document).ready(function(){
        var url = $('.js-modal-btn').data('video-urly'); // Corrected syntax
        const videoId = getId(url);
        $('.js-modal-btn').attr('data-video-id', videoId); // Corrected syntax

        const iframeMarkup = '<iframe width="560" height="315" src="//www.youtube.com/embed/'
        + videoId + '" frameborder="0" allowfullscreen></iframe>';
        console.log('Video ID:', videoId);

        // Initialize modalVideo after setting the data
        $(".js-modal-btn").modalVideo();
    });
</script>

