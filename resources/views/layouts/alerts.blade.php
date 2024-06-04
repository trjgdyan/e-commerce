@if (session('success'))
    <div id="flash-message" class="alert alert-success">
        {{ session('success') }}
    </div>
@elseif (session('info'))
    <div id="flash-message" class="alert alert-info">
        {{ session('info') }}
    </div>
@elseif (session('error'))
    <div id="flash-message" class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<script>
    setTimeout(function() {
        var flashMessage = document.getElementById('flash-message');
        if (flashMessage) {
            flashMessage.style.display = 'none';
        }
    }, 5000);
</script>
