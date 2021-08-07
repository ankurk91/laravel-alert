@if (session()->has('alert.message'))
  <div x-data="{ show: true }"
       x-show="show"
       class="alert alert-{{ session()->get('alert.style') }} alert-dismissible fade in show"
       role="alert">
    <button  x-on:click="show = !show"
             type="button"
             class="close"
             data-dismiss="alert"
             aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>

    {!! session()->get('alert.message') !!}
  </div>
@endif
