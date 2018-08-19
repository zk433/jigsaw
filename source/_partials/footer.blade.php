<footer class="container">
    <p>&copy; {{ date("Y") }} Copyright {{ $page->author }}. All rights reserved. </p>

    <small>This site is built with <a href="http://jigsaw.tighten.co">Jigsaw</a> and hosted on <a href="https://www.netlify.com/">Netlify</a>.
        The source code can be found on <a href="https://github.com/zk433/jigsaw">Github</a>.</small>
</footer>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js"></script>
    <script>
    $(document).foundation();
    $(".hover").mouseleave(
        function () {
        $(this).removeClass("hover");
    }
    );
</script>