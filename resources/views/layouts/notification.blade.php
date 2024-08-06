<div class="d-none">
  @if (session('success'))
    <button class="btn btn-light"
      id="sweet_success"
      msg="{{ session('success') }}"
      type="button">
      Launch <i class="icon-play3 ml-2"></i>
    </button>
    <script>
      $(document).ready(function() {
        $('#sweet_success').click();
      });
    </script>
  @endif
  @if (session('error'))
    <button class="btn btn-light"
      id="sweet_error"
      msg="{{ session('error') }}"
      type="button">
      Launch <i class="icon-play3 ml-2"></i>
    </button>
    <script>
      $(document).ready(function() {
        $('#sweet_error').click();
      });
    </script>
  @endif
</div>
