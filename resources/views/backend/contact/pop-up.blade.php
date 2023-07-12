<div id="popup-form" style="display: none;">
    <form id="reply-form" action="" method="POST">
        @csrf
        <textarea name="message" placeholder="Enter your message"></textarea>
        <button type="submit">Send</button>
    </form>
</div>

<script>
    document.getElementById('reply-form').addEventListener('submit', function() {
        // Update the button text and color to "Replied" and green
        var button = document.getElementById('toggle-form-{{$record->id}}').querySelector('button');
        button.textContent = 'Replied';
        button.classList.remove('btn-danger');
        button.classList.add('btn-success');
    });
</script>
