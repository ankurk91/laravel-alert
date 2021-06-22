@if (session()->has('alert.message'))
  <b-alert v-cloak variant="{{ session()->get('alert.style') }}" fade show dismissible>
    {!! session()->get('alert.message') !!}
  </b-alert>
@endif
